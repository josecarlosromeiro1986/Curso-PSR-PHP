<?php

require_once '../vendor/autoload.php';

use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('Nome do Log');
$log->pushHandler(new StreamHandler('logs.log', Level::Warning));

// add records to the log
$log->warning('Foo', [1,2,3,4]);
$log->error('Bar', ['jose', 'carlos', 'romeiro']);