<?php

$GLOBALS['varGlobal'] = 18;

function tesVar()
{
	$varLokal = 1; 
	echo "<p> test variabel didalam function.<p>";
	echo "variabel global : ".$GLOBALS['varGlobal'];
	echo "<br>";
	echo "variabel Lokal: $varLokal";
	echo "<br>";

}

tesVar();
$varLokal = 1; 
	echo "<p> test variabel didalam function.<p>";
	echo "variabel global : $varGlobal";
	echo "<br>";
	echo "variabel lokal : $varLokal";
	echo "<br>";
	?>