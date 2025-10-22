<?php

use App\Models\User;
use App\Models\Cliente;


test('nombre completo de cliente es creado con primer y apellido', function () {
   //arrange
   $name = 'Juan';
   $lastname = 'Perez';
   $phone = '+5061234567890';


  //act  
  $cliente = new Cliente($name, $lastname, $phone);

  //assert  
  expect($cliente->nombreCompleto())->toBe("{$name} {$lastname} {$phone}");
});

it('un usuario tiene una url', function () {

    $user = User::factory()->create(['name' => 'Juan Perez']);

   
    expect($user->url())->toBe('/users/juan-perez');


});
