<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - Menu Bar</title>
	<link rel="stylesheet" href="css/build/style.css" charset="utf-8">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Menu Bar</h2>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<section>
					<h4></h4>
					<img src="img/guide/menu_bar_01.png" alt="Menu Bar">
				</section>
				<aside>
					<dl>
						<dt>Selector</dt>
						<dd>Text: 13px (9pt) #354052</dd>
						<dd>Font Weight: 600</dd>
						<!-- -->
						<dt>Menu</dt>
						<dd>Border: 1px #A8AFB3</dd>
						<dd>Row Height: 36px</dd>
						<dd>Corner Radius: 4px</dd>
						<dd>Section Divider: 1px #DDE6ED</dd>
						<dd>Text: 13px (9pt) #354052</dd>
						<dd>Font Weight: 400</dd>
					</dl>
				</aside>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
