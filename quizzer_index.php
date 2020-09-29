



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="stylee.css">
        <link rel="stylesheet" href="quizzer.css">
    <title>PHP QUIZZER</title>
</head>
<body>
    
<!-- Navbaar -->
<?php  include 'menu.php'?>

<!-- QUIZ DESIGN -->

<header>
      <div class="container">
       <h1> PHP QUIZZER</h1>
      </div>
</header>

<main>
      <div class="container">
       <h3>test your php knowledge</h3>
       <p>This is a multiple choice quiz to test your knowledge of PHP</p>
       <ul>
              <li><strong>Number of Question:</strong> 5</li>
              <li><strong>Type:</strong> multiple choice</li>
              <li><strong>Estimated Time:</strong> 4</li>
        </ul>
        <a href="question.php?n=1" class="start">Start Quiz</a>
      </div>
</main>

<footer>
      <div class="container">
       <p>Copyright © 2020, php Quizzer </p>
      </div>
</footer>








<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>