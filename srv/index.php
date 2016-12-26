<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>SQLi超入門 演習</title>
	<link href="bootstrap.min.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="header clearfix">
			<nav>
				<ul class="nav nav-pills pull-right">
					<li role="presentation" class="active"><a href="#">Home</a></li>
					<li role="presentation"><a href="ctf.php">CTF</a></li>
				</ul>
			</nav>
			<h3 class="text-muted">SQLi超入門 演習</h3>
		</div>
		
		<div class="row marketing">
			<div class="col-lg-6">
				<h4>演習用アプリ</h4>
				<ul>
					<li><a href="1.php">1.php</a> <small><a href="view-source.php?file=1.php">(ソースコードを見る)</a></small></li>
					<li><a href="2.php">2.php</a> <small><a href="view-source.php?file=2.php">(ソースコードを見る)</a></small></li>
					<li><a href="3.php">3.php</a> <small><a href="view-source.php?file=3.php">(ソースコードを見る)</a></small></li>
					<li><a href="4.php">4.php</a> <small><a href="view-source.php?file=4.php">(ソースコードを見る)</a></small></li>
					<li><a href="2_quote.php">2_quote.php</a> <small><a href="view-source.php?file=2_quote.php">(ソースコードを見る)</a></small></li>
					<li><a href="2_prepare.php">2_prepare.php</a> <small><a href="view-source.php?file=2_prepare.php">(ソースコードを見る)</a></small></li>
					<li><a href="5.php">5.php</a> <small><a href="view-source.php?file=5.php">(ソースコードを見る)</a></small></li>
					<li><a href="6.php">6.php</a> <small><a href="view-source.php?file=6.php">(ソースコードを見る)</a></small></li>
				</ul>
				<h4>攻撃コード</h4>
				<ul>
					<li>exploit1.php <small><a href="view-source.php?file=exploit1.php">(ソースコードを見る)</a></small></li>
					<li>exploit1_binary.php <small><a href="view-source.php?file=exploit1_binary.php">(ソースコードを見る)</a></small></li>
					<li>exploit2.php <small><a href="view-source.php?file=exploit2.php">(ソースコードを見る)</a></small></li>
				</ul>
				<h4>その他</h4>
				<ul>
					<li><a href="hello.php">hello.php</a> <small><a href="view-source.php?file=hello.php">(ソースコードを見る)</a></small></li>
					<li><a href="0.html">0.html</a> <small><a href="view-source.php?file=0.html">(ソースコードを見る)</a></small></li>
				</ul>
				<h4>演習問題</h4>
				<ul>
					<li><a href="ctf.php">演習問題ページへ</a></li>
				</ul>
			</div>
			<div class="col-lg-6">
				<iframe src="update.php"></iframe>
			</div>
		</div>
		
		<div class="jumbotron">
			<h2>正誤表</h2>
			<table class="table table-bordered">
				<tr>
					<th>ページ</th>
					<th>誤</th>
					<th>正</th>
				</tr>
				<tr>
					<td>p.62</td>
					<td>$ docker exec -it sqli mysql db</td>
					<td>$ docker exec -it sqli mysql <strong>db2</strong></td>
				</tr>
			</table>
			<div>以上の通り、お詫びして訂正いたします。</div>
		</div>
		
		<footer class="footer">
			<p>© 2016 <a href="http://narusejun.com">NaruseJun</a></p>
		</footer>
	</div>
</body>
</html>
