<?php
	include("util.php");
	session_start();
	$langue = $_SESSION[ "lang" ];
	$content = get_content($langue,"contact");
	
?>
<!DOCTYPE html>
<html lang="<?php echo $langue; ?>">
	<head>
		<meta charset="utf-8">
		<title><?php echo $content[ "title" ]; ?></title>
		<meta name="author" content="Marc Gaetano">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<link rel="stylesheet" href="../css/tp3.css">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<h1>TP 3 - Exo 5</h1>
		<hr>

		<div id="menu">
			<a href="contact.php?lang=fr">fr</a>
			<a href="contact.php?lang=en">en</a>
			<a href="contact.php?lang=it">it</a>
		</div>
        <!-- à compléter -->
		<h2><?php echo $content["title"]; ?></h2>
		<ul>
			<li><?php echo $content["email"]; ?>: <a href="mailto:contact@multilingue.com">mailto:contact@multilingue.com</a></li>
			<li><?php echo $content["phone"]; ?>: +33 4 12 34 56 78</li>
		</ul>
        
		<div id="link">
			<?php echo $content[ "linktext" ]; ?>
			<div>
				<a href="index.php"><?php echo $content[ "linkhome" ]; ?></a>
				<a href="products.php"><?php echo $content[ "linkproducts" ]; ?></a>
				<a href="contact.php"><?php echo $content[ "linkcontact" ]; ?></a>
			</div>
		</div>
	</body>
</html>
