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
			<h2 id="pg_header"><span>Components &ndash; </span>Quisque Ut Neque</h2>
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
						<dd>Box Shadow: <span class="pxrem">0px</span> <span class="pxrem">1px</span> <span class="pxrem">4px</span> rgba(0,0,0,.25)</dd>
						<dd>Dividers: <span class="pxrem">1px</span> <span title="Gray 200" class="theme">#B0BEC5</span></dd>
						<!-- -->
						<dt>Measurements</dt>
						<dd>Left &amp; Right Padding: <span class="pxrem">10px</span></dd>
						<dd>Row Height (Default): <span class="pxrem">42px</span></dd>
						<dd>Row Height (Compact): <span class="pxrem">32px</span></dd>
						<!-- -->
						<dt>Content</dt>
						<dd>Text: 16px <span title="Gray 800" class="theme">#37474F</span></dd>
						<dd>Icon Color: <span title="Gray 800" class="theme">#37474F</span></dd>
						<!-- -->
						<dt>States</dt>
						<dd>Hover Background: <span title="Indigo 50" class="theme">#E8EAF6</span></dd>
						<dd>Selected Background: <span title="Gray 200" class="theme">#B0BEC5</span></dd>
					</dl>
				</aside>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
