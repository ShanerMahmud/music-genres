<?php
include_once "defaults/head.php";
if(isset($_SESSION['user'])){
    include_once "defaults/nav2.php";
} else {
    include_once "defaults/nav.php";
}
include_once "defaults/header.php";
global $songs;
?>



<div class="img-header"">
    <img src="../img/Heather.jpg" alt="image" class="img-fluid heather-img w-100">
</div>



<div class="container-fluid bg-dark py-5 d-flex align-items-center justify-content-center">
    <div class="hoverRed row d-flex text-center border border-dark rounded container px-0">
        <?php foreach ($songs as $song): ?>
            <div class="px-1 py-1 d-flex align-items-center justify-content-center col-4 bg-dark hoverRed rounded text-center">
                <a class='border hoverRed btn btn-dark text-primary text-decoration-none w-100 rounded p-0 g-0 text-center d-flex align-items-center justify-content-center' href="/song/<?= $song->id ?>">
                    <div style="font-size: 16pt;" class="hoverRed card-title">
                        <?= $song->artist ?> - <?= $song->name ?>

                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>




<?php
include_once "defaults/footer.php";
?>



