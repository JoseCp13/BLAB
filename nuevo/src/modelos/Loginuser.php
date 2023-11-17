<?php


namespace Root\Html\modelos;

use Root\Html\config\Database;
use \PDO;

class Loginuser
{
    public function login()
    {   
        $db = Database::getConnection();

        $user = $_POST['user'];
        $pass = $_POST['contra'];

        $usr = $db->prepare("SELECT * FROM User WHERE NomUsr=:user AND Password=:pass ");
        $usr->bindParam(':user', $user, PDO::PARAM_STR);
        $usr->bindParam(':pass' , $pass,  PDO::PARAM_STR);
        $usr->execute();

        $result = $usr->fetchObject("Root\Html\modelos\Usuario");



        $db = null;
        
        return $result;

    }
}
