<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines &ndash; Components &ndash; Sidenav</title>
	<link rel="stylesheet" href="css/build/style_v8-2.css">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Components &ndash; Sidenav</h2>
			<div class="btn-group" role="group">
				Units:
				<button type="button" id="size-px" class="btn-selected">px</button><button type="button" id="size-rem">rem</button>
			</div>
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
						<dd>Width: <span class="pxrem">350px</span></dd>
						<dd>Box Shadow: <span class="pxrem">2px</span> <span class="pxrem">0px</span> <span class="pxrem">3px</span> rgba(0,0,0,.25)</dd>
						<dd>Angular Shadow: 4dp</dd>
						<!-- -->
						<dt>Menu Icon</dt>
						<dd>Background: <span title="Gray 800" class="theme">#354052</span></dd>
						<dd>Icon Color: <span title="Gray 100" class="theme">#EDEEF0</span></dd>
						<dd>Corner Radius: <span class="pxrem">4px</span></dd>
					</dl>
				</aside>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
