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

<h2>terms</h2>

<section class="vocab">

<?php 
foreach($vocab as $term) :
?>

<p><bold><?php echo $term["term"]; ?> =</bold> <?php echo $term["definition"]; ?></p>

<?php endforeach; ?>

</section>

<div class="img-container">
<img src="resources/images/Bhunivelze.png" alt="bhunivelze" class="bhunivelze">
<div class="overlay">Bhunivelze</div>
</div>

</div>

</main>

<?php require "footer.php"; ?>