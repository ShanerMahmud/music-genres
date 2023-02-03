<?php
require "../Modules/review.php";
if(isset($_POST['postComment'])) {
    $postComment = postComment();
}

?>


<div class="container-fluid bg-dark pb-4">
    <div class="w-50 border rounded border-white container bg-light p-4" style="filter: opacity(1)">
        <div class="container">
            <h4 class="text-center">Write a comment for this song: <br> tell us about your thoughts and feelings</h4>
            <form method="POST" class="p-4">
                <div class="form-group">
                    <label for="formName">Comment</label>
                    <input name="commentText" value="" type="text" class="form-control mb-2" id="formName" placeholder="">
                </div>
                <input type="submit" name="postComment" class="btn btn-primary" value="Comment">
                <?php if(isset($postComment) && !empty($postComment) && is_string($postComment)) {echo $postComment;} ?>
            </form>
        </div>
    </div>
</div>