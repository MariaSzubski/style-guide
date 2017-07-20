<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines &ndash; Components &ndash; Tooltip</title>
	<link rel="stylesheet" href="css/build/style_v8-2.css">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Components &ndash; Tooltip</h2>
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
						<dd>Corner Radius: <span class="pxrem">4px</span></dd>
						<dd>Padding: <span class="pxrem">16px</span></dd>
						<dd>Text: 13px (9pt) <span title="Gray 900" class="theme">#151921</span></dd>
						<dd>Box Shadow: <span class="pxrem">0px</span> <span class="pxrem">2px</span> <span class="pxrem">3px</span> rgba(0,0,0,.45)</dd>
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
