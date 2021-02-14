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

// $username = "IanBBB";
// $password = "p4ssw0rd";



// User should only get here if a logIO button is clicked
if (isset($_POST["logIO"])) {

    // If user is currently logged in, log them out
    if (isset($_SESSION["user"])) {
        unset($_SESSION["user"]);
        // User not logged in, make sure fname field is not blank.
        // chech if credentials match
    } else if (!empty($_POST["userName"]) && !empty($_POST["password"])) {
        // Log the user in, make sure userName is clean.
        

        $username = $_POST["userName"];
        $password = $_POST["password"];

        // $_SESSION["user"]["userName"] = $username;
        $found = false;
        if (isset($users[$username])) {
            if ($password == $users[$username]["password"]) {
                $_SESSION["user"]["Name"] = $users[$username]["name"];
                $found = true;
            }
        }
        if(!$found){
            // error message?
        }
    }
    // Transfer user back to the referring page
    header("Location: " . $_SERVER["HTTP_REFERER"]);
} else {
    // User got here by not clicking a logIO button, forward them "silently" to the home page.
    header("Location: index.php");
}