<?php require "header.php"; ?>

<?php require "banner.php"; ?>

<?php require "nav.php"; ?>

<?php require "dbconnect.php"; ?>

<style>
    .upload {
        display: flex;
        justify-content: center;
    }
</style>

<main>

<div class="content">

<div class="upload">

<form action="dbimg.php" method="post" enctype="multipart/form-data">

<input type="file" name="image" id="image">

<input type="submit" name="submit" value="Upload">

</form>

</div>

</div>

</main>

<?php require "footer.php"; ?>