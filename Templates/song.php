<?php
include_once "defaults/head.php";
if(isset($_SESSION['user'])){
    include_once "defaults/nav2.php";
} else {
    include_once "defaults/nav.php";
}
include_once "defaults/header.php";
global $song;
global $review;
?>

<!--<img src="../img/songs/1%20(1).jpg" width="150px">-->

<div class="img-header" >
    <img src="../img/Heather.jpg" alt="image" class="img-fluid heather-img w-100">
</div>



<div class="container-py-5">
    <div class="row text-center border border-dark rounded container px-0 w-50" style="filter: opacity(1)">

        <?php foreach ($song as $s): ?>
        <div class="card px-0 bg-dark m-3 rounded" style="width: 200px">
            <img src="../img/songs/<?=$s->img?>" class="card-img-top" alt="imageCard">
            <div style="font-size: 17pt;" class="h-100 hoverRed card-body text-center"">  </div>
        <h5 class="card-title text-primary"><?= $s->name ?> <br> By <br> <?= $s->artist ?></h5>
        <p class="card-text text-secondary"><i><?= $s->detail ?></i></p>
    </div>
</div>



    </a>
    </div>
<?php endforeach; ?>

</div>
</div>

        <?php foreach ($review as $rev): ?>
        <div class="card px-0 bg-dark m-3 py-3 px-3 rounded">
        <h5 class="card-text text-primary"><?php $user=getUser($rev->user_id); echo $user[0]->first_name . ' ' . $user[0]->last_name . ' (' . $user[0]->email . ')'; ?><br></h5>
        <p class="text-secondary"><i>posted on: <?= $rev->date ?> </i></p>
        <br>
        <p class="card-title text-light"><?= $rev->comment ?> <br> <br>  </p>

    </div>
<?php endforeach; ?>

</div>
</div>

<?php
if(isset($_SESSION['user'])){
    include_once "review.php";
}

?>

<?php
include_once "defaults/footer.php";
?>
