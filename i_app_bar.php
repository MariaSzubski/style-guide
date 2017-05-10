<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - Iconography &ndash; App Bar</title>
	<link rel="stylesheet" href="css/build/style_v8-1.css" charset="utf-8">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Iconography &ndash; App Bar</h2>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
			<section class="desc full">
				<h4>Download</h4>
				<p class="guide_link">
					<a href="https://drive.google.com/open?id=0B4FYNrkqg7oDWXJGeVQyZE0zLVU"><img src="img/download.svg" alt="Download">NX Icon Library (zip)</a>
				</p>
			</section>
				<section class="full">
					<h4></h4>
					<img src="img/guide/i_app-bar.png" alt="Iconography - App Bar">
				</section>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
