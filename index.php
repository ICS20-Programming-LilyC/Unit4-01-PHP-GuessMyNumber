<!DOCTYPE html>
<html lang="en-ca">
 <head>

   <!-- Metadata -->
   <meta charset="utf-8">
   <meta name="description" content="PHP Guess My Number Webpage">
   <meta name="keywords" content="immaculata, ics2o">
   <meta name="author" content="ZoiaB">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Favicon -->
   <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/android-chrome-512x512 (1).png">
   <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/android-chrome-512x512 (1).png">
   <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/android-chrome-512x512 (1).png">
   <link rel="./fav_index/android-chrome-512x512 (1).png">

   <!-- Stylesheet -->
   <link rel="stylesheet" href="./css/style.css">
   <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.teal-cyan.min.css" />

   <!-- Title -->
   <title>Guess My Number in PHP</title>
 </head>
 <body>
   <?php echo "<h1>Guess My Number!</h1>"; ?>

   <!-- Text -->
     <?php echo "<p>Welcome to the Guess My Number game! Please input your guess below:</p>"; ?>

     <!-- Form for user input -->
     <form action="./results.php" method="post" target="result">
       <label for="guess">Guess a Number Between 1 and 6:</label>
       <input type="number" step="1" id="user-guess" name="user-guess" min="1" max="6" placeholder="Guess"><br><br>
       <input type="submit" value="Check" button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
     </form>

   <!-- Image -->
   <center>
   <img src="./images/number.jpg" alt="Number Assortment" width="300" length="300">
   </center>

   <!-- iframe -->
   <iframe id="result" name="result"></iframe>
 </body>
</html>