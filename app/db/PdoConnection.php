<?php

namespace App\Db;

class PdoConnection extends \PDO
{
    public function __construct($dsn, $username = "", $passwd = "", $options = [])
    {
        parent::__construct($dsn, $username, $passwd, $options);

        $this->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $this->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
    }
}
