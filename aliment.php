<?php

abstract class Aliment{

    private $id;
    private $nom;
    private $prix;

    public function __construct($id,$nom,$prix){
        $this->id=$id;
        $this->nom=$nom;
        $this->prix=$prix;
    }

    ///////////////////////////////////////////////////////////////
    
    function getNom() {
        return $this->nom;
    }

    function setNom($nom) {
        $this->nom = $nom;
        return $this;
    }   

    function getPrix() {
        return $this->prix;
    }

    function setPrix($prix) {
        $this->prix = $prix;
        return $this;
    } 

    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
        return $this;
    } 
   
}

?>
