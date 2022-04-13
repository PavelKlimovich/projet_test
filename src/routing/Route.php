<?php

namespace Src\Routing;

use AltoRouter;

class Route
{
    private $router;

    public function __construct() {
        self::$router = new AltoRouter();;

    }

    public static function get(string $url, $function)
    {
        self::$router->map('GET', $url, $function);

    }
}
