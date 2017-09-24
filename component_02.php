<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">Style Guide &ndash; Component &ndash; Curabitur Viverra</title>
	<?php require 'template/css.inc.php'; ?>
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Components &ndash; Curabitur Viverra</h2>
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
						<dt>Panel</dt>
						<dd>Background: #FFFFFF</dd>
						<dd>Locked Background: <span title="Gray 50" class="theme">#F5F9FC</span></dd>
						<dd>Box Shadow: <span class="pxrem">0px</span> <span class="pxrem">1px</span> <span class="pxrem">2px</span> rgba(0,0,0,.45)</dd>
						<dd>Angular Shadow: 2dp</dd>
						<dd>Padding: <span class="pxrem">16px</span></dd>
						<!-- -->
						<dt>Title</dt>
						<dd>Text: 15px (11pt)</dd>
						<dd>Weight: 600</dd>
						<dd>Line Height: <span class="pxrem">20px</span></dd>
						<dd>Padding from Top: <span class="pxrem">18px</span></dd>
					</dl>
				</aside>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
