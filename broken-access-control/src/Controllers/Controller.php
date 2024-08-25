<?php

namespace Security\Skeleton\Controllers;

use Security\Skeleton\Database\Connection;

abstract class Controller
{
    protected \PDO $connection;

    public function __construct()
    {
        $this->connection = Connection::getConnection();
    }
}