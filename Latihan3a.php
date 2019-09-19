
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		.ganti_style{
			font-size: 28px;
			color: #1A0547;
			border:1px;
			font-family: arial;
			font-style: italic;

		}
	</style>
	
</head>
<body>
<?php

$tulisan = "Hello World! Here I Come!";
$kelas = "ganti_style";

function ganti_style($tulisan,$kelas){
	echo "<div class=$kelas>$tulisan</div>";
}
echo ganti_style($tulisan,$kelas);

?>


</body>
</html>