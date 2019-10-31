<?php
  function value($a):string{
    if ($a < 0) {
      return 'ujemna';
    }elseif ($a == 0) {
      return 'zero';
    }else {
      return 'dodatnia';
    }
  }
  echo value(5),'<br>';
  echo gettype(value(5));
  function getValue():int{  //parsuje na 10
    return 10.55;
  }
    echo getValue(),'<br><br>';
  //zasieg zmiennych
  $x=10;
  function show(){
    echo "wartosc zmiennej \$x wynosi : $GLOBALS[x]";
    //echo $GLOBALS['x'];
  }
  show();

  $y=10;
  function show1(){
    global $y;
    echo "wartosc zmiennej \$y wynosi : $y";
    //echo $GLOBALS['x'];
  }
  show1();
  echo "<br>";
  echo "<hr>";


  //zmienne statyczne
  function Sum(){
    $liczba = 10;
    echo "\$liczba wynosi: $liczba";
    $liczba += 10;
  }

  Sum(); //10
  echo "<br>";
  Sum(); //10
  echo "<br>";
  echo "<hr>";


  function Sum1(){
    static $liczba = 10;
    echo "\$liczba wynosi: $liczba";
    $liczba += 10;
  }
  Sum1(); //10
  echo "<br>";
  Sum1(); //20
  echo "<br>";
  Sum1(); //30
  echo "<br>";

  ############################################
  //argumenty

  function Add($x, $y = 1){
    return $x + $y;
  }
  $z=20;
  echo Add(5); //6\
  echo "<br>";
  echo Add(5,2); //7
  echo "<br>";
  echo Add(5,$z); //25
  echo "<br>";

  //argumenty i typy danych

  function multi(float $x,int $y){
    return $x*$y;
  }

  echo multi(3,4); //12
  echo "<br>";
  echo multi(2.5,4); //10
  echo "<br>";
  echo multi(4,2.5); //8
  echo "<br>";
?>
