<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - Select</title>
	<link rel="stylesheet" href="css/build/style.css" charset="utf-8">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Select</h2>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<section>
					<h4>Input Select Field</h4>
					<img src="img/guide/select_01.png" alt="Input Select Field">
				</section>
				<section>
					<h4>Toolbar Select Field</h4>
					<img src="img/guide/select_02.png" alt="Alternate Select Field">
				</section>
				<aside>
					<dl>
						<dt>Input Select</dt>
						<dd class="note">See Input component</dd>
						<dd>Row Height: 36px</dd>
						<!-- -->
						<dt>Toolbar Select</dt>
						<dd>
							<dl class="sub">
								<dt>Selector</dt>
								<dd>Text: 13px (9pt) #354052</dd>
								<dd>Font Weight: 600</dd>
								<!-- -->
								<dt>Menu</dt>
								<dd>Border: 1px #A8AFB3</dd>
								<dd>Row Height: 48px</dd>
								<dd>Corner Radius: 4px</dd>
								<dd>Section Divider: 1px #DDE6ED</dd>
								<dd>Text: 13px (9pt) #354052</dd>
								<dd>Font Weight: 400</dd>
							</dl>
						</dd>
						<!-- -->
						<dt>Menu Item States</dt>
						<dd>Hover Background: #D4EEFD</dd>
						<dd>Selected Background: #354052</dd>
						<dd>Selected Content: #EDEEF0</dd>
						<!-- -->
						<dt>Icons</dt>
						<dd class="note">Menu item icons are optional.</dd>
					</dl>
				</aside>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
