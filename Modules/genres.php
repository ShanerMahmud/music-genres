<?php
include_once "../Class/Genre.php";

function getGenres(){
    global $db;
    $genres = $db->query('SELECT * FROM genre')->fetchAll(PDO::FETCH_CLASS, 'Genre');
    return $genres;
}