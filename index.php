<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bonus Link</title>
</head>

<body>
  <?php
  $data = $_POST['summ'];

  function soCode($value)
  {
    $secure = 19537;
    return dechex(($secure + $value * 2) * 3);
  }
  ?>

  <form action="/" method="POST">
    <input type="number" name="summ" placeholder="Введите сумму">
    <button type="submit">Сгенерировать ссылку для бонуса</button>
  </form>
  <?php
  if ($_POST) {
    echo '<strong>Ваша ссылка <br></strong>';
    echo '<a href="/code.php?bonus='.soCode($data).'">Ваш бонус</a>';
  } ?>
</body>

</html>