<?php
$i = 1;
while ($i <= 20) {
    echo mt_rand(100,200);
	if($i != 20){echo ", ";}
	else{echo".";}
	$i++;
}