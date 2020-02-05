<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

<form action="1.php" method="post">

  First Num: <br>
  <!-- <input type="number" name="num1"> <br> -->
  <!-- <input type="number" step="0.1" name="num1"> <br> -->
  <input type="number" step="0.001" name="num1"> <br>
  OP: <br>
  <input type="text" name="op"> <br>
  Second Num:<br>
  <input type="number" name="num2"> <br>
  <input type="submit">

</form>

<?php
  $num1 = $_POST["num1"];
  $num2 = $_POST["num2"];
  $op = $_POST["op"];

  if ($op == "+") {
    echo $num1 + $num2;
  } elseif ($op == "-") {
    echo $num1 - $num2;
  } elseif ($op == "/") {
    echo $num1 / $num2;
  } elseif ($op == "*") {
    echo $num1 * $num2;
  } else {
    echo "invalid operator";
  }
?>

</body>
</html>
