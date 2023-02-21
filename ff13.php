<?php require "header.php"; ?>

<?php require "banner.php"; ?>

<?php require "nav.php"; ?>

<?php require "dbconnect.php"; ?>

<?php 

$db = new database();
$xiii = $db->query("select * from ff13;");

?>

<main>

<div class="content">

<h2>final fantasy XIII</h2>

<section class="characters">

<h3>characters:</h3>

<?php

foreach($xiii as $char) :

?>

<p><?php echo $char['character']; ?>: <?php echo $char['desc']; ?></p>

<?php endforeach; ?>

</section>

<section class="war">

<h3>War of Transgression:</h3>

<p>In order to maintain Cocoon, it had to steal resources from Gran Pulse. The people of Gran Pulse came to see Cocoon as a place of evil while the citizens of Cocoon were led to believe that Gran Pulse was a barbaric, dangerous place that should be feared. The Pulse fal'Cie Anima finally decided to go to war against Cocoon.</p>

<p>Anima made two humans from the village of Oerba l'Cie in order to attack Cocoon. They were meant to become the beast Ragnarok and destroy Cocoon. Vanille couldn't go through with it and Fang became an incomplete Ragnarok, only able to dent the outer shell of Cocoon. Fang and Vanille were turned into crystal afterward.</p>

</section>


<section class="story">

<h3>story:</h3>

<p>After her sister was made into a l'Cie, Lightning boards a purge train in order to find her. After joining up with others they are branded as l'Cie. Final Fantasy XIII is the story of an unlikely group of characters thrown together and fight to defy the fate placed on them. The fal'Cie Barthandelus, wants them to become Ragnarok and bring Cocoon crashing into Gran Pulse. The amount of dead passing into the Unseen Realm would force open the door and bring back the maker.</p>

</section>

</div>

</main>

<?php require "footer.php"; ?>