<!DOCTYPE HTML>
<HTML>
<HEAD>
      <TITLE>Utilisation des tableaux-1</TITLE>
</HEAD>
 <BODY>
 	<UL>
          <?php
          	$liens=file("tableau-1332.txt");

          	for ($j=0;$j<count($liens);$j++) {
            	echo "<LI><A HREF=\"".$liens[$j]."\">".$liens[$j]."</A>\n";
          	}
          ?>
    </UL>
</BODY>
</HTML>