<?php

namespace Root\Html\modelos;

use Root\Html\config\Database;
use \PDO;

class AmigosSing
{
    public function obtenerUsuariosNoAgregados($userid)
    {

        

        $sql = "SELECT u.* FROM User u WHERE u.IdUser <> $userid 
                AND NOT EXISTS (
                    SELECT 1 FROM Agrega a 
                    WHERE (u.IdUser = a.IdUser_1 AND a.AgregaIdUser_2 = $userid) 
                    OR (u.IdUser = a.AgregaIdUser_2 AND a.IdUser_1 = $userid)
                ) LIMIT 4";

        $result = Database::getConnection()->query($sql);
       

        $result->execute();
        $usuariosNoAgregados = $result->fetchAll(PDO::FETCH_ASSOC);

        return $usuariosNoAgregados;
    }
}
