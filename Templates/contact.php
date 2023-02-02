<?php
include_once "defaults/head.php";
include_once "defaults/nav.php";
include_once "defaults/header.php";

?>


<div class="img-header">
    <img src="img/genreHeader.jpg" alt="image" class="img-fluid heather-img w-100">
</div>


<div class="container my-5 rounded">
    <div class="w-50 border rounded border-white container bg-light p-4" style="filter: opacity(1)">
        <div class="container">
            <h1 class="text-center">Contact US</h1>
            <form class="p-4">
                <div class="form-group">
                    <label for="formName">Name</label>
                    <input type="text" class="form-control" id="formName" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="formEmail">Email</label>
                    <input type="email" class="form-control" id="formEmail" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="formMessage">Message</label>
                    <textarea class="form-control" id="formMessage" rows="3" placeholder="Enter your message"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>









<?php
include_once "defaults/footer.php";
?>



