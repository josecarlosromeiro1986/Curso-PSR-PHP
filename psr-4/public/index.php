<?php

require_once '../vendor/autoload.php';

use App\Controllers\HomeController as Home;
use ETI\DB\DataBase;

$home = new Home;
//echo $home->index();

$database = new DataBase;

var_dump($database->getConn());
