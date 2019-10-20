<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form  method="post">
      <input type="text" name="imie"><br>
      <input type="number" name="wiek">
      <input type="submit" name="" value="ok">

    </form>
    <?php
    if (!empty($_POST['imie'])) {
      $imie = $_POST['imie'];
      $dlugosc = strlen($imie);
      // echo "Imie: $imie,dlugosc:",strlen($imie);
      echo "Imie: $imie,dlugosc:$dlugosc<br>";
      $imieN = ucfirst(strtolower(trim($imie)));
      //$imie1 = substr($imieN,0,10);
      echo $imieN;
    }
    ?>
  </body>
</html>
