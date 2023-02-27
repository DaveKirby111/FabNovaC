<?php require "header.php"; ?>

<?php require "banner.php"; ?>

<?php require "nav.php"; ?>

<?php
require "dbconnect.php";

$db = new database();
$LR = $db->query("select * from LR;");
?>

<main>

<div class="content">

<img src="resources/images/13-3.png" alt="13-3" class="headimg">

<section class="characters">

<h3>characters:</h3>

<?php
foreach($LR as $char) :
?>

<p><bold><?php echo $char['character']; ?>:</bold> <?php echo $char['desc']; ?></p>

<?php endforeach; ?>

</section>

<section class="story">

<h3>story:</h3>

<p>After being awoken from crystal statis by Bhunivelze, Lightning is made the savior and tasked with saving as many souls as possible. Fang and Vanille were also freed from being crystal and given shelter by the holy order in a place called Luxerion. It was discovered that Vanille was able to hear the souls of the dead and was made a saint by the holy order. They holy order intend to sacrifice Vanille in a ritual to purify the souls of the dead. Snow became the ruler a town called Yusnaan, although he stays locked in his palace and only shows himself to watch over their nightly festivities.</p>

<p>At the end of FF13-2, chaos was unleashed on the world. People no longer age and it is only a matter of days until the world ends. Lightning has to save souls so that they can be reborn in a new world. </p>

</section>


<table class="gallery-2">
    <tr>
        <td>

        <div class="img-container">
            <a href="resources/images/lightning.jpg" target="_blank">
        <img src="resources/images/lightning.jpg" alt="lightning">
            </a>
        <div class="overlay">Lightning</div>
        </div>

        </td>
       
    </tr>
   
</table>


</div>

</main>

<?php require "footer.php"; ?>