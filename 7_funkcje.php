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
?>
