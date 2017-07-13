<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines &ndash; Patterns &ndash; Button</title>
	<link rel="stylesheet" href="css/build/style_v8-2.css">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Patterns &ndash; Button</h2>
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
					<h2>Primary</h2>
					<img src="img/guide/p_button_01.png" alt="Primary Button Rules">
				</section>
				<!-- -->
				<section class="full desc_i">
					<h2>Accent</h2>
					<img src="img/guide/p_button_02.png" alt="Accent Button Rules">
				</section>
				<!-- -->
				<section class="full desc_i">
					<h2>Secondary</h2>
					<img src="img/guide/p_button_03.png" alt="Secondary Button Rules">
				</section>
				<!-- -->
				<section class="full desc_i">
					<h2>Tertiary</h2>
					<img src="img/guide/p_button_04.png" alt="Tertiary Button Rules">
				</section>
				<!-- -->
				<section class="full">
					<h2>Hierarchy</h2>
					<section class="full">
						<h4>Valid Button Sets</h4>
						<img src="img/guide/p_button_05.png" alt="Primary Button Example">
					</section>
				</section>
				<!-- -->
				<section class="full">
					<h2>Examples</h2>
					<section class="full">
						<h4>Wizards</h4>
						<img src="img/guide/p_button_09.png" alt="Primary Button Example">
					</section>
				</section>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
