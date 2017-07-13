<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines &ndash; Patterns &ndash; Panel</title>
	<link rel="stylesheet" href="css/build/style_v8-2.css">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Patterns &ndash; Panel</h2>
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
					<h4></h4>
					<img src="img/guide/p_panel_01.png" alt="Panel">
				</section>
				<aside>
					<dl class="related">
						<dt>Related Content</dt>
						<dd class="pg_link"><a href="card.php">Card Component</a></dd>
					</dl>
					<!-- -->
					<dl class="dl_root">
						<dt>Panel</dt>
						<dd class="note">See Card Component</dd>
						<dd>Padding: <span class="pxrem">24px</span></dd>
						<dd>Margin: <span class="pxrem">24px</span></dd>
						<!-- -->
						<dt>Title</dt>
						<dd>Text: 20px (15pt) <span title="Gray 800" class="theme">#354052</span></dd>
						<dd>Case: Capitalize</dd>
						<dd>Title Bar Height: <span class="pxrem">42px</span></dd>
						<dd>Divider: <span class="pxrem">1px</span> <span title="Gray 400" class="theme">#BBCCDD</span></dd>
					</dl>
				</aside>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
