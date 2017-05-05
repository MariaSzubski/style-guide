<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - List</title>
	<link rel="stylesheet" href="css/build/style.css" charset="utf-8">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">List</h2>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<section>
					<h4>On Page Background</h4>
					<img src="img/guide/list_01.png" alt="List On Page Background">
				</section>
				<section>
					<h4>In Panel</h4>
					<img src="img/guide/list_02.png" alt="List In Panel">
				</section>
				<aside>
					<dl class="dl_root">
						<dt>Label</dt>
						<dd>Text: 15px (11pt) #354052</dd>
						<dd>Weight: 700</dd>
						<dd>Gap Between Groups: 32px</dd>
						<!-- -->
						<dt>List Items</dt>
						<dd>Text: 13px (10pt) #151921</dd>
						<dd>Weight: 400</dd>
						<dd>Line Height: 24px</dd>


					</dl>
				</aside>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
