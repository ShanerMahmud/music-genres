<?php

function loginUser() {
    global $db;
    $email = "";
    $password = "";
    $message = "";
    if (isset($_POST["login"])) {
        $emailCorrect = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
        if ($emailCorrect == false || empty($password)) {
            $message = "something is not right here";
            return $message;
        } else {
            try {
                $email = $_POST['email'];
                $query = $db->prepare("SELECT * FROM user where email = :email");
                $query->bindParam('email', $email);
                if ($query->execute()) {
                    $result = $query->fetchAll(PDO::FETCH_CLASS, 'User');
                    if (count($result) > 0) {
                        $user = $result[0];
                        if ($user->password == $password) {
                            $_SESSION['user'] = $user;
                            return $user;
                        } else {
                            $message = "are you sure?";
                            return $message;
                        }
                    } else {
                        $message = "qR not xQt";
                        return $message;
                    }
                }
            } catch (PDOException $e){
                die($e->getMessage());
            }
        }
    }
}
?>