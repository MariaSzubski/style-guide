<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - Radio Button</title>
	<link rel="stylesheet" href="css/build/style_v8-2.css" charset="utf-8">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Radio Button</h2>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<section>
					<h4>Small Radio Button</h4>
					<img src="img/guide/radio_01.png" alt="Radio Button Small">
				</section>
				<section>
					<h4>Large Radio Button</h4>
					<img src="img/guide/radio_02.png" alt="Radio Button Large">
				</section>
				<aside>
					<dl class="related">
						<dt>Related Content</dt>
						<dd class="pg_link"><a href="checkbox.php">Checkbox Component</a></dd>
					</dl>
					<!-- -->
					<dl class="dl_root">
						<dt>Measurements</dt>
						<dd>
							<dl class="sub">
								<dt>Small</dt>
								<dd>Radio Button Size: 16px</dd>
								<dd>Text: 13px (10pt) <span title="Gray 900" class="theme">#151921</span></dd>
								<dd>Weight: 400 or 700</dd>
								<dd>Line Height: <span title="36px" class="theme">2.25rem</span></dd>
								<!-- -->
								<dt>Large</dt>
								<dd>Radio Button Size: 24px</dd>
								<dd>Text: 15px (11pt) <span title="Gray 900" class="theme">#151921</span></dd>
								<dd>Weight: 400 or 700</dd>
								<dd>Line Height: 48px</dd>
							</dl>
						</dd>
						<!-- -->
						<dt>States</dt>
						<dd>Default: <span title="Gray 700" class="theme">#5D6574</span></dd>
						<dd>Accent: <span title="Green 500" class="theme">#26B810</span></dd>
						<dd>Disabled: <span title="Gray 300" class="theme">#D5D7DB</span></dd>
					</dl>
				</aside>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
