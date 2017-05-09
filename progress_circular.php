<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - Progress Circular</title>
	<link rel="stylesheet" href="css/build/style.css" charset="utf-8">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Progress Circular</h2>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<section class="desc">
					<h4>Default Progress Circular</h4>
					<p>
						Use Material Design Progress Circular in Blue or Navy.
					</p>
				</section>
				<section>
					<h4>Alternate Progress Circular</h4>
					<img src="img/guide/throbber.gif" alt="Progress Circular">
				</section>
				<aside>
					<dl class="dl_root">
						<dt>Progress Circular</dt>
						<dd>Blue: #0098F3</dd>
						<dd>Navy: #354052</dd>
						<dd>Alternate Icon: throbber.gif</dd>
					</dl>
				</aside>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
