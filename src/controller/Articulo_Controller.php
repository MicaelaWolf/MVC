<?php

use Micaela\App\Libs\Controlador;

class Articulo_Controller extends Controlador
{
  public $dato;

  public function __construct()
  {
    parent::__construct();
  }

  public function listar()
  {
    $this->dato = "dato";
    $this->cargarVista('articulo/listar');
  }
}