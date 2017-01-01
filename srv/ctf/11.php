<?php
	$message = "Where is the flag?";
	
	/*
	CREATE TABLE Users (Username TEXT, FLAG_77e4aea4a8db8b9771bba606f7b58312bf96c170 TEXT);
	INSERT INTO Users VALUES ("admin", "The flag isn't here!");
	*/
	
	set_exception_handler(function($e){
		exit("SQL ERROR");
	});
	
	if(isset($_POST["username"]) && isset($_POST["password"])){
		$db = new PDO("mysql:host=127.0.0.1;dbname=p11", "p11");
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$result = $db->query("SELECT * FROM Users WHERE Username = '{$_POST["username"]}' AND FLAG_77e4aea4a8db8b9771bba606f7b58312bf96c170 = '{$_POST["password"]}'");
		
		if($row = $result->fetch()){
			$message = "Hello! {$row["Username"]}";
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
