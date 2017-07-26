<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines &ndash; Components &ndash; Chips</title>
	<link rel="stylesheet" href="css/build/style_v8-2.css">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Components &ndash; Chips</h2>
			<div class="btn-group" role="group">
				Units:
				<button type="button" id="size-px" class="btn-selected">px</button><button type="button" id="size-rem">rem</button>
			</div>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<section>
					<h4>Large Chip</h4>
					<img src="img/guide/chips_01.png" alt="Large Removable, Static, &amp; Accented Chip">
				</section>
				<section>
					<h4>Small Chip</h4>
					<img src="img/guide/chips_02.png" alt="Small Removable, Static, &amp; Accented Chip">
				</section>
				<aside>
					<dl class="dl_root">
						<dt>Measurements</dt>
						<dd>
							<dl class="sub">
								<dt>Large</dt>
								<dd>Height: <span class="pxrem">24px</span></dd>
								<dd>Corner Radius: <span class="pxrem">12px</span></dd>
								<dd>Padding: <span class="pxrem">12px</span></dd>
								<dd>Text: 13px (10pt) <span title="Gray 600" class="theme">#79818C</span></dd>
								<dd>Margin Between Chips: <span class="pxrem">5px</span></dd>
								<!-- -->
								<dt>Small</dt>
								<dd>Height: <span class="pxrem">18px</span></dd>
								<dd>Corner Radius: <span class="pxrem">9px</span></dd>
								<dd>Padding: <span class="pxrem">10px</span></dd>
								<dd>Text: 11px (8pt) <span title="Gray 600" class="theme">#79818C</span></dd>
								<dd>Margin Between Chips: <span class="pxrem">5px</span></dd>
							</dl>
						</dd>
						<!-- -->
						<dt>States</dt>
						<dd>
							<dl class="sub">
								<dt>Default</dt>
								<dd>Border: <span class="pxrem">1px</span> <span title="Gray 200" class="theme">#DDE6ED</span></dd>
								<dd>Background: #FFFFFF</dd>
								<!-- -->
								<dt>Default Hover</dt>
								<dd>Background: <span title="Gray 200" class="theme">#DDE6ED</span></dd>
								<!-- -->
								<dt>Accent</dt>
								<dd>Text Color: <span title="Purple 500" class="theme">#B21DAC</span></dd>
								<dd>Border: <span class="pxrem">1px</span> <span title="Purple 100" class="theme">#F7BFF2</span></dd>
								<dd>Background: #FFFFFF</dd>
								<!-- -->
								<dt>Accent Hover</dt>
								<dd>Background: <span title="Purple 50" class="theme">#FFDEFA</span></dd>
								<dd>Border: none</dd>
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
