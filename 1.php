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

/*
  function sayHi() {
    echo 'hello user';
  }

  sayHi();
*/

/*
  function sayHi($name) {
    echo "hello $name <br>";
  }

  // sayHi("mike");
  sayHi("tom");
  sayHi("dave");
  sayHi("oscar");
*/

  function sayHi($name, $age) {
    echo "hello $name, you are $age <br>";
  }

  sayHi("tom", 40);
  sayHi("dave", 13);
  sayHi("oscar", 80);
?>

</body>

</html>
