<?php

namespace Root\Html\modelos;

use Root\Html\config\Database;

class EliminarGrupo
{
    public function EliminarG($userid, $grupoid)
    {
        if (!empty($grupoid)) {

            $stmt = Database::getConnection()->prepare("DELETE FROM Esta WHERE Esta.IdUser = ? AND Esta.IdComunidad = ?");
            $stmt->execute([$userid, $grupoid]);


            $stmtUpdate = Database::getConnection()->prepare("UPDATE Comunidad SET Members = Members - 1");
            $stmtUpdate->execute();
        } else {

            echo "Error: El ID de grupo no es válido";
        }
    }
}
