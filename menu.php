<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - Menu</title>
	<link rel="stylesheet" href="css/build/style.css" charset="utf-8">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Menu</h2>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<section>
					<h4></h4>
					<img src="img/guide/menu_01.svg" alt="">
				</section>
				<aside>
					<dl>
						<dt>Menu</dt>
						<dd>[Large Text Typestyle]</dd>
						<dd>Text: 15px (11pt) #354052</dd>
						<dd>Row Height: 48px</dd>
						<dd>Corner Radius: 4px</dd>
						<dd>Border: 1px #BBCCDB</dd>
						<dd>Dividers: 1px #DDE6ED</dd>
						<!-- -->
						<dt>Icons</dt>
						<dd>Icon Color: #354052</dd>
						<dd class="note">Menu item icons are optional.</dd>
						<!-- -->
						<dt>States</dt>
						<dd>Hover Background: #D4EEFD</dd>
						<dd>Selected Background: #354052</dd>
						<dd>Selected Content: #EDEEF0</dd>

					</dl>
				</aside>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
