<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - App Bar</title>
	<link rel="stylesheet" href="css/build/style.css" charset="utf-8">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">App Bar</h2>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<section>
					<h4>App Bar</h4>
					<img src="img/guide/app_bar_01.png" alt="App Bar">
				</section>
				<section>
					<h4>Icon Selected State</h4>
					<img src="img/guide/app_bar_02.png" alt="Icon Selected State">
				</section>
				<aside>
					<dl>
						<dt>App Bar</dt>

						<dd>Background: #FFFFFF</dd>
						<dd>Height: 50px</dd>
						<dd>App Name: Knockout 26px (20pt)</dd>
						<dd>Text: #354052</dd>
						<dd>Weight: 48 Featherweight</dd>
						<dd>Case: Uppercase</dd>
						<dd>Box Shadow: 0px 2px 3px rgba(0,0,0,.25)</dd>
						<dd>Angular Shadow: 4dp</dd>
						<!-- -->
						<dd>
							<dl class="sub">
								<dt>Header Image</dt>
								<dd>Height: 5px
								<dd class="note">Texture: app_bar_texture.png</dd>
								<dt>Icons</dt>
								<dd>Unselected: #354052</dd>
								<dd>Selected: #EDEEF0</dd>
								<dd>Selected Background: #354052</dd>
							</dl>
						</dd>
					</dl>
				</aside>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
