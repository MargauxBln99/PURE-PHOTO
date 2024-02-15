<?php 

class Perso {
    private $nom;
    private $sante=100;
    private $armure;
    private $pts_attaque;
    private $arme = "mains";
    private $armes = [ // ensemble des armes
        "mains" => 1,
        "couteau" => 5 ];
    private $potions = [
        "sante" => 1,
        "furie" => 1];
    private $nb_attaques_furie = 0;

    function __construct($nom, $armure = 100) {
        $this->nom = $nom;
        $this->armure = $armure;
    }

    function getNom()
    {
        return $this->nom;
    }

    function getArmure() 
    {
        return $this->armure;
    }
    function setArmure($armure)
    {
        $this->armure = $armure;
    }

    function getSante()
    {
        return $this->sante;
    }
    function setSante($sante) 
    {
        $this->sante = $sante;
    }

    function getPtsAttaque()
    {
        return $this->pts_attaque;
    }
    function setPtsAttaque($pts_attaque)
    {
        $this->pts_attaque = $pts_attaque;
    }
} 

$p new Perso("Arthur", "");

?>

