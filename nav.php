<nav>

<ul>
    <?php
    
    $nav = [
        "/" => "home", 
        "terms.php" => "terms",
        "mythology.php" => "mythology",
        "games.php" => "games",
        "gallery.php" => "gallery",
    ];

    foreach($nav as $key => $link) :

    ?>

    <li>
        <a href="<?php echo $key ?>">
        <?php echo $link ?>
        </a>
    </li>

    <?php endforeach; ?>
</ul>

</nav>