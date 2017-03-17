<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - Icon</title>
	<link rel="stylesheet" href="css/build/style.css" charset="utf-8">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Icon</h2>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<section>
					<h4>Toolbar Icons</h4>
					<img src="img/guide/icon_01.svg" alt="Toolbar Icons">
				</section>
				<section>
					<h4>Brand Logos</h4>
					<img src="img/guide/icon_02.svg" alt="Brand Logos">
				</section>
				<section>
					<h4>App Icons</h4>
					<img src="img/guide/icon_03.svg" alt="App Icons">
				</section>
				<section class="desc">
					<h4>Icon Library</h4>
					<p>
						See Iconography section in the sidebar for full Nielsen icon library. Use <a href="https://material.io/icons/" target="blank">Google Material Design</a> icons as an extended library.
					</p>
				</section>
				<aside>
					<dl>
						<dt>Toolbar Icons</dt>
						<dd>
							<dl class="sub">
								<dt>Icon Colors</dt>
								<dd>Dark: #354052</dd>
								<dd>Light: #EDEEF0</dd>
								<dd>Background Square: #354052</dd>
								<!-- -->
								<dt>Background Square @ 32px</dt>
								<dd>Padding: 12px</dd>
								<dd>Corner Radius: 8px</dd>
								<!-- -->
								<dt>Background Square @ 16px</dt>
								<dd>Padding: 6px</dd>
								<dd>Corner Radius: 4px</dd>
							</dl>
						</dd>
						<dt>App Icons</dt>
						<dd>Box Shadow:	0px 0px 3px rgba(0,0,0,0.25)</dd>
					</dl>
				</aside>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
