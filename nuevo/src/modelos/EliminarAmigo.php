<?php

namespace Root\Html\modelos;
use Root\Html\config\Database;

class EliminarAmigo{
    public function EliminarA($userida, $useridnu){
        Database::getConnection()->query("DELETE FROM Agrega WHERE IdUser_1 = $userida AND AgregaIdUser_2 = $useridnu");
    }
}