
<?php
function faktorial ($a){
	$b=1;
	for ($i = 1; $i<= $a; $a--){
	$b = $b * $a;
	}
return $b;
}
echo "Faktorial dari 5 = ". faktorial(5);



?>