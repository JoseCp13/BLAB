<?php

namespace Root\Html\modelos;

require_once "Usuario.php";


class Render
{
    public function obtener():array
    {
        $loginUser = new Loginuser();
        $result = $loginUser->login();
        
        $nombre = $result->getNombre();
        $nomUsr = $result->getNomUsr();

        $array = [
            'nombre' => $nombre,
            'nomusr' => $nomUsr,
        ];


        return $array;
    }
}
