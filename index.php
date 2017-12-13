<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Les fonctions Exercice 5</title>
  </head>
  <body>
<?php
  function concatNumberString(){
    $number = 20;
    $string = 'Le nombre présenté aujourd\'hui est';
    $concat = $string . ' ' . $number;
    return $concat;
  }
   echo concatNumberString();
 ?>
  </body>
</html>
