<?php 

$angka = 8;
$pembagi = 4;
$i = 1;

while ($pembagi * $i <= $angka) {
	$i++;
	if ($pembagi * $i > $angka) {
		echo $i-1;
		break;
	}
}





?>