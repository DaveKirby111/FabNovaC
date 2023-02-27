<?php require "header.php"; ?>

<?php require "banner.php"; ?>

<?php require "nav.php"; ?>

<?php require "dbconnect.php"; ?>

<?php 

$db = new database();
$images = $db->query("select * from images where id in (12, 21);");

?>

<main>

<div class="content">

<img src="resources/images/transp-versus.png" alt="transp-versus" class="headimg">

<section class="dev">

<h3>development:</h3>

<p>Final Fantasy Versus XIII was intended to be part of the Fabula Nova Crystallis series of games. It was originally anounced at E3 in 2006 before there was even a game. It was just an idea at that point. Hajime Tabata, who was to be the director, admitted that releasing information about the game so eary was a mistake. That once information gets out it is no longer just for the developers but fans too; they begin to form attachments to characters.</p>

<p>Between 2006-2009 the team working on Versus XIII was very small. After XIII launched in 2010, more resources were directed to working on Versus only to face major technical problems. It was being developed with the same engine as XIII but reached a point where it couldn't handle the open world nature of Versus anymore.</p>

<p>In 2012, Versus XIII was rebranded within the company to be Final Fantasy XV; the public did not become aware of this until E3 2013. Development also shifted focus to next-gen consoles. The game was about 25% complete at the time.</p>
</section>

<table class="gallery-versus">
    <tr>
        <?php foreach($images as $image) : ?>
            
        <td>

        <div class="img-container">
            <a href="<?php echo $image['filepath']; ?>" target="_blank">
            <img src="<?php echo $image['filepath']; ?>" alt="versus">
            </a>
        <div class="overlay"><?php echo $image['filename']; ?></div>
        </div>

        </td>

        <?php endforeach; ?>
       
    </tr>
   
</table>


</div>

</main>

<?php require "footer.php"; ?>