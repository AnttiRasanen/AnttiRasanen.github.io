<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="fi">
<head>
  <title>Tammipeli WIP</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.png" type="image/x-icon">
  <script src="script.js"></script>
</head>
<body>
<p><a href="account.php">Tilin muokkaus</a></p>
<p><a href="logout.php">Kirjaudu ulos</a>.</p>
<button id="cleargame">Uusi peli</button>
  
    <div id="board">
      <div class="tiles"></div>
      <div class="pieces">
        <div class="player1pieces">
        </div>
        <div class="player2pieces">
        </div>
      </div>
    </div> 
</body>
</html>