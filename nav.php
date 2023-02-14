<nav>

<ul>
    <?php
    
    $nav = [
        "/" => "home", 
        "lore.php" => "lore",
        "characters.php" => "characters",
        "gallery.php" => "gallery"
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