<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">Style Guide &ndash; Components &ndash; Nav Bar</title>
	<?php require 'template/css.inc.php'; ?>
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Components &ndash; Nav Bar</h2>
			<div class="btn-group" role="group">
				Measurement Units:
				<button type="button" id="size-px" class="btn-selected">px</button><button type="button" id="size-rem">rem</button>
			</div>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			
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
						<dd>Height: <span class="pxrem">42px</span></dd>
						<dd>Background: #FFFFFF</dd>
						<dd>Border-Top: <span class="pxrem">1px</span> <span title="Gray 200" class="theme">#DDE6ED</span></dd>
						<dd>Tab Alignment: Left</dd>
						<dd>Box Shadow: <span class="pxrem">0px</span> <span class="pxrem">1px</span> <span class="pxrem">2px</span> rgba(0,0,0,.45)</dd>
						<dd>Angular Equivalent: 2dp</dd>
						<!-- -->
						<dt>States</dt>
						<dd>
							<dl class="sub">
								<dt>All Tabs</dt>
								<dd>Text: 15px (11pt)</dd>
								<dd>Case: Capitalize</dd>
								<dd>Padding: <span class="pxrem">12px</span></dd>
								<dd>Margin Between Tabs: <span class="pxrem">16px</span></dd>
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
