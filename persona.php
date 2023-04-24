<?php
// define clase persona y una funcion saludo
class Persona
{
    public function saludo()
{
   return "hola $this->nombre";
}


public function saber_edad()
{
   return $this->edad;
}
}