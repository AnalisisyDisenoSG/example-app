<?php

namespace App\Models;

class Cliente
{
    public $nombre;
    public $apellido;
    public $telefono;

    public function __construct($nombre, $apellido, $telefono)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->telefono = $telefono;
    }

    public function nombreCompleto()
    {
        return "{$this->nombre} {$this->apellido} {$this->telefono}";
    }
}