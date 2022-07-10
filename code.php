<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  $data = $_GET['bonus'];

  function deSoCode($value)
  {
    $secure = 19537;
    return ((hexdec($value) / 3) - $secure) / 2;
  }

  echo '<strong>Ваш бонус: </strong><p>'. deSoCode($data) .'</p>';
  ?>
</body>

</html>