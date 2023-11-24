<?php

namespace Root\Html\controladores;
use Root\Html\modelos\AnadirGrupo;


class GruposController{

    public function grupos(){

        $comunidad = $_POST['IdComunidad'];
        $iduser =  $_SESSION['usuario'][0]['IdUser'];
        $anadir = new AnadirGrupo();
        $anadir->anadirg($iduser,$comunidad);

        header("Location:" . BASE_URL . "/login/renderizado");
    }
}