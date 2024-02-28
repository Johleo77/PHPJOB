<?php

	if (!empty($_POST['lname'])) { //Champ du Nom
		if(!ctype_alpha($_POST['lname'])){
			echo "Erreur de Nom" . "<br>";
		}

		else {
			echo "Nom conforme" . "<br>";
		}
	}

	if (!empty($_POST['fname'])) { //Champ du Prénom
		if(!ctype_alpha($_POST['fname'])){
			echo "Erreur de Prénom" . "<br>";
		}

		else {
			echo "Prénom conforme" . "<br>";
		}
	}

	if (!empty($_POST['age'])) { // Champ de l'Age
		if(!ctype_digit($_POST['age'])){
			echo "Erreur d'Age" . "<br>";
		}

		else {
			echo "Age conforme" . "<br>";
		}
	}
		

	if (file_exists($_POST['cv'])){ // Verification  du CV
		echo "Le fichier n'est pas présent" . "<br>";
	}

	else {
		echo "Le fichier est présent" . "<br>";
	}
	if (empty($_POST['classe'])) { // Champs de la Classe
		echo "Erreur de classe" . "<br>";
	}
	else {
		echo "Classe conforme" . "<br>";
	}		



	$df= fopen('/home/a-derchain/Bureau/liste.pdf','w');  //Met les informations dans un pdf
	fwrite($df,$_POST['lname'].", ".$_POST['fname'].", ".$_POST['age'].", "
		.$_POST['rue'].", ".$_POST['cp'].", ".$_POST['ville'].", ".$_POST['mail'].", ".$_POST['num-tel']);
	fclose($df);


?>
