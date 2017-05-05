<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - Radio Button</title>
	<link rel="stylesheet" href="css/build/style.css" charset="utf-8">
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
						<dt>Radio Button</dt>
						<dd>Selected Value: #26B910</dd>
					</dl>
				</aside>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
