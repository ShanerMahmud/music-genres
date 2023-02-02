<?php


session_start();

$request = $_SERVER['REQUEST_URI'];
$param = explode("/", $request);
$title = "SpotThisFy @ NewFlix'";
$titleSuffix = "";


switch ($param[1]){
    case 'home':
//        var_dump("home");
        include_once "../Templates/home.php";
        break;

    case 'genres':
//        var_dump("genres");
        include_once "../Templates/genres.php";
        break;

    case 'contact':
//        var_dump("contact");
        include_once "../Templates/contact.php";
        break;

    case 'login':
//        var_dump("login");
        include_once "../Templates/login.php";
        break;


    default:
//        var_dump("default");
        include_once "../Templates/home.php";
        break;
}