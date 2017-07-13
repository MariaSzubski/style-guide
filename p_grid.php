<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines &ndash; Patterns &ndash; Grid</title>
	<link rel="stylesheet" href="css/build/style_v8-2.css">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Patterns &ndash; Grid</h2>
			<div class="btn-group" role="group">
				Units:
				<button type="button" id="size-px" class="btn-selected">px</button><button type="button" id="size-rem">rem</button>
			</div>
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
				<section>
					<h4>Yellow Option for Multi-Select</h4>
					<img src="img/guide/p_grid_03.png" alt="Mulit-Select Grid">
				</section>
				<aside>
					<dl class="dl_root">
						<dt>Grid Styles</dt>
						<dd>Background Color: #FFFFFF</dd>
						<dd>Alt Row Shading: <span title="Gray 50" class="theme">#F5F9FC</span></dd>
						<dd>Dividers: <span class="pxrem">1px</span> <span title="Gray 200" class="theme">#DDE6ED</span></dd>
						<dd>Header Divider: <span class="pxrem">1px</span> <span title="Gray 400" class="theme">#BBCCDD</span></dd>
						<!-- -->
						<dt>Row States</dt>
						<dd>
							<dl class="sub">
								<dt>Hover</dt>
								<dd>Background: <span title="Blue 50" class="theme">#D4EEFD</span></dd>
								<!-- -->
								<dt>Selected</dt>
								<dd>Border-Bottom: <span class="pxrem">2px</span> <span title="Gray 800" class="theme">#354052</span></dd>
								<dd>Background: <span title="Gray 100" class="theme">#EDEEF0</span></dd>
								<dd>Optional Background for Multi-Select: <span title="Yellow 100" class="theme">#FFEEBA</span> (Yellow)</dd>
							</dl>
						</dd>
						<!-- -->
						<dt>Small Grid</dt>
						<dd>
							<dl class="sub">
								<dt>Content</dt>
								<dd>Header: 13px (10pt) <span title="Gray 900" class="theme">#151921</span></dd>
								<dd>Header Weight: 700</dd>
								<dd>Data: 13px (10pt) <span title="Gray 900" class="theme">#151921</span></dd>
								<dd>Row Height: <span class="pxrem">28px</span></dd>
								<!-- -->
								<dt>Alignment</dt>
								<dd>Descriptive Columns: Top Left</dd>
								<dd>Numeric Columns: Top Right</dd>
								<dd>Row Padding (T/B): <span class="pxrem">9px</span></dd>
								<dd>Column Padding (L/R): <span class="pxrem">12px</span></dd>
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
								<dd>Header: 15px (11pt) <span title="Gray 900" class="theme">#151921</span></dd>
								<dd>Header Weight: 700</dd>
								<dd>Data: 15px (11pt) <span title="Gray 900" class="theme">#151921</span></dd>
								<dd>Row Height: 48px</dd>
								<!-- -->
								<dt>Alignment</dt>
								<dd>Descriptive Column: Top Left</dd>
								<dd>Numeric Column: Top Right</dd>
								<dd>Row Padding (T/B): <span class="pxrem">18px</span></dd>
								<dd>Column Padding (L/R): <span class="pxrem">24px</span></dd>
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
