<?php
session_start();
$users = [
    "IanBBB" => [
        "name" => "Ian Baker",
        "password" => "p4ssw0rd"
    ],
    "Camilo" => [
        "name" => "Camilo Diaz",
        "password" => "MyPassword1"
    ]
];
// code addapted from course slides
if (isset($_POST["logIO"])) {
    if (isset($_SESSION["user"])) {
        unset($_SESSION["user"]);
    } else if (!empty($_POST["userName"]) && !empty($_POST["password"])) {
        $username = $_POST["userName"];
        $password = $_POST["password"];
        $found = false;
        if (isset($users[$username])) {
            if ($password == $users[$username]["password"]) {
                $_SESSION["user"]["Name"] = $users[$username]["name"];
                $found = true;
            }
        }
    }
    header("Location: " . $_SERVER["HTTP_REFERER"]);
} else {
    header("Location: index.php");
}
