<style>
    nav {
        background-image: url("resources/images/fnc-bg3.jpeg");
        background-size: 100% auto;
    }

    .mobile-nav {
        background-image: url("resources/images/fnc-bg3.jpeg");
    }

    .mobile-nav a {
        text-decoration: none;
        color: black;
    }
</style>

<?php

$nav = [
    "/" => "home", 
    "terms.php" => "terms",
    "mythology.php" => "mythology",
    "games.php" => "games",
    "gallery.php" => "gallery",
];

?>

<nav>

<ul>
    <?php
    foreach($nav as $key => $link) :
    ?>

    <li><a href="<?php echo $key ?>"><?php echo $link ?></a></li>

    <?php endforeach; ?>
</ul>

</nav>

<!-- Mobile Menu -->

<div class="mobile-nav">
<?php
foreach($nav as $key => $link) :
?>

<a href="<?php echo $key ?>"><?php echo $link ?></a>

<?php endforeach; ?>
</div>