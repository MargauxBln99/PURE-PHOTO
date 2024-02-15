<?php

class Product { // commence toujours par une maj

    private $title; // propriété

    function __construct($title) { // constructeur
        $this->title = $title;
    }

    function getTitle() // méthode getter
    {
        return "Titre du produit : " .$this->title;
    }
}

$p = new Product("Harry Potter"); // paramètre direct à l'instanciation
echo $p->getTitle();

?>