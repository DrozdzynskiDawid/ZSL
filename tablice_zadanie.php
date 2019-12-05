<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tabica-tabela</title>
    <link rel="stylesheet" href="tablice.css">
  </head>
  <body>
    <?php
    $data = array(
      "name" => "Janusz",
      "surname" => "Nowak",
      "age" => 20,
      "city" => "Poznan",
    );
    echo "<table>";
    echo "<tr><th>Klucz</th><th>Wartosc</th></tr>";
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
      echo "<tr><td>$key</td><td>$value</td></tr>";
    }
    echo "</table>";
    ?>
  </body>
</html>
