<?php require "header.php"; ?>

<?php require "banner.php"; ?>

<?php require "nav.php"; ?>

<?php
require "dbconnect.php";

$db = new database();
$type = $db->query("select * from type;");
?>

<main>

<div class="content">

<h2>final fantasy type-0</h2>

<section class="characters">

<h3>characters:</h3>

<?php
foreach($type as $char) :
?>

<p><?php echo $char['character']; ?>: <?php echo $char['desc']; ?></p>

<?php endforeach; ?>

</section>

<section class="story">

<h3>story:</h3>
</section>

</div>

</main>

<?php require "footer.php"; ?>