<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - Sidenav (Left)</title>
	<link rel="stylesheet" href="css/build/style_v8-1.css" charset="utf-8">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Sidenav</h2>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<section>
					<h4>Sidenav Drawer</h4>
					<img src="img/guide/sidenav_01.png" alt="Sidenav Drawer">
				</section>
				<aside>
					<dl class="related">
						<dt>Related Content</dt>
						<dd class="pg_link"><a href="p_sidenav_left.php">Sidenav (Left) Patterns</a></dd>
						<dd class="pg_link"><a href="p_sidenav_right.php">Sidenav (Right) Patterns</a></dd>
					</dl>
					<!-- -->
					<dl class="dl_root">
						<dt>Layout</dt>
						<dd>Background: #FFFFFF</dd>
						<dd>Height: Browser Height</dd>
						<dd>Width: 350px</dd>
						<dd>Box Shadow: 2px 0px 3px rgba(0,0,0,.25)</dd>
						<dd>Angular Shadow: 4dp</dd>
						<!-- -->
						<dt>Menu Icon</dt>
						<dd>Background: <span title="Gray 800" class="theme">#354052</span></dd>
						<dd>Icon Color: <span title="Gray 100" class="theme">#EDEEF0</span></dd>
						<dd>Corner Radius: 4px</dd>
					</dl>
				</aside>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
