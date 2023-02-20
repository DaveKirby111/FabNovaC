<?php require "header.php"; ?>

<?php require "banner.php"; ?>

<?php require "nav.php"; ?>

<?php require "dbconnect.php"; ?>

<?php 
    $db = new database();
    $games = $db->query("select * from games;");
?>

<main>

<div class="content">

<h2>welcome</h2>

<section class="what">

<h3>What is Fabula Nova Crystallis?</h3>

<p>It is a series of final fantasy games that consist of different worlds, stories and characters but tied together by a shared mythology. The development teams of each game were able to adapt the mythos to fit the story of their game so the continuity between them is not consistent.</p>

</section>

<section class="games">

<h3>The games connected to Fabula Nova Crystallis:</h3>

<table>

    <tr>
        <th>title</th>
        <th>release</th>
        <th>platform</th>
    </tr>

    <?php 

    foreach($games as $game) :
        
    ?>

    <tr>
        <td><?php echo $game['game']; ?></td>
        <td>
            <p>Jap: <?php echo $game['jap']; ?></p>
            <p>USA: <?php echo $game['usa']; ?></p>
        </td>
        <td><?php echo $game['platform']; ?></td>
    </tr>

    <?php endforeach; ?>

</table>

</section>

</div>

</main>

<?php require "footer.php"; ?>