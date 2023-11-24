<?php


namespace Root\Html\modelos;

use Root\Html\config\Database;
use \PDO;


class ObtenerPerfilAmi
{
    public function obtenerami($iduser)
    {

        $sql = Database::getConnection()->query("SELECT * FROM User WHERE IdUser = $iduser");

        $result = $sql->fetchAll(PDO::FETCH_ASSOC);


        return $result;

    }
}