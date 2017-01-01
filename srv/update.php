<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<link href="bootstrap.min.css" rel="stylesheet">
	<style>
		html, body {
			margin: 0;
			padding: 0;
		}
		kbd {
			display: block;
			margin: .5em 0;
		}
		.label {
			vertical-align: top;
		}
	</style>
</head>
<body>
<?php
	$ch = curl_init("https://github.com/narusejun/docker-sqli/commits/master");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	if(preg_match("@/commits/([0-9a-f]+)@", curl_exec($ch), $m)){
		if($m[1] == trim(file_get_contents("/etc/version"))){
?>
	<h4>Dockerイメージ <span class="label label-success">最新</span></h4>
	<p>このイメージは最新版です。アップデートの必要はありません。</p>
<?php
		}else{
?>
	<h4>Dockerイメージ <span class="label label-warning">更新あり</span></h4>
	<p>イメージの更新があります。以下のコマンドを順番に実行してアップデートを行ってください。アップデートを行うとデータベースなどはリセットされますのでご注意ください。</p>
	<kbd>docker rm -f sqli</kbd>
	<kbd>docker pull narusejun/sqli</kbd>
	<kbd>docker run --name sqli --publish 8080:8080 -dit narusejun/sqli</kbd>
<?php
		}
	}else{
?>
	<h4>Dockerイメージ <span class="label label-default">確認失敗</span></h4>
	<p>イメージ更新情報の確認に失敗しました。以下のコマンドを順番に実行してアップデートを行うと解決するかもしれません(?)</p>
	<kbd>docker rm -f sqli</kbd>
	<kbd>docker pull narusejun/sqli</kbd>
	<kbd>docker run --name sqli --publish 8080:8080 -dit narusejun/sqli</kbd>
<?php
	}
?>
</body>
</html>
