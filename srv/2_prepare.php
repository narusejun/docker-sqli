<?php
	$message = "";
	$user = "";
	$pass = "";
	
	// POSTパラメータ user, pass が送信されていたら
	if(isset($_POST["user"]) && isset($_POST["pass"])){
		$user = $_POST["user"];
		$pass = $_POST["pass"];
		
		// DBに問い合わせる
		$db = new PDO("mysql:host=127.0.0.1;dbname=db", "root");
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$ps = $db->prepare("SELECT * FROM account WHERE user = ? AND pass = ?");
		$ps->execute([$user, $pass]);
		$row = $ps->fetch();
		
		// 結果があるかどうか確認
		if($row){
			$message = "Login succeeded! Welcome {$row["user"]}.";
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
