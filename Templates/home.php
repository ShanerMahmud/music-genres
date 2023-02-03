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
    <img src="img/Heather.jpg" alt="image" class="heather-img w-100">
</div>

<div class="container-fluid py-5 bg-dark">

    <div class="text-center" style="">
        <h2 class="text-center text-light py-2" style="user-select: none; font-size: 35pt;">CHOOSE YOUR SONG TO GET STARTED</h2>
        <a href="genres" class="btn btn-primary text-light mb-2 btn-lg" style="width: 250px; font-size: 20pt;">LET'S GO!</a>
    </div>

</div>





<?php
include_once "defaults/footer.php";
?>