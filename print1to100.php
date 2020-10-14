<?php
$i = 1;
$m3 = 1;
$m5 = 1;
while($i <= 100){
	
	if(3*$m3 == $i && 5*$m5 != $i){
		echo "Fizz<br>";
		$m3++;
	}
	elseif(3*$m3 != $i && 5*$m5 == $i){
		echo "Buzz<br>";
		$m5++;
	}
	elseif(3*$m3 == $i && 5*$m5 == $i){
		echo "FizzBuzz<br>";
		$m5++;
		$m3++;
	}
	else{
		echo $i ."<br>";
	}
	$i++;
}
