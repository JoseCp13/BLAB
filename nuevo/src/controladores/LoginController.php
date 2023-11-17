<?php

namespace Root\Html\controladores;

use Root\Html\modelos\Loginuser;
use Root\Html\modelos\Render;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class LoginController
{
    public function index()
    {
        require_once "./src/vistas/login.php";
    }


    public function iniciarsesion()
    {

        $loginUser = new Loginuser();

        $result = $loginUser->login();

        if ($result) {

           $datos = new Render;
           $array = $datos->obtener(); 



            $loader = new FilesystemLoader('./src/vistas');
            $twig = new Environment($loader);

            // Renderizar la plantilla con Twig
            $template = $twig->load('home.php.twig');
            echo $template->render($array);
        } else {
            echo "No existe";
        }
    }
}
