<?php

namespace Root\Html\controladores;

class CerrarsController{
    public function cerrarSesion(){
        session_destroy();
        header("Location: ". BASE_URL);
    }
}