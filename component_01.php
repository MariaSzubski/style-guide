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
			<h2 id="pg_header">Components &ndash; Aliquam Finibus Dui</h2>
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
						<dt>Use Case</dt>
						<dd class="note">Uses standard Input Component</dd>
						<!-- -->
						<dt>Pellentesque vitae</dt>
						<dd>Text Color: <span title="Gray 900" class="theme">#151921</span></dd>
						<dd>Hover BG: <span title="Blue 50" class="theme">#D4EEFD</span></dd>
						<dd>Selected Text: <span title="Gray 800" class="theme">#354052</span></dd>
						<dd>Selected BG: <span title="Gray 100" class="theme">#EDEEF0</span></dd>
					</dl>
				</aside>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
