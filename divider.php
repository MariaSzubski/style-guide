<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - Divider</title>
	<link rel="stylesheet" href="css/build/style.css" charset="utf-8">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Divider</h2>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<section>
					<!-- <h4>Primary</h4> -->
					<img src="img/guide/divider_01.svg" alt="Dividers">
				</section>
				<!-- <section>
					<h4>Secondary</h4>
					<img src="img/guide/divider_02.svg" alt="Secondary Divider">
				</section> -->
				<aside>
					<dl>
						<dt>Divider</dt>
						<dd>Primary: 1px #BBCCDB</dd>
						<dd>Secondary: 1px #DDE6ED</dd>
					</dl>
				</aside>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
