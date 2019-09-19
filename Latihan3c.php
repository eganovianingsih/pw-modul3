<?php 

function pangkat ($angka , $pangkat){
	$b=$angka;
	for ($i=0;$i<($pangkat-1); $i++){
		$b = $b * $angka;

	}return $b;
}
echo "5 pangkat 4 = ". pangkat(5,4);
 ?>
