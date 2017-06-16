<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines &ndash; Patterns &ndash; App Bar</title>
	<link rel="stylesheet" href="css/build/style_v8-2.css" charset="utf-8">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">App Bar Patterns</h2>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<section>
					<h4>App Bar</h4>
					<img src="img/guide/p_app_bar_01.png" alt="App Bar">
				</section>
				<section>
					<h4>Icon Selected State</h4>
					<img src="img/guide/p_app_bar_02.png" alt="Icon Selected State">
				</section>
				<aside>
					<dl class="dl_root">
						<dt>Container</dt>
						<dd>
							<dl class="sub">
								<dt>Data Texture</dt>
								<dd>Height: 5px</dd>
								<dd class="note">Texture: app_bar_texture.png</dd>
								<!-- -->
								<dt>Toolbar</dt>
								<dd>Background: #FFFFFF</dd>
								<dd>Height: 50px</dd>
								<dd>Padding-Left: 13px</dd>
								<dd>Padding-Right: 24px</dd>
								<dd>Box Shadow: 0px 2px 3px rgba(0,0,0,.25)</dd>
								<dd>Angular Shadow: 4dp</dd>
							</dl>
						</dd>
						<!-- -->
						<dt>Content</dt>
						<dd>
							<dl class="sub">
								<dt>App Name</dt>
								<dd>Text: Knockout 26px (20pt)</dd>
								<dd>Color: <span title="Gray 800" class="theme">#354052</span></dd>
								<dd>Weight: 48 Featherweight</dd>
								<dd>Case: Uppercase</dd>
								<!-- -->
								<dt>Page Name</dt>
								<dd>Text: Knockout 26px (20pt)</dd>
								<dd>Color: <span title="Gray 800" class="theme">#354052</span></dd>
								<dd>Weight: 28 Junionr Featherweight</dd>
								<dd>Case: Uppercase</dd>
								<!-- -->
								<dt>Icons</dt>
								<dd>Size: 16px</dd>
								<dd>Margin Between Icons: 24px</dd>
								<dd>Color: <span title="Gray 800" class="theme">#354052</span></dd>
								<dd>Selected Color: <span title="Gray 100" class="theme">#EDEEF0</span></dd>
								<dd>Selected BG: <span title="Gray 800" class="theme">#354052</span></dd>
								<dd>Selected Square: 24px</dd>
								<!-- -->
								<dt>N Square</dt>
								<dd>Size: 24px</dd>
								<dd>Icon: n_square.svg</dd>
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
