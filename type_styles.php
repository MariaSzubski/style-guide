<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - Type Styles</title>
	<link rel="stylesheet" href="css/build/style_v8-1.css" charset="utf-8">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Type Styles</h2>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<section class="full">
					<h4></h4>
					<img src="img/guide/type_styles_01.png" alt="Type Styles">
				</section>
				<section class="full desc">
					<h4>Open Sans</h4>
					<p>
						Access <a href="https://fonts.google.com/specimen/Open+Sans?selection.family=Open+Sans:400,600,700" target="blank">Open Sans</a> on Google Fonts in weights 400, 600, and 700.
					</p>
				</section>
				<section class="full desc">
					<h4>Knockout</h4>
					<p>
						To receive access to Knockout, please <a href="https://goo.gl/forms/CXs2n3vbWpNp2FSv2" target="blank">complete this form</a>.
					</p>
				</section>

			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
