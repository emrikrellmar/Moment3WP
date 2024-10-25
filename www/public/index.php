<html lang="sv">

<head>
	<meta charset="UTF-8">
	<title>Länka in med PHP</title>
	<link href="css/styleSheet.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div id="wrapper">
		<header>
			<?php include("inc/header.php"); ?>
		</header>

		<section id="leftColumn">
			<nav>
				<?php include("inc/meny.php"); ?>
			</nav>
			<aside>
				<?php include("inc/login.php"); ?>
			</aside>
		</section>

		<main>
			<section>
				<?php
				$page = "start";
				if (isset($_GET['page']))
					$page = $_GET['page'];

				switch ($page) {
					case 'blogg':
						include('pages/blogg.php');
						break;
					case 'bilder':
						include('pages/bilder.php');
						break;
					case 'kontakt':
						include('pages/kontakt.php');
						break;

					default:
						include('pages/start.php');
				}
				?>

			</section>
		</main>

		<footer>
			<?php include('inc/footer.php'); ?>
		</footer>
	</div>
</body>

</html>