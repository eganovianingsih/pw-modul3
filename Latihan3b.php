<?php 

echo "Perbedaan Fungsi Isset() Dan Empty()";
echo "<br>";
echo "1. Fungsi Isset";
echo "<br>";
echo "isset() digunakan untuk menyatakan variabel sudah diset atau tidak. Jika variabel sudah diset makan variavel akan mengembalikan nilai true, sebaliknya akan bernilai false";
echo "<br>";
echo "2. Fungsi Empty";
echo "<br>";
echo "empty(), digunakan untuk memerikasa apakah variabel form tidak dikirim atau tidak berisi data alias kosong. berbeda denagn isset(), yang mengembalikan nilai false pada variabel yang di-unset, empty() akan mengembalikan nilai true.";
echo "<br>";
echo "<br>";

echo "contoh Isset";
echo "<br>";

$var=0;
var_dump(Isset($var));
// hasilnya akan true
echo "<br>";

$var=null;
var_dump(Isset($var));
// hasilnya akan false karena isinya Null
echo "<br>";

$var=false;
var_dump(Isset($var));
// hasilnya akan true
echo "<br>";
echo "<br>";


echo "contoh Empty";
echo "<br>";

$var=0;
var_dump(Empty($var));
// Hasilnya akan true karena 0 dianggap kosong
echo "<br>";

$var=null;
var_dump(Empty($var));
// hasilnya akan true karena isinya NULL
echo "<br>";

$var=false;
var_dump(Empty($var));
// hasilnya akan true karena bool false dianggap kosong



 ?>