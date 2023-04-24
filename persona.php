<?php
class Persona
{
    public function saludo()
{
   return "hola $this->nombre";
}
public function discurso($autor)
{
switch ($autor) {
  case 'wow':
   echo 'Por a Alianza';
    break;
    case 'lol':
      echo 'Por Demacia';
      break;
  
  default:
   echo 'La luz es mi fuerza';
    break;
}
}

}