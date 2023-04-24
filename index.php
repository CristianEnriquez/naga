<?php
//principal ojo no se usa require para la clase persona
require 'administrador.php';
require 'usuario.php';

$usuario = new Usuario;
$usuario->tipo = new Administrador;

echo $usuario->tipo->saludo();