<?php

namespace Security\Skeleton\Controllers;

use PDO;
use Security\Skeleton\Http\Request;

class LoginController extends Controller
{
    public function __invoke(Request $request)
    {
        $email = $request->post["email"];
        $password = $request->post["password"];

        $stmt = $this->connection->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->execute(["email" => $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if($user && password_verify($password, $user["password"])) {
            $_SESSION["user"] = $user;
            header("Location: /");
            exit;
        } else {
            header("Location: /bankAccount");
        }
    }
}