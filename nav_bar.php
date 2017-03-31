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
				<section class="desc">
					<h4>Static Tabs</h4>
					<p>
						See <a href="tabs.php">Tabs</a> Component
					</p>
				</section>
				<aside>
					<dl>
						<dt>Nav Bar</dt>
						<dd>Background: #FFFFFF</dd>
						<dd>Border-Bottom: 1px #DDE6ED</dd>
						<dd>Tab Alignment: Center</dd>
						<!-- -->
						<dd>
							<dl class="sub">
								<dt>Unselected Tab</dt>
								<dd>[Large Text Typestyle]</dd>
								<dd>Text: 15px (11pt) #0098F3</dd>
								<dd>Text Align: Center</dd>
								<!-- -->
								<dt>Selected Tab</dt>
								<dd>Text: 15px (11pt) #172730</dd>
								<dd>Border-Bottom: 2px #172730</dd>
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
