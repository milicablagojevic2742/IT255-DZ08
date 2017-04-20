<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header('Location: index.html');

    }
    require_once('konekcija.php');
    $con = povezi();
    $stmt = $con->prepare('SELECT * FROM users WHERE username=:username');

    $stmt->bindParam(":username", $_SESSION['username']);

    $stmt->execute();
    $USER = $stmt->fetch();
    
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="css/style.css">
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="Home.php"><p align="center">Mehanic Innvations, Software & Solutions<br>
                <b>MISS - Blagojević</b></p></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="Home.php">Pocentna strana</a></li>
        <li><a href="O nama.php">O nama</a></li>
        <li><a href="delovi.php">Delovi</a></li>
        <li><a href="Kontakt.php">Kontakt</a></li>
        <li><a href="logout.php">Odjavi se - <?php echo $USER['name'] . " " . $USER['lastname']?></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    <div class="slika">
        <img src="pic/jnn.png" width="100%" height="100%"/>
    </div>
    <div id="content" class="container">
	<div class="row">
        <h1 align="center">Stranica u izradi!</h1>
            <br>
        <h3 align="center">Jednostavno i pregledno pogledajte i porucite<br>delove za vas auto uz detaljan opis svakog dela</h3><br><br><br><br><br>
			</div>
			
    </div>
    <div class="footer">
        <ul>
            <li class="f1">© Copyright 2017. All rights reserved.</li>
        </ul>
    </div>
        
</body>
</html>