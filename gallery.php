<?php require "header.php"; ?>

<?php require "banner.php"; ?>

<?php require "nav.php"; ?>

<?php 

require "dbconnect.php";

$db = new database();
$images1 = $db->query("select * from images where id in (28, 29, 30, 31);");
$images2 = $db->query("select * from images where id in (32, 33, 48);");

?>

<main>

<div class="content">

<h2>gallery</h2>

<table class="gallery">
    <tr>
        <?php foreach($images1 as $image1) : ?>
            <td>
                <div class="img-container">
                    <a href="<?php echo $image1["filepath"]; ?>" target="_blank">
                    <img src="<?php echo $image1["filepath"]; ?>" alt="">
                    </a>
                    <div class="overlay"><?php echo $image1["filename"]; ?></div>
                </div>
            </td>
        <?php endforeach; ?>
    </tr>
    <tr>
        <?php foreach($images2 as $image2) : ?>
            <td>
                <div class="img-container">
                    <a href="<?php echo $image2["filepath"]; ?>" target="_blank">
                    <img src="<?php echo $image2["filepath"]; ?>" alt="">
                    </a>
                    <div class="overlay"><?php echo $image2["filename"]; ?></div>
                </div>
            </td>
        <?php endforeach; ?>
    </tr>
</table>

</div>

</main>

<?php require "footer.php"; ?>