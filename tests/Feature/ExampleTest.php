<?php

use App\Models\User;

test('the application returns a successful response', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

it('muestra el detalle de un usuario', function () {
    $user = User::factory()->create();

    $response = $this->get("/users/{$user->id}");

    $response->assertStatus(200);

    expect($response->json('id'))->toBe($user->id);
    expect($response->json('name'))->toBe($user->name);
    expect($response->json('email'))->toBe($user->email);
    expect($response->json('password'))->toBe($user->password);
});
