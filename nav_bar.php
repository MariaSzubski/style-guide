<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - Nav Bar</title>
	<link rel="stylesheet" href="css/build/style_v8-1.css" charset="utf-8">
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
						<dd>Border-Top: 1px <span title="Gray 200" class="theme">#DDE6ED</span></dd>
						<dd>Tab Alignment: Center</dd>
						<dd>Box Shadow: 0px 1px 2px rgba(0,0,0,.45)</dd>
						<dd>Angular Equivalent: 2dp</dd>
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
								<dd>Text Color: <span title="Blue 500" class="theme">#0098F3</span></dd>
								<!-- -->
								<dt>Selected</dt>
								<dd>Text Color: <span title="Gray 900" class="theme">#151921</span></dd>
								<dd>Border-Bottom: 2px <span title="Gray 900" class="theme">#151921</span></dd>
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
