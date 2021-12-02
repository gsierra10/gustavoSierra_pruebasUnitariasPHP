<?php 
declare(strict_types=1);


ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Reto Batman PHP</title>
    </head>
    <body>
        <h1><?php require_once('../components/header.php'); ?></h1>

        <?php require('../../backend/data.php');
        foreach ($menus as $menu) {
                    echo "  <li>
                                Plato: ${menu["titulo: "]} </br>
                                Números de comensales: ${menu["comensales: "]}</br>
                                Ideal: ${menu["plato: "]}</br>
                                ingredientes: 
                            </li> ";
                    echo "<ol>";
                    foreach ($menu['ingredientes: '] as  $value) {
                        echo "<li> 
                                Ingrediente :${value} </br>
                            </li>";
                    };
                    echo "</ol>";
                }
                ?>
        <h2><?php require_once('../components/footer.php'); ?></h2>
    </body>
</html>