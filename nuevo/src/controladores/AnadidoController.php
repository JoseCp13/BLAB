<?php

namespace Root\Html\controladores;
use Root\Html\modelos\AnadirAmigos;

class AnadidoController
{
    public function agregado()
    {
        $usuarionu = $_POST['idUsuario'];
        $usuarioac = $_SESSION['usuario'][0]['IdUser'];

        $anadir = new AnadirAmigos();

        $anadir->anadir($usuarioac, $usuarionu);

        header("Location:" . BASE_URL . "/login/renderizado");

    
    }



    public function agregadog(){
        
    }
}
