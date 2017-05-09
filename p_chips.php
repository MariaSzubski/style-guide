<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - Chips</title>
	<link rel="stylesheet" href="css/build/style.css" charset="utf-8">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Chip Patterns</h2>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<section>
					<h4></h4>
					<img src="img/guide/p_chips_01.png" alt="Accented Chip">
				</section>
				<aside>
					<dl class="related">
						<dt>Related Content</dt>
						<dd class="pg_link"><a href="chips.php">Chip Component</a></dd>
					</dl>
					<!-- -->
					<dl class="dl_root">
						<dt>Accented Chip States</dt>
						<dd>
							<dl class="sub">
								<dt>Default</dt>
								<dd>Text Color: #B21DAC</dd>
								<dd>Border: 1px #F7BFF2</dd>
								<dd>Background: #FFFFFF</dd>
								<!-- -->
								<dt>Hover</dt>
								<dd>Background: #FFDEFA</dd>
							</dl>
						</dd>
					</dl>
				</aside>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
