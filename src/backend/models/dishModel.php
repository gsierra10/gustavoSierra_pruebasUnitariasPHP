<?php
require_once './databaseConnection.php';

function getAllDishes() : array {
    $resultado = $GLOBALS['mysqli']->query('SELECT * FROM plato');
    $fila = $resultado->fetch_all();

    return $fila;
};
?>