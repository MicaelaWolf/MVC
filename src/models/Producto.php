<?php
namespace Micaela\App\Models;

use PDOException;
use Micaela\App\Libs\Spdo;

class Producto
{
  private $id_productos;
  private $codigo;
  private $descripcion;
  private $precio;
  private $fecha;

  public function __construct($id_productos, $codigo, $descripcion, $precio, $fecha)
  {
    $this->id_productos = $id_productos;
    $this->codigo = $codigo;
    $this->descripcion = $descripcion;
    $this->precio = $precio;
    $this->fecha = $fecha;
  }
  public function listar()
  {
    $pdo = Spdo::conectar();
    try {
      $query = $pdo->query("select id_productos, codigo, descripcion, precio, fecha from productos");
      $productos = [];
      while ($row = $query->fetch()) {
        $producto = new Producto($row['id_productos'], $row['codigo'], $row['descripcion'], $row['precio'], $row['fecha']);
        $productos[] = $producto;
      }
      return $productos;
    } catch (PDOException $e) {
      var_dump($e);
    } finally {
      $pdo = null;
    }
  }
}