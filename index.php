<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h3>Dane z tabeli user</h3>
    <?php
      $conn = mysqli_connect("localhost","root","","komis");
      $sql = "select * from user";
      $result = mysqli_query($conn, $sql);
      echo "<ol>";
      while ($row=mysqli_fetch_assoc($result)) {
      //echo $row["name"]," ",$row["surname"],"<br>";
        echo "<li>$row[name] $row[surname]</li>";
      }
      echo "</ol>";
      mysqli_close($conn);


      $conn1 = mysqli_connect("localhost","root","","komis");
      mysqli_set_charset($conn1,"utf8"); //polskie znaki
      $result1 = mysqli_query($conn1, $sql);
      echo "<table>";
      echo "<tr><th>Id</th><th>name</th><th>surname</th><th>city</th></tr>";
      while ($row=mysqli_fetch_assoc($result1)) {
        echo "<tr>";
        echo "<td>$row[Id]</td><td>$row[name]</td><td>$row[surname]</td><td>$row[city]</td>";
        echo "</tr>";
      }
      echo "</table>";
      mysqli_close($conn1);
    ?>
  </body>
</html>
