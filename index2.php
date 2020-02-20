<?php
  $text = 'Lorem, pippo, pluto, paperino, 3';
  $name = $_GET['name'];
  //trasformato in array
  //$textExplode = explode(',', $text);

  //echo $textExplode;
  //var_dump($textExplode);
  //print_r($textExplode)
  //$word = trim($textExplode[1]);
  // echo trim($textExplode[1]);
  // echo str_replace('paperino', 'Minnie', $text) . '<br>';
  // echo strlen($text) ;
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1><?php echo $name ?></h1>
    <p>
      <?php echo str_replace('paperino', 'Minnie', $text); ?>
    </p>
    <p>
      <?php echo strlen($text); ?>
    </p>

  <script src="js/script.js" charset="utf-8"></script>
  </body>
</html>
