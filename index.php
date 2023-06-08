<?php
$c=$_GET['c']?? "index";
$m=$_GET['m']?? "index";
$con=ucfirst ($c)."_Controller";
use Micaela\mvc\libs\App;

//use mvc\models\Auto;
require 'vendor/autoload.php';
require 'config/config.php';