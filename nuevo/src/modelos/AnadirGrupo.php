<?php

namespace Root\Html\modelos;
use Root\Html\config\Database;

class AnadirGrupo{
        public function anadirg($iduser, $comunidad){


           Database::getConnection()->query("INSERT INTO Esta VALUES ($iduser, $comunidad);");
           Database::getConnection()->query("UPDATE Comunidad SET Members = Members + 1 WHERE IdComunidad = $comunidad;");

            

        }
}