<?php

namespace Root\Html\modelos;
use Root\Html\config\Database;
use \PDO;

class GrupoAgregado{
    public function grupog($userid){
        
        
        $result= Database::getConnection()->query("SELECT Comunidad.IdComunidad, Categoria, NombreCom, Members FROM Comunidad RIGHT JOIN Esta ON Comunidad.IdComunidad = Esta.IdComunidad INNER JOIN User ON User.IdUser = Esta.IdUser WHERE Esta.IdUser = $userid; ");

        $grupoanadido = $result->fetchAll(PDO::FETCH_ASSOC);

        return $grupoanadido;
    }
}