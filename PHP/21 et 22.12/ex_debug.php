<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices debug</title>
    <style>
    * {
        font-family: system-ui;
    }
    </style>
</head>
<body>

<h4>Exerice 1</h4>
<?php

function notFound() {
    return 404;
    echo "ERROR: Page non trouvée!<br>";
};

function greetLearner() {
    echo "Salut, stagiaire!<br>";
    echo "Tu as fait de gros progrès en PHP!<br>";
    echo "XOXO, Julia<br>";
    return "<3";
};

$error = notFound(); 
$heart = greetLearner();

echo "J'ai reçu un code $error, mais ce n'est pas trop grave car j'ai aussi reçu un $heart.<br>";

?>

<h4>Exerice 2</h4>
<?php

$string1 = "les crapauds sont gentils";
$string2 = "le père noël existe";
$string3 = "clémentine est une couleur ou un fruit";

function convertToQuestion($string) {
    $string="Tu penses que ".$string." ?<br>";
    return $string;
 }
 echo convertToQuestion($string1);
 echo convertToQuestion($string2);
 echo convertToQuestion($string3);

?>

<h4>Exerice 3</h4>
<?php
$language = "PHP";
$topic = "portée";
$topic2 = "fonctions";

function generateLessonName($language, $concept) {
  static $lesson=0;
  $lesson++;
  return $language . " leçon ".$lesson." : " . $concept."<br>";
}

echo generateLessonName($language, $topic);
echo generateLessonName($language, $topic2);
?> 

</body>
</html>