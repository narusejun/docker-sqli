<?php
	$message = "";
	$user = "";
	$pass = "";
	
	// POSTパラメータ user, pass が送信されていたら
	if(isset($_POST["user"]) && isset($_POST["pass"])){
		$user = $_POST["user"];
		$pass = $_POST["pass"];
		
		if($user === "naruse" && $pass === "s3cretp4ssw0rd"){
			$message = "Login succeeded.";
		}else{
			$message = "Login failed ...";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
</head>
<body>
	<p><?= $message ?></p>
	<form method="POST">
		<label>User: <input name="user" type="text" value="<?= $user ?>"></label>
		<br>
		<label>Pass: <input name="pass" type="text" value="<?= $pass ?>"></label>
		<br>
		<input type="submit">
	</form>
</body>
</html>