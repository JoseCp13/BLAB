<?php


namespace Root\Html\modelos;

use Root\Html\config\Database;
use \PDO;

class Obteneramiot{
    public function obtener($userid){
        $result= Database::getConnection()->query("SELECT *
        FROM User
        LEFT JOIN Agrega ON User.IdUser = Agrega.IdUser_1
        WHERE (Agrega.IdUser_1 = $userid AND Agrega.AgregaIdUser_2 IS NOT NULL)
           OR (Agrega.IdUser_1 IS NOT NULL AND Agrega.AgregaIdUser_2 = $userid);");

        $usuarioagregado = $result->fetchAll(PDO::FETCH_ASSOC);

        return $usuarioagregado;
    }
}