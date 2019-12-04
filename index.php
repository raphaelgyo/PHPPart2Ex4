<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie  Exercice 4 : Les conditions</title>
  </head>
  <body>
    <p>
      <?php
      // si l'âge est supérieur ou égal à 18, tu es majeur, sinon tu n'es pas majeur
        echo ($age >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
      ?>
    </p>
    <p>
      <?php
      $age = 20;
        if ($age >= 18){
          echo 'Tu es majeur';
        }else{
          echo 'Tu n\'es pas majeur';
        }
      ?>
    </p>
    <!-- Si tu as 18 ans ou plus tu es majeur. -->
    <?php if ($age >= 18){ ?>
      <p>Tu es majeur</p>
      <!-- Sinon tu n'es pas majeur. -->
    <?php } else { ?>
      <p>Tu n'es pas majeur</p>
    <?php } ?>
  </body>
</html>
