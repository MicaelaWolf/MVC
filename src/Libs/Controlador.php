<?php 
namespace Micaela\App\Libs;

class Controlador {
  public $datos;
  public function cargarVista($ruta, $datos){
    $this->datos=$datos;
    require_once 'src/vista'.$ruta.'.php';
  }
}