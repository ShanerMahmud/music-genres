<?php
include_once "defaults/head.php";
include_once "defaults/nav.php";
include_once "defaults/header.php";

?>

<div class="img-header" style="">
    <img src="img/loginHeader.webp" alt="image" class="img-fluid heather-img w-100">
</div>


<div class="container my-5">
    <div class="loginForm border rounded border-white container bg-light" style="filter: opacity(1)">
        <div class="container">
            <h1 class="text-center pt-3">Login</h1>
            <form method="POST" class="p-2">
                <div class="form-group text-center">
                    <label class="pb-2" for="formUsername">Email</label>
                    <input type="text" class="form-control" id="formUsername" ><br>
                </div>
                <div class="form-group text-center p-1">
                    <label class="pb-2" for="formPassword">Password</label>
                    <input type="password" class="form-control" id="formPassword" ><br>
                </div>
                <div class="text-center">
                    <input class="btn btn-dark text-white mb-3" type="submit" name="login" value="Sign in">
                </div>
            </form>
        </div>
    </div>
</div>









<?php
include_once "defaults/footer.php";
?>



