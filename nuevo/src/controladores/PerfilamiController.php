<?php 

namespace Root\Html\controladores;
use Root\Html\modelos\Render;
use Root\Html\modelos\GrupoAgregado;
use Root\Html\modelos\Obteneramiot;
use Root\Html\modelos\ObtenerPerfilAmi;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
class PerfilamiController{

    public function renderami(){
        $userid = $_POST['idUsuario'];

        $datos = new ObtenerPerfilAmi();
        $array = $datos->obtenerami($userid);

        $nombre = $array[0]['Nombre'];
        $nomUsr = $array[0]['NomUsr'];
        $idusr = $array[0]['IdUser'];

        $array = [
            'nombre' => $nombre,
            'nomusr' => $nomUsr,
            'idusr'=>$idusr
        ];

        return $array;

    }

    public function perfilami(){

        $userid = $_POST['idUsuario'];

        $datos = new PerfilamiController();
        $array = $datos->renderami();

        $grup = new GrupoAgregado();

        $arrayg = $grup->grupog($userid);

        $ami = new Obteneramiot();

        $amigosag = $ami->obtener($userid);



        $loader = new FilesystemLoader('./src/vistas');
        $twig = new Environment($loader);
        // Renderizar la plantilla con Twig
        $template = $twig->load('perfilamigo.php.twig');
        echo $template->render(array_merge($array, ['usuariosAgregados' => $amigosag], ['ArrayGrupos' => $arrayg]));        
    }
}