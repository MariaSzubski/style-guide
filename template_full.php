<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">Style Guide &ndash; %s &ndash; %n</title>
	<?php require 'template/css.inc.php'; ?>
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">%s &ndash; %n</h2>
			<div class="btn-group" role="group">
				Measurement Units:
				<button type="button" id="size-px" class="btn-selected">px</button><button type="button" id="size-rem">rem</button>
			</div>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			
		</header>
		<article id="guidelines">
			<div id="container">
				<section class="full">
					<div class="desc_pattern">
						<p>
							<!-- Intro paragaph here -->
						</p>
					</div>
				</section>
				<!-- Section 1 -->
				<section class="full">
					<h2><!--Section Title--></h2>
					<section class="full">
						<div class="desc_pattern">
							<p>
								<!-- Paragaph here -->
							</p>
						</div>
					</section>
					<!-- -->
					<section class="full">
						<h4><!--Pattern Title--></h4>
						<img src="img/guide/p_pattern_01.png" alt="Label">
					</section>
				</section>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
