<?php require "header.php"; ?>

<?php require "banner.php"; ?>

<?php require "nav.php"; ?>

<?php

    require "dbconnect.php";

    $db = new database();
    $xiii2 = $db->query("select * from ff132;");
?>

<main>

<div class="content">

<h2>final fantasy XIII-2</h2>

<section class="characters">

<h3>characters:</h3>

<?php
foreach($xiii2 as $char) :
?>

<p><?php echo $char['character']; ?>: <?php echo $char['desc']; ?></p>

<?php endforeach; ?>

</section>

<section class="story">

<h3>story:</h3>

<p>After the events of the first game, Lightning and the others were freed from being a crystal with the exception of Vanille and Fang. It was Etro who freed them only for Lightning to be written out of history. Everyone still believes that Lightning is still a crsytal along with Fang and Vanille. Serah is the only one who remembers the original timeline where Lightning was freed. Lightning is pulled into Valhalla where she becomes the guardian of Etro in the battle against Caius.</p>

<p>Noel comes from the future where he is the last human left. After ending up in Valhalla, he meets Lightning before she sends him to find Serah. Wanting to see Lightning again, Serah joins Noel to travel through time. Along the way the resolve paradoxes accross alternate timelines.</p>

<p>It ends with a final confrontation with Caius, who is killed by Noel. Etro's Gate is forced open and chaos spills out into the world. The world becomes timeless and Serah dies. Lightning sits upon Etro's throne and turns to crystal.</p>

</section>

</div>

</main>

<?php require "footer.php"; ?>