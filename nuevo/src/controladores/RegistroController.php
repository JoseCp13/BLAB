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
            $crearusr->registrado();
            
            header("Location: " .BASE_URL);

            exit();
        } else {

            echo "Acceso no autorizado.";
        }
    }
}
