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
			<h2 id="pg_header">Tooltip Patterns</h2>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<section>
					<h4></h4>
					<img src="img/guide/p_tooltip_01.png" alt="Basic Tooltip">
				</section>
				<aside>
					<dl class="related">
						<dt>Related Content</dt>
						<dd class="pg_link"><a href="tooltip.php">Tooltip Component</a></dd>
						<dd class="pg_link"><a href="p_reporting_palette.php">Reporting Palette</a></dd>
					</dl>
					<!-- -->
					<dl class="dl_root">
						<dt>Themes</dt>
						<dd>
							<dl class="sub">
								<dt>Dark</dt>
								<dd>Text: 13px (10pt) #EDEEF0</dd>
								<dd>Background: #354052</dd>
								<!-- -->
								<dt>Light</dt>
								<dd>Text: 13px (10pt) #151921</dd>
								<dd>Background: #FFFFFF</dd>
							</dl>
						</dd>
						<dt>Data Tooltip</dt>
						<dd>
							<dl class="sub">
								<dt>Accent Color</dt>
								<dd>Border: 2px #FFFFFF</dd>
								<dd>Background: Matches Data</dd>
								<!-- -->
								<dt>Data Value</dt>
								<dd>Text: 24pt (18pt)</dd>
								<!-- -->
								<dt>Label</dt>
								<dd>Text: 12px (9pt)</dd>
								<dd>Case: Uppercase</dd>
								<dd>Weight: 600</dd>
								<dd>Line Height: 20px</dd>
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
