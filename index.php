<?php
  $name = $_GET['name'];
  $array = [
    'Pippo',
    1,
    false
  ];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php echo 'Ciao ' . $name . ' Benvenuto!'  ;?>
    <?php //var_dump($array)?>
  </body>
</html>
