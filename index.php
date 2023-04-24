<?php
//principal ojo no se usa require para la clase persona
require 'administrador.php';
require 'usuario.php';

$usuario = new Usuario;
$usuario->tipo = new Administrador;

echo $usuario->tipo->saludo();
//Creando el atriibuto edad en administrador y las demas clases se procede a inprimie un metodo nuevo para retornarlo 
 echo '<br>';
echo $usuario->tipo->saber_edad();
// tambien se usa la funcion var_dump para saber el tipo del valor guardado
echo '<br>';
var_dump($usuario->tipo->saber_edad());
