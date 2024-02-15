<?php

class Form {

    public static function createInput($type,$name,$id='',$val='') {
        echo '<input type="'.$type.'" name="'.$name;
        if($type == "checkbox") echo'[]';
        echo '"';
        if(!empty($id)) echo' id="'.$id.'"';
        echo ' value="'.$val.'">';
    }

    public static function createTextarea($name,$id='') {
        echo '<textarea name="'.$name.'"></textarea>';
    }

    public static function createSelect($tab,$name) {
        echo '<select name="'.$name.'">';
        foreach($tab as $k => $v){
            echo '<option value="'.$v.'">'.$k.'</option>';
        }
        echo '</select>';
    }

    private static function createRadioAndCheck($type,$tab,$name) {
        foreach($tab as $k => $v){
            $id = $name.'_'.$k;
            self::createInput($type,$name,$id,$v);
            self::createLabel($k,$id);
        }
    }

    public static function createRadioBtnList($tab,$name) {
        self::createRadioAndCheck("radio",$tab,$name);
    }

    public static function createCheckBoxList($tab,$name) {
        self::createRadioAndCheck("checkbox",$tab,$name);
    }

    public static function createLabel($text,$id='') {
        echo '<label';
        if(!empty($id)) echo ' for="'.$id.'"';
        echo '>'.$text.'</label>';
    }

    public static function createSubmit($text="Envoyer",$name='') {
        self::createInput("submit",$name,$id='',$text);
    }

}

if(!empty($_POST)) print_r($_POST);

echo'<form method="post" action="">';
    $options_sexe = [
        "Homme" => 1,
        "Femme" => 2
    ];
    $options_competences = [
        "Php" => "php",
        "HTML" => "html",
        "Python" => "python",
        "CSS" => "css"
    ];
    $options_pays = [
        "France" => "fr",
        "Allemagne" => "de",
        "Angleterre" => "en",
        "Italie" => "it",
        "Belgique" => "be"
    ];
    Form::createLabel("Votre sexe:"); echo'<br>';
    Form::createRadioBtnList($options_sexe,"sexe"); echo'<br>';

    Form::createLabel("Vos compétences:"); echo'<br>';
    Form::createCheckBoxList($options_competences,"competences"); echo'<br>';

    Form::createLabel("Votre pays de résidence:"); echo'<br>';
    Form::createSelect($options_pays,"pays","pays"); echo'<br>';

    Form::createLabel("Votre nom:","nom"); echo'<br>';
    Form::createInput("text","nom","nom"); echo'<br>';

    Form::createLabel("Votre email:","email"); echo'<br>';
    Form::createInput("email","email","email"); echo'<br>';

    Form::createLabel("Mot de passe:","mdp"); echo'<br>';
    Form::createInput("password","mdp","mdp"); echo'<br>';

    Form::createLabel("Biographie:","biographie"); echo'<br>';
    Form::createTextarea("biographie","biographie"); echo'<br>';

    Form::createSubmit();
    
echo'</form>';
?>