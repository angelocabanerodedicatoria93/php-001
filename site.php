<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>

<body>

  <!-- <form action="site.php" method="get"> -->
  <form action="site.php" method="post">
    Password:
    <input type="password" name="password"> <br>
    <input type="submit">
  </form>
  <br><br>

  <?php // echo $_GET["password"];
  ?>
  <?php echo $_POST["password"]; ?>


</body>

</html>
