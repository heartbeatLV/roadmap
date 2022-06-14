<?php

declare(strict_types = 1);

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class MentionSearchController extends Controller {
    public function __invoke(Request $request) {
        if (!$request->input('query')) {
            return [];
        }

        return User::query()
            ->where(static function (Builder $query) use ($request) {
                return $query
                    ->where('id', '!=', auth()->id())
                    ->where('name', 'like', '%' . $request->input('query') . '%');
            })
            ->limit(10)
            ->get(['name', 'username', 'email'])
            ->map(static function (User $user) {
                return [
                    'key'    => $user->name,
                    'value'  => $user->username,
                    'avatar' => $user->getGravatar(),
                ];
            })
            ->toArray();
    }
}
