<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines &ndash; Components &ndash; Toolbar</title>
	<link rel="stylesheet" href="css/build/style_v8-2.css">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Components &ndash; Toolbar</h2>
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
					<h4>Floating Toolbar</h4>
					<img src="img/guide/toolbar_01.png" alt="Floating Toolbar">
				</section>
				<section>
					<h4>Toolbar In Card Container</h4>
					<img src="img/guide/toolbar_02.png" alt="Toolbar In Card Container">
				</section>
				<aside>
					<dl class="related">
						<dt>Related Content</dt>
						<dd class="pg_link"><a href="p_toolbar.php">Toolbar Patterns</a></dd>
						<dd class="pg_link"><a href="icon.php">Icon Component</a></dd>
						<dd class="pg_link"><a href="button_group.php">Button Group Component</a></dd>
					</dl>
					<!-- -->
					<dl class="dl_root">
						<dt>Container</dt>
						<dd>Background: #FFFFFF</dd>
						<dd>Height: <span class="pxrem">42px</span></dd>
						<dd>Divider: <span class="pxrem">1px</span> <span title="Gray 200" class="theme">#DDE6ED</span></dd>
						<!-- -->
						<dt>Contents</dt>
						<dd>
							<dl class="sub">
								<dt>Text Actions</dt>
								<dd>Text: 13px (10pt) <span title="Gray 800" class="theme">#354052</span></dd>
								<dd>Weight: 600</dd>
								<dd>Margin Between Text: <span class="pxrem">24px</span></dd>
								<!-- -->
								<dt>Icons</dt>
								<dd>Size: <span class="pxrem">16px</span></dd>
								<dd>Margin Between Icons: <span class="pxrem">24px</span></dd>
								<dd class="note">See Icon and Button Group Components for style options.</dd>
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
