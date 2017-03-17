<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - Brand Bar</title>
	<link rel="stylesheet" href="css/build/style.css" charset="utf-8">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Brand Bar</h2>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<section>
					<h4></h4>
					<img src="img/guide/brand_bar_01.svg" alt="Brand Bar">
				</section>
				<aside>
					<dl>
						<dt>Brand Bar</dt>
						<dd>Background: #354052</dd>
						<dd>Height: 48px</dd>
						<dd>App Name: Knockout 24px (18pt)</dd>
						<dd>Text: #FFFFFF</dd>
						<dd>Weight: 48 Featherweight</dd>
						<dd>Case: Uppercase</dd>
						<!-- -->
						<dd>
							<dl class="sub">
								<dt>Icons</dt>
								<dd>Unselected: #FFFFFF</dd>
								<dd>Selected: #354052</dd>
								<dd>Selected Background: #FFFFFF</dd>
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
