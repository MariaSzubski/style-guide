<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">Style Guide &ndash; Patterns &ndash; Sidenav (Left)</title>
	<?php require 'template/css.inc.php'; ?>
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Patterns &ndash; Sidenav (Left)</h2>
			<div class="btn-group" role="group">
				Measurement Units:
				<button type="button" id="size-px" class="btn-selected">px</button><button type="button" id="size-rem">rem</button>
			</div>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			
		</header>
		<article id="guidelines">
			<div id="container">
				<section>
					<h4>List View</h4>
					<img src="img/guide/p_sidenav_l_01.png" alt="List View">
				</section>
				<section>
					<h4>Tree View</h4>
					<img src="img/guide/p_sidenav_l_02.png" alt="Tree View">
				</section>
				<aside>
					<dl class="related">
						<dt>Related Content</dt>
						<dd class="pg_link"><a href="sidenav.php">Sidenav Component</a></dd>
						<dd class="pg_link"><a href="p_copyright.php">Copyright Pattern</a></dd>
					</dl>
					<!-- -->
					<dl class="dl_root">
						<dt>Styles</dt>
						<dd>
							<dl class="sub">
								<dt>All Menu Items</dt>
								<dd>Text: 15px (11pt) <span title="Gray 900" class="theme">#151921</span></dd>
								<dd>Case: Capitalize</dd>
								<!-- -->
								<dt>List View</dt>
								<dd>Weight: 600</dd>
								<dd>Line Height: <span class="pxrem">40px</span></dd>
								<dd>Indent: <span class="pxrem">20px</span></dd>
								<!-- -->
								<dt>Tree View</dt>
								<dd>Folder Label Weight: 600</dd>
								<dd>Folder Line Height: <span class="pxrem">40px</span></dd>
								<dd>Item Weight: 400</dd>
								<dd>Item Line Height: <span class="pxrem">30px</span></dd>
								<dd>Indent: <span class="pxrem">20px</span></dd>
								<!-- -->
								<dt>Tree View Selections</dt>
								<dd class="note">The arrow icon expands or collapses a tree level. Clicking anywhere outside of the arrow selects the row.</dd>
								<!-- -->
								<dt>Icons</dt>
								<dd>New Window: open_in.svg</dd>
							</dl>
						</dd>
						<!-- -->
						<dt>States</dt>
						<dd>
							<dl class="sub">
								<dt>Hover</dt>
								<dd>Background: <span title="Blue 50" class="theme">#D4EEFD</span></dd>
								<!-- -->
								<dt>Selected</dt>
								<dd>Background: <span title="Gray 100" class="theme">#EDEEF0</span></dd>
								<dd>Border-Bottom: 2px <span title="Gray 800" class="theme">#354052</span></dd>
							</dl>
						</dd>
						<!-- -->
						<dt>Copyright</dt>
						<dd class="note">See Copyright Pattern</dd>
					</dl>
				</aside>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
