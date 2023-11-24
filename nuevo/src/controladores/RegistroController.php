<?php

namespace Root\Html\controladores;

use Root\Html\modelos\RegisterUser;
use Root\Html\modelos\Render;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;



class RegistroController
{
    public function index()
    {
        require_once __DIR__ . '/../vistas/register.php';
    }

    public function registrorealizado()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $crearusr= new RegisterUser();
            $regis =  $crearusr->registrado();

            $datos = new Render;
            $array = $datos->obtener();


            $loader = new FilesystemLoader('./src/vistas');
            $twig = new Environment($loader);

            // Renderizar la plantilla con Twig
            $template = $twig->load('home.php.twig');
            echo $template->render($array);
            exit();
        } else {

            echo "Acceso no autorizado.";
        }
    }
}
