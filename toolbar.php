<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - Toolbar</title>
	<link rel="stylesheet" href="css/build/style.css" charset="utf-8">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Toolbar</h2>
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
					</dl>
					<!-- -->
					<dl class="dl_root">
						<dt>Container</dt>
						<dd>Background: #FFFFFF</dd>
						<dd>Height: 42px</dd>
						<dd>Divider: 1px <span title="Gray 200" class="theme">#DDE6ED</span></dd>
						<!-- -->
						<dt>Contents</dt>
						<dd>
							<dl class="sub">
								<dt>Text Buttons</dt>
								<dd>Text: 13px (10pt) <span title="Gray 800" class="theme">#354052</span></dd>
								<dd>Weight: 600</dd>
								<!-- -->
								<dt>Icons</dt>
								<dd>Size: 16px</dd>
								<dd>Margin Between Icons: 24px</dd>
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
