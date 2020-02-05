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
    // echo max(3, 6);

    /*
    function getMax($num1, $num2) {
      if($num1 > $num2) {
        return $num1;
      } else {
        return $num2;
      }
    }

    // echo getMax(3, 90);
    echo getMax(300, 90);
    */

    function getMax ($num1, $num2, $num3) {
      if ($num1 >= $num2 && $num1 >= $num3) {
        return $num1;
      } elseif ($num2 >= $num1 && $num2 >= $num3) {
        return $num2;
      } else {
        return $num3;
      }
    }

    // echo getMax(300, 90, 400);
    // echo getMax(300, 900, 400);
    // echo getMax(3000, 900, 400);
    echo getMax(3000, 3000, 400);

  ?>
</body>
</html>
