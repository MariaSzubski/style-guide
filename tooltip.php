<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - Tooltip</title>
	<link rel="stylesheet" href="css/build/style.css" charset="utf-8">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Tooltip</h2>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<section>
					<h4></h4>
					<img src="img/guide/tooltip_01.png" alt="Basic Tooltip">
				</section>
				</section>
				<aside>
					<dl class="related">
						<dt>Related Content</dt>
						<dd class="pg_link"><a href="p_tooltip.php">Tooltip Patterns</a></dd>
					</dl>
					<!-- -->
					<dl class="dl_root">
						<dt>Tooltip</dt>
						<dd>Background: #FFFFFF</dd>
						<dd>Corner Radius: 4px</dd>
						<dd>Padding: 16px</dd>
						<dd>Text: 13px (9pt) <span title="Gray 900" class="theme">#151921</span></dd>
						<dd>Box Shadow: 0px 2px 3px rgba(0,0,0,.45)</dd>
						<dd>Angular Shadow: 4dp</dd>
					</dl>
				</aside>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
