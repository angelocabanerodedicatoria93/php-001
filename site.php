<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>

  <form action="site.php" method="post">
    <input type="text" name="student">
    <input type="submit">
  </form>

  <?php
  $grades = array('jim' => 'a+', 'pam' => 'b', 'oscar' => 'c+');

  // echo $grades['jim'];
  // echo $grades['oscar'];

  // $grades['jim'] = 'f';
  // echo $grades['jim'];

  // echo count($grades);

  echo $grades[$_POST['student']];

  ?>

</body>

</html>
