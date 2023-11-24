<?php

namespace Root\Html\modelos;

use Root\Html\config\Database;
use \PDO;

class AmigosSing
{
    public function obtenerUsuariosNoAgregados()
    {
        // Obtenemos el ID del usuario de la sesión
        $userId = $_SESSION['usuario'][0]['IdUser'];
        

        $sql = "SELECT u.* FROM User u WHERE u.IdUser <> $userId 
                AND NOT EXISTS (
                    SELECT 1 FROM Agrega a 
                    WHERE (u.IdUser = a.IdUser_1 AND a.AgregaIdUser_2 = $userId) 
                    OR (u.IdUser = a.AgregaIdUser_2 AND a.IdUser_1 = $userId)
                )";

        $result = Database::getConnection()->query($sql);
       

        $result->execute();
        $usuariosNoAgregados = $result->fetchAll(PDO::FETCH_ASSOC);

        return $usuariosNoAgregados;
    }
}
