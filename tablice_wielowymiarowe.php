<?php
//tablice wieowymiarowe

$student = array(
  array("Julia","Nowak","40"),
  array("Anna","Kowalska","30"),
  array("Tomasz","Nowak"),
);
for ($i=0; $i < count($student); $i++) {
  for ($j=0; $j < count($student[$i]); $j++) {
    echo $student[$i][$j]." ";

  }
  echo "<br>";
}
  echo "<hr>";
foreach ($student as $value) {
  foreach ($value as $x) {
    echo $x." ";
  }
  echo "<br>";
}
?>
