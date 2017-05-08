<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - Sidenav (Right)</title>
	<link rel="stylesheet" href="css/build/style.css" charset="utf-8">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Sidenav (Right)</h2>
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
						<dd>[Overlay Title Typestyle]</dd>
						<dd>Text: 20px (15pt) #354052</dd>
						<dd>Weight: 600</dd>
						<dd>Background: #EEEEEE</dd>
						<dd>Border-Bottom: 1px #BBCCDB</dd>
						<!-- -->
						<dt>Snippet</dt>
						<dd>Dividers: 1px #DDE6ED</dd>
						<!-- -->
						<dd>
							<dl class="sub">
								<dt>Header</dt>
								<dd>[Large Text Typestyle]</dd>
								<dd>Text: 15px (11pt) #151921</dd>
								<dd>Case: Capitalize</dd>
								<dd>Weight: 700</dd>
								<dd>Line Height: 20px</dd>
								<!-- -->
								<dt>Subheader &amp; Description</dt>
								<dd>[Body Text Typestyle]</dd>
								<dd>Text: 13px (10pt) #151921</dd>
								<dd>Link Color: #00983</dd>
								<dd>Weight: 400</dd>
								<dd>Line Height: 20px</dd>
							</dl>
						</dd>
						<!-- -->
						<dt>App Drawer</dt>
						<dd>
							<dl class="sub">
								<!-- -->
								<dt>Sorting</dt>
								<dd class="note">Apps are sorted alphabetically.</dd>
								<!-- -->
								<dt>App Icon Design</dt>
								<dd class="note">See Iconography section for recommendations.</dd>
								<!-- -->
								<dt>Alternate Views</dt>
								<dd class="note">Users can toggle between grid and list view by clicking on the icon next to ‘Apps’ in the panel header.</dd>
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
