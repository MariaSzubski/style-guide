<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines &ndash; Components &ndash; Card</title>
	<link rel="stylesheet" href="css/build/style_v8-2.css">
</head>
<body>
	<main class="default_state">
		<header>
		<h2 id="pg_header">Components &ndash; Card</h2>
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
					<h4>Default Card</h4>
					<img src="img/guide/card_01.png" alt="Default Card">
				</section>
				<section>
					<h4>Locked Card</h4>
					<img src="img/guide/card_02.png" alt="Locked Card">
				</section>
				<aside>
					<dl class="related">
						<dt>Related Content</dt>
						<dd class="pg_link"><a href="p_card_horizontal.php">Horizontal Card Patterns</a></dd>
						<dd class="pg_link"><a href="p_card_vertical.php">Vertical Card Patterns</a></dd>
						<dd class="pg_link"><a href="p_card_panel.php">Panel Patterns</a></dd>
					</dl>
					<!-- -->
					<dl class="dl_root">
						<dt>Panel</dt>
						<dd>Background: #FFFFFF</dd>
						<dd>Locked Background: <span title="Gray 50" class="theme">#F5F9FC</span></dd>
						<dd>Box Shadow: <span class="pxrem">0px</span> <span class="pxrem">1px</span> <span class="pxrem">2px</span> rgba(0,0,0,.45)</dd>
						<dd>Angular Shadow: 2dp</dd>
						<dd>Padding: <span class="pxrem">16px</span></dd>
						<!-- -->
						<dt>Title</dt>
						<dd>Text: 15px (11pt)</dd>
						<dd>Weight: 600</dd>
						<dd>Line Height: <span class="pxrem">20px</span></dd>
						<dd>Padding from Top: <span class="pxrem">18px</span></dd>
					</dl>
				</aside>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
