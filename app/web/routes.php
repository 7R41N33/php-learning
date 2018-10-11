<?php

use App\Web\Router;

/**
 * @var Router $router
 */

$router->get("/", function () {
    return "Main Page";
});

$router->get("/hello", function () {
    return "Hello Page";
});

$router->post("/hello", function () {
    return json_encode(["success" => true]);
});
