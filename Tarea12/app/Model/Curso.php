<?php

namespace App\Model;

 class Curso
{
  private $nombreCurso;

  public function __construct($nombreCurso)
  {
    $this->nombreCurso = $nombreCurso;

  }
  public function getCurso()
  {
    return $this->nombreCurso;
  }

}