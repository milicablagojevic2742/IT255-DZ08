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
            <br>
            <p align="center">Jedna od vizija budućnosti, flota električnih automobila bez vozača klizi našim ulicama,<br> preuzimajući svoj ljudski teret i razvozeći ga na posao, plažu ili u večernje izlaske sa prijateljima.<br>
<br>
Ljudi sede udobno zavaljeni u svojim sedištima razgledajući okolinu, telefonirajući, radeći na svojim mobilnim uređajima, bez opterećenja koliko su popili,<br> da li su umorni ili ih je neko jako iznervirao,i još važnije ne razmišljajući da li su pijani, umorni ili iznervirani vozaci drugih automobila u saobraćaju.<br>
 <br>
Iskreno verujemo da, sa sadašnjim tehničkim razvojem, ova ce vizija postati stvarnost u bliskoj budućnosti.<br>
 <br>
<b>Da li imate predstavu koliko je Vaš automobil svojim elektronskim rešenjima<br> blizak svom nasledniku iz
gornje vizije?</b><br>
<br>
Sa svojim senzorima I mikroprocesorima, možete biti uvereni, blizu je! Vaš automobil je velikim delom
vođen svojim kompjuterom.<br> Kompjuter se stara o Vašoj sigurnosti I udobnosti u vožnji u velikom broju automobila već danas.<br>
<br>
Mi smo tu da pomognemo svojim inovacijama i softverima onima koji se staraju o automobilima,<br> mi pravimo informatička rešenja za automehaničarske radnje.</p><br>
            <br>
			</div>
			<div class="row">
        <div class="col-md-8 video">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/YEn9bQkBXkE" frameborder="0" allowfullscreen></iframe>
        </div>
            <div class="col-md-4">
                <p><b>Pratite nas na:</b></p>
                <ul class="m">
                    <li><a href="https://sr-rs.facebook.com/"><img src="pic/Facebook.png" onmouseover="this.src='pic/Facebook1.png'" onmouseout="this.src='pic/Facebook.png'" width="200px" height="59px"/></a></li>
                    <li><a href="https://www.instagram.com/"><img src="pic/Instagram.png" onmouseover="this.src='pic/Instagram1.png'" onmouseout="this.src='pic/Instagram.png'" width="200px" height="75px"/></a></li>
                    <li><a href="https://www.twitter.com/"><img src="pic/Twitter.png" onmouseover="this.src='pic/Twitter1.png'" onmouseout="this.src='pic/Twitter.png'" width="200px" height="65px"/></a></li>
                </ul>
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
