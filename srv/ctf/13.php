<?php
	$message = "You can login as guest:guest";
	
	/*
	CREATE TABLE Users (Username TEXT, Password TEXT);
	INSERT INTO Users VALUES ("admin", SHA1(RAND()));
	INSERT INTO Users VALUES ("guest", "guest");
	*/
	
	if(isset($_POST["username"]) && isset($_POST["password"])){
		$db = new PDO("mysql:host=127.0.0.1;dbname=p13", "p13");
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$result = $db->prepare("SELECT * FROM Users WHERE Username LIKE ? AND Password LIKE ?");
		$result->execute([$_POST["username"], $_POST["password"]]);
		
		if($row = $result->fetch()){
			$message = "Hello! {$row["Username"]}";
			if($row["Username"] === "admin"){
				$message .= "<br><br>Good job! FLAG is FLAG_e140b4acd6a6634aa088f17e8614f4bfad2103f5";
			}
		}else{
			$message = "Login failed.";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Sign in</title>
	<link href="/bootstrap.min.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<form class="form-signin" method="POST">
			<p><?= $message ?></p>
			<h2 class="form-signin-heading">Please sign in</h2>
			<input type="text" name="username" class="form-control" placeholder="Username">
			<input type="password" name="password" class="form-control" placeholder="Password">
			<div class="checkbox">
				<label>
					<input type="checkbox" value="remember-me"> Remember me
				</label>
			</div>
			<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
		</form>
	</div>
</body>
</html>
