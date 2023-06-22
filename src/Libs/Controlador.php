<?php

namespace Micaela\App\Libs;

class Controlador
{
  public $datos;
  public $ruta;

  public function __construct($ruta)
  {
    $this->ruta = $ruta;
  }
  
  public function cargarVista($ruta, $datos=null)
  {
    $this->datos = $datos;
    require_once 'src/views' . $ruta . '.php';
  }
}