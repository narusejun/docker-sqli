<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>演習問題 | SQLi超入門</title>
	<link href="/bootstrap.min.css" rel="stylesheet">
	<link href="ctf.css" rel="stylesheet">
	<script type="text/javascript" src="zepto.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="header clearfix">
			<nav>
				<ul class="nav nav-pills pull-right">
					<li role="presentation"><a href="/">Home</a></li>
					<li role="presentation" class="active"><a href="javascript:">CTF</a></li>
				</ul>
			</nav>
			<h3 class="text-muted">SQLi超入門 演習</h3>
		</div>
		
		<div class="desc">
			<p>
				演習問題集です。
				本文を読んだあとの腕試しとしてトライしてください。
				★の数が多いほど難しい（めんどくさい）です。
				今のところ全部で２１問あります。
				半分以上の問題は本文中で説明した手法そのままか、ほんの少しだけ応用するだけで解けます。
			</p>
			<p>
				問題についての質問があれば <a href="https://twitter.com/N4RU5E">@N4RU5E</a> まで。
				問題・解法はネット上で自由に公開していただいて構いません。
			</p>
			<p>
				FLAGはすべて <strong>FLAG_{40文字の16進数文字列}</strong> の形式になっています。
			</p>
		</div>
		
		<div class="problem">
			<h1>Simple <small>(★)</small></h1>
			<p>
				<a href="1.php">このアプリ</a>からFLAGを探してください。
				<a href="/view-source.php?file=ctf/3.php">ソースコード</a>
			</p>
			<section>
				<a class="hint" href="#hint_1_1">ヒント１</a>
				<aside id="hint_1_1">第５章</aside>
			</section>
			<section>
				<a class="hint" href="#hint_1_2">ヒント２</a>
				<aside id="hint_1_2">adminでログインしましょう</aside>
			</section>
			<p>
				<label>FLAG: <input type="text" placeholder="FLAG_****************************************"></label>
				<button class="submit" id="p1">SUBMIT</button>
			</p>
		</div>
		
		<div class="problem">
			<h1>No one <small>(★★)</small></h1>
			<p>
				<a href="2.php">このアプリ</a>からFLAGを探してください。
				<a href="/view-source.php?file=ctf/2.php">ソースコード</a>
			</p>
			<section>
				<a class="hint" href="#hint_2_1">ヒント１</a>
				<aside id="hint_2_1">第６章</aside>
			</section>
			<section>
				<a class="hint" href="#hint_2_2">ヒント２</a>
				<aside id="hint_2_2">ユーザーを追加できないでしょうか</aside>
			</section>
			<section>
				<a class="hint" href="#hint_2_3">ヒント３</a>
				<aside id="hint_2_3">INSERT文でadminを追加しましょう</aside>
			</section>
			<p>
				<label>FLAG: <input type="text" placeholder="FLAG_****************************************"></label>
				<button class="submit" id="p2">SUBMIT</button>
			</p>
		</div>
		
		<div class="problem">
			<h1>Leak <small>(★★★)</small></h1>
			<p>
				<a href="3.php">このアプリ</a>からFLAGを探してください。
				<a href="/view-source.php?file=ctf/3.php">ソースコード</a>
			</p>
			<section>
				<a class="hint" href="#hint_3_1">ヒント１</a>
				<aside id="hint_3_1">第７章</aside>
			</section>
			<section>
				<a class="hint" href="#hint_3_2">ヒント２</a>
				<aside id="hint_3_2">FLAGはadminのパスワードです</aside>
			</section>
			<section>
				<a class="hint" href="#hint_3_3">ヒント３</a>
				<aside id="hint_3_3">UNION句</aside>
			</section>
			<p>
				<label>FLAG: <input type="text" placeholder="FLAG_****************************************"></label>
				<button class="submit" id="p3">SUBMIT</button>
			</p>
		</div>
		
		<div class="problem">
			<h1>Control <small>(★★★★)</small></h1>
			<p>
				<a href="4.php">このアプリ</a>からFLAGを探してください。
				<a href="/view-source.php?file=ctf/4.php">ソースコード</a>
			</p>
			<section>
				<a class="hint" href="#hint_4_1">ヒント１</a>
				<aside id="hint_4_1">第７章</aside>
			</section>
			<section>
				<a class="hint" href="#hint_4_2">ヒント２</a>
				<aside id="hint_4_2">PHP側でパスワードの照合をしています</aside>
			</section>
			<section>
				<a class="hint" href="#hint_4_3">ヒント３</a>
				<aside id="hint_4_3">SQLの結果を狙った文字列にできないでしょうか</aside>
			</section>
			<section>
				<a class="hint" href="#hint_4_4">ヒント４</a>
				<aside id="hint_4_4">UNION句</aside>
			</section>
			<p>
				<label>FLAG: <input type="text" placeholder="FLAG_****************************************"></label>
				<button class="submit" id="p4">SUBMIT</button>
			</p>
		</div>
		
		<div class="problem">
			<h1>Sight <small>(★★★★★)</small></h1>
			<p>
				<a href="5.php">このアプリ</a>からFLAGを探してください。
				<a href="/view-source.php?file=ctf/5.php">ソースコード</a>
			</p>
			<section>
				<a class="hint" href="#hint_5_1">ヒント１</a>
				<aside id="hint_5_1">第８章</aside>
			</section>
			<section>
				<a class="hint" href="#hint_5_2">ヒント２</a>
				<aside id="hint_5_2">FLAGはadminのパスワードです</aside>
			</section>
			<section>
				<a class="hint" href="#hint_5_3">ヒント３</a>
				<aside id="hint_5_3">ログイン後に表示される名前は入力した値そのままです</aside>
			</section>
			<section>
				<a class="hint" href="#hint_5_4">ヒント４</a>
				<aside id="hint_5_4">ある方法で前から１文字づつパスワードを知ることができます</aside>
			</section>
			<p>
				<label>FLAG: <input type="text" placeholder="FLAG_****************************************"></label>
				<button class="submit" id="p5">SUBMIT</button>
			</p>
		</div>
		
		<div class="problem">
			<h1>Sleepy <small>(★★★★★★)</small></h1>
			<p>
				<a href="6.php">このアプリ</a>からFLAGを探してください。
				<a href="/view-source.php?file=ctf/6.php">ソースコード</a>
			</p>
			<section>
				<a class="hint" href="#hint_6_1">ヒント１</a>
				<aside id="hint_6_1">第９章</aside>
			</section>
			<section>
				<a class="hint" href="#hint_6_2">ヒント２</a>
				<aside id="hint_6_2">FLAGはadminのパスワードです</aside>
			</section>
			<section>
				<a class="hint" href="#hint_6_3">ヒント３</a>
				<aside id="hint_6_3">SLEEP関数</aside>
			</section>
			<p>
				<label>FLAG: <input type="text" placeholder="FLAG_****************************************"></label>
				<button class="submit" id="p6">SUBMIT</button>
			</p>
		</div>
		
		<div class="problem">
			<h1>Out of a cage <small>(★★)</small></h1>
			<p>
				<a href="7.php">このアプリ</a>からFLAGを探してください。
				<a href="/view-source.php?file=ctf/7.php">ソースコード</a>
			</p>
			<section>
				<a class="hint" href="#hint_7_1">ヒント１</a>
				<aside id="hint_7_1">第１０章</aside>
			</section>
			<section>
				<a class="hint" href="#hint_7_2">ヒント２</a>
				<aside id="hint_7_2">INTO OUTFILE</aside>
			</section>
			<p>
				<label>FLAG: <input type="text" placeholder="FLAG_****************************************"></label>
				<button class="submit" id="p7">SUBMIT</button>
			</p>
		</div>
		
		<div class="problem">
			<h1>Touch <small>(★★★★)</small></h1>
			<p>
				<a href="8.php">このアプリ</a>からFLAGを探してください。
				<a href="/view-source.php?file=ctf/8.php">ソースコード</a>
			</p>
			<section>
				<a class="hint" href="#hint_8_1">ヒント１</a>
				<aside id="hint_8_1">第１０章</aside>
			</section>
			<section>
				<a class="hint" href="#hint_8_2">ヒント２</a>
				<aside id="hint_8_2">LOAD DATA INFILE</aside>
			</section>
			<p>
				<label>FLAG: <input type="text" placeholder="FLAG_****************************************"></label>
				<button class="submit" id="p8">SUBMIT</button>
			</p>
		</div>
		
		<div class="problem">
			<h1>Pattern <small>(★★)</small></h1>
			<p>
				<a href="9.php">このアプリ</a>からFLAGを探してください。
				<a href="/view-source.php?file=ctf/9.php">ソースコード</a>
			</p>
			<section>
				<a class="hint" href="#hint_9_1">ヒント１</a>
				<aside id="hint_9_1">PHPコードの認証部分はSimpleと全く同じです</aside>
			</section>
			<section>
				<a class="hint" href="#hint_9_2">ヒント２</a>
				<aside id="hint_9_2">ブラウザのパターンマッチ機能を回避する必要がありそうです</aside>
			</section>
			<section>
				<a class="hint" href="#hint_9_3">ヒント３</a>
				<aside id="hint_9_3">curlなどを使うか、inputのpattern属性を消します</aside>
			</section>
			<p>
				<label>FLAG: <input type="text" placeholder="FLAG_****************************************"></label>
				<button class="submit" id="p9">SUBMIT</button>
			</p>
		</div>
		
		<div class="problem">
			<h1>Schema I <small>(★★★★)</small></h1>
			<p>
				<a href="10.php">このアプリ</a>からFLAGを探してください。
				<a href="/view-source.php?file=ctf/10.php">ソースコード</a>
			</p>
			<section>
				<a class="hint" href="#hint_10_1">ヒント１</a>
				<aside id="hint_10_1">第７章</aside>
			</section>
			<section>
				<a class="hint" href="#hint_10_2">ヒント２</a>
				<aside id="hint_10_2">FLAGはテーブル名です</aside>
			</section>
			<section>
				<a class="hint" href="#hint_10_3">ヒント３</a>
				<aside id="hint_10_3">INFORMATION_SCHEMA.TABLESを参照します</aside>
			</section>
			<section>
				<a class="hint" href="#hint_10_4">ヒント３</a>
				<aside id="hint_10_4">ノイズとなる情報が多いのでWHEREで結果を減らす必要がありそうです</aside>
			</section>
			<p>
				<label>FLAG: <input type="text" placeholder="FLAG_****************************************"></label>
				<button class="submit" id="p10">SUBMIT</button>
			</p>
		</div>
		
		<div class="problem">
			<h1>Schema II <small>(★★★★)</small></h1>
			<p>
				<a href="11.php">このアプリ</a>からFLAGを探してください。
				<a href="/view-source.php?file=ctf/11.php">ソースコード</a>
			</p>
			<section>
				<a class="hint" href="#hint_11_1">ヒント１</a>
				<aside id="hint_11_1">基本的な戦略はSchema Iと同じです</aside>
			</section>
			<section>
				<a class="hint" href="#hint_11_2">ヒント２</a>
				<aside id="hint_11_2">FLAGは列名です</aside>
			</section>
			<section>
				<a class="hint" href="#hint_11_3">ヒント３</a>
				<aside id="hint_11_3">INFORMATION_SCHEMA.COLUMNSを参照します</aside>
			</section>
			<p>
				<label>FLAG: <input type="text" placeholder="FLAG_****************************************"></label>
				<button class="submit" id="p11">SUBMIT</button>
			</p>
		</div>
		
		<div class="problem">
			<h1>Deep into the DB <small>(★★★★★)</small></h1>
			<p>
				<a href="12.php">このアプリ</a>からFLAGを探してください。
				<a href="/view-source.php?file=ctf/12.php">ソースコード</a>
			</p>
			<section>
				<a class="hint" href="#hint_12_1">ヒント１</a>
				<aside id="hint_12_1">第７章</aside>
			</section>
			<section>
				<a class="hint" href="#hint_12_2">ヒント２</a>
				<aside id="hint_12_2">FLAGはこのスクリプトで触れていないテーブルに格納されています</aside>
			</section>
			<section>
				<a class="hint" href="#hint_12_3">ヒント３</a>
				<aside id="hint_12_3">テーブル名や列名をなんとか手に入れたらUNION句で……</aside>
			</section>
			<p>
				<label>FLAG: <input type="text" placeholder="FLAG_****************************************"></label>
				<button class="submit" id="p12">SUBMIT</button>
			</p>
		</div>
		
		<div class="problem">
			<h1>Quoted I <small>(★)</small></h1>
			<p>
				<a href="13.php">このアプリ</a>からFLAGを探してください。
				<a href="/view-source.php?file=ctf/13.php">ソースコード</a>
			</p>
			<section>
				<a class="hint" href="#hint_13_1">ヒント１</a>
				<aside id="hint_13_1">第８章、第１１章</aside>
			</section>
			<section>
				<a class="hint" href="#hint_13_2">ヒント２</a>
				<aside id="hint_13_2">一見正しくエスケープされているようですが……？</aside>
			</section>
			<section>
				<a class="hint" href="#hint_13_3">ヒント３</a>
				<aside id="hint_13_3">LIKE演算子に着目しましょう</aside>
			</section>
			<section>
				<a class="hint" href="#hint_13_4">ヒント４</a>
				<aside id="hint_13_4">プリペアドステートメントはパターンマッチにおいて意味のある文字を無効化しません</aside>
			</section>
			<p>
				<label>FLAG: <input type="text" placeholder="FLAG_****************************************"></label>
				<button class="submit" id="p13">SUBMIT</button>
			</p>
		</div>
		
		<div class="problem">
			<h1>Quoted II <small>(★★)</small></h1>
			<p>
				<a href="14.php">このアプリ</a>からFLAGを探してください。
				<a href="/view-source.php?file=ctf/14.php">ソースコード</a>
			</p>
			<section>
				<a class="hint" href="#hint_14_1">ヒント１</a>
				<aside id="hint_14_1">基本的な戦略はQuoted Iと同じです</aside>
			</section>
			<section>
				<a class="hint" href="#hint_14_2">ヒント２</a>
				<aside id="hint_14_2">パターンマッチにおいて意味のある文字には何がありましたか？</aside>
			</section>
			<section>
				<a class="hint" href="#hint_14_3">ヒント３</a>
				<aside id="hint_14_3">正規表現の文字クラス\Wは、大小英数字とアンダーバー以外の文字にヒットします</aside>
			</section>
			<p>
				<label>FLAG: <input type="text" placeholder="FLAG_****************************************"></label>
				<button class="submit" id="p14">SUBMIT</button>
			</p>
		</div>
		
		<div class="problem">
			<h1>Golf I <small>(★)</small></h1>
			<p>
				<a href="15.php">このアプリ</a>からFLAGを探してください。
				<a href="/view-source.php?file=ctf/15.php">ソースコード</a>
			</p>
			<section>
				<a class="hint" href="#hint_15_1">ヒント１</a>
				<aside id="hint_15_1">ユーザ名が５文字までなのでパスワード照合SQLをコメントアウトすることができません</aside>
			</section>
			<section>
				<a class="hint" href="#hint_15_2">ヒント２</a>
				<aside id="hint_15_2">パスワードをうまく調節して照合を回避できないでしょうか</aside>
			</section>
			<section>
				<a class="hint" href="#hint_15_3">ヒント３</a>
				<aside id="hint_15_3">ORをうまく使うか、またはUNION句</aside>
			</section>
			<p>
				<label>FLAG: <input type="text" placeholder="FLAG_****************************************"></label>
				<button class="submit" id="p15">SUBMIT</button>
			</p>
		</div>
		
		<div class="problem">
			<h1>Golf II <small>(★★)</small></h1>
			<p>
				<a href="16.php">このアプリ</a>からFLAGを探してください。
				<a href="/view-source.php?file=ctf/16.php">ソースコード</a>
			</p>
			<section>
				<a class="hint" href="#hint_16_1">ヒント１</a>
				<aside id="hint_16_1">ユーザ名が１文字までなのでユーザ名をadminとすることができません</aside>
			</section>
			<section>
				<a class="hint" href="#hint_16_2">ヒント２</a>
				<aside id="hint_16_2">UNION句</aside>
			</section>
			<p>
				<label>FLAG: <input type="text" placeholder="FLAG_****************************************"></label>
				<button class="submit" id="p16">SUBMIT</button>
			</p>
		</div>
		
		<div class="problem">
			<h1>Golf III <small>(★★★★★)</small></h1>
			<p>
				<a href="17.php">このアプリ</a>からFLAGを探してください。
				<a href="/view-source.php?file=ctf/17.php">ソースコード</a>
			</p>
			<section>
				<a class="hint" href="#hint_17_1">ヒント１</a>
				<aside id="hint_17_1">使える文字が非常に少ないので、できることが限られています</aside>
			</section>
			<section>
				<a class="hint" href="#hint_17_2">ヒント２</a>
				<aside id="hint_17_2">SQL文中のANDを無効化できないでしょうか</aside>
			</section>
			<section>
				<a class="hint" href="#hint_17_3">ヒント３</a>
				<aside id="hint_17_3">シングルクォートは2つ連続するとエスケープされたことになります</aside>
			</section>
			<p>
				<label>FLAG: <input type="text" placeholder="FLAG_****************************************"></label>
				<button class="submit" id="p17">SUBMIT</button>
			</p>
		</div>
		
		<div class="problem">
			<h1>Golf IV <small>(★★★★★★)</small></h1>
			<p>
				<a href="18.php">このアプリ</a>からFLAGを探してください。
				<a href="/view-source.php?file=ctf/18.php">ソースコード</a>
			</p>
			<section>
				<a class="hint" href="#hint_18_1">ヒント１</a>
				<aside id="hint_18_1">基本的な戦略はGolf IIIと同じです</aside>
			</section>
			<section>
				<a class="hint" href="#hint_18_2">ヒント２</a>
				<aside id="hint_18_2">演算子の評価順序に着目しましょう</aside>
			</section>
			<section>
				<a class="hint" href="#hint_18_3">ヒント３</a>
				<aside id="hint_18_3">INTの0、FALSEリテラル、空文字列などは同じものとして比較されます</aside>
			</section>
			<p>
				<label>FLAG: <input type="text" placeholder="FLAG_****************************************"></label>
				<button class="submit" id="p18">SUBMIT</button>
			</p>
		</div>
		
		<div class="problem">
			<h1>Dup <small>(★★)</small></h1>
			<p>
				<a href="19.php">このアプリ</a>からFLAGを探してください。
				<a href="/view-source.php?file=ctf/19.php">ソースコード</a>
			</p>
			<section>
				<a class="hint" href="#hint_19_1">ヒント１</a>
				<aside id="hint_19_1">第１３章</aside>
			</section>
			<section>
				<a class="hint" href="#hint_19_2">ヒント２</a>
				<aside id="hint_19_2">既に存在するユーザと同名で登録できるようです</aside>
			</section>
			<section>
				<a class="hint" href="#hint_19_3">ヒント３</a>
				<aside id="hint_19_3">同じ名前のユーザを作成してパスワードを変更すると……？</aside>
			</section>
			<p>
				<label>FLAG: <input type="text" placeholder="FLAG_****************************************"></label>
				<button class="submit" id="p19">SUBMIT</button>
			</p>
		</div>
		
		<div class="problem">
			<h1>0x20 <small>(★★★)</small></h1>
			<p>
				<a href="20.php">このアプリ</a>からFLAGを探してください。
				<a href="/view-source.php?file=ctf/20.php">ソースコード</a>
			</p>
			<section>
				<a class="hint" href="#hint_20_1">ヒント１</a>
				<aside id="hint_20_1">第１３章</aside>
			</section>
			<section>
				<a class="hint" href="#hint_20_2">ヒント２</a>
				<aside id="hint_20_2">同じ名前のユーザが作成されないようなチェックが行われています</aside>
			</section>
			<section>
				<a class="hint" href="#hint_20_3">ヒント３</a>
				<aside id="hint_20_3">テーブルの制約上ユーザ名の文字数に制限があるようです</aside>
			</section>
			<section>
				<a class="hint" href="#hint_20_4">ヒント４</a>
				<aside id="hint_20_4">SQLにおける空白文字の扱いは……？</aside>
			</section>
			<p>
				<label>FLAG: <input type="text" placeholder="FLAG_****************************************"></label>
				<button class="submit" id="p20">SUBMIT</button>
			</p>
		</div>
		
		<div class="problem">
			<h1>Inside out <small>(★★★★)</small></h1>
			<p>
				<a href="21.php">このアプリ</a>からFLAGを探してください。
				<a href="/view-source.php?file=ctf/21.php">ソースコード</a>
			</p>
			<section>
				<a class="hint" href="#hint_21_1">ヒント１</a>
				<aside id="hint_21_1">第１２章</aside>
			</section>
			<section>
				<a class="hint" href="#hint_21_2">ヒント２</a>
				<aside id="hint_21_2">ユーザ名がきちんとエスケープされています</aside>
			</section>
			<section>
				<a class="hint" href="#hint_21_3">ヒント３</a>
				<aside id="hint_21_3">パスワード変更時にはデータベースから取得した値をそのまま展開しているようです</aside>
			</section>
			<p>
				<label>FLAG: <input type="text" placeholder="FLAG_****************************************"></label>
				<button class="submit" id="p21">SUBMIT</button>
			</p>
		</div>
		
		<footer class="footer">
			<p>© 2016 <a href="http://narusejun.com">NaruseJun</a></p>
		</footer>
	</div>
	<script>
		$(".hint").on("click", function(){
			$($(this).attr("href")).css("display", "inline");
			$(this).replaceWith($(this).text() + "：");
			return false;
		});
		$(".submit").on("click", function(){
			var $m = $(this);
			$.ajax({
				url: "submit.php",
				data: {
					id: $m.attr("id"),
					flag: $m.parent().find("input").val().trim()
				},
				success: function(result){
					if(/ok/.test(result)){
						alert("Correct! Nice work.")
						localStorage[$m.attr("id")] = true;
						$m.parent().replaceWith("<span class='solved'>✓ Solved</span>");
					}else{
						alert("Wrong...");
					}
				}
			});
		});
		Object.keys(localStorage).forEach(function(key){
			$("#" + key).parent().replaceWith("<span class='solved'>✓ Solved</span>");
		});
	</script>
</body>
</html>
