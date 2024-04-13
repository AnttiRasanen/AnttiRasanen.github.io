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
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; background-color: #474547; }
    </style>
</head>
<body>
<p><a href="checkers.php">Palaa Tammeen</a></p>
    <h1 class="my-5">Hei, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Tästä voit vaihtaa salasanasi tai poistaa tilisi.</h1>
    <p>
        <a href="password-reset.php" class="btn btn-warning">Vaihda Salasana</a>
        <a href="delete.php" class="btn btn-danger ml-3">Poista tilisi</a>
    </p>
</body>
</html>