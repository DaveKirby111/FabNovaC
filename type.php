<?php require "header.php"; ?>

<?php require "banner.php"; ?>

<?php require "nav.php"; ?>

<?php
require "dbconnect.php";

$db = new database();
$type = $db->query("select * from type;");
$nations = $db->query("select * from nations;");
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

</div>

</main>

<?php require "footer.php"; ?>