<?php

use Micaela\App\Libs\Controlador;
use Micaela\App\Models\Producto;

class Producto_Controller extends Controlador
{
  public $dato;

  public function __construct()
  {
    parent::__construct();
  }

  public function listar()
  {
    $lista = Producto::listar();
    $this->cargarVista('producto/listar', $lista);
  }

  public function listar2()
  {
    $lista = Producto::listar();
    $this->cargarVista('producto/listar2', $lista);
  }
}