<?php
//tablica indeksowana numerycznie

$colors = array("red","green","blue","magenta");
    //echo $colors[1];

for ($i=0; $i < count($colors); $i++) {
  echo $colors[$i];
}
echo "<hr>";
$colors[2]="cyan";




function Show($colors){
  for ($i=0; $i < count($colors); $i++) {
    echo $colors[$i];
  }
}
Show($colors);
echo "<hr>";

function Show1($colors){
  echo "<ul>";
  for ($i=0; $i < count($colors); $i++) {
    echo "<li>".$colors[$i]."</li>";
  }
  echo "</ul>";
}
Show1($colors);

//tablica asocjacyjna

$data = array(
  "name" => "Janusz",
  "surname" => "Nowak",
  "age" => 20,
  "city" => "Poznan",
);

echo "Imie: $data[name]"; //nie dajemy apostrofów
echo "<hr>";


foreach ($data as $value) {
  echo "$value ";
}
echo "<hr>";
foreach ($data as $key => $value) {
  switch ($key) {
    case 'name':
      $key="Imie";
      break;
    case 'surname':
      $key="Nazwisko";
      break;
    case 'age':
      $key="Wiek";
      break;
    case 'city':
      $key="Miasto";
      break;
  }
  echo "$key: $value<br>";
}
echo "<hr>";
 ?>
