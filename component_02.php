<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<?php require 'template/meta.inc.php'; ?>
	<title id="title">Style Guide &ndash; Component &ndash; Curabitur Viverra</title>
	<?php require 'template/css.inc.php'; ?>
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header"><span>Components &ndash; </span>Curabitur Viverra</h2>
			<?php require 'template/units.inc.php'; ?>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
		</header>
		<article id="guidelines">
			<div id="container">
				<div class="spec_content">
					<section>
						<h4>Curabitur Dignissim</h4>
						<img src="img/guide/fpo_400.svg" alt="Component Name">
					</section>
					<section>
						<h4>Vestibulum elementum</h4>
						<img src="img/guide/fpo_200.svg" alt="Component Name">
					</section>
				</div>
				<aside>
					<dl class="related">
						<dt>Related Content</dt>
						<dd class="pg_link"><a href="component_05.php">Integer Nec Ligula</a></dd>
						<dd class="pg_link"><a href="component_07.php">Maecenas Nec Tellus</a></dd>
					</dl>
					<!-- -->
					<dl class="dl_root">
						<dt>Phasellus maximus</dt>
						<dd>Background: #FFFFFF</dd>
						<dd>Box Shadow: <span class="pxrem">0px</span> <span class="pxrem">1px</span> <span class="pxrem">4px</span> rgba(0,0,0,.25)</dd>
						<dd>Padding: <span class="pxrem">14px</span></dd>
						<!-- -->
						<dt>Fusce efficitur</dt>
						<dd>Text: 14px</dd>
						<dd>Weight: 600</dd>
						<dd>Line Height: <span class="pxrem">18px</span></dd>
					</dl>
				</aside>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
