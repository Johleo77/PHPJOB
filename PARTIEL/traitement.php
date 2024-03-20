<?php

$developpeur = array() ;


$manager = array(new Manager(500,"RIPAULT", "Alexis", "alexis@manager.net", "0606060606",4000, "DSI"), new Manager(600,"OLIVEIRA", "Romain", "romain@manager.net", "0808080808",3000, "Chef de service")) ;


foreach ($developpeur as $value) {
	echo $value->afficher();
}

echo "<br/><br/><br/>";
foreach ($manager as $value) {
	echo $value->afficher();
}
?>
