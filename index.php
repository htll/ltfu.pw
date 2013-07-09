<!DOCTYPE html>
<html>
	<head>
		<title>URL shortener</title>
		<meta name="robots" content="noindex, nofollow">
		<link rel="stylesheet" type="text/css" href="screen.css" />
		<script type="text/javascript" src="jquery.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function () {
				$('#shortener').submit(function () {
					$.ajax({data: {longurl: $('#longurl').val()}, url: 'shorten.php', complete: function (XMLHttpRequest, textStatus) {
						$('#shorturl span').val(XMLHttpRequest.responseText);
					}});
					$('#shorturl').fadeIn();
					return false;
				});
			});
		</script>
	</head>
	<body>
		<a href="https://github.com/lethemfindus/ltfu.pw"><img style="position: absolute; top: 0; left: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_left_white_ffffff.png" alt="Fork me on GitHub"></a>		
		<header>
			<h1 id="title">ltfu.pw</h1>
			<p>
				The Original <a href="http://lethemfind.us/community/">lethemfind.us</a> URL Shortener
			</p>
		</header>
		<article>
			<form method="post" action="shorten.php" id="shortener">
				<label for="longurl" >URL to shorten (http(s)://)</label> <input type="text" name="longurl" id="longurl" /><br/>
				<input type="submit" value="Shorten" />
			</form>
			<span id="shorturl" >Shortened URL:<span></span></span>
		</article>
		<footer>
			<span id="left">
				<a href="https://github.com/lethemfindus/ltfu.pw">View on Github</a><br/>
				Download <a href="https://github.com/lethemfindus/ltfu.pw/zipball/master">zip</a> <a href="https://github.com/lethemfindus/ltfu.pw/master">tar</a>
			</span>
			ltfu.pw by <a href="http://lethemfind.us/community/user/824-Miku/">Miku</a>, design by <a href="http://lethemfind.us/community/user/824-1nsignia/">1nsignia aka S0lll0s</a><br/>
			Visit our friendly community at <a href="http://lethemfind.us/community/">lethemfind.us</a>
		</footer>
	</body>
</html>