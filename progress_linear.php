<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - Progress Linear</title>
	<link rel="stylesheet" href="css/build/style.css" charset="utf-8">
</head>
<body>
	<main class="opened">
		<header>
			<h2 id="pg_header">Progress Linear</h2>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<section>
					<h4></h4>
					<img src="img/guide/progress_linear_01.svg" alt="Progress Linear">
				</section>
				<aside>
					<dl>
						<dt>Progress Linear</dt>
						<dd>Height: 3px</dd>
						<dd>Track: 30% opacity</dd>
						<!-- -->
						<dt>App Category Colors</dt>
						<dd>Consumer (Blue): #009DD9</dd>
						<dd>Event (Yellow): #FFCD00</dd>
						<dd>Panelist (Orange): #FF8300</dd>
						<dd>Client (Green): #85C63F</dd>
						<dd>Internal (Purple): #9E28B5</dd>
					</dl>
				</aside>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
