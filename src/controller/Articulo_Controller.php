<?php

use Micaela\App\Libs\Controlador;

class Articulo_Controller extends Controlador
{
  public $dato;

  public function __construct($dato)
  {
    $this->dato = $dato;
  }

  public function listar()
  {
    $this->cargarVista('articulo/listar');
  }
}