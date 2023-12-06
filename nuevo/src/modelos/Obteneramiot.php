<?php


namespace Root\Html\modelos;

use Root\Html\config\Database;
use \PDO;

class Obteneramiot{
    public function obtener($userid){
        $result= Database::getConnection()->query("
        SELECT User.*
        FROM User
        LEFT JOIN Agrega ON User.IdUser = Agrega.AgregaIdUser_2
        WHERE Agrega.IdUser_1 = $userid AND Agrega.AgregaIdUser_2 IS NOT NULL
        
        UNION
        
        SELECT User.*
        FROM User
        LEFT JOIN Agrega ON User.IdUser = Agrega.IdUser_1
        WHERE Agrega.AgregaIdUser_2 = $userid AND Agrega.IdUser_1 IS NOT NULL LIMIT 5;");

        $usuarioagregado = $result->fetchAll(PDO::FETCH_ASSOC);

        return $usuarioagregado;
    }
}