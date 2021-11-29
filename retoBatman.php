<!DOCTYPE html>
<html>
    <head>
        <title>Reto Batman PHP</title>
    </head>
    <body>
    <?php 
    //Array de 3 platos
    echo $menu =[
        $menu1 = [
            'titulo' => 'hamburguesa',
            'comensales' => 1,
            'plato' => 'primero',
            'ingredientes' => ['pan', 'carne', 'queso', 'bacon']
        ],
        $menu2 = [
            'titulo' => 'pizza',
            'comensales' => 2,
            'plato' => 'segundo',
            'ingredientes' =>  ['masa', 'mozzarella', 'salsa de tomate', 'albahaca']
        ],
        $menu3 = [
            'titulo' => 'alitas de pollo',
            'comensales' => 2,
            'plato' => 'entrante',
            'ingredientes' => $array = ['pollo', 'salsa']
        ]
    ]; 
    ?>
    <h1>Lista de platos</h1>
    <h3>Plato 1</h3>
    <ul>
        <?php foreach ($menu1 as $menus) { ?>
            <li><?php echo $menus ?></li>
        <?php } ?>
    </ul>
    <h3>Plato 2</h3>
    <ul>
        <?php foreach ($menu2 as $menus) { ?>
            <li><?php echo $menus ?></li>
        <?php } ?>
    </ul>
    <h3>Plato 3</h3>
    <ul>
        <?php foreach ($menu3 as $menus) { ?>
            <li><?php echo $menus ?></li>
        <?php } ?>
    </ul>
    </body>
</html>