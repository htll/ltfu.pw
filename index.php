<!DOCTYPE html>
<html>
<head>
	<title>LTFU URL Shortener</title>
	<meta charset="UTF-8" />
	<meta name="robots" content="noindex, nofollow">
   	<link href="screen.css" rel="stylesheet" type="text/css" />
	<script src="jquery.min.js" type="text/javascript"></script>
	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Dosis:600' rel='stylesheet' type='text/css'>
	<script type="text/javascript">
		$(document).ready( function () {
			$('#shortener').submit(function () {
				$.ajax({data: {longurl: $('#longurl').val()}, url: 'shorten.php', complete: function (XMLHttpRequest, textStatus) {
					$('#longurl2').val(XMLHttpRequest.responseText);
					$('#longurl2').fadeIn();
				
				}});
				return false;
			});
				
		});
	</script>
</head>
<body>
	<a href="https://github.com/lethemfindus/ltfu.pw"><img style="position: absolute; top: 0; left: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_left_darkblue_121621.png" alt="Fork me on GitHub"></a>
	<div id="wrap">
		<header>
		<img src="banner.png" alt="LTFU: URL Shortener" />
		</header>
		<div id="main">
			<div id="form">
				<form method="post" action="shorten.php" id="shortener">
					<label for="longurl">URL to Shorten:</label> <input type="text" name="longurl" id="longurl"> <br /> <br /> <input type="submit" id="Shorten" value="Shorten!">
				</form> 
				<textarea id="longurl2"> </textarea>
			</div>
		</div>
	</div>
	<div id="footer">
		Visit our friendly community at <a href="http://lethemfind.us/community/">lethemfind.us</a> <br />
		<span id="contact">Contact <a href=http://lethemfind.us/community/user/824-sp%C3%B6klik/>Miku</a> if any problems arise and <a href="http://lethemfind.us/community/user/4085-k%C3%A4sespazzle/">1nsignia aka S0lll0s</a> for Github questions.</span>
	</div>
</body>
</html>
