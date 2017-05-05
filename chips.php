<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - Chips</title>
	<link rel="stylesheet" href="css/build/style.css" charset="utf-8">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Chips</h2>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<section>
					<h4>Large Chip</h4>
					<img src="img/guide/chips_01.png" alt="Basic Chip">
				</section>
				<section>
					<h4>Small Chip</h4>
					<img src="img/guide/chips_02.png" alt="Static Chip">
				</section>
				<aside>
					<dl class="dl_root">
						<dt>Chips</dt>
						<dd>[Large Text Typestyle]</dd>
						<dd>Text: 15px (11pt) #FFFFFF</dd>
						<dd>Background: #838F93</dd>
						<dd>Corner Radius: 12px</dd>
						<dd>Height: 24px</dd>
					</dl>
				</aside>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
