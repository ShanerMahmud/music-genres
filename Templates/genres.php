<?php
include_once "defaults/head.php";
include_once "defaults/nav.php";
include_once "defaults/header.php";

global $genres;
?>



<div class="img-header" style="position: relative">
    <img src="img/heather.jpg" alt="image" class="img-fluid heather-img w-100">
</div>



<div class="row text-center border border-dark rounded container px-0 w-50" style="position: absolute; top: 30%; left: 16%; filter: opacity(1)">

    <?php foreach ($genres as $genre): ?>
        <div class="col-sm-4 col-md-3 px-0 bg-dark m-3 rounded" style="width: 200px">
            <a class='hoverRed btn btn-dark text-primary text-decoration-none w-100 rounded p-0' href="/<?= $genre->name ?>">
                <div style="font-size: 17pt;" class="hoverRed card-title text-center""><?= $genre->name ?></div>
            </a>
        </div>
    <?php endforeach; ?>

</div>



<?php
include_once "defaults/footer.php";
?>



