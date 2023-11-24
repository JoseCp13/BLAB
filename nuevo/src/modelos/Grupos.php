<?php

namespace Root\Html\modelos;

class Grupos{
    private int $idComunidad;

    private string $Categoria;

    private string $NombreCom;

    private int $Members;


    public function getIdComunidad(){
        return $this->idComunidad;
    }

    public function getCategoria(){
        return $this->Categoria;
    }

    public function getNombreCom(){
        return $this->NombreCom;
    }

    public function getMembers(){
        return $this->Members;
    }

    
}