<?php
		require_once('konekcija.php');
		$con = povezi();
		$username = $_POST["username"];
		$password = $_POST["password"];
		$password = md5($password);
		
		$stmt = $con->prepare("SELECT * FROM users WHERE username=:username AND password=:password");
		
		$stmt->bindParam(":username", $username);
		$stmt->bindParam(":password",$password);
		
		$stmt->execute();
		
		$row = $stmt->fetch();
		
		if($row)
		{
			session_start();
			$_SESSION["username"] = $row["username"];
			header('Location: Home.php');
		}
		

?>