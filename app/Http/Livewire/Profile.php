<?php

declare(strict_types = 1);

namespace App\Http\Livewire;

use App\Models\User;
use App\SocialProviders\SsoProvider;
use Filament\Forms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Http\Livewire\Concerns\CanNotify;
use Filament\Tables;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Profile extends Component implements HasForms, HasTable {
    use CanNotify, InteractsWithForms, InteractsWithTable;

    public $name;
    public $email;
    public User $user;

    public function mount() : void {
        $this->user = auth()->user();

        $this->form->fill([
            'name'                  => $this->user->name,
            'username'              => $this->user->username,
            'email'                 => $this->user->email,
            'notification_settings' => $this->user->notification_settings,
        ]);
    }

    public function submit() : void {
        $data = $this->form->getState();

        $this->user->update([
            'name'                  => $data['name'],
            'email'                 => $data['email'],
            'username'              => $data['username'],
            'notification_settings' => $data['notification_settings'],
        ]);

        $this->notify('success', 'Profile has been saved.');
    }

    public function logout() {
        auth()->logout();

        return redirect()->route('home');
    }

    public function deleteConfirm() : void {
        $this->dispatchBrowserEvent('open-modal', ['id' => 'deleteAccount']);
    }

    public function closeDeleteConfirm() : void {
        $this->dispatchBrowserEvent('close-modal', ['id' => 'deleteAccount']);
    }

    public function delete() {
        auth()->user()->delete();

        auth()->logout();

        return redirect()->route('home');
    }

    public function render() {
        return view('livewire.profile', [
            'hasSsoLoginAvailable' => SsoProvider::isEnabled(),
        ]);
    }

    protected function getFormSchema() : array {
        return [
            Forms\Components\Section::make(trans('auth.profile'))->schema([
                Forms\Components\TextInput::make('name')->label(trans('auth.name'))->required(),
                Forms\Components\TextInput::make('username')
                    ->label(trans('profile.username'))
                    ->helperText(trans('profile.username_description'))
                    ->required()
                    ->rules([
                        'alpha_dash',
                    ])
                    ->unique(table: User::class, column: 'username', ignorable: auth()->user()),
                Forms\Components\TextInput::make('email')->label(trans('auth.email'))->required()->email(),
            ])->collapsible(),

            Forms\Components\Section::make(trans('profile.notifications'))
                ->schema([
                    Forms\Components\CheckboxList::make('notification_settings')->label(trans('profile.notification_settings'))
                        ->options([
                            'receive_mention_notifications'       => trans('profile.receive_mention_notifications'),
                            'receive_comment_reply_notifications' => trans('profile.receive_comment_reply_notifications'),
                        ]),
                ])->collapsible(),
        ];
    }

    protected function getTableQuery() : Builder {
        return auth()->user()->userSocials()->latest()->getQuery();
    }

    protected function getTableColumns() : array {
        return [
            Tables\Columns\TextColumn::make('name'),
            Tables\Columns\TextColumn::make('provider'),
            Tables\Columns\TextColumn::make('created_at')->label('Date')->sortable()->dateTime(),
        ];
    }

    protected function getTableBulkActions() : array {
        return [
            Tables\Actions\BulkAction::make('delete')
                ->action(static function (Collection $records) : void {
                    foreach ($records as $record) {
                        $endpoint = config('services.sso.endpoints.revoke') ?? config('services.sso.url') . '/api/oauth/revoke';

                        $client = Http::withToken($record->access_token)->timeout(5);

                        if (config('services.sso.http_verify') === false) {
                            $client->withoutVerifying();
                        }

                        $client->delete($endpoint);

                        $record->delete();
                    }
                })
                ->deselectRecordsAfterCompletion()
                ->requiresConfirmation()
                ->color('danger')
                ->icon('heroicon-o-trash'),
        ];
    }
}
