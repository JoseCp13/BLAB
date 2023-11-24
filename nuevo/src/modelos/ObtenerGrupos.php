<?php


namespace Root\Html\modelos;
use Root\Html\config\Database;
use \PDO;


class ObtenerGrupos{

    public function obtenerG(){

        $userId = $_SESSION['usuario'][0]['IdUser'];

        $grup = Database::getConnection()->prepare("SELECT Comunidad.*
        FROM Comunidad
        LEFT JOIN Esta ON Comunidad.IdComunidad = Esta.IdComunidad AND Esta.IdUser = :usuario
        WHERE Esta.IdUser IS NULL;");
        $grup->bindParam(':usuario', $userId, PDO::PARAM_INT);
        $grup->execute();

        $result = $grup->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
}