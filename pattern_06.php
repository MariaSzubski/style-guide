<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">Style Guide &ndash; Patterns &ndash; Lectus Diam</title>
	<?php require 'template/css.inc.php'; ?>
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Patterns &ndash; Lectus Diam</h2>
			<?php require 'template/units.inc.php'; ?>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
		</header>
		<article id="guidelines">
			<div id="container">
				<div class="spec_content">
					<section class="full desc_i">
						<h2>Vestibulum non mauris</h2>
						<img src="img/guide/fpo_lg_400.svg" alt="penatibus et magnis">
					</section>
					<!-- -->
					<section class="full desc_i">
						<h2>Nullam varius sagittis</h2>
						<img src="img/guide/fpo_lg_400.svg" alt="penatibus et magnis">
					</section>
					<!-- -->
					<section class="full desc_i">
						<h2>nisl elementum</h2>
						<img src="img/guide/fpo_lg_400.svg" alt="penatibus et magnis">
					</section>
					<!-- -->
					<section class="full desc_i">
						<h2>n laoreet ex egestas</h2>
						<img src="img/guide/fpo_lg_400.svg" alt="penatibus et magnis">
					</section>
				</div>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
