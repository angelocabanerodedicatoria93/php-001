<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>

<body>
  <form action="site.php" method="get">
    Name:
    <input type="text" name="name"> <br>
    <input type="submit">
  </form>
  <br><br>

  <?php
  // echo $_GET["name"];
  echo $_GET["age"];
  ?>

</body>

</html>
