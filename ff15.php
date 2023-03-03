<?php require "header.php"; ?>

<?php require "banner.php"; ?>

<?php require "nav.php"; ?>

<?php

require "dbconnect.php";

$db = new database();
$ff15 = $db->query("select * from ff15");
$images = $db->query("select * from images where id in (44, 45, 46, 47);");

?>

<main>

<div class="content">

	<img src="resources/images/15-royal.jpg" alt="ff15" class="headimg">

	<section class="characters">
		<h3>characters:</h3>

		<?php foreach ($ff15 as $char) : ?>

		<p><bold><?php echo $char["character"]; ?></bold>: <?php echo $char["desc"]; ?></p>
			
		<?php endforeach ?>
	</section>

	<section class="war">
		<h3>war of the astrals:</h3>

		<p>It began when the Astral Ifrit was betrayed by his subjects and he sought to destroy them. The six Astrals are sworn to defend the people of Eos, from themselves included. Ifrit was killed and the other Astrals fell into slumber after losing their powers.</p>
	</section>

	<section class="story">
		<h3>story:</h3>

		<p>Noctis and his friends are on a road trip to meet with Lunafreya, Noctis’ childhood friend and whom he is set to me married to as part of a treaty with Niflheim. The Kingdom of Lucis is attacked during the signing of the treaty and falls to Niflheim. Noctis then has to gather the power of the previous kings of Lucis as well as the blessing of the Astrals in order to free the world from darkness.</p>

		<p>The darkness is called the Starscourge, a plague that lengthens night and spawns daemons when the that terrorize people when the sun goes down. The Starscourge was part of a plan by the Astral, Bahamut to purge the planet of life. During the War of the Astrals, they thwarted Bahamut’s plan and so he enacted another plan that became the prophesy of the true king.</p>
	</section>

	<table class="gallery">
		<tr>
			<?php foreach($images as $image) : ?>

				<td>
					<div class="img-container">
						<a href="<?php echo $image['filepath']; ?>" target="_blank">
							<img src="<?php echo $image['filepath']; ?>" alt="">
						</a>
					</div>
					<div class="overlay"><?php echo $image['filename']; ?></div>	
				</td>

			<?php endforeach; ?>
		</tr>
	</table>

</div>
	
</main>

<?php require "footer.php"; ?>