<?php
require_once './databaseConnection.php';

function getAllIngredients() : array {
    $resultado = $GLOBALS['mysqli']->query('SELECT * FROM ingrediente');
    $fila = $resultado->fetch_all();

    return $fila;
};
?>