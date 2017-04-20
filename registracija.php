<html>
<head>
    <title>Login</title>
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
      <a class="navbar-brand" href="index.php"><p align="center">Mehanic Innvations, Software & Solutions<br>
                <b>MISS - Blagojević</b></p></a>
    </div>
  </div>
</nav>
<div id="content" class="container" class="login" style="width: 430px">
	<div class="row">
        <form action="registruj.php" method="POST" align="center" style="width: 430px" class="formal">
            <h2>Registracija</h2>
            <input type="text" name="username" placeholder="Username"/>
            <br>
            <br>
            <input type="password" name="password" placeholder="Password"/>
            <br>
            <br>
            <input type="text" name="email" placeholder="E-mail"/>
            <br>
            <br>
            <input type="text" name="name" placeholder="Ime"/>
            <br>
            <br>
            <input type="text" name="lastname" placeholder="Prezime"/>
            <br>
            <br>
            <input type="text" name="phone" placeholder="Telefon"/>
            <br>
            <br>
            <input type="submit" value="Registruj se"/>
            <a href="index.php">Imate nalog?</a>
        </form>
    </div>
</div>
</body>
</html>