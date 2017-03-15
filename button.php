<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - Button</title>
	<link rel="stylesheet" href="css/build/style.css" charset="utf-8">
</head>
<body>
	<main class="opened">
		<header>
			<h2 id="pg_header">Button</h2>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<section>
					<h4></h4>
					<img src="img/guide/button_01.svg" alt="Raised">
				</section>
				<section>
					<h4></h4>
					<img src="img/guide/button_02.svg" alt="Raised">
				</section>
				<section>
					<h4></h4>
					<img src="img/guide/button_03.svg" alt="Raised">
				</section>
				<section>
					<h4></h4>
					<img src="img/guide/button_04.svg" alt="Raised">
				</section>
				<aside>
				</aside>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
