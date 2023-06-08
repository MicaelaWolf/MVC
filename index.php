<?php
$c=$_GET['c']?? "index";
$m=$_GET['m']?? "index";
$con=ucfirst ($c)."_Controller";
$conRuta="src/controllers/".$con.".php";
require_once $conRuta;
$controlador=new $con();
$controlador->{$m}();
use Micaela\mvc\libs\App;

//use mvc\models\Auto;
require 'vendor/autoload.php';
require 'config/config.php';