<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<?php require 'template/meta.inc.php'; ?>
	<title id="title">Style Guide &ndash; Component &ndash; Integer Nec Ligula</title>
	<?php require 'template/css.inc.php'; ?>
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header"><span>Components &ndash; </span>Integer Nec Ligula</h2>
			<?php require 'template/units.inc.php'; ?>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
		</header>
		<article id="guidelines">
			<div id="container">
				<div class="spec_content">
					<section>
						<h4>Aliquam malesuada</h4>
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
					<dl class="dl_root">
						<dt>Orci varius</dt>
						<dd>
							<!-- -->
							<dl class="sub">
								<dt>Background</dt>
								<dd>Height: <span class="pxrem">12px</span></dd>
								<dd>Min Width: <span class="pxrem">12px</span></dd>
								<dd>Corner Radius: <span class="pxrem">6px</span></dd>
								<dd>Background Color: <span title="Red 500" class="theme">#F44336</span></dd>
								<!-- -->
								<dt>Numbers</dt>
								<dd>Text: 10px #FFFFFF</dd>
								<dd>Weight: 600</dd>
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
