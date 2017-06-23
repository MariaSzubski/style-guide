<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - Icon</title>
	<link rel="stylesheet" href="css/build/style_v8-2.css">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Icon</h2>
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
					<h4>Toolbar Icons</h4>
					<img src="img/guide/icon_01.png" alt="Toolbar Icons">
				</section>
				<section>
					<h4>Brand Logos</h4>
					<img src="img/guide/icon_02.png" alt="Brand Logos">
				</section>
				<section>
					<h4>App Icons</h4>
					<img src="img/guide/icon_03.png" alt="App Icons">
				</section>
				<section class="desc">
					<h4>Icon Library</h4>
					<p>
						See Iconography section in the sidebar for full Nielsen icon library. Use <a href="https://material.io/icons/" target="blank">Google Material Design</a> icons as an extended library.
					</p>
				</section>
				<aside>
					<dl class="dl_root">
						<dt>Toolbar Icons</dt>
						<dd>
							<dl class="sub">
								<dt>Icon Colors</dt>
								<dd>Dark: <span title="Gray 800" class="theme">#354052</span></dd>
								<dd>Light: <span title="Gray 100" class="theme">#EDEEF0</span></dd>
								<dd>Background Square: <span title="Gray 800" class="theme">#354052</span></dd>
								<!-- -->
								<dt>Background Square @ <span class="pxrem">32px</span></dt>
								<dd>Padding: <span class="pxrem">12px</span></dd>
								<dd>Corner Radius: <span class="pxrem">8px</span></dd>
								<!-- -->
								<dt>Background Square @ <span class="pxrem">16px</span></dt>
								<dd>Padding: <span class="pxrem">6px</span></dd>
								<dd>Corner Radius: <span class="pxrem">4px</span></dd>
							</dl>
						</dd>
						<dt>App Icons</dt>
						<dd>Box Shadow:	<span class="pxrem">0px</span> <span class="pxrem">1px</span> <span class="pxrem">2px</span> rgba(0,0,0,0.45)</dd>
						<dd>Angular Shadow: 2dp</dd>
					</dl>
				</aside>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
