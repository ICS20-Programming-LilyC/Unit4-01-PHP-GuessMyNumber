<?php
  define("MIN", 1);
  define("MAX", 6);
  $correctNumber = intval(rand(MIN, MAX));
  $guessedNumber = intval($_POST["user-guess"]);

  // if/then statement: if correctNumber is equal to guessedNumber
if ($correctNumber == $guessedNumber) {
  echo "That is correct! Good job!";
}
  
  // if/then statement: if correctNumber is not equal to guessedNumber
if ($correctNumber != $guessedNumber) {
  echo "Your guess was not correct. My number was $correctNumber, please try again.";
}
?>