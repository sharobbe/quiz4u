<?php
session_start();
require_once('scripts/data.php');
require_once('scripts/security.php');




?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Quiz</title>
    
 <!-- Bootstrap Verlinkung -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="style/style.css">
  <style>
    
    .center {
  margin: auto;
  width: 50%;
  border: 3px solid green;
  padding: 10px;
}
      
      .answers1 h5 {
          border: 1px solid green;
          padding: 2px;
      }    
      
      
</style>

</head>
<body >

<section class="center">
    
<h3>Frage</h3>
<div class="answers1">
    <h5><a</h5>
    <h5>Grün</h5>
    <h5>Rot</h5>
    <h5>Blau</h5>
</div>
    
</section>

</body>
</html>