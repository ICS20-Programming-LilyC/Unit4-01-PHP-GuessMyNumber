<?php
  define("MIN", 1);
  define("MAX", 6);
  $correctNumber = intval(rand(MIN, MAX));
  $guessedNumber = intval($_POST["user-guess"]);
  //if/then statement: if correctNumber is equal to guessedNumber
  if ($correctNumber == $guessedNumber) {
    echo "Good job, that is correct!";
  }
  
  //if/then statement: if correctNumber is not equal to guessedNumber
 if ($correctNumber != $guessedNumber) {
    echo "You guessed the wrong number! The correct number is $correctNumber.";
  }
?>