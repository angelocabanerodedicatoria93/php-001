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

      public $title;
      private $rating;

      function __construct($title, $rating) {
        $this->title = $title;
        // $this->rating = $rating;
        $this->setRating($rating);
      }

      function getRating() {
        return $this->rating;
      }

      function setRating($rating) {
        // $this->rating = $rating;

        if ($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "NR") {
          $this->rating = $rating;
        } else {
          $this->rating = "NR";
        }
      }
    }

    // $avengers = new Movie("Avengers", "PG-13");
    $avengers = new Movie("Avengers", "DOG");
    // G, PG, PG-13, R, NR

    // $avengers->setRating("Dog");
    // $avengers->setRating("R");
    $avengers->setRating("asdasd  ");
    echo $avengers->getRating();
  ?>
</body>
</html>
