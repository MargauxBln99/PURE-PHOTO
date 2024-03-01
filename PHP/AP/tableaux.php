
   <?php

    $array1 = array(12, 25, -4, 41, 154, -24, 0, 7);
    $array2 = array(-77, 4, 5, 21, -87, 0, -87);
    $array3 = array();

    print_r($array1);
    echo "<br><br>";
    print_r($array1);
    echo "<br><br>";
    print_r($array1);
    echo "<br><br>";

    /* Question 1 :
    Créez une fonction from scratch qui s'appelle premierElementTableau(). Elle prendra un argument de type array. Elle devra retouner le
    premier élément du tableau. Si l'array est vide, il faudra retourner null.
    Vous afficherez le résultat obtenu en appelant votre fonction sur les 3 tableaux fournis */

    function premierElementTableau($tableau)
    {
        if (!is_array($tableau) || empty($tableau)) // si $tableau n'est pas un array ou s'il est vide
        {
            return null;
        } else {
            return $tableau[0];
        }
    }

    echo ("Question 1 :<br>");
    echo ("Tableau 1 --> " . premierElementTableau($array1) . "<br>");
    echo ("Tableau 2 --> " . premierElementTableau($array2) . "<br>");
    echo ("Tableau 3 --> " . premierElementTableau($array3) . "<br>");
    echo "<br><br>";

    /* Question 2 : 
    Créez une fonction from scratch qui s'appelle dernierElementTableau(). Elle prendra un argument de type array. Elle devra retourner le
    dernier élément du tableau. Si l'array est vide, il faudra retourner null.
    Vous afficherez le résultat obtenu en appelant votre fonction sur les 3 tableaux fournis. */

    function dernierElementTableau($tableau)
    {
        if (!is_array($tableau) || empty($tableau)) // si $tableau n'est pas un array ou s'il est vide
        {
            return null;
        } else {
            return $tableau[count($tableau) - 1];
        }
    }

    echo ("Question 2 :<br>");
    echo ("Tableau 1 --> " . dernierElementTableau($array1) . "<br>");
    echo ("Tableau 2 --> " . dernierElementTableau($array2) . "<br>");
    echo ("Tableau 3 --> " . dernierElementTableau($array3) . "<br>");
    echo "<br><br>";

    /* Question 3 :
    Créez une fonction from scratch qui s'appelle plusGrand(). Elle prendra un argument de type array. Elle devra retourner le plus grand des éléments présents dans l'array.
    Si l'array est vide, il faudra retourner null;
    Vous afficherez le résultat obtenu en appelant votre fonction sur les 3 tableaux fournis. */

    function plusGrand($tableau)
    {
        if (!is_array($tableau) || empty($tableau)) // si $tableau n'est pas un array ou s'il est vide
        {
            return null;
        } else { // sinon on parcourt le tableau
            $max = $tableau[0];
            foreach ($tableau as $valeur) {
                if ($valeur > $max) {
                    $max = $valeur;
                }
            }
            return $max;
        }
    }

    echo ("Question 3 :<br>");
    echo ("Tableau 1 --> " . plusGrand($array1) . "<br>");
    echo ("Tableau 2 --> " . plusGrand($array2) . "<br>");
    echo ("Tableau 3 --> " . plusGrand($array3) . "<br>");
    echo "<br><br>";

    /* Question 4 :
    Créez une fonction from scratch qui s'appelle plusPetit(). Elle prendra un argument de type array. Elle devra retourner le plus petit des éléments présent dans l'array.
    Si l'array est vide, il faudra retourner null
    Vous afficherez le résultat obtenu en appelant votre fonction sur les 3 tableaux fournis. */

    function plusPetit($tableau)
    {
        if (!is_array($tableau) || empty($tableau)) // si $tableau n'est pas un array ou s'il est vide
        {
            return null;
        } else { // sinon on parcourt le tableau
            $min = $tableau[0];
            foreach ($tableau as $valeur) {
                if ($valeur < $min) {
                    $min = $valeur;
                }
            }
            return $min;
        }
    }

    echo ("Question 4 :<br>");
    echo ("Tableau 1 --> " . plusPetit($array1) . "<br>");
    echo ("Tableau 2 --> " . plusPetit($array2) . "<br>");
    echo ("Tableau 3 --> " . plusPetit($array3) . "<br>");
    echo "<br><br>";

    /* Question 5
    Créez une fonction from scratch qui s'appelle lesDeuxPlusPetits(). Elle prendra un argument de type array. Elle devra retourner un tableau contenant les deux plus petits éléments présents dans l'array. Le plus petit élément sera à l’indice 0 de votre tableau de résultat, et le second plus petit sera à l’indice 1.
    Si l'array est vide, il faudra retourner null
    Vous afficherez le résultat obtenu avec print_r en appelant votre fonction sur les 3 tableaux fournis. */

    function lesDeuxPlusPetits($tableau)
    {
        if (!is_array($tableau) || empty($tableau)) // si $tableau n'est pas un array ou s'il est vide
        {
            return null;
        } else { // sinon on parcourt le tableau
            $resultat = [];
            // initialisation avec la 1ere valeur
            $resultat[0] = $tableau[0];
            $resultat[1] = $tableau[0];
            foreach ($tableau as $valeur) {
                // Si la valeur est inférieur à la plus petite des deux valeurs
                if ($valeur < $resultat[0]) {
                    $resultat[1] = $resultat[0]; // Alors l'ancienne plus petite devient la deuxieme plus petite
                    $resultat[0] = $valeur; // Et la plus petite c'est valeur
                } else if ($valeur < $resultat[1]) {
                    $resultat[1] = $valeur; // Si valeur est seulement inférieure à la 2eme plus petite alors la deuxieme plus petite devient valeur
                }
            }
            return $resultat;
        }
    }

    echo ("Question 5 :<br>");
    echo ("Tableau 1 --> ");
    print_r(lesDeuxPlusPetits($array1));
    echo "<br>";
    echo ("Tableau 2 --> ");
    print_r(lesDeuxPlusPetits($array2));
    echo "<br>";
    echo ("Tableau 3 --> ");
    print_r(lesDeuxPlusPetits($array3));
    echo "<br>";
    echo "<br><br>";

    // autre manière de faire 

    function lesDeuxPlusPetitsV2($tableau)
    {
        if (!is_array($tableau) || empty($tableau)) // si $tableau n'est pas un array ou s'il est vide
        {
            return null;
        } else { // on teste maintenant s'il y a au moins 2 éléments dans le tableau
            if (count($tableau) < 2) {
                return null;
            } else { // sinon on parcourt le tableau
                $pluspetit = plusPetit($tableau);

                // maintenant on retire du tableau cette plus petite valeur
                foreach ($tableau as $key => $value) {
                    if ($value == $pluspetit) {
                        unset($tableau[$key]);
                        break;
                    }
                }
                // et on va rechercher la plus petite valeur dans ce tableau "raccourci"
                $pluspetit2 = plusPetit($tableau);
            }

            $resultat = [];
            $resultat[0] = $pluspetit;
            $resultat[1] = $pluspetit2;
            return $resultat;
        }
    }

    echo ("Question 5 V2 :<br>");
    echo ("Tableau 1 --> ");
    print_r(lesDeuxPlusPetitsV2($array1));
    echo "<br>";
    echo ("Tableau 2 --> ");
    print_r(lesDeuxPlusPetitsV2($array2));
    echo "<br>";
    echo ("Tableau 3 --> ");
    print_r(lesDeuxPlusPetitsV2($array3));
    echo "<br>";
    echo "<br><br>";

    /*Question 6
    Créez une fonction from scratch qui s'appelle lesDeuxExtremes(). Elle prendra un argument de type array. Elle devra retourner un tableau contenant à la fois le plus petit élément et le plus grand du tableau. Le plus petit élément sera à l’indice 0 de votre tableau de résultat, et le plus grand sera à l’indice 1.
    Si l'array est vide, il faudra retourner null
    Vous afficherez le résultat obtenu avec print_r en appelant votre fonction sur les 3 tableaux fournis. */

    function lesDeuxExtremes($tableau)
    {
        if (!is_array($tableau) || empty($tableau)) // si $tableau n'est pas un array ou s'il est vide
        {
            return null;
        } else { // sinon on parcourt le tableau
            $resultat = [];
            // initialisation avec la 1ere valeur
            $resultat[0] = $tableau[0];
            $resultat[1] = $tableau[0];
            foreach ($tableau as $valeur) {
                // Si la valeur est inférieur à la plus petite des valeurs alors le min devient valeur
                if ($valeur < $resultat[0]) {
                    $resultat[0] = $valeur;
                } // Sinon si la valeur est supérieur à la plus grande des valeurs
                else if ($valeur > $resultat[1]) {
                    $resultat[1] = $valeur; // le max devient valeur
                }
            }
            return $resultat;
        }
    }

    echo ("Question 6 :<br>");
    echo ("Tableau 1 --> ");
    print_r(lesDeuxExtremes($array1));
    echo "<br>";
    echo ("Tableau 2 --> ");
    print_r(lesDeuxExtremes($array2));
    echo "<br>";
    echo ("Tableau 3 --> ");
    print_r(lesDeuxExtremes($array3));
    echo "<br>";
    echo "<br><br>";

    ?>