<?php


namespace Root\Html\controladores;

use Root\Html\modelos\Render;
use Root\Html\modelos\GrupoAgregado;
use Root\Html\modelos\Obteneramiot;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class PerfilController{
    public function perfil(){
        $userid = $_SESSION['usuario'][0]['IdUser'];

        $datos = new Render;
        $array = $datos->obtener();

        $grup = new GrupoAgregado();

        $arrayg = $grup->grupog($userid);

        $ami = new Obteneramiot();

        $amigosag = $ami->obtener($userid);

        $loader = new FilesystemLoader('./src/vistas');
        $twig = new Environment($loader);
        // Renderizar la plantilla con Twig
        $template = $twig->load('perfil.php.twig');
        echo $template->render(array_merge($array, ['usuariosAgregados' => $amigosag], ['ArrayGrupos' => $arrayg]));



    }
}