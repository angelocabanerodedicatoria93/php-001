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
    class Movie {
      // public $title;
      // public $rating;

      private $title;
      private $rating;

      function __construct($title, $rating) {
        $this->title = $title;
        $this->rating = $rating;
      }

      function getRating() {
        return $this->rating;
      }

      function setRating($rating) {
        $this->rating = $rating;
      }
    }

    $avengers = new Movie("Avengers", "PG-13");
    // G, PG, PG-13, R, NR

    // $avengers->rating = "Dog";
    // echo $avengers->rating;

    // echo $avengers->getRating();

    $avengers->setRating("Dog");
    echo $avengers->getRating();
  ?>
</body>
</html>
