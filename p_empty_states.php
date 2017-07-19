<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines &ndash; Patterns &ndash; Empty States</title>
	<link rel="stylesheet" href="css/build/style_v8-2.css">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Patterns &ndash; Empty States</h2>
			<div class="btn-group" role="group">
				Units:
				<button type="button" id="size-px" class="btn-selected">px</button><button type="button" id="size-rem">rem</button>
			</div>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<!-- Section 1 -->
				<section class="full">
					<h2>Large</h2>
					<section class="full">
						<h4><!--Pattern Title--></h4>
						<img src="img/guide/p_empty_state_01.png" alt="Label">
						<div class="desc_pattern">
							<ul>
								Takes up the entire view of parent container
								Supporting and directional text combination teaches a future path to success.
							</ul>
						</div>
					</section>
					<!-- -->
					<section class="full">
						<h4><!--Pattern Title--></h4>
						<img src="img/guide/p_empty_state_02.png" alt="Label">
					</section>
					<!-- -->
					<section class="full">
						<h4><!--Pattern Title--></h4>
						<img src="img/guide/p_empty_state_03.png" alt="Label">
					</section>
					<!-- -->
					<section class="full">
						<h4><!--Pattern Title--></h4>
						<img src="img/guide/p_empty_state_04.png" alt="Label">
					</section>
					<!-- -->
					<section class="full">
						<h4><!--Pattern Title--></h4>
						<img src="img/guide/p_empty_state_05.png" alt="Label">
					</section>
				</section>
				<!-- Section 2 -->
				<section class="full">
					<h2>Medium</h2>
					<section class="full">
						<h4><!--Pattern Title--></h4>
						<img src="img/guide/p_empty_state_06.png" alt="Label">
					</section>
					<!-- -->
					<section class="full">
						<h4><!--Pattern Title--></h4>
						<img src="img/guide/p_empty_state_07.png" alt="Label">
					</section>
					<!-- -->
					<section class="full">
						<h4><!--Pattern Title--></h4>
						<img src="img/guide/p_empty_state_08.png" alt="Label">
					</section>
				</section>
				<!-- Section 3 -->
				<section class="full">
					<h2>Small</h2>
					<section class="full">
						<h4><!--Pattern Title--></h4>
						<img src="img/guide/p_empty_state_09.png" alt="Label">
					</section>
					<!-- -->
					<section class="full">
						<h4><!--Pattern Title--></h4>
						<img src="img/guide/p_empty_state_10.png" alt="Label">
					</section>
					<!-- -->
					<section class="full">
						<h4><!--Pattern Title--></h4>
						<img src="img/guide/p_empty_state_11.png" alt="Label">
					</section>
				</section>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
