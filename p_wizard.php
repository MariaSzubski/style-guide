<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines &ndash; Patterns &ndash; Wizard</title>
	<link rel="stylesheet" href="css/build/style_v8-2.css" charset="utf-8">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Wizard Patterns</h2>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<section>
					<h4></h4>
					<img src="img/guide/p_wizard_01.png" alt="Wizard">
				</section>
				<aside>
					<dl class="dl_root">
						<dt>Wizard Tabs</dt>
						<dd>Text: 12px (9pt)</dd>
						<dd>Case: Uppercase</dd>
						<dd>Weight: 600</dd>
						<dd>Alignment: Centered</dd>
						<dd>Borders: 1px <span title="Gray 400" class="theme">#BBCCDD</span></dd>
						<dd>Height: 42px</dd>
						<!-- -->
						<dt>States</dt>
						<dd>
							<dl class="sub">
								<dt>Completed</dt>
								<dd>Text Color: <span title="Blue 500" class="theme">#0098F3</span></dd>
								<dd>Background: #FFFFFF</dd>
								<!-- -->
								<dt>Active</dt>
								<dd>Text Color: <span title="Gray 800" class="theme">#354052</span></dd>
								<dd>Background: <span title="Gray 200" class="theme">#DDE6ED</span></dd>
								<!-- -->
								<dt>Future</dt>
								<dd>Text Color: <span title="Gray 300" class="theme">#D5D7DB</span></dd>
								<dd>Background: #FFFFFF</dd>
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
