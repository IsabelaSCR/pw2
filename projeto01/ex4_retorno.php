<!DOCTYPE html>
<html lang="pt">
<head>
				<meta charset="utf-8">
				<title>Exercício 04 - Resultado</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="padding: 25px">
    <a class="navbar-brand" href="index.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-left" viewBox="0 0 16 16">
                                  <path fill-rule="evenodd" d="M8.354 1.646a.5.5 0 0 1 0 .708L2.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                                  <path fill-rule="evenodd" d="M12.354 1.646a.5.5 0 0 1 0 .708L6.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                            </svg></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="ex1.php">Exercício 1</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ex2.php">Exercício 2</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ex3.php">Exercício 3</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="ex4.php">Exercício 4</a>
      </li>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="ex5.php">Exercício 5</a>
      </li>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="ex6.php">Exercício 6</a>
      </li>
    </ul>
  </div>
</nav>
<br>
                <center><h2>Resultado:</h2></center>
				<div class="ex4" style="width: 70%; margin-left:15%; background-color: rgb(212, 212, 212);border-radius: 10px; margin-top: 5%; padding-top:10%;padding-bottom:10%; text-align: center;">
								<?php

											$n1 = $_POST['1'];
                      $n2 = $_POST['2'];
                      $n3 = $_POST['3'];

                      $total = $n1*$n2*$n3;
                      echo "➝ O resultado do cálculo de multiplicação de todos os números é: <b>$total</b>";

								?>
								
				</div>
				
</body>
</html>
