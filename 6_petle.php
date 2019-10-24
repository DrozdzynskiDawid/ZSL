<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tabliczka mnożenia</title>
    <link rel="stylesheet" href="6_petle.css">
  </head>
  <body>
    <table>
    <?php
    $row=1;
      do {
        echo "<tr>";
        $col=1;
        do {
          $number=($col*$row);

        echo "<td class="\red\">",$number,"</td>"
        $col++;
        } while ($col <= 10);
        $row++;
       echo "</tr>";
      } while ($row <= 10);
    ?>
    </table>
  </body>
</html>
