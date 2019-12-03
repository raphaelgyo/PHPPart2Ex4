<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie  Exercice 4 : Les conditions</title>
  </head>
  <body>
    <p>
      <?php
        echo ($age >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
      ?>
    </p>
    <p>
      <?php
      $age = 20;
        if ($age >= 18){
          echo 'Tu es majeur';
        }else{
          echo 'Tu es mineur';
        }
      ?>
    </p>
  </body>
</html>
