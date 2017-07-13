<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines &ndash; Patterns &ndash; Data Formats</title>
	<link rel="stylesheet" href="css/build/style_v8-2.css">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Patterns &ndash; Data Formats</h2>
			<div class="btn-group" role="group">
				Units:
				<button type="button" id="size-px" class="btn-selected">px</button><button type="button" id="size-rem">rem</button>
			</div>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
					<section class="full desc_i">
						<h2>Date</h2>
						<img src="img/guide/p_data-formats_01.png" alt="Date">
					</section>
					<!-- -->
					<section class="full desc_i">
						<h2>Time</h2>
						<img src="img/guide/p_data-formats_02.png" alt="Time">
					</section>
					<!-- -->
					<section class="full desc_i">
						<h2>Range</h2>
						<img src="img/guide/p_data-formats_03.png" alt="Range">
					</section>
					<!-- -->
					<section class="full desc_i">
						<h2>Abbreviation</h2>
						<img src="img/guide/p_data-formats_04.png" alt="Abbreviation">
					</section>
					<!-- -->
					<section class="full desc_i">
						<h2>Truncation &amp; Redaction</h2>
						<img src="img/guide/p_data-formats_05.png" alt="Truncation &amp; Redaction">
					</section>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
