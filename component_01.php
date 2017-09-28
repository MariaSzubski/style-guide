<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<?php require 'template/meta.inc.php'; ?>
	<title id="title">Style Guide &ndash; Component &ndash; Aliquam Finibus Dui</title>
	<?php require 'template/css.inc.php'; ?>
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header"><span>Components &ndash; </span>Aliquam Finibus Dui</h2>
			<?php require 'template/units.inc.php'; ?>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
		</header>
		<article id="guidelines">
			<div id="container">
				<div class="spec_content">
					<section>
						<h4>Pellentesque vitae</h4>
						<img src="img/guide/fpo_500.svg" alt="Component Name">
					</section>
				</div>
				<aside>
					<dl class="related">
						<dt>Related Content</dt>
						<dd class="pg_link"><a href="component_02.php">Curabitur Viverra</a></dd>
					</dl>
					<!-- -->
					<dl class="dl_root">
						<dt>Pellentesque vitae</dt>
						<dd>Text Color: <span title="Gray 900" class="theme">#263238</span></dd>
						<dd>Hover BG: <span title="Indigo 50" class="theme">#E8EAF6</span></dd>
						<dd>Selected Text: <span title="Gray 800" class="theme">#37474F</span></dd>
						<dd>Selected BG: <span title="Gray 100" class="theme">#CFD8DC</span></dd>
					</dl>
				</aside>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
