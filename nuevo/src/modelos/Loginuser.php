<?php


namespace Root\Html\modelos;

use Root\Html\config\Database;
use \PDO;

class Loginuser
{
    public function login($user, $pass)
    {


        $usr = Database::getConnection()->prepare("SELECT * FROM User WHERE NomUsr=:user AND Password=:pass ");
        $usr->bindParam(':user', $user, PDO::PARAM_STR);
        $usr->bindParam(':pass', $pass,  PDO::PARAM_STR);
        $usr->execute();

        $result = $usr->fetchAll(PDO::FETCH_ASSOC);

        if (count($result) >= 1) {
            $_SESSION["usuario"] =  $result;
            return true;
        }

        return false;
        
    }
}
