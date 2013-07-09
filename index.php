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
		<form method="post" action="shorten.php" id="shortener">
			<label for="longurl" >URL to shorten (http(s)://)</label> <input type="text" name="longurl" id="longurl" /> <input type="submit" value="Shorten" /><br/>
		</form>
		<span id="shorturl" >Shortened URL:<span></span></span>
	</body>
</html>