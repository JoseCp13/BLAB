<?php

namespace Root\Html\modelos;

use Root\Html\config\Database;
use \PDO;

class RegisterUser
{
    public function registrado()
    {
        $db = Database::getConnection();

        $user = $_POST['user'];
        $pass = $_POST['contra'];
        $email = $_POST['email'];
        $tel = $_POST['phone'];
        $loca = $_POST['local'];
        $nom = $_POST['name'];
        $ape = $_POST['apelli'];


        $usr = $db->prepare("INSERT INTO User(Email, Password, NomUsr, NumeroTel, Localidad, Nombre, Apellidos)
VALUES(:email, :pass, :user ,:tel,:loca,:nom,:ape);");

        $usr->bindParam(':user', $user, PDO::PARAM_STR);
        $usr->bindParam(':pass', $pass, PDO::PARAM_STR);
        $usr->bindParam(':email', $email, PDO::PARAM_STR);
        $usr->bindParam(':tel', $tel, PDO::PARAM_INT);
        $usr->bindParam(':loca', $loca, PDO::PARAM_STR);
        $usr->bindParam(':nom', $nom, PDO::PARAM_STR);
        $usr->bindParam(':ape', $ape, PDO::PARAM_STR);

        $usr->execute();

        $result = $usr->fetchObject("Root\Html\modelos\Usuario");

        $db = null;

        return $result;
    }
}
