<?php
require_once './databaseConnection.php';

function getAllDishTypes() : array {
    $resultado = $GLOBALS['mysqli']->query('SELECT * FROM tipo de plato');
    $fila = $resultado->fetch_all();

    return $fila;
};
?>