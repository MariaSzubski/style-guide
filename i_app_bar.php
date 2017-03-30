<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - Iconography &ndash; App Bar</title>
	<link rel="stylesheet" href="css/build/style.css" charset="utf-8">
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
				<h4>Downloads</h4>
				<p class="download">
					<a href="img/nx_iconography_app-bar.zip" download><img src="img/download.svg" alt="Download">App Bar Icons (zip)</a>
					<a href="img/nx_iconography.zip" download><img src="img/download.svg" alt="Download">All Nielsen Icons (zip)</a>
				</p>
			</section>
				<section class="full">
					<h4></h4>
					<img src="img/guide/i_app-bar.svg" alt="Iconography - App Bar">
				</section>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>