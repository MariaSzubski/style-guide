<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines &ndash; Patterns &ndash; Sidenav (Right)</title>
	<link rel="stylesheet" href="css/build/style_v8-2.css" charset="utf-8">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Sidenav (Right) Patterns</h2>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<section>
					<h4>Basic Sidenav</h4>
					<img src="img/guide/p_sidenav_r_01.png" alt="Basic Sidenav (Right)">
				</section>
				<section>
					<h4>App Drawer (Grid View)</h4>
					<img src="img/guide/p_sidenav_r_02.png" alt="App Drawer (Grid View)">
				</section>
				<section>
					<h4>App Drawer (Tree View)</h4>
					<img src="img/guide/p_sidenav_r_03.png" alt="App Drawer (Tree View)">
				</section>
				<aside>
					<dl class="related">
						<dt>Related Content</dt>
						<dd class="pg_link"><a href="sidenav.php">Sidenav Component</a></dd>
					</dl>
					<!-- -->
					<dl class="dl_root">
						<dt>Title</dt>
						<dd>Text: 20px (15pt) <span title="Gray 800" class="theme">#354052</span></dd>
						<dd>Weight: 600</dd>
						<dd>Border-Bottom: 1px <span title="Gray 400" class="theme">#BBCCDD</span></dd>
						<!-- -->
						<dt>Snippet</dt>
						<!-- -->
						<dd>
							<dl class="sub">
								<dt>Header</dt>
								<dd>Text: 15px (11pt) <span title="Gray 900" class="theme">#151921</span></dd>
								<dd>Case: Capitalize</dd>
								<dd>Weight: 700</dd>
								<dd>Line Height: 20px</dd>
								<!-- -->
								<dt>Subheader &amp; Description</dt>
								<dd>Text: 13px (10pt) <span title="Gray 900" class="theme">#151921</span></dd>
								<dd>Link Color:	<span title="Blue 500" class="theme">#0098F3</span></dd>
								<dd>Weight: 400</dd>
								<dd>Line Height: 20px</dd>
								<dd>Divider: 1px <span title="Gray 200" class="theme">#DDE6ED</span></dd>
							</dl>
						</dd>
						<!-- -->
						<dt>App Drawer</dt>
						<dd>
							<dl class="sub">
								<dt>App Label</dt>
								<dd>Text: 13px (10pt) <span title="Gray 900" class="theme">#151921</span></dd>
								<!-- -->
								<dt>View Label
								<dd>Text: 12px (9pt) <span title="Gray 500" class="theme">#94A3B0</span></dd>
								<dd>Weight: Bold</dd>
								<dd>Case: Uppercase</dd>
								<!-- -->
								<dt>Sorting</dt>
								<dd class="note">Apps are sorted alphabetically.</dd>
								<!-- -->
								<dt>Alternate Views</dt>
								<dd class="note">Users can toggle between grid and list view by clicking on the icon next to ‘Apps’ in the panel header.</dd>
							</dl>
						</dd>
						<!-- -->
						<dt>Grid View</dt>
						<dd>
							<dl class="sub">
								<dt>Icons</dt>
								<dd>App Icon: 64px</dd>
								<dd>Star Icon: 16px</dd>
								<!-- -->
								<dt>Margins</dt>
								<dd>Between Star &amp; App: 4px</dd>
								<dd>Between App Rows: 40px</dd>
								<dd>Panel Padding (L/R): 12px</dd>
							</dl>
						</dd>
						<!-- -->
						<dt>List View</dt>
						<dd>
							<dl class="sub">
								<dt>Icons</dt>
								<dd>App Icon: 48px</dd>
								<dd>Star Icon: 16px</dd>
								<!-- -->
								<dt>Margins</dt>
								<dd>Between Star &amp; App: 4px</dd>
								<dd>Between App Rows: 12px</dd>
								<dd>Panel Padding (L/R): 12px</dd>
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
