<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<?php require 'template/meta.inc.php'; ?>
	<title id="title">Style Guide &ndash; Component &ndash; Fusce Volutpat</title>
	<?php require 'template/css.inc.php'; ?>
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header"><span>Components &ndash; </span>Fusce Volutpat</h2>
			<?php require 'template/units.inc.php'; ?>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
		</header>
		<article id="guidelines">
			<div id="container">
				<div class="spec_content">
					<section>
						<h4>Cras posuere</h4>
						<img src="img/guide/fpo_500.svg" alt="Component Name">
					</section>
				</div>
				<aside>
					<dl class="dl_root">
						<dt>Measurements</dt>
						<dd>
							<dl class="sub">
								<dt>Buttons</dt>
								<dd>Corner Radius: <span class="pxrem">3px</span></dd>
								<dd>Text Color: #FFFFFF</dd>
								<dd>Case: Uppercase</dd>
								<!-- -->
								<dt>Default</dt>
								<dd>Height: <span class="pxrem">32px</span></dd>
								<dd>Padding L/R: <span class="pxrem">10px</span></dd>
								<dd>Margin: <span class="pxrem">10px</span></dd>
								<dd>Text Size: 14px</dd>
								<dd>Weight: 600</dd>
								<!-- -->
								<dt>Large</dt>
								<dd>Height: <span class="pxrem">72px</span></dd>
								<dd>Padding L/R: <span class="pxrem">28px</span></dd>
								<dd>Margin: <span class="pxrem">18px</span></dd>
								<dd>Text Size: 28px</dd>
								<dd>Weight: 400</dd>
								<!-- -->
								<dt>Small</dt>
								<dd>Height: <span class="pxrem">32px</span></dd>
								<dd>Padding L/R: <span class="pxrem">10px</span></dd>
								<dd>Margin: <span class="pxrem">8px</span></dd>
								<dd>Text Size: 12px</dd>
								<dd>Weight: 600</dd>
							</dl>
						</dd>
						<!-- -->
						<dt>States</dt>
						<dd>
							<dl class="sub">
								<dt>Primary</dt>
								<dd>Static: <span title="Indigo 500" class="theme">#3F51B5</span></dd>
								<dd>Hover: <span title="Indigo 700" class="theme">#303F9F</span></dd>
								<dd>Selected: <span title="Indigo 900" class="theme">#1A237E</span></dd>
								<dd>Disabled: <span title="Indigo 100" class="theme">#C5CAE9</span></dd>
								<!-- -->
								<dt>Accent</dt>
								<dd>Static: <span title="Teal 500" class="theme">#009688</span></dd>
								<dd>Hover: <span title="Teal 700" class="theme">#00796B</span></dd>
								<dd>Selected: <span title="Teal 900" class="theme">#004D40</span></dd>
								<dd>Disabled: <span title="Teal 100" class="theme">#B2DFDB</span></dd>
								<!-- -->
								<dt>Secondary</dt>
								<dd>Static: <span title="Gray 500" class="theme">#607D8B</span></dd>
								<dd>Hover: <span title="Gray 700" class="theme">#455A64</span></dd>
								<dd>Selected: <span title="Gray 800" class="theme">#37474F</span></dd>
								<dd>Disabled: <span title="Gray 300" class="theme">#90A4AE</span></dd>
								<!-- -->
								<dt>Tertiary</dt>
								<dd>Static Text: <span title="Gray 500" class="theme">#607D8B</span></dd>
								<dd>Border: <span title="Gray 500" class="theme">#607D8B</span></dd>
								<dd>Hover Text:	<span title="Gray 600" class="theme">#546E7A</span></dd>
								<dd>Hover BG: <span title="Gray 100" class="theme">#CFD8DC</span></dd>
								<dd>Selected Text: <span title="Gray 600" class="theme">#546E7A</span></dd>
								<dd>Selected BG: <span title="Gray 300" class="theme">#90A4AE</span></dd>
								<dd>Disabled Text &amp; Border: <span title="Gray 300" class="theme">#90A4AE</span></dd>
							</dl>
						</dd>
						<!-- -->
						<dt>Menu Buttons</dt>
						<dd>
							<dl class="sub">
								<dt>Color &amp; Size</dt>
								<dd>Divider &amp; Icon: #FFFFFF</dd>
								<dd>Default Button: <span class="pxrem">36px</span> x <span class="pxrem">36px</span></dd>
								<dd>Small Button: <span class="pxrem">28px</span> x <span class="pxrem">28px</span></dd>
								<dd>Icon: <span class="pxrem">16px</span> x <span class="pxrem">16px</span></dd>
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
