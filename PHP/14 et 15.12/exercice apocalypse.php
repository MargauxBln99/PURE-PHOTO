<?php
$now = "nuit";
$zombies = "50";
$munitions = 0;
$arme = "lance-flammes";
$score = 0;
$danger = false;
?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>To-Do List apocalypse</title>
</head>

<body>
	<h1>To-Do List de l'apocalypse</h1>

	<?php
	//ifs imbriqués

	if ($now === "nuit") {
		echo "Faire un feu";
		if ($danger)
			echo "<br>Monter la garde";
	}

	//if else

	if ($zombies > 0) {
		if ($arme) {
			$score += $zombies;
			$zombies = 0;
			echo "<p><s>Éliminer les zombies</s></p>";
		} else {
			echo "<p>Fuir</p>";
		}
	}

	//if elseif else + syntaxe alternative

	if ($zombies > 0) {
		if ($munitions >= $zombies) :
			$munitions -= $zombies;
			$score += $zombies;
			$zombies = 0;
			echo "<p>stock de munitions = $munitions</p>";
			echo "<p><s>Exploser la cervelle des zombies</s></p>";
		elseif ($arme == "hache") :
			$score += $zombies;
			$zombies = 0;
			echo "<p><s>Décapiter les zombies</s></p>";
		elseif ($arme == "lance-flamme") :
			$score += $zombies;
			$zombies = 0;
			echo "<p><s>Réduire les zombies en cendre</s></p>";
		else :
			echo "<p>Fuir</p>";
		endif;
	}

	//opérateur ternaire

	?>
	<p> Niveau: <?= ($score > 50) ? "survivant de l'apocalype" : "newbie" ?></p>
	<p> Munitions: <?= ($munitions) ?: "Trouver des munitions" ?></p>
	<p> Compagnon: <?= ($compagnon) ?? "Seul.e au monde" ?></p>
	<p> Objectif :

		<?php

		//switch

		switch ($danger) {
			case "zombies":
				echo "combattre les zombies";
				break;
			case "épidémie":
				echo "trouver un vaccin et ";
			case "catastrophe naturelle":
			case "émeutes":
				echo "vivre en autonomie";
				break;
			default:
				echo "Survivre";
		} ?>
	</p>
	<?php

	//match (penser au ; final)
	$risque = match ($danger) {
		"catastrophe naturelle" => "manque de ressources",
		"zombies", "épidémie" => "contamination",
		"émeutes" => "violence",
		default => "accident"
	};
	?>
	<p> Risque : <?= $risque ?></p>
</body>

</html>