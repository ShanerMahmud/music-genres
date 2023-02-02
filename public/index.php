<?php

session_start();

$request = $_SERVER['REQUEST_URI'];
$param = explode("/", $request);
$title = "NewFlix / SpotThisFy'";
$titleSuffix = "";


switch ($param){
    case 'home':
        include_once "../Templates/home.php";
        break;

    default:
        include_once "../Templates/home.php";
        break;
}