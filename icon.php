<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">Style Guide &ndash; Components &ndash; Icon</title>
	<?php require 'template/css.inc.php'; ?>
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Components &ndash; Icon</h2>
			<div class="btn-group" role="group">
				Measurement Units:
				<button type="button" id="size-px" class="btn-selected">px</button><button type="button" id="size-rem">rem</button>
			</div>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">

		</header>
		<article id="guidelines">
			<div id="container">
				<section>
					<h4>Flat Toolbar Icons</h4>
					<img src="img/guide/icon_01.png" alt="Flat Toolbar Icons">
				</section>
				<section>
					<h4>Raised Toolbar Icons</h4>
					<img src="img/guide/icon_02.png" alt="Raised Toolbar Icons">
				</section>
				<section>
					<h4>Brand Logos</h4>
					<img src="img/guide/icon_03.png" alt="Brand Logos">
				</section>
				<section>
					<h4>App Icons</h4>
					<img src="img/guide/icon_04.png" alt="App Icons">
				</section>
				<aside>
					<dl class="related">
						<dt>Related Content</dt>
						<dd class="pg_link"><a href="button_group.php">Button Group Component</a></dd>
						<dd class="pg_link"><a href="p_toolbar.php">Toolbar Patterns</a></dd>
					</dl>
					<dl class="dl_root">
						<dt>Toolbar Icons</dt>
						<dd>
							<dl class="sub">
								<dt>Colors</dt>
								<dd>Icon: <span title="Gray 800" class="theme">#354052</span></dd>
								<dd>Selected Icon: <span title="Gray 100" class="theme">#EDEEF0</span></dd>
								<dd>Hover Background: <span title="Blue 50" class="theme">#D4EEFD</span></dd>
								<dd>Selected Background: <span title="Gray 800" class="theme">#354052</span></dd>
								<!-- -->
								<dt>Raised Icon Border</dt>
								<dd>1px <span title="Gray 500" class="theme">#94A3B0<span></dd>
								<!-- -->
								<dt>Icon @ <span class="pxrem">16px</span></dt>
								<dd>Between Icons: <span class="pxrem">24px</span></dd>
								<dd>Between Select States: <span class="pxrem">12px</span></dd>
								<dd>Selected Padding: <span class="pxrem">6px</span></dd>
								<dd>Selected Corner Radius: <span class="pxrem">4px</span></dd>
								<!-- -->
								<dt>Icon @ <span class="pxrem">32px</span></dt>
								<dd>Between Icons: <span class="pxrem">48px</span></dd>
								<dd>Between Select States: <span class="pxrem">24px</span></dd>
								<dd>Selected Padding: <span class="pxrem">12px</span></dd>
								<dd>Selected Corner Radius: <span class="pxrem">8px</span></dd>
							</dl>
						</dd>
						<!-- -->
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
