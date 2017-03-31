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
					<h4>Basic Tooltip</h4>
					<img src="img/guide/tooltip_01.png" alt="Basic Tooltip">
				</section>
				<section>
					<h4>Data Tooltip</h4>
					<img src="img/guide/tooltip_02.png" alt="Data Tooltips">
				</section>
				<aside>
					<dl>
						<dt>Basic Tooltip</dt>
						<dd>Corner Radius: 4px</dd>
						<dd>Box Shadow: 0px 1px 2px rgba(0,0,0,.45)</dd>
						<dd>
							<dl class="sub">
								<dt>Dark Background</dt>
								<dd>Text: 13px (10pt) #EDEEF0</dd>
								<dd>Background: #354052</dd>
								<!-- -->
								<dt>Light Background</dt>
								<dd>Text: 13px (10pt) #354052</dd>
								<dd>Background: #FFFFFF</dd>
								<dd>Border: 1px #BBCCDB</dd>
							</dl>
						</dd>
						<dt>Data Tooltip</dt>
						<dd>
							<dl class="sub">
								<dt>Default Style</dt>
								<dd>Background: #354052</dd>
								<dd>Box Shadow: 0px 1px 2px rgba(0,0,0,.45)</dd>
								<!-- -->
								<dt>With Reporting Palette</dt>
								<dd>Border: 2px #FFFFFF</dd>
								<dd>Background: Match Data</dd>
								<!-- -->
								<dt>Text Colors</dt>
								<dd>Light Text: #EDEEF0</dd>
								<dd>Dark Text: #354052</dd>
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
