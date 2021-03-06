<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<?php require 'template/meta.inc.php'; ?>
	<title id="title">Style Guide &ndash; Patterns &ndash; Nullam Auctor</title>
	<?php require 'template/css.inc.php'; ?>
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header"><span>Patterns &ndash; </span>Nullam Auctor</h2>
			<?php require 'template/units.inc.php'; ?>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
		</header>
		<article id="guidelines">
			<div id="container">
				<div class="spec_content">
					<section class="full">
						<h2>Morbi vestibulum</h2>
						<section class="full">
							<h4>varius dignissim</h4>
							<img src="img/guide/fpo_md_600.svg" alt="penatibus et magnis">
							<!-- -->
							<h4>blandit nibh egestas eget</h4>
							<img src="img/guide/fpo_md_200.svg" alt="penatibus et magnis">
							<div class="desc_pattern">
								<p>
									In luctus cursus sagittis. Praesent lacus diam, tincidunt ultrices tincidunt in, lobortis id ante. Fusce eget elit eu augue imperdiet varius ac sed elit. Sed purus leo, faucibus lacinia dapibus in, scelerisque sed leo.
								</p>
							</div>
						</section>
					</section>
					<!-- -->
					<section class="full">
						<h2>Fusce dolor quam</h2>
						<h4>Interdum et malesuada fames</h4>
						<img src="img/guide/fpo_200.svg" alt="penatibus et magnis">
						<div class="desc_pattern">
							<p>
								Fusce consectetur nisi et ligula rhoncus sodales. Vivamus porta nisl non faucibus pretium. Vivamus quis diam fringilla, finibus ipsum vitae, sodales orci.
							</p>
						</div>
					</section>
				</div>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
