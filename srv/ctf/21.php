<?php
	$message = "";
	
	/*
	CREATE TABLE Users (Username VARCHAR(16) PRIMARY KEY, Password TEXT, Privileged BOOLEAN);
	INSERT INTO Users VALUES ("admin", SHA1(RAND()), 1);
	INSERT INTO Users VALUES ("guest", "guest", 0);
	*/
	
	if(isset($_POST["mode"])){
		$mode = $_POST["mode"];
		$user = $_POST["username"];
		$pass = $_POST["password"];
		$newpass = @$_POST["newpassword"];
		
		$db = new PDO("mysql:host=127.0.0.1;dbname=p21", "p21");
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		if($mode === "Login"){
			$ps = $db->prepare("SELECT * FROM Users WHERE Username = ? AND Password = ?");
			$ps->execute([$user, $pass]);
			
			if($row = $ps->fetch()){
				$message = "Login succeeded! Welcome {$row["Username"]}.";
				if($row["Privileged"]){
					$message .= "<br><br>You are privileged user.<br>FLAG is FLAG_70a664b782b2182e6c60be0b0b385d15a430fe69";
				}else{
					$message .= "<br><br>You are normal user.<br>You have no permission to show FLAG.";
				}
			}else{
				$message = "Login failed ...";
			}
		}else if($mode === "Register"){
			$ps = $db->prepare("INSERT INTO Users VALUES (?, ?, ?)");
			$ps->execute([$user, $pass, 0]);
			
			if($ps->rowCount() > 0){
				$message = "Register succeeded! Welcome {$user}.";
			}else{
				$message = "Register failed ...";
			}
		}else if($mode === "Change"){
			$ps = $db->prepare("SELECT * FROM Users WHERE Username = ? AND Password = ?");
			$ps->execute([$user, $pass]);
			
			if($row = $ps->fetch()){
				$ps = $db->prepare("UPDATE Users SET Password = ? WHERE Username = '{$row["Username"]}'");
				$ps->execute([$newpass]);
				
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
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Super Secure Login Service</title>
	<link href="/bootstrap.min.css" rel="stylesheet">
	<link href="style2.css" rel="stylesheet">
	<script type="text/javascript" src="zepto.min.js"></script>
</head>
<body>
	<div class="site-wrapper">
		<div class="site-wrapper-inner">
			<div class="cover-container">
				<div class="masthead clearfix">
					<div class="inner">
						<h3 class="masthead-brand">Super Secure Login Service</h3>
						<nav>
							<ul class="nav masthead-nav">
								<li class="active"><a href="#login">Login</a></li>
								<li><a href="#register">Register</a></li>
								<li><a href="#change">Change</a></li>
							</ul>
						</nav>
					</div>
				</div>
				<div class="inner cover">
					<?= $message ?>
				</div>
				<div id="login" class="inner cover">
					<form method="POST">
						<h1 class="cover-heading">Login</h1>
						<p class="lead">
							<input type="text" name="username" class="form-control" placeholder="Username">
							<input type="password" name="password" class="form-control" placeholder="Password">
						</p>
						<p class="lead">
							<input type="submit" class="btn btn-lg btn-default" name="mode" value="Login">
						</p>
					</form>
				</div>
				<div id="register" class="inner cover">
					<form method="POST">
						<h1 class="cover-heading">Register</h1>
						<p class="lead">
							<input type="text" name="username" class="form-control" placeholder="Username">
							<input type="password" name="password" class="form-control" placeholder="Password">
						</p>
						<p class="lead">
							<input type="submit" class="btn btn-lg btn-default" name="mode" value="Register">
						</p>
					</form>
				</div>
				<div id="change" class="inner cover">
					<form method="POST">
						<h1 class="cover-heading">Change</h1>
						<p class="lead">
							<input type="text" name="username" class="form-control" placeholder="Username">
							<input type="password" name="password" class="form-control" placeholder="OldPassword">
							<input type="password" name="newpassword" class="form-control" placeholder="NewPassword">
						</p>
						<p class="lead">
							<input type="submit" class="btn btn-lg btn-default" name="mode" value="Change">
						</p>
					</form>
				</div>
				<div class="mastfoot">
					<div class="inner">
						<p>&copy; 2017 Super Secure Login Service</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		$("#register, #change").hide();
		$("a").on("click", function(){
			$(".active").removeClass("active");
			$(this).parent().addClass("active");
			$("#login, #register, #change").hide();
			$($(this).attr("href")).show();
			return false;
		});
	</script>
</body>
</html>
