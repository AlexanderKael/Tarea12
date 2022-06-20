<?php

require_once __DIR__.'/../vendor/autoload.php';

use App\Model\{Estudiante,Curso};
use App\Controller\Matricula;

$matricula = new Matricula();

$matricula->mostrar(new Estudiante('max','216789'));
$matricula->mostrar(new Estudiante('diez','2156789'));

foreach($matricula->listar() as $estudiante)
{ 

  echo "nombre: ".$estudiante->getNombre();
  echo " codigo: ".$estudiante->getCodigo();
 
}
$matricula->matricularse(new Curso('Literatura'));

foreach($matricula->listar2() as $curso)
{ 

  echo " curso: ".$curso->getCurso();
}


print_r('-------------Buscar Estudiante----------');

$estudiante = 'max';
$encontrado = $matricula->buscar($estudiante);
if($encontrado != null)
{

    print_r("Estudiante encontrado: ".$encontrado->getNombre());
    
}else
{
    print_r("No se encontro: ".$estudiante);
}