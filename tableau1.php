<!-- Écrire un programme qui lit ce fichier pour construire une page web contenant une liste de liens hypertextes : tableau-06.php -->
<!DOCTYPE HTML>
<HTML>
<HEAD>
      <TITLE>Utilisation des tableaux-10</TITLE>  
</HEAD>
 <BODY>
 	<UL>
          <?php
          	$tab=file("tableau-10.txt");
          	for ($i=0 ; $i < count($tab) ; $i++) {
            	echo "$tab[$i]"."<br />";
          	}
          ?>
    </UL>
</BODY>
</HTML>