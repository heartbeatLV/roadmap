<?php

declare(strict_types = 1);

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\TestCase;
use Tests\CreatesApplication;

uses(
    TestCase::class,
    CreatesApplication::class,
    RefreshDatabase::class
)
    ->in('Feature', 'Unit');

function createUser($attributes = [], $has = []) {
    Mail::fake();

    $user = User::factory();

    if ($has) {
        foreach ($has as $relationship => $attached) {
            $user = $user->has($attached, \is_string($relationship) ? $relationship : null);
        }
    }

    return $user->create($attributes);
}

function createAndLoginUser($attributes = [], User $user = null) {
    if (!$user) {
        $user = createUser($attributes);
    }

    actingAs($user);

    return $user;
}
