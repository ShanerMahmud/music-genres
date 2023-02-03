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



<div class="container-fluid bg-dark py-5 d-flex align-items-center justify-content-center">

        <?php foreach ($song as $s): ?>
        <div class="card px-0 bg-dark d-flex justify-content-center align-items-center rounded border-primary-subtle" style="width: 350px">
            <img src="../img/songs/<?=$s->img?>" class="card-img-top" alt="imageCard">

            <h5 class="card-title text-primary text-center pt-3"><?= $s->name ?> <br> By <br> <?= $s->artist ?></h5>
            <p class="card-text text-center text-secondary pb-3"><i><?= $s->detail ?></i></p>
            <?php endforeach; ?>
        </div>

</div>

<div class="container-fluid bg-dark p-0 m-0  pb-3 pt-3">
    <div class="container bg-dark">
        <?php foreach ($review as $rev): ?>
            <div class="bg-dark border border-primary-subtle card m-0 px-5 mb-3">
                <h5 class="text-center card-text text-primary"><?php $user=getUser($rev->user_id); echo $user[0]->first_name . ' ' . $user[0]->last_name . ' (' . $user[0]->email . ')'; ?><br></h5>
                <p class="text-center text-secondary border-bottom pb-1"><i>posted on: <?= $rev->date ?> </i></p>

                <p class="text-center card-title text-light">"<?= $rev->comment ?>" <br> <br>  </p>


            </div>
        <?php endforeach; ?>

    </div>
</div>
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
