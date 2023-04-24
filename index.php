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
//almacena la edad en una nueva variable
$aux = $usuario->tipo->saber_edad();
echo '<br>';
echo 'La edad es ' . $aux;

echo $usuario->tipo->saludo(); 
echo "<br>";
// probando rama nueva
echo 'duplicado ' . $usuario->tipo->saludo(); 

echo "<br>";

// llamao al metodo de persona
echo $usuario->tipo->discurso('wow');