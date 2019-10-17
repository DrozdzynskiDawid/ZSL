<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>formularz</title>
    <link rel="stylesheet" href="/css/5_form.css">
  </head>
  <body>


    <?php
    if (!empty($_POST['name']) && !empty($_POST['country'])) {
      $name = $_POST['name'];
      $country = $_POST['country'];

      switch ($country) {
        case 'p':
          $country='Polska';
          break;
        case 'g':
          $country='Niemcy';
          break;
        case 'u':
          $country='USA';
          break;
      }
      //prawidłowo podane dane w formularzu , Polska od razu wybrana
      echo "Imię: $name, kraj: $country";
      ?>
      <table>
        <tr>
          <th>Imie</th>
          <th>Kraj</th>
        </tr>
        <tr>
          <td><?php echo $name; ?></td>
          <td><?php echo $country; ?></td>
        </tr>
      </table>
      <?php
    }else {
      ?>
      <!--html-->
      <form method="post">
        <input type="text" name="name" placeholder="Imie"><br><br>
        <input type="radio" name="country" value="p" checked>Polska
        <input type="radio" name="country" value="g">Niemcy
        <input type="radio" name="country" value="u">USA<br><br>
        <input type="submit" name="button" value="Zatwierdź">
      </form>
      <?php
    }
     ?>
  </body>
</html>
