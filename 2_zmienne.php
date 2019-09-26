<?php
	//$potega = 2**10;
	echo $potega,'<br>';
	//echo PHP_VERSION;,'<br>';
	
//zapis systemów liczbowych

	$hex = 0xA; //10
	$oct = 021;	//2*8^1+1*8^0
	//$bin = 0b1010;	//10
	echo $hex;
	echo $oct;
	echo $bin;
//operatory bitowe
	//and& , or | , not ~, xor ^, <<,>>
	//$bin = 0b1010;
	//$bin = $bin >> 1; //101(2) =>5
	//$bin = $bin << 2; //10100(2) =>20
	//echo $bin;
	
//identycznosc
	
	$a = 1;
	$b = 1.0;
	if ($a === $b)
	{
		echo 'identyczne<br>';
	}
	else
	{
		echo 'rozne<br>';
	}
	echo gettype($a),'<br>'; //integer
	echo gettype($b),'<br>'; //double
	
	
/*	
	$x=1;
	$y=1;
	$result = $x <=> $y;	//nie sprawdza typu, równe wartości 0,lewa wieksza 1,prawa wieksza -1
	echo $result;*/
	
$x=2;
echo $x++; // 2
echo ++$x; // 4
echo $x; // 4
$y=$x++; 
echo $y; // 4
$y=++$x; 
echo &y; // 6
echo ++$y; // 7
?>