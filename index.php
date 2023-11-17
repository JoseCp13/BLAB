<?php

require_once "vendor/autoload.php";
require_once "./src/config/config.php";

$url = $_GET['url'] ?? 'Login';
$url = explode('/', $url);
if (isset($url[0])) {
    $NOMBRE_CONTROLADOR = ucfirst($url[0]) . 'Controller';
} elseif (!isset($url[0]) && !isset($url[1])) {
    $NOMBRE_CONTROLADOR = CONTROLADOR;
} elseif (isset($url[0]) && !isset($url[1])) {
    $NOMBRE_CONTROLADOR = CONTROLADOR;
} else {
    echo "error 1";
    exit;
}

$controladorClassName = "Root\\Html\\controladores\\" . $NOMBRE_CONTROLADOR;

if (class_exists($controladorClassName)) {
    $controlador = new $controladorClassName();
    if (isset($url[1]) && method_exists($controlador, $url[1])) {
        $metodo = $url[1];
        $controlador->$metodo(); #2->parametro categoria, 3->parametro ubicacion, 4->parametro paginacion
    } elseif (!isset($url[0]) && !isset($url[1])) {
        $metodo = METODO;
        $controlador->$metodo();
    } elseif (isset($url[0]) && !isset($url[1])) {
        $metodo = METODO;
        $controlador->$metodo();
    } else {
        echo "error 2";
    }
} else {
    echo "error 3";
}
