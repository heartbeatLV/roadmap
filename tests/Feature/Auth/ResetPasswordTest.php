<?php

declare(strict_types = 1);

namespace Tests\Feature\Auth;

use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Support\Facades\Notification;

test('reset password link screen can be rendered', function () : void {
    $response = $this->get(route('password.request'));
    $response->assertStatus(200);
    $response->assertViewIs('auth.passwords.email');
});

test('reset password link can be requested', function () : void {
    Notification::fake();

    $user = createUser();

    $this->post(route('password.email', ['email' => $user->email]));

    Notification::assertSentTo($user, ResetPassword::class);
});

test('reset password screen can be rendered', function () : void {
    Notification::fake();

    $user = createUser();

    $this->post(route('password.email', ['email' => $user->email]));

    Notification::assertSentTo($user, ResetPassword::class, function ($notification) {
        $response = $this->get(route('password.reset', $notification->token));
        $response->assertStatus(200);
        return true;
    });
});

test('password can be reset with a valid token', function () : void {
    Notification::fake();

    $user = createUser();

    $this->post(route('password.email', ['email' => $user->email]));

    Notification::assertSentTo($user, ResetPassword::class, function ($notification) use ($user) {
        $response = $this->post(route('password.reset', [
            'token'                 => $notification->token,
            'email'                 => $user->email,
            'password'              => 'password',
            'password_confirmation' => 'password',
        ]));

        $response->assertSessionHasNoErrors();

        return true;
    });
});
