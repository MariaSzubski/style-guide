<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - Data Selector</title>
	<link rel="stylesheet" href="css/build/style.css" charset="utf-8">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Data Selector</h2>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<section>
					<h4></h4>
					<img src="img/guide/data_selector_01.svg" alt="Data Selector">
				</section>
				<aside>
					<dl>
						<dt>Data Selector</dt>

						<dd>Background: #FFFFFF</dd>
						<dd>Height: 50px</dd>
						<dd>App Name: Knockout 26px (20pt)</dd>
						<dd>Text: #354052</dd>
						<dd>Weight: 48 Featherweight</dd>
						<dd>Case: Uppercase</dd>
						<dd>Box Shadow: 0px 3px 4px rgba(0,0,0,.45)</dd>
						<!-- -->
						<dd>
							<dl class="sub">
								<dt>Header Image</dt>
								<dd>Height: 5px
								<dd class="note">Use Nielsen Data Texture</dd>
								<dt>Icons</dt>
								<dd>Unselected: #354052</dd>
								<dd>Selected: #FFFFFF</dd>
								<dd>Selected Background: #354052</dd>
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
