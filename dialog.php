<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - Dialog</title>
	<link rel="stylesheet" href="css/build/style_v8-2.css">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Dialog</h2>
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
					<h4</h4>
					<img src="img/guide/dialog_01.png" alt="Dialogs">
				</section>
				<aside>
					<dl class="related">
						<dt>Related Content</dt>
						<dd class="pg_link"><a href="p_dialog.php">Dialog Patterns</a></dd>
					</dl>
					<!-- -->
					<dl class="dl_root">
						<dt>Page Mask</dt>
						<dd>rgba(245,249,252,0.6)</dd>
						<!-- -->
						<dt>Dialog</dt>

						<dd>
							<dl class="sub">
								<dt>Container</dt>
								<dd>Background: #FFFFFF</dd>
								<dd>Box Shadow: <span class="pxrem">0px</span> <span class="pxrem">3px</span> <span class="pxrem">4px</span> rgba(0,0,0,0.45)</dd>
								<dd>Angular Shadow: 6dp</dd>
								<!-- -->
								<dt>Title</dt>
								<dd>Text: 20px (15pt) <span title="Gray 800" class="theme">#354052</span></dd>
								<dd>Weight: 600</dd>
								<dd>Case: Capitalize</dd>
								<dd>Divider: <span class="pxrem">1px</span> <span title="Gray 200" class="theme">#DDE6ED</span></dd>
								<dd>Title Bar Height: <span class="pxrem">42px</span></dd>
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
