<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - Card</title>
	<link rel="stylesheet" href="css/build/style_v8-1.css" charset="utf-8">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Card</h2>
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
						<dd class="pg_link"><a href="p_card.php">Card Patterns</a></dd>
						<dd class="pg_link"><a href="p_panel.php">Panel Patterns</a></dd>
					</dl>
					<!-- -->
					<dl class="dl_root">
						<dt>Panel</dt>
						<dd>Background: #FFFFFF</dd>
						<dd>Locked Background: <span title="Gray 50" class="theme">#F5F9FC</span></dd>
						<dd>Box Shadow: 0px 1px 2px rgba(0,0,0,.45)</dd>
						<dd>Angular Shadow: 2dp</dd>
						<dd>Padding: 16px</dd>
						<!-- -->
						<dt>Title</dt>
						<dd>Text: 15px (11pt)</dd>
						<dd>Weight: 600</dd>
						<dd>Line Height: 20px</dd>
						<dd>Top Margin: 18px</dd>
					</dl>
				</aside>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
