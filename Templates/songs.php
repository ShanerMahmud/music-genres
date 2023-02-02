<?php
include_once "defaults/head.php";
include_once "defaults/nav.php";
include_once "defaults/header.php";

global $genres;
?>



<div class="img-header" style="position: relative">
    <img src="img/heather.jpg" alt="image" class="img-fluid heather-img w-100">
</div>



<div class="text-center border border-white container bg-light" style="position: absolute; top: 30%; left: 16%; filter: opacity(0.5)">

    <?php foreach ($genres as $genre): ?>
        <div class="col-sm-4 col-md-3">
            <a class='text-black text-decoration-none' href="/song/<?= $genre->id ?>">
                <div class="card-title text-center mb-3"><?= $genre->name ?></div>
            </a>
        </div>
    <?php endforeach; ?>

</div>



<?php
include_once "defaults/footer.php";
?>



