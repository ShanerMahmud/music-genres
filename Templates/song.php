<?php
include_once "defaults/head.php";
include_once "defaults/nav.php";
include_once "defaults/header.php";

global $song;
?>



<div class="img-header" style="position: relative">
    <img src="../img/Heather.jpg" alt="image" class="img-fluid heather-img w-100">
</div>



<div class="row text-center border border-dark rounded container px-0 w-50" style="position: absolute; top: 30%; left: 16%; filter: opacity(1)">

    <?php foreach ($song as $s): ?>
    <div class="px-0 bg-dark m-3 rounded" style="width: 200px">
        <a class='hoverRed btn btn-dark text-primary text-decoration-none h-100 w-100 rounded p-0' href="/song/<?= $s->id ?>">
            <div style="font-size: 17pt;" class="h-100 hoverRed card-title text-center""><?= $s->name ?> By <?= $s->artist ?></div>
    </a>
</div>
<?php endforeach; ?>

</div>



<?php
include_once "defaults/footer.php";
?>



