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



<div class="container-fluid bg-dark py-5 d-flex align-items-center justify-content-center">
    <div class="container">
        <div class="w-50 border rounded border-white container bg-light p-4" style="filter: opacity(1)">
            <div class="container">
                <h1 class="text-center">Contact US</h1>
                <form method="POST" class="p-4">
                    <div class="form-group">
                        <label class="" for="formName">Name</label>
                        <input type="text" class="mb-2 form-control" id="formName" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <label class="" for="formEmail">Email</label>
                        <input type="email" class="mb-2 form-control" id="formEmail" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <label class="" for="formMessage">Message</label>
                        <textarea class="mb-2 form-control" id="formMessage" rows="3" placeholder="Enter your message"></textarea>
                    </div>
                    <button type="submit" class="mt-1 btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>













<?php
include_once "defaults/footer.php";
?>



