<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <?php
        if(!empty($_POST['surname'])&&!empty($_POST['age']))
        {
            $surname=$_POST['surname'];
            $age=$_POST['age'];
            $len=strlen($surname);
            echo "Dane przed poprawą: nazwisko: $surname, długość nazwiska: $len, wiek: $age","<br>";
            $surname1=lcfirst(strtoupper(trim($surname)));
            $censored=str_replace("zSK","#***#",$surname1);
            $cut=substr($censored,0,8);
            $len1=strlen($cut);
            echo "Dane po poprawie: nazwisko: $cut, długość nazwiska: $len1, wiek: $age","<hr>";
            ?>
            <table>
              <tr>
                <th>NAZWISKO</th>
                <th>WIEK</th>
                <th>DŁUGOŚĆ NAZWISKA</th>
              </tr>
              <tr>
                <td><?php echo $cut;?></td>
                <td><?php echo $age; ?></td>
                <td><?php echo $len1; ?></td>
              </tr>
            </table>
            <?php
        }
        else
        {
     ?>
    <form class="" method="post">
      <input type="text" name="surname" value="" placeholder="nazwisko">
      <input type="number" name="age" value="" placeholder="wiek">
      <input type="submit" name="" value="zatwierdź">
    </form>
    <?php
    echo "Błędne dane";
        } ?>

  </body>
</html>
