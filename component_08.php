<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<?php require 'template/meta.inc.php'; ?>
	<title id="title">Style Guide &ndash; Components &ndash; Nam Luctus Velit</title>
	<?php require 'template/css.inc.php'; ?>
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header"><span>Components &ndash; </span>Nam Luctus Velit</h2>
			<?php require 'template/units.inc.php'; ?>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
		</header>
		<article id="guidelines">
			<div id="container">
				<div class="spec_content">
					<section>
						<h4>Sed volutpat sem</h4>
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
						<dt>Sed volutpat sem</dt>
						<dd>Height: <span class="pxrem">42px</span></dd>
						<dd>Minimum Width: <span class="pxrem">140px</span></dd>
						<dd>Minimum Padding: <span class="pxrem">10px</span></dd>
						<dd>Corner Radius: <span class="pxrem">3px</span></dd>
						<dd>Text: 14px</dd>
						<dd>Box Shadow:	<span class="pxrem">0px</span> <span class="pxrem">2px</span> <span class="pxrem">8px</span> rgba(0,0,0,0.25)</dd>

						<!-- -->
						<dt>Vivamus In Nunc</dt>
						<dd>
							<dl class="sub">
								<dt>Teal (Positive)</dt>
								<dd>Text &amp; Icon Color: <span title="Teal 700" class="theme">#00796B</span></dd>
								<dd>Background: <span title="Teal 50" class="theme">#E0F2F1</span></dd>
								<dd>Icon Background: <span title="Teal 100" class="theme">#B2DFDB</span></dd>
								<dd>Border: <span class="pxrem">1px</span> <span title="Teal 400" class="theme">#26A69A</span></dd>
								<!-- -->
								<dt>Amber (Warning)</dt>
								<dd>Text &amp; Icon Color: <span title="Amber 700" class="theme">#FFA000</span></dd>
								<dd>Background: <span title="Amber 50" class="theme">#FFF7DE</span></dd>
								<dd>Icon Background: <span title="Amber 100" class="theme">#FFEEBA</span></dd>
								<dd>Border: <span class="pxrem">1px</span> <span title="Amber 600" class="theme">#FFB300</span></dd>
								<!-- -->
								<dt>Red (Error)</dt>
								<dd>Text &amp; Icon Color: <span title="Red 500" class="theme">#F44336</span></dd>
								<dd>Background: <span title="Red 50" class="theme">#FFEBEE</span></dd>
								<dd>Icon Background: <span title="Red 100" class="theme">#FFCDD2</span></dd>
								<dd>Border: <span class="pxrem">1px</span> <span title="Red 400" class="theme">#EF5350</span></dd>
								<!-- -->
								<dt>Indigo (Actions)</dt>
								<dd>Text Color: <span title="Gray 800" class="theme">#37474F</span></dd>
								<dd>Background: <span title="Indigo 50" class="theme">#E8EAF6</span></dd>
								<dd>Border: <span class="pxrem">1px</span> <span title="Indigo 400" class="theme">#5C6BC0</span></dd>
								<dd>Actions: Small Primary Flat Buttons</dd>
							</dl>
						</dd>
						<!-- -->
						<dt>Etiam At Nulla</dt>
						<dd>
							<dl class="sub">
								<dt>Container</dt>
								<dd>Background: #FFFFFF</dd>
								<dd>Padding: <span class="pxrem">12px</span></dd>
								<dd>Box Shadow:	<span class="pxrem">0px</span> <span class="pxrem">2px</span> <span class="pxrem">8px</span> rgba(0,0,0,0.25)</dd>
								<!-- -->
								<dt>Header</dt>
								<dd>Text: 16px <span title="Gray 800" class="theme">#37474F</span></dd>
								<dd>Weight: 600</dd>
								<dd>Line Height: <span class="pxrem">16px</span></dd>
								<!-- -->
								<dt>Description</dt>
								<dd>Text: 12px <span title="Gray 800" class="theme">#37474F</span></dd>
								<dd>Line Height: <span class="pxrem">18px</span></dd>
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
