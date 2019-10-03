<?php
$text= <<< T
  zsl - Zespol
  szkol
  lacznosci
T;

echo "Przed wywołaniem funkcji nl2br: <br> $text<br><br>";
echo "Po wywołaniu funkcji nl2br: <br>";
echo nl2br($text),'<br>';

$test='JaNuSz';
//zamiana na małe litery
echo strtolower($test);

//zamiana na duże litery
$duzeLitery = strtoupper($test);
echo $duzeLitery;

//zamiana pierwszej litery na dużą

$text= 'anna Tomasz jacek';
echo ucfirst($text),"<hr>"; //Anna Tomasz jacek

//zamiana wszystkich liter pierwszych na duże

echo ucwords($text),"<hr>"; //Anna Tomasz Jacek

####################################################################################

$lorem = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

echo $lorem,"<hr>";


$col = wordwrap($lorem, 40, '<br>');
echo $col,"<hr>";


//czyszczenie zawartości bufora
ob_clean();

//usuwanie białych znaków

$name = 'Anna';
$name1 = '  Anna ';

echo 'Dlugosc zmiennej $name: ',strlen($name),'<br>'; //4
echo 'Dlugosc zmiennej $name1: ',strlen($name1),'<br>'; //7

echo strlen(ltrim($name1)); //5
echo strlen(rtrim($name1)); //6
echo strlen(trim($name1)),"<hr>"; //4

//przeszukiwanie ciagow znakow

$address = 'Poznań, ul.Przełajowa 4, tel. (61) 123-45-67';
$search =strstr($address , 'tel', true);
echo $search, "<br>";

$search =stristr($address , 'Tel');
echo $search, "<br>";

$mail = strstr('zsl@gmail.com','@');
echo $mail;


$mail = strstr('zsl@gmail.com',64); //ASCII
echo $mail,"<br>";


//pozycje
$pos = strpos('abcdefg', 'cde');
echo $pos,'<br>'; //2

$pos = strpos('abcdefg', 'ab');
echo $pos,'<br>'; //0

/*
ZADANIE
Sprawdz czy ciag text2 zostal znaleziony w ciagu text1
*/

$text1 = 'abcdabcd';
$text2 = 'ab';

if (strpos($text1,$text2)===false) {
  echo "Ciąg $text2 nie został znaleziony w ciągu $text1<br>";
}
else
{
    echo "Ciąg $text2 został znaleziony w ciągu $text1<br>";
}

//przetwarzanie ciagow znakow

$replace = str_replace('%name%','Janusz','Mam na imię %name%');
echo $replace;



 ?>
