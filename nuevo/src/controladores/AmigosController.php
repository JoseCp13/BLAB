<?php

namespace Root\Html\controladores;

use Root\Html\modelos\AmigosAg;
use Root\Html\modelos\AmigosSing;

class AmigosController {
    public function obtenerUsuarioSinAgregar($userId){
        
        $noagre = new AmigosSing();
        $usuariosNoAgregados = $noagre->obtenerUsuariosNoAgregados($userId);

        return $usuariosNoAgregados;

    }
}