<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - Color</title>
	<link rel="stylesheet" href="css/build/style.css" charset="utf-8">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Color</h2>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<section class="full">
					<h4>Text Colors</h4>
					<img src="img/guide/colors_01.png" alt="Text Colors">
				</section>
				<section class="full">
					<h4>Layout Colors</h4>
					<img src="img/guide/colors_02.png" alt="Layout Colors">
				</section>
				<section class="full">
					<h4>Content Colors</h4>
					<img src="img/guide/colors_03.png" alt="Content Colors">
				</section>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
