<?php
include_once "../Class/Song.php";

function getSongs(){
    global $db;
    $songs = $db->query('SELECT * FROM song')->fetchAll(PDO::FETCH_CLASS, 'Genre');
    return $songs;
}