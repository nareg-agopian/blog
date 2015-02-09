<?php
require_once(__DIR__ . "/../model/config.php");
?>

<h1>create blog post</h1>

<form method="post" action="<?php echo $path . "controller/create/post.php"; ?>">
    <div>
        <lable for="title">Title:</lable>
        <input type="text" name="title" />
    </div>
    
    <div>
        <lable for="post">post:</lable>
        <textarea name="post"></textarea>
    </div>
    
    <div>
        <button type="submit">Submit</button>
    </div>
</form>



