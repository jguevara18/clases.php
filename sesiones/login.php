<?php

session_start();


$users = [
    array(
        "username" => "retaxito",
        "email" => "retaxito@gmail.com",
    ),
    array(
        "username" => "retaxito2",
        "email" => "retaxito2@gmail.com",
    ),



    ];

$user = $_GET["user"] ?? "";
echo "el usuario elegido es: " .$users[$user]["username"];


$_SESSION["id"] = $user;
$_SESSION["username"] = $users[$user]["username"];
$_SESSION["email"] = $users[$user]["email"];

