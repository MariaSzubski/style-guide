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
			<h2 id="pg_header">Components &ndash; Fusce Volutpat</h2>
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
								<dt>All Buttons</dt>
								<dd>Corner Radius: <span class="pxrem">4px</span></dd>
								<dd>Text Color: #FFFFFF</dd>
								<dd>Case: Uppercase</dd>
								<!-- -->
								<dt>Default</dt>
								<dd>Height: <span class="pxrem">36px</span></dd>
								<dd>Padding L/R: <span class="pxrem">12px</span></dd>
								<dd>Margin: <span class="pxrem">12px</span></dd>
								<dd>Text Size: 15px (11pt)</dd>
								<dd>Weight: 600</dd>
								<!-- -->
								<dt>Large</dt>
								<dd>Height: <span class="pxrem">64px</span></dd>
								<dd>Padding L/R: <span class="pxrem">24px</span></dd>
								<dd>Margin: <span class="pxrem">20px</span></dd>
								<dd>Text Size: 30px (23pt)</dd>
								<dd>Weight: 400</dd>
								<!-- -->
								<dt>Small</dt>
								<dd>Height: <span class="pxrem">28px</span></dd>
								<dd>Padding L/R: <span class="pxrem">12px</span></dd>
								<dd>Margin: <span class="pxrem">10px</span></dd>
								<dd>Text Size: 13px (10pt)</dd>
								<dd>Weight: 600</dd>
							</dl>
						</dd>
						<!-- -->
						<dt>States</dt>
						<dd>
							<dl class="sub">
								<dt>Primary</dt>
								<dd>Static: <span title="Blue 500" class="theme">#0098F3</span></dd>
								<dd>Hover: <span title="Blue 700" class="theme">#007BC5</span></dd>
								<dd>Selected: <span title="Blue 900" class="theme">#00568B</span></dd>
								<dd>Disabled: <span title="Blue 100" class="theme">#B4E0FC</span></dd>
								<!-- -->
								<dt>Accent</dt>
								<dd>Static: <span title="Green 500" class="theme">#26B810</span></dd>
								<dd>Hover: <span title="Green 700" class="theme">#1D8D0C</span></dd>
								<dd>Selected: <span title="Green 900" class="theme">#135807</span></dd>
								<dd>Disabled: <span title="Green 100" class="theme">#B6EEAF</span></dd>
								<!-- -->
								<dt>Secondary</dt>
								<dd>Static: <span title="Gray 500" class="theme">#94A3B0</span></dd>
								<dd>Hover: <span title="Gray 700" class="theme">#5D6574</span></dd>
								<dd>Selected: <span title="Gray 800" class="theme">#354052</span></dd>
								<dd>Disabled: <span title="Gray 300" class="theme">#D5D7DB</span></dd>
								<!-- -->
								<dt>Tertiary</dt>
								<dd>Static Text: <span title="Gray 500" class="theme">#94A3B0</span></dd>
								<dd>Border: <span title="Gray 500" class="theme">#94A3B0</span></dd>
								<dd>Hover Text:	<span title="Gray 600" class="theme">#79818C</span></dd>
								<dd>Hover BG: <span title="Gray 100" class="theme">#EDEEF0</span></dd>
								<dd>Selected Text: <span title="Gray 600" class="theme">#79818C</span></dd>
								<dd>Selected BG: <span title="Gray 300" class="theme">#D5D7DB</span></dd>
								<dd>Disabled Text &amp; Border: <span title="Gray 300" class="theme">#D5D7DB</span></dd>
							</dl>
						</dd>
						<!-- -->
						<dt>Drop Buttons</dt>
						<dd>
							<dl class="sub">
								<dt>Color &amp; Size</dt>
								<dd>Divider &amp; Icon: #FFFFFF</dd>
								<dd>Default Button: <span class="pxrem">36px</span> x <span class="pxrem">36px</span></dd>
								<dd>Small Button: <span class="pxrem">28px</span> x <span class="pxrem">28px</span></dd>
								<dd>Icon: <span class="pxrem">16px</span> x <span class="pxrem">16px</span></dd>
								<!-- -->
								<dt>Selected State</dt>
								<dd class="note">Use Selected Button State shown above.</dd>
								<!-- -->
								<dt>Menu</dt>
								<dd class="note">See Compact Menu Component.</dd>
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
