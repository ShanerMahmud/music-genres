<?php
if(isset($_SESSION['user'])){
    $thisUser = $_SESSION['user']->email;
}
?>

<div class="container-fluid bg-black">
    <div class="container">
        <nav class="nav nav-pills flex-column flex-sm-row navHeight align-items-center">
            <a class="aNav  flex-sm-fill text-sm-center nav-link" href="/home">HOME</a>
            <a class="aNav  flex-sm-fill text-sm-center nav-link" href="/genres">GENRES</a>
            <a class="aNav  flex-sm-fill text-sm-center nav-link" href="/contact">CONTACT</a>
            <a class="aNav  flex-sm-fill text-sm-center nav-link" href="/logout">LOGOUT (<?=$thisUser?>)</a>
        </nav>
    </div>
</div>