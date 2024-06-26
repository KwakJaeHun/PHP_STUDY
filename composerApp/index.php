<?php
//require_once __DIR__."/vendor/monolog/monolog/src/Monolog/Logger.php";
//require_once __DIR__."/vendor/monolog/monolog/src/Monolog/Handler/StreamHandler.php";
require_once __DIR__."/vendor/autoload.php";

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\NativeMailerHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler(__DIR__."/app.log", Logger::WARNING));
$log->pushHandler(new NativeMailerHandler("zzddtt73@gmail.com", "Emergence", "out@system.com", Logger::EMERGENCY));

// add records to the log
$log->warning('Foo');
$log->error('Bar');
$log->emergency('emergency');
?>