<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  <?php
    $isMale = true;
    // $isTall = true;
    $isTall = false;

    // if ($isMale && $isTall) {
    if ($isMale || $isTall) {
      echo "you are a tall male";
    } else {
      echo "you are not male";
    }
  ?>
</body>
</html>
