<?php
include_once "../Class/Song.php";

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