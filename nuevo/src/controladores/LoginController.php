<?php

namespace Root\Html\controladores;

use Root\Html\modelos\Loginuser;
use Root\Html\modelos\ObtenerGrupos;
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

        $user = $_POST['user'];
        $pass = $_POST['contra'];

        $loginUser = new Loginuser();

        $result = $loginUser->login($user, $pass);

        if ($result) {
            header("Location:" . BASE_URL . "/login/renderizado");
        } else{
            echo "error";
        }
    }

    public function renderizado()
    {


        $userId = $_SESSION['usuario'][0]['IdUser'];
        $datos = new Render;
        $array = $datos->obtener();

        $grupos =  new ObtenerGrupos();
        $arrayg = $grupos->obtenerG();


        $amigos = new AmigosController();
        $amigosag = $amigos->obtenerUsuarioSinAgregar($userId);

        $loader = new FilesystemLoader('./src/vistas');
        $twig = new Environment($loader);
        // Renderizar la plantilla con Twig
        $template = $twig->load('home.php.twig');
        echo $template->render(array_merge($array, ['usuariosSinAgregar' => $amigosag], ['ArrayGrupos' => $arrayg]));
    }
}
