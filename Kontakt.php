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
    <title>Kontakt</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="js/script.js" type="text/javascript"></script>
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
    <div id="content" class="container">
        <div class="row">
        <div class="forma col-md-6">
            <div class="container">
  <form>
    <div class="form-group">
      <label for="ime">Ime:</label>
      <input type="ime" class="form-control" id="ime" <?php echo "value='" . $USER["name"] ."'"?> disabled/>
    </div>
    <div class="form-group">
      <label for="prezime">Prezime:</label>
      <input type="prezime" class="form-control" id="prezime" <?php echo "value='" . $USER["lastname"] ."'"?> disabled/>
    </div>
    <div class="form-group">
      <label for="naslov">Naslov poruke:</label>
      <input type="naslov" class="form-control" id="naslov">
    </div>
    <div class="form-group">
  <label for="tekst">Tekst poruke:</label>
  <textarea class="form-control" rows="5" id="tekst"></textarea>
</div>
    <div class="form-group">
      <label for="telefon">Telefon:</label>
      <input type="telefon" class="form-control" id="telefon" <?php echo "value='+" . $USER["phone"] ."'"?> disabled>
    </div>
    <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Nacin slanja
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#">E-mail</a></li>
  </ul>
</div>
    <button type="submit" class="btn btn-default">Posalji</button>
  </form>
</div>
        </div>
        <div class="col-md-6">
        <div class="contact">
            <p> Kontakt telefon: +381 11 6598 348<br>
                E-mail: MISS_Blagojevic@live.com<br>
                Fax: +381 11 6598 347<br>
                Adresa: Neznanog junaka 98
            </p>
        </div>
        <div class="mapa" id="map">
        </div>
    </div>
    </div>
    </div>
    <div class="footer">
        <ul>
            <li class="f1">© Copyright 2017. All rights reserved.</li>
        </ul>
    </div>
</body>
</html>
