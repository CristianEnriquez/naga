<?php

require 'administrador.php';
require 'usuario.php';

$usuario = new Usuario;
$usuario->tipo = new Administrador;

echo $usuario->tipo->saludo(); 
echo <br>;
// probando rama nueva
echo 'duplicado ' . $usuario->tipo->saludo(); 