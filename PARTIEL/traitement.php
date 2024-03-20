<?php

$developpeur = array(new Developpeur(550,"Le Flock",
"Louis-Marie", "lmleflock@test.net","0606060606",2500,
"Java"),
new Developpeur(650,"Poirie", "Ethan", "ach@test.net",
"0707070707",2750, "C++")) ;


$manager = array(new Manager(500,"RIPAULT", "Alexis", "alexis@manager.net", "0606060606",4000, "DSI"), new Manager(600,"OLIVEIRA", "Romain", "romain@manager.net", "0808080808",3000, "Chef de service")) ;


foreach ($developpeur as $value) {
	echo $value->afficher();
}

echo "<br/><br/><br/>";
foreach ($manager as $value) {
	echo $value->afficher();
}
?>
