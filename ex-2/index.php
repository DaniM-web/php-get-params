<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP - Email check</title>
    <?php
    $mail=$_GET['email'];

    $checkMailDot=strpos($mail,'.');
    $checkMailHat=strpos($mail,'@');
     ?>
  </head>
  <body>
    <!-- passare come argomento in GET una mail
     e stampare un div che contenga OK se contiene
     un punto e una chiocciola;
     KO altrimenti -->

     <h1>
       <?php
       if (
         ($checkMailDot)
         && ($checkMailHat)
         ){
           echo "OK";
        }else {
          echo "KO";
        };
        ?>
     </h1>
  </body>
</html>
