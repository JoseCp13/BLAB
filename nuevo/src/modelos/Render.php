<?php

namespace Root\Html\modelos;

require_once "Usuario.php";


class Render
{
    public function obtener():array
    {

        $nombre = $_SESSION['usuario'][0]['Nombre'];
        $nomUsr = $_SESSION['usuario'][0]['NomUsr'];
        $idusr = $_SESSION['usuario'][0]['IdUser'];

        $array = [
            'nombre' => $nombre,
            'nomusr' => $nomUsr,
            'idusr'=>$idusr
        ];


        return $array;
    }
}
