<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title><?= htmlspecialchars($_GET["file"]) ?> | SQLi超入門 演習</title>
</head>
<body style="background-color: #EEE">
	<?= preg_replace("/FLAG_[a-f0-9]{40}/", "**** CENSORED ****", shell_exec("php -s " . $_GET["file"])) ?>
	<hr>
	<a href="javascript:history.back();">戻る</a>
</body>
</html>
