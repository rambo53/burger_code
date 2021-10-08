<?php
require_once 'aliment.php';
require_once 'burger.php';
require_once 'accompagnement.php';
require_once 'boisson.php';


class Menu{

    private $id;
    private $nom;
    private $prix;
    private Burger $burger;
    private Boisson $boisson;
    private Accompagnement $accompagnement;

    public function __construct($id, $nom, $prix, $burger, $boisson, $accompagnement)
    {
        $this->id=$id;
        $this->nom=$nom;
        $this->prix=$prix;
        $this->burger=$burger;
        $this->boisson=$boisson;
        $this->accompagnement=$accompagnement;
    }

    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
        return $this;
    } 

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

    function getBurger() {
        return $this->burger;
    }

    function setBurger($burger) {
        $this->burger = $burger;
        return $this;
    } 

    function getBoisson() {
        return $this->boisson;
    }

    function setBoisson($boisson) {
        $this->boisson = $boisson;
        return $this;
    }

    function getAccompagnement() {
        return $this->accompagnement;
    }

    function setAccompagnement($accompagnement) {
        $this->accompagnement = $accompagnement;
        return $this;
    }

}

?>
