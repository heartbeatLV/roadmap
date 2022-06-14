<?php

declare(strict_types = 1);

namespace App\Tests\Feature\Auth;

test('registration screen can be rendered', function () : void {
    $response = $this->get(route('register'));

    $response->assertViewIs('auth.register');
    $response->assertStatus(200);
});

test('new users can register', function () : void {
    $response = $this->post(route('register'), [
        'name'                  => 'Test User',
        'email'                 => 'test@example.com',
        'password'              => 'D&#t@EVMXhfkpx*kLv3F',
        'password_confirmation' => 'D&#t@EVMXhfkpx*kLv3F',
    ]);

    $this->assertAuthenticated();

    $response->assertRedirect(route('home'));
});

test('validation rules are adhered to', function () : void {
    $response = $this->post(route('register'), [
        'name'                  => '',
        'email'                 => '',
        'password'              => '',
        'password_confirmation' => '',
    ]);

    $response->assertSessionHasErrors(['name', 'email', 'password']);
});

test('authenticated users get redirected away from register view', function () : void {
    $user = createUser();

    $response = $this->actingAs($user)->get(route('register'));

    $response->assertRedirect(route('home'));
    $response->assertStatus(302);

    $this->assertAuthenticatedAs($user);
});
