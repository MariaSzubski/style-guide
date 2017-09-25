<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<?php require 'template/meta.inc.php'; ?>
	<title id="title">Style Guide &ndash; Component &ndash; Quisque Ut Neque</title>
	<?php require 'template/css.inc.php'; ?>
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Components &ndash; Quisque Ut Neque</h2>
			<?php require 'template/units.inc.php'; ?>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
		</header>
		<article id="guidelines">
			<div id="container">
				<div class="spec_content">
					<section>
						<h4>Donec at interdum</h4>
						<img src="img/guide/fpo_400.svg" alt="Component Name">
					</section>
					<section>
						<h4>Vestibulum elementum</h4>
						<img src="img/guide/fpo_200.svg" alt="Component Name">
					</section>
				</div>
				<aside>
					<dl class="dl_root">
						<dt>Container</dt>
						<dd>Background: #FFFFFF</dd>
						<dd>Box Shadow: <span class="pxrem">0px</span> <span class="pxrem">1px</span> <span class="pxrem">2px</span> rgba(0,0,0,.45)</dd>
						<dd>Optional Dividers: <span class="pxrem">1px</span> <span title="Gray 200" class="theme">#DDE6ED</span></dd>
						<!-- -->
						<dt>Measurements</dt>
						<dd>Left &amp; Right Padding: <span class="pxrem">12px</span></dd>
						<dd>Row Height (Default): <span class="pxrem">48px</span></dd>
						<dd>Row Height (Compact): <span class="pxrem">36px</span></dd>
						<!-- -->
						<dt>Content</dt>
						<dd>Text: 15px (11pt) <span title="Gray 800" class="theme">#354052</span></dd>
						<dd>Icon Color: <span title="Gray 800" class="theme">#354052</span></dd>
						<!-- -->
						<dt>States</dt>
						<dd>Hover Background: <span title="Blue 50" class="theme">#D4EEFD</span></dd>
						<dd>Selected Background: <span title="Gray 200" class="theme">#DDE6ED</span></dd>
					</dl>
				</aside>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
