<?php

namespace Root\Html\controladores;
use Root\Html\modelos\EliminarGrupo;
use Root\Html\modelos\EliminarAmigo;
use Root\Html\controladores\PerfilController;

class EliminarController{
    public function eliminarg(){


        $userId = $_SESSION['usuario'][0]['IdUser'];
        $grupo = $_POST['IdComunidad'];

        $eliminar=new EliminarGrupo();
        $eliminar->EliminarG($userId, $grupo);

        header("Location:" . BASE_URL . "/Perfil/perfil" );

    }


    public function eliminara(){
        $userId = $_SESSION['usuario'][0]['IdUser'];
        $userId2 = $_POST['idUsuario'];


        $eliminar = new EliminarAmigo();
        $eliminar->EliminarA($userId, $userId2);

        header("Location:" . BASE_URL . "/Perfil/perfil" );
    }
}