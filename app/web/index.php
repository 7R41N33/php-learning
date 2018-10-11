<?php

require_once "../../vendor/autoload.php";

use App\Web\Application;
use App\Web\Router;

$app = new Application($_SERVER, new Router());
$app->run();
