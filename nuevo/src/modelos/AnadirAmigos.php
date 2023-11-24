<?php

namespace Root\Html\modelos;

use Root\Html\config\Database;
use \PDO;

class AnadirAmigos
{

    public function anadir($usuarioac, $usuarionu)
    {
        $db = Database::getConnection();


        $sql = "INSERT INTO Agrega (IdUser_1, AgregaIdUser_2) VALUES (:idUserActual, :idUserAgregado) ";

        $resultado = $db->prepare($sql);
        $resultado->bindParam(':idUserActual', $usuarioac, PDO::PARAM_INT);
        $resultado->bindParam(':idUserAgregado', $usuarionu, PDO::PARAM_INT);
        $resultado->execute();

        $db = null;

        return $usuarioac;
    }
}
