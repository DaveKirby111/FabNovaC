<?php require "header.php"; ?>

<?php require "banner.php"; ?>

<?php require "nav.php"; ?>

<?php
require "dbconnect.php";

$db = new database();
$type = $db->query("select * from type;");
$nations = $db->query("select * from nations;");
$images1 = $db->query("select * from images where id in (1, 8, 14);");
$images2 = $db->query("select * from images where id in (7, 11, 5);");
$images3 = $db->query("select * from images where id in (18, 19, 4);");
$images4 = $db->query("select * from images where id in (3, 22, 25);");
$images5 = $db->query("select * from images where id in (15, 10);");
?>

<main>

<div class="content">

<img src="resources/images/type0.png" alt="type0" class="headimg">

<section class="characters">

<h3>characters:</h3>

<?php
foreach($type as $char) :
?>

<p><bold><?php echo $char['character']; ?>:</bold> [<?php echo $char['weapon']; ?>] <?php echo $char['desc']; ?></p>

<?php endforeach; ?>

</section>

<section class="story">

<h3>story:</h3>

<p>The world is called Orience and is divided into four nations. Each nation has their own crystal that grants them unique power. The four nations have always been at war with one another. There is a legend in Orience of a savior called Agito. It is said to appear during an apocalpse called Tempus Finis. It was the will of the Vermilion Bird crystal that the nation of Rubrum train cadets to become Agito.</p>

<h3>themes:</h3>

<ul>
    <li>War's effect on the world</li>
    <li>War's influence on the young</li>
</ul>

<table class="kingdoms">
    <tr>
        <th>kingdom</th>
        <th>crystal</th>
        <th>power</th>
    </tr>

    <?php
    foreach($nations as $nation) :
    ?>

    <tr>
        <td><?php echo $nation['nation']; ?></td>
        <td><?php echo $nation['crystal']; ?></td>
        <td><?php echo $nation['power']; ?></td>
    </tr>

    <?php endforeach; ?>

</table>

</section>


<table class="gallery-type">

<tr>
    <?php foreach($images1 as $image1) :?>

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
    <?php foreach($images2 as $image2) :?>

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

<tr>
    <?php foreach($images3 as $image3) :?>

        <td>
        <div class="img-container">
            <a href="<?php echo $image3['filepath']; ?>" target="_blank">
            <img src="<?php echo $image3['filepath']; ?>" alt="13">
            </a>
        <div class="overlay"><?php echo $image3['filename']; ?></div>
        </div>
        </td>

    <?php endforeach; ?>
</tr>

<tr>
    <?php foreach($images4 as $image4) :?>

        <td>
        <div class="img-container">
            <a href="<?php echo $image4['filepath']; ?>" target="_blank">
            <img src="<?php echo $image4['filepath']; ?>" alt="13">
            </a>
        <div class="overlay"><?php echo $image4['filename']; ?></div>
        </div>
        </td>

    <?php endforeach; ?>
</tr>

<tr>
    <?php foreach($images5 as $image5) :?>

        <td>
        <div class="img-container">
            <a href="<?php echo $image5['filepath']; ?>" target="_blank">
            <img src="<?php echo $image5['filepath']; ?>" alt="13">
            </a>
        <div class="overlay"><?php echo $image5['filename']; ?></div>
        </div>
        </td>

    <?php endforeach; ?>
</tr>

</table>


</div>

</main>

<?php require "footer.php"; ?>