<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - Button</title>
	<link rel="stylesheet" href="css/build/style.css" charset="utf-8">
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
								<dd>Static: #0098F3</dd>
								<dd>Hover: #007BC5</dd>
								<dd>Selected: #00568B</dd>
								<dd>Disabled: #B4E0FC</dd>
								<!-- -->
								<dt>Accent</dt>
								<dd>Static: #26B810</dd>
								<dd>Hover: #1D8D0C</dd>
								<dd>Selected: #135807</dd>
								<dd>Disabled: #B6EEAF</dd>
								<!-- -->
								<dt>Secondary</dt>
								<dd>Static: #9BAAB8</dd>
								<dd>Hover: #5D6574</dd>
								<dd>Selected: #151921</dd>
								<dd>Disabled: #D5D7DB</dd>
								<!-- -->
								<dt>Tertiary</dt>
								<dd>Text &amp; Border: #9BAAB8</dd>
								<dd>Hover BG: #EDEEF0</dd>
								<dd>Selected BG: #D5D7DB</dd>
								<dd>Disabled Text &amp; Border: #D5D7DB</dd>
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
