<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<?php require 'template/meta.inc.php'; ?>
	<title id="title">Style Guide &ndash; Component &ndash; Ligula Pellentesque</title>
	<?php require 'template/css.inc.php'; ?>
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header"><span>Components &ndash; </span>Ligula Pellentesque</h2>
			<?php require 'template/units.inc.php'; ?>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
		</header>
		<article id="guidelines">
			<div id="container">
				<div class="spec_content">
					<section>
						<h4>Etiam Arcu Tortor</h4>
						<img src="img/guide/fpo_500.svg" alt="Component Name">
					</section>
				</div>
				<aside>
					<dl class="related">
						<dt>Related Content</dt>
						<dd class="pg_link"><a href="component_10.php">Quisque Ut Neque</a></dd>
					</dl>
					<!-- -->
					<dl class="dl_root">
						<dt>Measurements</dt>
						<dd>
							<dl class="sub">
								<dt>Small</dt>
								<dd>Box Size: <span class="pxrem">16px</span></dd>
								<dd>Text: 12px <span title="Gray 900" class="theme">#263238</span></dd>
								<dd>Weight: 400 or 700</dd>
								<dd>Line Height: <span class="pxrem">32px</span></dd>
								<!-- -->
								<dt>Large</dt>
								<dd>Box Size: <span class="pxrem">24px</span></dd>
								<dd>Text: 16px <span title="Gray 900" class="theme">#263238</span></dd>
								<dd>Weight: 400 or 700</dd>
								<dd>Line Height: <span class="pxrem">48px</span></dd>
							</dl>
						</dd>
						<!-- -->
						<dt>States</dt>
						<dd>Default: <span title="Gray 700" class="theme">#455A64</span></dd>
						<dd>Accent: <span title="Teal 500" class="theme">#009688</span></dd>
						<dd>Disabled: <span title="Gray 300" class="theme">#90A4AE</span></dd>
					</dl>
				</aside>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
