<?php
require(dirname(__DIR__).'/vendor/autoload.php');

$config = json_decode(file_get_contents('../config/config.json'), true);
$routing = json_decode(file_get_contents('../config/routing.json'), true);
$injection = json_decode(file_get_contents('../config/injection.json'), true);

$app = new \Tit\lib\Tit();
$app->run($config, $routing, [$injection]);
