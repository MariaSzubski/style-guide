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
					<h4>Primary Tabs</h4>
					<img src="img/guide/tabs_01.png" alt="Primary Tabs">
				</section>
				<section>
					<h4>Secondary Tabs</h4>
					<img src="img/guide/tabs_02.png" alt="Secondary Tabs">
				</section>
				<section>
					<h4>Tertiary Tabs</h4>
					<img src="img/guide/tabs_03.png" alt="Tertiary Tabs">
				</section>
				<aside>
					<dl class="related">
						<dt>Related Content</dt>
						<dd class="pg_link"><a href="p_tabs.php">Tab Patterns</a></dd>
						<dd class="pg_link"><a href="nav_bar.php">Nav Bar Component</a></dd>
					</dl>
					<!-- -->
					<dl class="dl_root">
						<dt>Primary Tabs</dt>
						<dd>
							<dl class="sub">
								<dt>Bar</dt>
								<dd>Height: 42px</dd>
								<dd>Background: #FFFFFF</dd>
								<dd>Border-Bottom: 1px #BBCCDD</dd>
								<!-- -->
								<dt>Tabs</dt>
								<dd>Text: 15px (11pt) #0098F3</dd>
								<dd>Case: Capitalize</dd>
								<dd>Padding: 12px</dd>
								<dd>Margin Between Tabs: 16px</dd>
								<!-- -->
								<dt>Select State</dt>
								<dd>Text &amp; Border Color: #151921</dd>
								<dd>Border-Bottom: 2px</dd>
							</dl>
						</dd>
						<!-- -->
						<dt>Secondary Tabs</dt>
						<dd>
							<dl class="sub">
								<dt>Bar</dt>
								<dd>Height: 45px</dd>
								<dd>Background: #DDE6ED</dd>
								<dd>Border-Bottom: 1px #BBCCDD</dd>
								<!-- -->
								<dt>Tabs</dt>
								<dd>Text: 12px (9pt) #0098F3</dd>
								<dd>Case: Uppercase</dd>
								<dd>Padding: 12px</dd>
								<dd>Margin Between Tabs: 16px</dd>
								<!-- -->
								<dt>Select State</dt>
								<dd>Text Color: #151921</dd>
								<dd>Background: #FFFFFF</dd>
								<dd>Border: 1px #BBCCDD</dd>
								<dd>Corner Radius: 4px</dd>
								<dd>Height: 36px</dd>
							</dl>
						</dd>
						<!-- -->
						<dt>Tertiary Tabs</dt>
						<dd>
							<dl class="sub">
								<dt>Bar</dt>
								<dd>Height: 45px</dd>
								<dd>Background: #FFFFFF</dd>
								<dd>Border-Bottom: 1px #DDE6ED</dd>
								<!-- -->
								<dt>Tabs</dt>
								<dd>Text: 13px (10pt) #0098F3</dd>
								<dd>Case: Capitalize</dd>
								<dd>Padding: 12px</dd>
								<dd>Margin Between Tabs: 16px</dd>
								<!-- -->
								<dt>Select State</dt>
								<dd>Text Color: #151921</dd>
								<dd>Background: #F5F9FC</dd>
								<dd>Border: 2px #BBCCDD</dd>
								<dd>Box Height: 24px</dd>
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
