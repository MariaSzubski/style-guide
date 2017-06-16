<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - Chips</title>
	<link rel="stylesheet" href="css/build/style_v8-2.css" charset="utf-8">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Chips</h2>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<section>
					<h4>Large Chip</h4>
					<img src="img/guide/chips_01.png" alt="Basic Chip">
				</section>
				<section>
					<h4>Small Chip</h4>
					<img src="img/guide/chips_02.png" alt="Static Chip">
				</section>
				<aside>
					<dl class="related">
						<dt>Related Content</dt>
						<dd class="pg_link"><a href="p_chips.php">Chip Patterns</a></dd>
					</dl>
					<!-- -->
					<dl class="dl_root">
						<dt>Measurements</dt>
						<dd>
							<dl class="sub">
								<dt>Large</dt>
								<dd>Height: 24px</dd>
								<dd>Corner Radius: 12px</dd>
								<dd>Padding: 12px</dd>
								<dd>Text: 13px (10pt) <span title="Gray 600" class="theme">#79818C</span></dd>
								Margin Between Chips: 5px
								<!-- -->
								<dt>Small</dt>
								<dd>Height: 18px</dd>
								<dd>Corner Radius: 9px</dd>
								<dd>Padding: 10px</dd>
								<dd>Text: 11px (8pt) <span title="Gray 600" class="theme">#79818C</span></dd>
							</dl>
						</dd>
						<!-- -->
						<dt>States</dt>
						<dd>
							<dl class="sub">
								<dt>Default</dt>
								<dd>Border: 1px <span title="Gray 200" class="theme">#DDE6ED</span></dd>
								<dd>Background: #FFFFFF</dd>
								<!-- -->
								<dt>Hover</dt>
								<dd>Background: <span title="Gray 200" class="theme">#DDE6ED</span></dd>
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
