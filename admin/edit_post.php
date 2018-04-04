<?php
include '../config/config.php';
include '../libraries/Database.php';
include '../admin/includes/header.php';
include '../helpers/format_helper.php';
?>
<?php

//Create DB Obj
$db = new Database();


?>

<h2 class="">  Edit Post</h2>
<br>

<form method="post" action="edit_post.php">

    <input name="delete" value="Delete" type="submit" class="btn btn-danger">


    <div class="form-group">
        <label for="exampleInputEmail1">Post Title : </label>
        <input name="title" type="text" class="form-control" placeholder="Enter Title">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Post Body : </label>
        <textarea  name="body" type="text" class="form-control" placeholder="Enter Post Body">
        </textarea>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Category : </label>
        <select name="category" class="form-control">
            <option>News</option>
            <option>Events</option>
            <option>Tutorials</option>
            <option>Misc</option>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Author : </label>
        <input name="author" type="text" class="form-control" placeholder="Enter Author Name">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Tags : </label>
        <input name="tags" type="text" class="form-control" placeholder="Enter Tags">
    </div>
    <br>
    <div class="justify-content-between">
        <input name="submit" value="submit" type="submit" class="btn btn-primary">

        <a href="index.php"  class="btn btn-default" style="">Cancel</a>

    </div>
    <br>
</form>




<?php
include 'includes/footer.php';
?>

