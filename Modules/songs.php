<?php
include_once "../Class/Song.php";
include_once "../Class/Review.php";
include_once "../Class/User.php";

function getSongsByGenre($id){
    global $db;
    $songs = $db->query('SELECT * FROM song WHERE genre_id='.$id)->fetchAll(PDO::FETCH_CLASS, 'Song');
    return $songs;
}

function getSong($id){
    global $db;
    $song = $db->query('SELECT * FROM song WHERE id='.$id)->fetchAll(PDO::FETCH_CLASS, 'Song');
    return $song;
}

function getReview($id){
    global $db;
    $review = $db->query('SELECT * FROM review WHERE song_id='.$id)->fetchAll(PDO::FETCH_CLASS, 'Review');
    return $review;
}

function getUser($id){
    global $db;
    $user = $db->query('SELECT * FROM user WHERE id='.$id)->fetchAll(PDO::FETCH_CLASS, 'User');
    return $user;
}