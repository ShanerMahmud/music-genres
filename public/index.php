<?php
require "../Modules/db.php";
require "../Modules/genres.php";
require "../Modules/songs.php";
require "../Modules/login.php";
require "../Modules/update.php";

session_start();

$request = $_SERVER['REQUEST_URI'];
$param = explode("/", $request);
$title = "SpotThisFy @ NewFlix";

switch ($param[1]){
    case 'home':
        if(isset($_SESSION['user'])) {
            include_once "../Templates/member.php";
            break;
        } else {
            include_once "../Templates/home.php";
            break;
        }


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
        include_once "../Templates/song.php";
        break;

    case 'contact':
        include_once "../Templates/contact.php";
        break;


    case 'name':
        if(isset($_POST['updateName'])) {
            $changeName = updateName();
        }
        include_once "../Templates/name.php";
        break;

    case 'password':
        if(isset($_POST['updatePassword'])) {
            $changePassword = updatePassword();
        }
        include_once "../Templates/password.php";
        break;

    case 'login':
        if(isset($_POST['login'])) {
           $user = loginUser();
            if($user && !is_string($user)){
                header("Location: member");
            }
        }

        include_once "../Templates/login.php";
        break;

    case 'logout':
        session_destroy();
        header("Location: home");
        break;

    case 'member':
        include_once "../Templates/member.php";
        break;

    default:
        include_once "../Templates/home.php";
        break;
}
