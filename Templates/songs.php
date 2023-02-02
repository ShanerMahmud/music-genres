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



<div class="container py-5">
    <div class="row text-center border border-dark rounded container px-0" style="filter: opacity(1)">

        <?php foreach ($songs as $song): ?>
        <div class="px-0 bg-dark m-3 rounded" style="width: 200px">
            <a class='hoverRed btn btn-dark text-primary text-decoration-none h-100 w-100 rounded p-0' href="/song/<?= $song->id ?>">
                <div style="font-size: 17pt;" class="h-100 hoverRed card-title text-center""><?= $song->name ?> By <?= $song->artist ?></div>
        </a>
    </div>
    <?php endforeach; ?>

</div>
</div>



<?php
include_once "defaults/footer.php";
?>



