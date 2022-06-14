<?php

declare(strict_types = 1);

use App\Models\Comment;
use App\Models\Item;
use App\Models\Vote;

it('can generate an username upon user creation', static function () : void {
    $user = createUser();

    expect($user->fresh()->username)
        ->toBeString()
        ->toBe(Str::slug($user->name));
});

it('can create an admin user', static function () : void {
    $user = createUser(['admin' => true]);

    expect($user->fresh()->admin)->toBeTruthy();
});

it('can check if a user wants a specific notification', static function () : void {
    $user = createUser();

    expect($user->fresh()->wantsNotification('receive_mention_notifications'))->toBeTruthy();
});

it('can check if a user does not want a notification', static function () : void {
    $user = createUser();
    $user->notification_settings = [];
    $user->save();

    expect($user->fresh()->wantsNotification('receive_mention_notifications'))->toBeFalsy();
});

it('can delete a user', static function () : void {
    $user = createUser();

    $user->delete();

    expect($user->fresh())->toBeNull();
});

it('can delete a user with items', static function () : void {
    $user = createUser([], ['items' => Item::factory(1)]);

    $user->delete();

    expect($user->fresh())->toBeNull();
});

it('can delete a user with comments', static function () : void {
    Notification::fake();
    $user = createUser([], ['comments' => Comment::factory(1)->has(Item::factory())]);

    $user->delete();

    expect($user->fresh())->toBeNull();
});

it('can delete a user with votes', static function () : void {
    $user = createUser();

    $item = Item::factory()->has(Vote::factory())->create();

    $item->user()->associate($user);
    $vote = $item->votes()->first();
    $vote->user()->associate($user);
    $vote->save();
    $item->save();

    $user->delete();

    expect($user->fresh())->toBeNull();
});

it('can delete a user with items and comments and votes', static function () : void {
    $user = createUser([], [
        'items'    => Item::factory(1)->has(Vote::factory()),
        'comments' => Comment::factory(1)->has(Item::factory()),
    ]);

    $vote = $user->fresh()->items()->first()->votes()->first();
    $vote->user()->associate($user);
    $vote->save();

    $user->delete();

    expect($user->fresh())->toBeNull();
});
