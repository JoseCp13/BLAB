<?php

namespace Root\Html\modelos;
use Root\Html\config\Database;
use \PDO;

class UsuarioAgregado{
    public function agregados($userid){
        
        $result= Database::getConnection()->query("SELECT * FROM User RIGHT JOIN Agrega ON User.IdUser = Agrega.AgregaIdUser_2 WHERE Agrega.IdUser_1 = $userid AND Agrega.AgregaIdUser_2 != $userid;");

        $usuarioagregado = $result->fetchAll(PDO::FETCH_ASSOC);

        return $usuarioagregado;

    }
}