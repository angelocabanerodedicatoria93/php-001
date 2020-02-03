<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>

<body>
  <form action="site.php" method="get">
    Name:
    <input type="text" name="username">
    <br>
    Age:
    <input type="number" name="age">
    <input type="submit">
  </form>
  <br>

  <?php //echo $_GET["username"];
  ?>

  Your name is <?php echo $_GET["username"] ?>
  <br>
  Your age is <?php echo $_GET["age"] ?>
</body>

</html>
