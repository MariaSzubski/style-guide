<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - Progress Linear</title>
	<link rel="stylesheet" href="css/build/style.css" charset="utf-8">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Progress Linear</h2>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<section>
					<!-- <h4>Attached to Brand Bar</h4> -->
					<img src="img/guide/progress_linear_01.svg" alt="Progress Linear">
				</section>
				<!-- <section>
					<h4>Floating</h4>
					<img src="img/guide/progress_linear_02.svg" alt="Floating">
				</section> -->
				<aside>
					<dl>
						<dt>Progress Linear</dt>
						<dd>Color: #00AEEF
						<dd>Height: 5px</dd>
						<dd>Track: 30% opacity</dd>
					</dl>
				</aside>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
