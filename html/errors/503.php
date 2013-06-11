<?
$words = include 'words.php';
$word = $words [array_rand ( $words, 1 )];
if (preg_match ( '/^local/i', $_SERVER ['HTTP_HOST'] ) > 0) {
	$cdn = '//local.destiny.cdn';
} else {
	$cdn = '//cdn.destiny.gg';
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Maintenance</title>
<link href="<?=$cdn?>/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="<?=$cdn?>/errors/errors.css" rel="stylesheet" media="screen">
<link rel="shortcut icon" href="<?=$cdn?>/favicon.png">
<?include'ga.php'?>
</head>
<body class="error maintenance">

	<section id="header-band">
		<div class="container">
			<header class="hero-unit" id="overview">
				<div class="clearfix">
					<h1>
						<strong><?=$word?>!</strong> Down for maintenance
					</h1>
					<p>Hamster #<?=rand(1000, 9999)?> is being replaced. The site will be back up in about <strong>5</strong> minutes</p>
				</div>
				<div id="destiny-illustration"></div>
			</header>
		</div>
	</section>
	
	<?include'foot.php'?>
	
	<script src="<?=$cdn?>/js/vendor/jquery-1.9.1.min.js"></script>
	<script src="<?=$cdn?>/js/vendor/bootstrap.js"></script>

</body>
</html>