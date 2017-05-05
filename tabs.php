<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - Tabs</title>
	<link rel="stylesheet" href="css/build/style.css" charset="utf-8">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Tabs</h2>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<section>
					<h4>Static Tabs</h4>
					<img src="img/guide/tabs_01.png" alt="Static Tabs">
				</section>
				<section>
					<h4>Secondary Tabs</h4>
					<img src="img/guide/tabs_02.png" alt="Secondary Tabs">
				</section>
				<section class="desc">
					<h4>Nav Bar Tabs</h4>
					<p>
						See <a href="nav_bar.php">Nav Bar</a> Component
					</p>
				</section>
				<aside>
					<dl class="dl_root">
						<dt>Static Tab Bar</dt>
						<dd>Background: #FFFFFF</dd>
						<dd>Border-Bottom: 1px #DDE6ED</dd>
						<dd>Tab Alignment: Left</dd>
						<dd>Bar Height: 40px</dd>
						<!-- -->
						<dd>
							<dl class="sub">
								<dt>Unselected Tab</dt>
								<dd>[Large Text Typestyle]</dd>
								<dd>Text: 15px (11pt) #0098F3</dd>
								<dd>Text Align: Center</dd>
								<!-- -->
								<dt>Selected Tab</dt>
								<dd>Text: 15px (11pt) #151921</dd>
								<dd>Border-Bottom: 2px #151921</dd>
								<dd>Text Align: Center</dd>
							</dl>
						</dd>
						<!-- -->
						<dt>Secondary Tab Bar</dt>
						<dd>Background: #DDE6ED</dd>
						<dd>Border T/B: 1px #BBCCDB</dd>
						<dd>Tab Alignment: Left</dd>
						<dd>Bar Height: 46px</dd>
						<dd>Tab Height: 36px</dd>
						<!-- -->
						<dd>
							<dl class="sub">
								<dt>Unselected Tab</dt>
								<dd>Text: 12px (9pt) #0098F3</dd>
								<dd>Text Align: Center</dd>
								<!-- -->
								<dt>Selected Tab</dt>
								<dd>Text: 12px (9pt) #151921</dd>
								<dd>Border: 1px #BBCCDB</dd>
								<dd>Text Align: Center</dd>
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
