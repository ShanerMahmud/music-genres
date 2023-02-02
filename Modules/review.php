<?php


function postComment() {
    global $db;
    global $param;
    $song_id = $param[2];
    $comment = filter_input(INPUT_POST, "commentText", FILTER_SANITIZE_SPECIAL_CHARS);
    $date = date("Y-m-d");

    if(!empty($_POST['commentText'])) {
        $query = $db->prepare("INSERT INTO review (comment, date, song_id, user_id) VALUES (:comment, :date, :song_id, :user_id)");
        $query->bindParam("comment", $comment);
        $query->bindParam("date", $date);
        var_dump($song_id);
        $query->bindParam("song_id", $song_id);
        $query->bindParam("user_id", $_SESSION['user']->id);

        if($query->execute()) {
            header("Location: " . $_SERVER['REQUEST_URI']);
        } else {
            return "Something went terribly wrong here";
        }
    } else {
        return "Don't be shy, write a comment!";
    }


}