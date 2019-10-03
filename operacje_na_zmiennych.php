<?php
 //operatory rzutowania
 //bool int float string array object unset
 $text='123abc';
 $text1 =0;
 $text2 =20;
 $x=(int)$text;
echo "$x<br>";

 $x1 = (bool)$text1;
 echo "$x1<br>"; //1==>true,false

 $x2 = (unset)$text2;
 echo "$x2<br>";
 echo gettype($x2),"<br>"; //NULL


 //rozmiar typu integer
 echo PHP_INT_SIZE,"<br>"; //8

 //kontrola typu zmiennych
 $w;
//@ ==> operator ignorowania błędów
 echo @gettype($w),"<br>";

 //zmienne superglobalne
 //$_GET,$_POST,$_COOKIE,$_FILES,$_SESSION,$_SERVER
 echo $_SERVER['SERVER_PORT'],"<br>"; //80
 echo $_SERVER['SERVER_NAME'],"<br>"; //127.0.0.1
 echo $_SERVER['SCRIPT_NAME'],"<br>"; // /operacje_na_zmiennych.php
 echo $_SERVER['SERVER_PROTOCOL'],"<br>";// HTTP/1.1
 echo $_SERVER['DOCUMENT_ROOT'],"<br>";// C:/xampp/htdocs


// pierwszy sposob ==> $localFile = $_SERVER['DOCUMENT_ROOT'].$_SERVER['SCRIPT_NAME'];

$localFile = $_SERVER['DOCUMENT_ROOT'];
$localFile .=$_SERVER['SCRIPT_NAME'];
echo $localFile,"<hr>";
##############################################################################
//stałe
//nazwy stalych z dużych liter!!!
define('NAME','Kowal');
echo NAME,"<br>";


define('surname','Kowalska'); //nie powinno sie tak robic
echo surname,"<br>";

define('NAME1','Nowak',true); //od wersji 8 brak trzeciego argumentu
echo nAME1,"<hr>";

//stałe predefiniowane

echo PHP_VERSION; //7.3.9
echo gettype(PHP_VERSION),"<br>"; //string

if (PHP_VERSION > 7.1) {
  echo "Nowa wersja PHP";
}
else {
  echo "Stara wersja PHP";
}

echo "<br>",PHP_OS,"<br>";//WINNT

echo __LINE__,"<br>"; //67
echo __FILE__,"<br>"; //C:\xampp\htdocs\operacje_na_zmiennych.php
echo __DIR__,"<br>"; //C:\xampp\htdocs





?>
