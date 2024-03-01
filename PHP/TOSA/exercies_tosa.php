<?php

// Complétez le code de la fonction extraction qui reçoit en argument deux paramètres $chaine et $word. La fonction doit couper la chaîne $chaine au nombre de mots $word. Cependant, si $word est plus important que le nombre de mot dans $chaine, il faudra simplement retourner $chaine.
// Le paramètre $chaine sera uniquement composé de caractères alphanumériques sans ponctuation.

function extraction($chaine, $word = 50)
{
    if (str_word_count($chaine) < $word) return $chaine;
    else {
        $c = str_word_count($chaine, 1);
        for ($i = 0; $i < $word; $i++) {
            echo $c[$i] . " ";
        }
    }
}
echo extraction("hello world!", 1) . '<br>'; // la fonction extraction devra retourner : "hello"
echo extraction("Lorem ipsum dolor sit amet, consectetur adipiscing elit", 5) . '<br>'; // la fonction extraction devra retourner : "Lorem ipsum dolor sit amet,"

?>

<?php

// Compléter le code de la classe Pizza afin d'y ajouter une méthode PriceFormat. Celle-ci devra afficher le prix au format suivant : 
// Deux chiffres après la virgule
// Le séparateur des décimales devra être une virgule
// Le séparateur des milliers doit être un espace
// Exemple : "455 124 515,00"

class Pizza
{
    public $price;
    public function priceFormat()
    {
        echo number_format($this->price, 2, ",", ",");
    }
}

$pizza = new Pizza();
$pizza->price = 124515;
$pizza->priceFormat();

?>

<?php

// Rédigez le code de la fonction getFirstname qui reçoit un tableau en argument $tab. La fonction devra retourner un nouveau tableau contenant uniquement les valeurs des clefs first_name du tableau $tab.

function getFirstname($tab)
{
    $t = array_column($tab, "first_name");
    return $t;
}

// avec le foreach
// foreach ($tab as $v) {
//  $t[] = $v["first_name"];
// } return $t; }

$records = array(
    array(
        'id' => 2135,
        'first_name' => 'John',
        'last_name' => 'Doe',
    ), array(
        'id' => 3245,
        'first_name' => 'Sally',
        'last_name' => 'Smith',
    ), array(
        'id' => 5342,
        'first_name' => 'Jane',
        'last_name' => 'Jones',
    ), array(
        'id' => 5623,
        'first_name' => 'Peter',
        'last_name' => 'Doe',
    )
);

getFirstname($records); // le tableau de retour devra se présenter comme ceci : ['John','Sally', 'Jane','Peter']

?>

<?php
