<?php
include_once "defaults/head.php";
if(isset($_SESSION['user'])){
    include_once "defaults/nav2.php";
} else {
    include_once "defaults/nav.php";
}
include_once "defaults/header.php";
?>

<div class="img-header" style="">
    <img src="img/loginHeader.webp" alt="image" class="img-fluid heather-img w-100">
</div>

<div class="container-fluid py-5 bg-dark">

    <div class="text-center" style="">
        <h2 class="text-center text-light py-2" style="user-select: none; font-size: 35pt;"><?php echo "Welcome " . $_SESSION['user']->first_name . " " . $_SESSION['user']->last_name . " <br> <i>" . $_SESSION['user']->email . "</i>"; ?></h2>
        <a href="name" class="btn btn-primary text-light mb-2 btn-lg" style="width: 250px; font-size: 20pt;">Change Name</a> &emsp
        <a href="password" class="btn btn-primary text-light mb-2 btn-lg" style="width: 250px; font-size: 20pt;">Change Password</a>
    </div>

</div>

<?php

global $user;

if($user && is_string($user)){
    echo $user;
}


//var_dump($_SESSION['user']);
//echo ;

?>









<?php
include_once "defaults/footer.php";
?>



