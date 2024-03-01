<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exerices Conditions PHP</title>
    <style>
        * {
            font-family: system-ui;
        }
    </style>
</head>

<body>

    <h4> IF </h4>
    <?php
    $f = 1;
    $message = "Bonjour l'ami";
    if ($f) {
        $message .= "e";
    }
    echo $message;
    ?>

    <h4> IF ELSE </h4>
    <?php
    $f = 1;
    $message = "Bonjour";
    if ($f) {
        $message .= " Madame";
    } else {
        $message .= " Monsieur";
    }
    echo $message;
    ?>

    <h4> ELSE IF </h4>
    <?php
    $sexe = "F";
    $message = "Bonjour";
    if ($sexe == "M") {
        $message .= " Monsieur";
    } elseif ($sexe == "F") {
        $message .= " Madame";
    } else {
        $message;
    }
    echo $message;
    ?>

    <h4> OPERATEUR TERNAIRE </h4>
    Expression ? = valeur si vrai : valeur si faux
    <br>
    <?php /* Bonne pratique */
    $sexe = "F";
    $message = "Bonjour";
    $message .= ($sexe) ? " Madame" : " Monsieur";
    echo $message;
    ?>
    <br>
    <?php
    $f = 0;
    $message = "Bonjour";
    $message .= ($f) ? " Madame" : " Monsieur";
    echo $message;
    ?>

    <h4> SWITCH </h4>
    <?php
    $sexe = "F";
    $message = "Bonjour";
    switch ($sexe) {
        case "M":
            $message .= " Monsieur";
            break;
        case "F":
            $message .= " Madame";
            break;
        default:
            $message .= ",";
    }
    echo $message;
    ?>

    <h4> MATCH </h4>
    <?php
    $sexe = "M";
    $message = "Bonjour";
    $message .= match ($sexe) {
        "m", "M" => " Monsieur",
        "f", "F" => " Madame",
        default => ","
    };
    echo $message;
    ?>

    <h4> WHILE </h4>
    <?php
    $n = 1;
    while ($n <= 50) {
        echo ($n * 2) . " ";
        $n++;
    };
    ?>

    <h4> DO WHILE </h4>
    <?php
    $n = 1;
    do {
        echo ($n * 2) . " ";
        $n++;
    } while ($n <= 50);
    ?>

    <h4> FOR </h4>
    <?php
    for ($n = 1; $n <= 50; $n++) {
        echo ($n * 2) . " ";
    }
    ?>
    <?php
    $phrase = "bla bla bla";
    for ($n = 0, $L = strlen($phrase); $n < $L; $n++) {
        echo $phrase[$n];
    }
    ?>

    <h4> FOREACH </h4>
    <?php
    $tab = ["riri", "fifi", "loulou"];
    for ($n = 0; $n < 3; $n++) {
        echo $tab[$n];
    }
    ?>
    <?php /* Bonne pratique */
    foreach ($tab as $nom) {
        echo $nom;
    }
    ?>
    <?php
    $T = ["poule" => 4, "chat" => 2];
    foreach ($T as $animal => $nb) {
        $nb = $nb * 2;
        echo $animal . "=" . $nb . "<br>";
    }
    ?>

    <h4> BREAK CONTINUE GOTO </h4>
    <?php
    for ($i = 0; $i < 11; $i++) {
        if ($i == 5) {
            continue;
        }
        echo $i;
    }
    ?>

</body>

</html>