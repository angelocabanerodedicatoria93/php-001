<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>

<body>

  <?php
  $friends = array("kevin", "karen", "oscar", "jim");
  //                 0        1       2        3
  // echo $friends;
  // echo $friends[0];
  // echo $friends[1];
  // echo $friends[2];

  // $friends[1] = 'dwight';
  // $friends[1] = 400;
  // echo $friends[1];

  /*
  $friends[10] = 'angela';
  echo $friends[10];
  */

  // echo count($friends);
  $friends[4] = 'mike';
  echo count($friends);

  ?>
</body>

</html>
