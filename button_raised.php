<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - Button (Raised)</title>
	<link rel="stylesheet" href="css/build/style_v8-1.css" charset="utf-8">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Button (Raised)</h2>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<section>
					<h4></h4>
					<img src="img/guide/button_raised_01.png" alt="Raised Buttons">
				</section>
				<aside>
					<dl class="related">
						<dt>Related Content</dt>
						<dd class="pg_link"><a href="button_flat.php">Flat Button Component</a></dd>
						<dd class="pg_link"><a href="button_group.php">Button Group Component</a></dd>
						<dd class="pg_link"><a href="p_button.php">Button Patterns</a></dd>
					</dl>
					<!-- -->
					<dl class="dl_root">
						<dt>Measurements</dt>
						<dd>
							<dl class="sub">
								<dt>All Buttons</dt>
								<dd>Corner Radius: 4px</dd>
								<dd>Text Color: #FFFFFF</dd>
								<dd>Case: Uppercase</dd>
								<!-- -->
								<dt>Default</dt>
								<dd>Height: 36px</dd>
								<dd>Padding: 24px</dd>
								<dd>Margin: 12px</dd>
								<dd>Text Size: 15px (11pt)</dd>
								<dd>Weight: 600</dd>
								<!-- -->
								<dt>Large</dt>
								<dd>Height: 64px</dd>
								<dd>Padding: 32px</dd>
								<dd>Margin: 20px</dd>
								<dd>Text Size: 30px (23pt)</dd>
								<dd>Weight: 400</dd>
								<!-- -->
								<dt>Small</dt>
								<dd>Height: 28px</dd>
								<dd>Padding: 12px</dd>
								<dd>Margin: 10px</dd>
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
					</dl>
				</aside>
			</div>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
