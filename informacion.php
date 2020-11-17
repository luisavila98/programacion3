<?php
class informacion
{
  public $nombre;
  public $apellido;
  public $edad;
  
  public function __construct($nombre,$apellido,$edad)
  {
    $this->$nombre = $nombre;
    $this->$apellido = $apellido;
    $this->$edad = $edad;
  }
 
  public function getNombre()
  {
    return $this->nombre;
  }
 
  public function getApellido()
  {
    return $this->apellido;
  }
 
  public function getEdad()
  {
    return $this->edad;
  }
}
?>