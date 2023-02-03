<?php
include_once "defaults/head.php";
if(isset($_SESSION['user'])){
    include_once "defaults/nav2.php";
} else {
    include_once "defaults/nav.php";
}
include_once "defaults/header.php";

?>


<div class="img-header">
    <img src="img/genreHeader.jpg" alt="image" class="img-fluid heather-img w-100">
</div>


<div class="container-fluid bg-dark py-3">
    <div class="w-50 border rounded border-white container bg-light p-4" style="filter: opacity(1)">
        <div class="container">
            <h2 class="text-center">Choose new password: <br> beware of the hackers and crackers</h2>
            <form method="POST" class="p-4">
                <div class="form-group">
                    <label for="formName">Old password</label>
                    <input type="password" name="oldPassword" class="form-control mb-2" id="formName" placeholder="">
                </div>
                <div class="form-group">
                    <label for="formEmail">New password</label>
                    <input type="password" name="newPassword" class="form-control mb-2" id="formEmail" placeholder="">
                </div>
                <div class="form-group">
                    <label for="formEmail">Repeat new password</label>
                    <input type="password" name="newPasswordTwo" class="form-control mb-2" id="formEmail" placeholder="">
                </div>
                <input type="submit" name="updatePassword" class="btn btn-primary" value="Update">
                <?php
                global $changePassword;
                if(isset($changePassword) && is_string($changePassword)) {
                    echo $changePassword;
                }
                ?>
            </form>
        </div>
    </div>
</div>











<?php
include_once "defaults/footer.php";
?>



