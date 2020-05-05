<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP- Nome cognome</title>

    <?php
    $name=$_GET['name'];
    $surname=$_GET['surname'];
     ?>
  </head>
  <body>
    <h1>
      <?php
      echo "Salve " . $name . " " . $surname;
       ?>
    </h1>

  </body>
</html>
