<?php
include_once "defaults/head.php";
if(isset($_SESSION['user'])){
    include_once "defaults/nav2.php";
} else {
    include_once "defaults/nav.php";
}
include_once "defaults/header.php";

var_dump($_SESSION['user']->id);

?>


<div class="img-header">
    <img src="img/genreHeader.jpg" alt="image" class="img-fluid heather-img w-100">
</div>


<div class="container-fluid bg-dark py-3">
    <div class="w-50 border rounded border-white container bg-light p-4">
        <div class="container">
            <h2 class="text-center">Choose new names: <br> anything goes</h2>
            <form method="POST" class="p-4">
                <div class="form-group">
                    <label for="formName">First name</label>
                    <input name="firstName" value="<?=$_SESSION['user']->first_name?>" type="text" class="form-control mb-2" id="formName" placeholder="">
                </div>
                <div class="form-group">
                    <label for="formEmail">Last name</label>
                    <input name="lastName" value="<?=$_SESSION['user']->last_name?>" type="text" class="form-control mb-2" id="formEmail" placeholder="">
                </div>
                <input type="submit" name="updateName" class="btn btn-primary" value="Update">
            </form>
        </div>
    </div>
</div>









<?php
include_once "defaults/footer.php";
?>



