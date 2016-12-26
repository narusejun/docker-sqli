<?php
	$message = "";
	$user = "";
	$pass = "";
	$newpass = "";
	
	// POSTパラメータ mode が送信されていたら
	if(isset($_POST["mode"])){
		$mode = $_POST["mode"];
		$user = $_POST["user"];
		$pass = $_POST["pass"];
		$newpass = @$_POST["newpass"];
		
		// DBに接続
		$db = new PDO("mysql:host=127.0.0.1;dbname=db", "root");
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		// ログインモード
		if($mode === "Login"){
			// 問い合わせ
			$ps = $db->prepare("SELECT * FROM account WHERE user = ? AND pass = ?");
			$ps->execute([$user, $pass]);
			$row = $ps->fetch();
			
			// 結果があるかどうか確認
			if($row){
				$message = "Login succeeded! Welcome {$row["user"]}.";
			}else{
				$message = "Login failed ...";
			}
		}else if($mode === "Register"){
			// 登録を行う
			$ps = $db->prepare("INSERT INTO account VALUES (?, ?)");
			$ps->execute([$user, $pass]);
			
			// 登録されているかを確認
			if($ps->rowCount() > 0){
				$message = "Register succeeded! Welcome {$user}.";
			}else{
				$message = "Register failed ...";
			}
		}else if($mode === "Change"){
			// 旧パスワードが一致しているかの確認問い合わせ
			$ps = $db->prepare("SELECT * FROM account WHERE user = ? AND pass = ?");
			$ps->execute([$user, $pass]);
			$row = $ps->fetch();
			
			// 結果があるかどうか確認
			if($row){
				// パスワードの変更を行う
				// newpassは外部入力値なのでキチンとエスケープする必要があるが、
				// userはデータベースから持ってきた値を使うのでエスケープしない
				$ps = $db->prepare("UPDATE account SET pass = ? WHERE user = '{$row["user"]}'");
				$ps->execute([$newpass]);
				
				// 変更されているかを確認
				if($ps->rowCount() > 0){
					$message = "Password change succeeded!";
				}else{
					$message = "Password change failed ...";
				}
			}else{
				$message = "Password change failed ...";
			}
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
	
	<h1>Login</h1>
	<form method="POST">
		<label>User: <input name="user" type="text" value="<?= $user ?>"></label>
		<br>
		<label>Pass: <input name="pass" type="text" value="<?= $pass ?>"></label>
		<br>
		<input type="submit" name="mode" value="Login">
	</form>
	
	<h1>Register</h1>
	<form method="POST">
		<label>User: <input name="user" type="text" value="<?= $user ?>"></label>
		<br>
		<label>Pass: <input name="pass" type="text" value="<?= $pass ?>"></label>
		<br>
		<input type="submit" name="mode" value="Register">
	</form>
	
	<h1>Change password</h1>
	<form method="POST">
		<label>User: <input name="user" type="text" value="<?= $user ?>"></label>
		<br>
		<label>Pass: <input name="pass" type="text" value="<?= $pass ?>"></label>
		<br>
		<label>NewPass: <input name="newpass" type="text" value="<?= $newpass ?>"></label>
		<br>
		<input type="submit" name="mode" value="Change">
	</form>
</body>
</html>