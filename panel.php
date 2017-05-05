<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - Panel</title>
	<link rel="stylesheet" href="css/build/style.css" charset="utf-8">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Panel</h2>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<section>
					<h4></h4>
					<img src="img/guide/panel_01.png" alt="Panel">
				</section>
				<aside>
					<dl class="dl_root">
						<dt>Panel</dt>
						<dd>Background: #FFFFFF</dd>
						<dd>Border: 1px #BBCCDB</dd>
						<dd>Box Shadow: 0px 1px 2px rgba(0,0,0,.45)</dd>
						<dd>Angular Shadow: 2dp</dd>
						<!-- -->
						<dt>Title</dt>
						<dd>[Page/Panel Title Typestyle]</dd>
						<dd>Text: 20px (15pt) #354052</dd>
						<dd>Case: Capitalize</dd>
					</dl>
				</aside>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
