<?php


$i = 1;
$arr = array();
$tres = 0;
while ($i <= 20) {
	$arr[] = mt_rand(0,5);
	if($arr[$i-1] == 3){$tres++;}
	$i++;
}
echo "Vetor: ";
var_dump ($arr);
echo "\n  contagem de '3': ".$tres;