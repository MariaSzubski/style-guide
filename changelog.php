<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - Changelog</title>
	<link rel="stylesheet" href="css/build/style.css" charset="utf-8">
</head>
<body>
	<main class="opened">
		<header>
			<h2 id="pg_header"></h2>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines" class="iframe">
			<div id="container">
				<iframe src="https://docs.google.com/a/nielsen.com/spreadsheets/d/1BGwxisB0GUFKE62S1xLnshi9za0QYOyACbjxpsUvSRA/pubhtml?widget=true&amp;headers=false" width="100%" height="100%"></iframe>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
