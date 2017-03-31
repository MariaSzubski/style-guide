<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - Grid List</title>
	<link rel="stylesheet" href="css/build/style.css" charset="utf-8">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Grid List</h2>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<section>
					<h4>Grid List: List View</h4>
					<img src="img/guide/grid_list_01.png" alt="Grid List: List View">
				</section>
				<section>
					<h4>Grid List: Grid View</h4>
					<img src="img/guide/grid_list_02.png" alt="Grid List: Grid View">
				</section>
				<aside>
					<dl>
						<dt>List View</dt>
						<dd>Icon Size: 48x48px</dd>
						<dd>Margin: 12px</dd>
						<dd class="note">Items are stacked vertically.</dd>
						<dt>Grid View</dt>
						<dd>Icons: 64x64px</dd>
						<dd>Margin: 12px</dd>
						<dd class="note">Items wrap from left to right.</dd>
						<dd class="note">The number of items per row varies based on the width of the container.</dd>


					</dl>
				</aside>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
