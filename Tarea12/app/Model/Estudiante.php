<?php

namespace App\Model;

use App\Model\Curso;

 class Estudiante
 
{

  private $nombre;

  private $codigo;



  public function __construct($nombre,$codigo)
  {
    $this->nombre = $nombre;
    $this->codigo = $codigo;


  }

  public function getNombre()
  {
    return $this->nombre;
  }

  public function getCodigo()
  {
    return $this->codigo;
  }

}