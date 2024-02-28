<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>

<?php

$months  = array (
	"janvier" => "1",
	"fevrier" => "2",
	"mars" => "3",
	"avril" => "4",
	"mai" => "5",
	"juin" => "6",
	"juillet" => "7",
	"aout" => "8",
	"septembre" => "9",
	"octobre" => "10",
	"novembre" => "11",
	"décembre" => "12",
);

echo '<table border="2">';
foreach ($months as $key => $value) {
	echo '<tr>';
	echo '<td>' .$key. '</td>' ;
	echo '<td>' .$value. '</td>';
	echo '</tr>';

}
 echo '</table>';


 ?>

 </body>
</html>