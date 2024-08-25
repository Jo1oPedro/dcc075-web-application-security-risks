<?php

use Security\Skeleton\Controllers\BankController;
use Security\Skeleton\Http\Middleware\Authenticate;
use Security\Skeleton\Http\Middleware\ParseQueryString;

if($request->server['REQUEST_METHOD'] == 'GET') {
    switch ($request->server['PATH_INFO'] ?? "/") {
        case "/":
            require_once __DIR__ . "/../src/resources/views/login.php";
            break;
    };
}