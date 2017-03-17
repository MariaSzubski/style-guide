<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines</title>
	<link rel="stylesheet" href="css/build/style.css" charset="utf-8">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header"></h2>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<div class="desc_i">
					<h2>Introduction</h2>
					<p>
						As we unify our product ecosystem, we have taken the opportunity to build a more flexible, modern, and communicative set of UX standards.
					</p>
					<p>
						This new visual language articulates Nielsen's client-centered approach to product delivery and is one of the outcomes of our discovery driven process. It is a technology agnostic, structured system of elements that brings continuity to our diverse global products.
					</p>
					<p>
						We will refine and add to these standards periodically through 2017.
					</p>
				</div>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
