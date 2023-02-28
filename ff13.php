<?php require "header.php"; ?>

<?php require "banner.php"; ?>

<?php require "nav.php"; ?>

<?php require "dbconnect.php"; ?>

<?php 

$db = new database();
$xiii = $db->query("select * from ff13;");
$images1 = $db->query("select * from images where id in (9, 16, 20);");
$images2 = $db->query("select * from images where id in (6, 23, 24);");

?>

<style>
    .headimg {
       object-fit: contain;
    }
</style>

<main>

<div class="content">

<img src="resources/images/ff13-light.png" alt="ff13light" class="headimg">

<section class="characters">

<h3>characters:</h3>

<?php

foreach($xiii as $char) :

?>

<p><bold><?php echo $char['character']; ?>:</bold> <?php echo $char['desc']; ?></p>

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

<h3>themes:</h3>

<ul>
    <li>Family bonds</li>
    <li>Overcoming your flaws</li>
</ul>

</section>


<table class="gallery">
    <tr>

    <?php foreach($images1 as $image1) : ?>

        <td>

        <div class="img-container">
        <a href="<?php echo $image1['filepath']; ?>" target="_blank">
            <img src="<?php echo $image1['filepath']; ?>" alt="13">
        </a>
        <div class="overlay"><?php echo $image1['filename']; ?></div>
        </div>

        </td>
       
    <?php endforeach; ?>

    </tr>

    <tr>

    <?php foreach($images2 as $image2) : ?>

        <td>

        <div class="img-container">
            <a href="<?php echo $image2['filepath']; ?>" target="_blank">
            <img src="<?php echo $image2['filepath']; ?>" alt="13">
            </a>
        <div class="overlay"><?php echo $image2['filename']; ?></div>
        </div>

        </td>


    <?php endforeach; ?>

    </tr>
    
</table>


</div>

</main>

<?php require "footer.php"; ?>