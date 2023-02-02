<?php
include_once "defaults/head.php";
if(isset($_SESSION['user'])){
    include_once "defaults/nav2.php";
} else {
    include_once "defaults/nav.php";
}
include_once "defaults/header.php";

global $genres;
?>



<div class="img-header">
    <img src="img/contactHeader.jpg" alt="image" class="img-fluid heather-img w-100">
</div>


<div class="container my-5">

    <div class="row text-center border border-dark rounded container px-0" style="filter: opacity(1)">

        <?php foreach ($genres as $genre): ?>
        <div class="px-0 bg-dark m-3 rounded text-center" style="width: 200px">
            <a class='hoverRed btn btn-dark text-primary text-decoration-none w-100 rounded p-0 text-center' href="/songs/<?= $genre->id ?>">
                <div style="font-size: 16pt;" class="hoverRed card-title text-center""><?= $genre->name ?></div>
        </a>
    </div>
    <?php endforeach; ?>

</div>
</div>



<?php
include_once "defaults/footer.php";
?>



