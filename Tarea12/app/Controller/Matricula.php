<?php

namespace App\Controller;

use App\Model\Estudiante;
use App\Model\Curso;

  class Matricula
{
    private $arreglo;

    private $contador;

    private $arreglo2;
    
    public function __construct()
    {
        $this->arreglo = [];
        $this->contador = 0;
        $this->arreglo2 = [];
    }

    public function mostrar(Estudiante $estudiante)
    {
        $this->arreglo[] = $estudiante;
    }
    
    public function matricularse(Curso $curso)
    {
        $this->arreglo2[] = $curso;
    }
    
    public function listar()
    {
        return $this->arreglo;
    }
    public function listar2()
    {
        return $this->arreglo2;
    }

    public function buscar($nombre)
    {
        for($i = 0 ; $i < $this->contador;$i++){
            if($this->arreglo[$i]->getNombre() == ($nombre))
            {
               break;
            }
        }
        if($i == $this->contador){
            return null;
        }else {
            return $this->arreglo[$i];
        }
    }
}