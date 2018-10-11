<?php

namespace App\Web;

class Application
{
    /**
     * @var array
     */
    protected $server;

    /**
     * @var Router
     */
    protected $router;

    public function __construct($server, $router)
    {
        $this->server = $server;
        $this->router = $router;
    }

    public function run()
    {
    }
}
