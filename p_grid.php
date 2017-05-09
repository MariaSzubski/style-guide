<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines &ndash; Patterns &ndash; Grid</title>
	<link rel="stylesheet" href="css/build/style.css" charset="utf-8">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Grid Patterns</h2>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<section>
					<h4>Small Data Grid (For Data Analysis)</h4>
					<img src="img/guide/p_grid_01.png" alt="Small Data Grid">
				</section>
				<section>
					<h4>Large Data Grid (For Lists)</h4>
					<img src="img/guide/p_grid_02.png" alt="Large Data Grid">
				</section>
				<aside>
					<dl class="dl_root">
						<dt>Grid Styles</dt>
						<dd>Background Color: #FFFFFF</dd>
						<dd>Alt Row Shading: #F5F9FC</dd>
						<dd>Dividers: 1px #DDE6ED</dd>
						<dd>Header Divider: 1px #BBCCDD</dd>
						<!-- -->
						<dt>Row States</dt>
						<dd>
							<dl class="sub">
								<dt>Hover</dt>
								<dd>Background: #D4EEFD</dd>
								<!-- -->
								<dt>Selected</dt>
								<dd>Border-Bottom: 2px #354052</dd>
								<dd>Background: #EDEEF0</dd>
								<dd>Optional Background for Multi-Select: #FFEEBA (Yellow)</dd>
							</dl>
						</dd>
						<!-- -->
						<dt>Small Grid</dt>
						<dd>
							<dl class="sub">
								<dt>Content</dt>
								<dd>Header: 13px (10pt) #151921</dd>
								<dd>Header Weight: 700</dd>
								<dd>Data: 13px (10pt) #151921</dd>
								<dd>Row Height: 28px</dd>
								<!-- -->
								<dt>Alignment</dt>
								<dd>Descriptive Columns: Top Left</dd>
								<dd>Numeric Columns: Top Right</dd>
								<dd>Row Padding (T/B): 9px</dd>
								<dd>Column Padding (L/R): 12px</dd>
								<!-- -->
								<dt>Purpose</dt>
								<dd class="note">Small grids are used for data analysis and large data sets. The condensed row height allows more content to fit on the screen.</dd>
							</dl>
						</dd>
						<!-- -->
						<dt>Large Grid</dt>
						<dd>
							<dl class="sub">
								<dt>Content</dt>
								<dd>Header: 15px (11pt) #151921</dd>
								<dd>Header Weight: 700</dd>
								<dd>Data: 15px (11pt) #151921</dd>
								<dd>Row Height: 48px</dd>
								<!-- -->
								<dt>Alignment</dt>
								<dd>Descriptive Column: Top Left</dd>
								<dd>Numeric Column: Top Right</dd>
								<dd>Row Padding (T/B): 18px</dd>
								<dd>Column Padding (L/R): 24px</dd>
								<!-- -->
								<dt>Purpose</dt>
								<dd class="note">Large grids are used for lists, dashboards, and small data sets. The larger row height gives content more breathing room.</dd>
							</dl>
						</dd>
						<!-- -->
					</dl>
				</aside>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
