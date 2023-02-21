<?php require "header.php"; ?>

<?php require "banner.php"; ?>

<?php require "nav.php"; ?>

<?php
require "dbconnect.php";

$db = new database();
$vocab = $db->query("select * from vocabulary;");
?>

<main>

<div class="content">

<h2>terms:</h2>

<?php 
foreach($vocab as $term) :
?>

<p><?php echo $term["term"]; ?> = <?php echo $term["definition"]; ?></p>

<?php endforeach; ?>

</div>

</main>

<?php require "footer.php"; ?>