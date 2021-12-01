<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Reto Batman PHP</title>
    </head>
    <body>
        <h1><?php require_once('header.php'); ?></h1>

        <?php require('data.php') ?>

        <h2>Lista de platos</h2>
            <h3>Plato 1</h3>
        <ul>
            <?php foreach ($menus as $clave => $menu) { ?>
                <li> <?php echo $clave; echo $menu['']; ?> </li>
            <?php } ?>
        </ul>
        <h2><?php require_once('footer.php'); ?></h2>
    </body>
</html>