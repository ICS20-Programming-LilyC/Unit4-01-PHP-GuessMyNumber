<!DOCTYPE html>
<html lang="en-ca">
  <head>

    <!-- Meta data -->
    <meta charset="utf-8">
    <meta name="description" content="PHP Guess My Number Webpage">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Lily C">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index1/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index1/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index1/favicon-16x16.png">
    <link rel="manifest" href="./fav_index1/site.webmanifest">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="./css/style.css">

    <!--MDL theme-->
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.amber-indigo.min.css" /> 

   <!--Padding-->
   <main style="padding-left: 20px; padding-right: 20px;">

   <!--Title-->
   <title>Guess My Number with PHP</title>
 </head>
 <body>

   <!--Header-->
   <?php echo "<h1>Guess My Number in PHP!</h1>"; ?>

   <!--Text-->
     <?php echo "<p>This webpage will allow you to guess a random number. 
     Your goal is to try and guess correctly! To input your guess enter your input text box below.</p>"; ?>

    <!--Image-->
   <center>
     <img src="./images/randomNumbers.png" alt="Variety of Numbers image" width="500" length="500">
   </center>
   <br>
   <br>

     <!--Form for user input-->
     <form action="./calculations.php" method="post" target="result">
       <label for="guess">Enter any whole number between the numbers 1 and 6:</label>
       <input type="number" step="1" id="user-guess" name="user-guess" min="1" max="6" placeholder="Guess">
       <br>
       <br>
       <input type="submit" value="Generate" button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
     </form>
   <br>

   <!--iframe-->
   <iframe id="result" name="result"></iframe>
   <br>
 </body>
</html>