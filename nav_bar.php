<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - Nav Bar</title>
	<link rel="stylesheet" href="css/build/style.css" charset="utf-8">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Nav Bar</h2>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<section>
					<h4>Nav Bar</h4>
					<img src="img/guide/nav_bar_01.png" alt="Navigation Bar">
				</section>
				<aside>
					<dl class="related">
						<dt>Related Content</dt>
						<dd class="pg_link"><a href="tabs.php">Tab Component</a></dd>
					</dl>
					<!-- -->
					<dl class="dl_root">
						<dt>Nav Bar</dt>
						<dd>Height: 42px</dd>
						<dd>Background: #FFFFFF</dd>
						<dd>Border-Top: 1px #DDE6ED</dd>
						<dd>Tab Alignment: Center</dd>
						<!-- -->
						<dt>States</dt>
						<dd>
							<dl class="sub">
								<dt>All Tabs</dt>
								<dd>Text: 15px (11pt)</dd>
								<dd>Case: Capitalize</dd>
								<dd>Padding: 12px
								<dd>Margin Between Tabs: 16px</dd>
								<!-- -->
								<dt>Unselected</dt>
								<dd>Text Color: #0098F3</dd>
								<!-- -->
								<dt>Selected</dt>
								<dd>Text Color: #151921</dd>
								<dd>Border-Bottom: 2px #151921</dd>
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
