<?php
	$message = "You can login as guest:guest";
	
	/*
	CREATE TABLE Users (Username TEXT, Password TEXT);
	INSERT INTO Users VALUES ("admin", SHA1(RAND()));
	INSERT INTO Users VALUES ("guest", "guest");
	*/
	
	if(isset($_POST["username"]) && isset($_POST["password"])){
		$db = new PDO("mysql:host=127.0.0.1;dbname=p4", "p4");
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$result = $db->query("SELECT * FROM Users WHERE Username = '{$_POST["username"]}'");
		
		if($row = $result->fetch()){
			if($_POST["password"] === $row["Password"]){
				$message = "Hello! {$row["Username"]}";
				if($row["Username"] === "admin"){
					$message .= "<br><br>Good job! FLAG is FLAG_b6f1aa0745437042c3ebe632a150de8db5f4a5d5";
				}
			}else{
				$message = "Wrong password.";
			}
		}else{
			$message = "No such user.";
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
