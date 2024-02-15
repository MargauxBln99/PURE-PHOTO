<?php

/* Question 1 :

Modifiez la fonction HelloWorld donnée ci-dessous de telle sorte qu'elle retourne exactement 
la valeur "Hello World!"

<?php
    function helloWorld() {
        return "Texte à afficher";
    }
?>

Affichez le résultat avec un echo ou la balise echo-tag <?=?> */

function helloWorld()
{
    return "Hello World!";
}

echo helloWorld();


/* Question 2 :

Créez une fonction from scratch qui s'appelle quiEstLeMeilleurProf()
Elle doit retourner "Mon super formateur de PHP"
Affichez le résultat avec un echo ou la balise echo-tag */

function quiEstLeMeilleurProf()
{
    return "Mon super formateur de PHP";
}

echo quiEstLeMeilleurProf();

/* Question 3 :

Créez une fonction from scratch qui s'appelle jeRetourneMonArgument()
Cette fonction prendra un argument aura comme comportement de retourner cet argument tel quel

Exemple :

    argument = "abc" ==> return abc
    argument = 123 ==> return 123

Exécutez cette fonction avec différents arguments, et affichez le résultat avec un écho ou la balise
echo-tag */

function jeRetourneMonArgument($argument)
{
    return $argument;
}

echo jeRetourneMonArgument("bonjour");
echo jeRetourneMonArgument("hello");
echo jeRetourneMonArgument("hola");

/* Question 4 : 

Créez une fonction from scratch qui s'appelle concatenation()
Elle prendra deux arguments de type string

Exemple : 

    argument 1 = "Kingsley"
    argument 2 = "Coman"
    résultat = "KingsleyComan"

Affichez le résultat avec un echo ou la balise echo-tag */

function concatenation($string1, $string2)
{
    return $string1 . $string2;
}

echo concatenation("Kingsley", "Coman");

/* Question 5 : 

Créez une fonction from scratch qui s'appelle concatenationAvecEspace()
Elle prendra deux arguments de type string
Elle devra retourner la concatenation des deux avec un espace entre les 2

Exemple : 

    argument 1 = "Manuel"
    argument 2 = "Neuer"
    résultat = "Manuel Neuer"

Affichez le résultat avec un echo ou la balise echo-tag */

function concatenationAvecEspace($string1, $string2)
{
    return $string1 . " " . $string2;
}

echo concatenationAvecEspace("Manuel", "Neuer");

/* Question 6 : 

Créez une fonction PHP getFirstWord() prenant en argument une chaine de caractères et 
retournant le premier mot de cette chaîne

Exemples : 

Sur la chaine "Ceci est une phrase", la fonction getFirstWord doit retourner "Ceci"
Sur la chaine "Test. Cette phrase est un test", la fonction getFirstWord doit retourner "Test"

Exécutez cette fonction sur les exemples ci-dessus et affichez le résultat avec un echo ou la balise
echo-tag */

function getFirstWord($string)
{
    $i = 0;
    while ($i < strlen($string) && ($string[$i] != " " && $string[$i] != "." && $string[$i] != ",")) {
        $i++;
    }
    return substr($string, 0, $i);
}

echo getFirstWord("Ceci est une phrase");

/* Question 7 : 

Créez une fonction PHP getLastWord() prenant en argument une chaine de caractères et retournant le
dernier mot de cette chaine

Exemples : 

Sur la chaine "Ceci est une phrase", la fonction getLastWord doit retourner "phrase"
Sur la chaine "Test. Cette phrase est un test", la fonction getLastWord doit retourner "test"
Sur la chaine "Attention", la fonction getLastWord doit retourner "Attention"

Exécutez cette fonction sur les exemples ci-dessus et affichez le résultat avec un echo ou la balise
echo-tag */

function getLastWord($string)
{
    $i = 0;
    $start = 0;
    while ($i < strlen($string)) {
        if ($string[$i] == " " || $string[$i] == "." || $string[$i] == ",") {
            $start = $i;
        }
        $i++;
    }
    return substr($string, $start);
}

echo getLastWord("Ceci est une phrase");
