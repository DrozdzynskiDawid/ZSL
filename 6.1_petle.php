<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" method="post">
      <input type="number" name="height" placeholder="wysokosc">
      <input type="submit" name="" value="ok">
    </form>
    <?php
    if(!empty($_POST['height']))
    $height=$_POST['height'];
    for ($i=1; $i <= $height; $i++) {
      for ($j=1; $j <= $i; $j++) {
        echo "*";
      }
      echo "<br>";
    }
    ?>
  </body>
</html>
