<?php

try {
    $db = new PDO("mysql:host=localhost;dbname=music_genre;",'root', '');
} catch (PDOException $e){
    echo "Something went terribly wrong mate. No DB con here.";
}