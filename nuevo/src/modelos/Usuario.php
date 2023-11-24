<?php

namespace Root\Html\modelos;
class Usuario
{
    private $IdUser;
    private $Email;
    private $Password;
    private $NomUsr;
    private $NumeroTel;
    private $Localidad;
    private $Nombre;
    private $Apellidos;



    public function __construct()
    {
    }

    public function getNombre(){
        return $this->Nombre;
    }

    public function getPassword()
    {
        return $this->Password;
    }


    public function getIdUser()
    {
        return $this->IdUser;
    }

    public function getEmail()
    {
        return $this->Email;
    }

    public function getNumeroTel()
    {
        return $this->NumeroTel;
    }

    public function getLocalidad()
    {
        return $this->Localidad;
    }
    public function getNomUsr()
    {
        return $this->NomUsr;
    }
    public function getApellidos()
    {
        return $this->Apellidos;
    }
    public function __toString()
    {
        return $this->Password;
    }
}
