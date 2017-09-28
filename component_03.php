<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<?php require 'template/meta.inc.php'; ?>
	<title id="title">Style Guide &ndash; Component &ndash; Etiam Aliquam</title>
	<?php require 'template/css.inc.php'; ?>
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header"><span>Components &ndash; </span>Etiam Aliquam</h2>
			<?php require 'template/units.inc.php'; ?>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
		</header>
		<article id="guidelines">
			<div id="container">
				<div class="spec_content">
					<section>
						<h4>Aenean luctus</h4>
						<img src="img/guide/fpo_200.svg" alt="Sed Volutpat Sem">
					</section>
					<section>
						<h4>Vivamus In Nunc</h4>
						<img src="img/guide/fpo_200.svg" alt="Vivamus In Nunc">
					</section>
					<section>
						<h4>Etiam At Nulla</h4>
						<img src="img/guide/fpo_200.svg" alt="Etiam At Nulla">
					</section>
				</div>
				<aside>
					<dl class="related">
						<dt>Related Content</dt>
						<dd class="pg_link"><a href="component_01.php">Aliquam Finibus Dui</a></dd>
					</dl>
					<!-- -->
					<dl class="dl_root">
						<dt>Donec tincidunt</dt>
						<dd>rgbargb(245,249,252,.6)</dd>
						<!-- -->
						<dt>Duis massa sem</dt>

						<dd>
							<dl class="sub">
								<dt>Container</dt>
								<dd>Background: #FFFFFF</dd>
								<dd>Box Shadow: <span class="pxrem">0px</span> <span class="pxrem">3px</span> <span class="pxrem">16px</span> rgba(0,0,0,0.25)</dd>
								<!-- -->
								<dt>Title</dt>
								<dd>Text: 22px <span title="Gray 800" class="theme">#37474F</span></dd>
								<dd>Weight: 600</dd>
								<dd>Case: Capitalize</dd>
								<dd>Divider: <span class="pxrem">1px</span> <span title="Gray 200" class="theme">#B0BEC5</span></dd>
								<dd>App Bar Height: <span class="pxrem">40px</span></dd>
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
