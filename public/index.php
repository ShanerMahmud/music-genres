<?php
require "../Modules/db.php";
require "../Modules/genres.php";
require "../Modules/songs.php";

session_start();

$request = $_SERVER['REQUEST_URI'];
$param = explode("/", $request);
$title = "SpotThisFy @ NewFlix'";

switch ($param[1]){
    case 'home':
        include_once "../Templates/home.php";
        break;

    case 'genres':
        $genres = getGenres();
        include_once "../Templates/genres.php";
        break;

    case 'songs':
        $id = $param[2];
        $songs = getSongsByGenre($id);
        include_once "../Templates/songs.php";
        break;

    case 'song':
        $id = $param[2];
        $song = getSong($id);
        $review = getReview($id);
//        var_dump($review);
//        die();
//        $user = getUser($review[0]->user_id);
        include_once "../Templates/song.php";
        break;

    case 'contact':
        include_once "../Templates/contact.php";
        break;

    case 'login':
        include_once "../Templates/login.php";
        break;

    default:
        include_once "../Templates/home.php";
        break;
}
