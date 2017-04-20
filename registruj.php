<?php
		require_once('konekcija.php');
		$con = povezi();

		$username = $_POST["username"];
		$password = $_POST["password"];
		$password = md5($password);
        $email = $_POST["email"];
        $ime = $_POST["name"];
        $prezime = $_POST["lastname"];
        $telefon = $_POST["phone"];
		
		$stmt = $con->prepare("INSERT INTO users (username, password, email, name, lastname, phone) VALUES (:username, :password, :email, :ime, :prezime, :telefon)");
		
		$stmt->bindParam(":username", $username);
		$stmt->bindParam(":password", $password);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":ime",$ime);
        $stmt->bindParam(":prezime",$prezime);
        $stmt->bindParam(":telefon",$telefon);
		
		$stmt->execute();
		
        session_start();
        $_SESSION["username"] = $row["username"];
        header('Location: index.php');
		
		

?>