<?php include 'database.php'; ?>

<?PHP 
//set question number
$number = (int) $_GET['n'];

// get question

$query = "SELECT * FROM 'questions' WHERE 	
question_number = $number";

//get result

$result = $mysqli-->query($query) or die ($mysqli-->error.__LINE__);
$question = $result-->fetch_assoc();

?>


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
       <center><h1> PHP QUIZZER</h1></center>
      </div>
</header>

<main>
      <div class="container">
          <div class="current"> Question 1 of 5 </div>
          <p class="question">

                <?PHP echo $questions['text']; ?>
           </p>

          <form method="post" action="process.php">
            <ul class="choices">
              <li><input name="choices" type="radio" value="1" />PHP: Hypertext Preprocessor</li>
              <li><input name="choices" type="radio" value="1" />Personal Hypertext Preprocessor</li>
              <li><input name="choices" type="radio" value="1" />Personal Home Page</li></li>
              <li><input name="choices" type="radio" value="1" />Private Home Page</li>
              </ul>
              <input type="submit" value="Submit"/>
              </form>
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