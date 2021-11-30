<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//Array de 3 
$menu =[
    $menu1 = [
        'titulo: ' => 'hamburguesa',
        'comensales: ' => 1,
        'plato: ' => 'primero',
        'ingredientes: ' => ['pan', 'carne', 'queso', 'bacon']
    ],
    $menu2 = [
        'titulo: ' => 'pizza',
        'comensales: ' => 2,
        'plato: ' => 'segundo',
        'ingredientes: ' =>  ['masa', 'mozzarella', 'salsa de tomate', 'albahaca']
    ],
    $menu3 = [
        'titulo: ' => 'alitas de pollo',
        'comensales: ' => 2,
        'plato: ' => 'entrante',
        'ingredientes: ' => $array = ['pollo', 'salsa']
    ]
]; 
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Reto Batman PHP</title>
    </head>
    <body>
        <h1><?php require_once('header.php'); ?></h1>
        <h2>Lista de platos</h2>
            <h3>Plato 1</h3>
        <ul>
            <?php foreach ($menu1 as $clave => $menus) { ?>
                <li><?php echo $clave; echo $menus ?></li>
            <?php } ?>
        </ul>
        <h3>Plato 2</h3>
        <ul>
        <?php foreach ($menu2 as $clave => $menus) { ?>
                <li><?php echo $clave; echo $menus ?></li>
            <?php } ?>
        </ul>
        <h3>Plato 3</h3>
        <ul>
        <?php foreach ($menu3 as $clave => $menus) { ?>
                <li><?php echo $clave; echo $menus ?></li>
            <?php } ?>
        </ul>
        <h2><?php require_once('footer.php'); ?></h2>
    </body>
</html>