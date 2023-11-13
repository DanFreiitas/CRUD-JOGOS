<?php
require 'vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Level;

$log = new Logger('meu-log');
$log->pushHandler(new StreamHandler('meu-log.log', Logger::WARNING));

$log->error('Isso é um erro');
$log->warning('Isso é um aviso');
$log->info('Isso é uma informação');