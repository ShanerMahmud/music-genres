<?php


function updateName() {
    global $db;
    try {
        $firstName = filter_input(INPUT_POST, "firstName", FILTER_SANITIZE_SPECIAL_CHARS);
        $lastName = filter_input(INPUT_POST, "lastName", FILTER_SANITIZE_SPECIAL_CHARS);

        $query = $db->prepare("UPDATE user SET first_name = :firstname, last_name = :lastname WHERE id= :id");
        $query->bindParam("firstname", $firstName);
        $query->bindParam("lastname", $lastName);
        $query->bindParam("id", $_SESSION['user']->id);
//        var_dump($query);
//        die();
        if($query->execute()){

            $_SESSION['user']->first_name = $firstName;
            $_SESSION['user']->last_name = $lastName;
            header("Location: home");
        } else {
            echo "There was a BIG ERROR!";
        }
    } catch (PDOException $e) {
        die("ERROR!");
    }
}

function updatePassword() {
    global $db;
    try {
        $oldPassword = filter_input(INPUT_POST, "oldPassword", FILTER_SANITIZE_SPECIAL_CHARS);
        $newPassword = filter_input(INPUT_POST, "newPassword", FILTER_SANITIZE_SPECIAL_CHARS);
        $newPasswordTwo = filter_input(INPUT_POST, "newPasswordTwo", FILTER_SANITIZE_SPECIAL_CHARS);

        if($oldPassword === $_SESSION['user']->password && $newPassword === $newPasswordTwo && !empty($oldPassword)  && !empty($newPassword) && !empty($newPasswordTwo)) {

            $query = $db->prepare("UPDATE user SET password = :password WHERE id= :id");
            $query->bindParam("password", $newPassword);
            $query->bindParam("id", $_SESSION['user']->id);

            if ($query->execute()) {
                $_SESSION['user']->password = $newPassword;
                header("Location: home");

            } else {
                echo "Something went very wrong";
            }
        } else {

            $message = "That's not correct";
            return $message;
        }

    } catch (PDOException $e) {
        die("ERROR!");
    }
}
