<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines &ndash; Patterns &ndash; Toolbar</title>
	<link rel="stylesheet" href="css/build/style.css" charset="utf-8">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Toolbar Pattens</h2>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<section>
					<h4>Examples of Toolbar Content</h4>
					<img src="img/guide/p_toolbar_01.png" alt="Toolbar Patterns">
				</section>
				<aside>
					<dl class="related">
						<dt>Related Content</dt>
						<dd class="pg_link"><a href="toolbar.php">Toolbar Component</a></dd>
					</dl>
					<!-- -->
					<dl class="dl_root">
						<dt>Styles</dt>
						<dd>Group Divider: 1px #BBCCDD</dd>
						<dd>Highlighted Background: #DDE6ED</dd>
						<dd>Select Arrow: select.svg</dd>
					</dl>
				</aside>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
