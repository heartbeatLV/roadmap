<?php

declare(strict_types = 1);

namespace App\Http\Livewire\Item;

use App\Models\Item;
use App\View\Components\MarkdownEditor;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Livewire\Component;

class Comments extends Component implements HasForms {
    use InteractsWithForms;

    public Item $item;
    public $comments;
    public $content;
    public $reply;

    public function mount() : void {
        $this->form->fill([]);
    }

    public function submit() {
        if (!auth()->user()) {
            return redirect()->route('login');
        }

        $formState = array_merge($this->form->getState(), [
            'parent_id' => $this->reply,
            'user_id'   => auth()->id(),
        ]);

        $this->item->comments()->create($formState);

        $this->content = '';
        $this->reply = null;
    }

    public function render() {
        $this->comments = $this->item
            ->comments()
            ->with('user:id,name,email')
            ->orderByRaw('COALESCE(parent_id, id), parent_id IS NOT NULL, id')
            ->get()
            ->mapToGroups(static fn ($comment) => [(int)$comment->parent_id => $comment]);

        return view('livewire.item.comments');
    }

    public function reply(int $id = null) : void {
        $this->reply = $id;
    }

    protected function getFormSchema() : array {
        return [
            MarkdownEditor::make('content')
                ->label(trans('comments.comment'))
                ->helperText(trans('comments.mention-helper-text'))
                ->required()
                ->minLength(3),
        ];
    }
}
