<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<?php require 'template/meta.inc.php'; ?>
	<title id="title">Style Guide &ndash; Patterns &ndash; Aenean Faucibus</title>
	<?php require 'template/css.inc.php'; ?>
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header"><span>Patterns &ndash; </span>Aenean Faucibus</h2>
			<?php require 'template/units.inc.php'; ?>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
		</header>
		<article id="guidelines">
			<div id="container">
				<div class="spec_content">
					<section class="full">
						<div class="desc_pattern">
							<p>
								Sed ac nisi sed nisi pretium porttitor. Nam ut est et neque fringilla consectetur. Donec in tincidunt orci.	Duis porta lectus quis scelerisque efficitur. Fusce dictum tristique cursus. Nam vel ultrices arcu. Donec fermentum arcu dolor. Praesent non enim ex.
							</p>
							<p>
								Nullam porta gravida orci et suscipit. Suspendisse varius lacus eu magna volutpat, a aliquam quam mattis. Cras in felis lacus.
							</p>
						</div>
					</section>
					<!-- Section 1 -->
					<section class="full">
						<h2>Orci varius natoque</h2>
						<section class="full">
							<h4>penatibus et magnis</h4>
							<img src="img/guide/fpo_lg_400.svg" alt="penatibus et magnis">
							<div class="desc_pattern">
								<p>
									Vivamus venenatis massa quis sem bibendum rhoncus. In sed risus ex. Aliquam euismod urna at quam faucibus dictum eget molestie augue. Vestibulum et augue dignissim nisl finibus ultrices vel ac erat. Phasellus blandit viverra arcu vitae euismod.
								</p>
							</div>
							<h4>Nullam molestie auctor </h4>
							<img src="img/guide/fpo_lg_200.svg" alt="Nullam molestie auctor ">
							<h4>nisi pulvinar interdum</h4>
							<img src="img/guide/fpo_lg_200.svg" alt="nisi pulvinar interdum">
						</section>
					</section>

					<!-- Section 2 -->
					<section class="full">
						<h2>Suspendisse potenti</h2>
						<!-- -->
						<section class="full">
							<h4>Suspendisse convallis</h4>
							<img src="img/guide/fpo_md_400.svg" alt="nisi pulvinar interdum">
							<div class="desc_pattern">
								<p>
									Auctor nisl nec vulputate. Mauris vestibulum maximus justo.
								</p>
							</div>
							<h4>Snibh sed lectus</h4>
							<img src="img/guide/fpo_md_600.svg" alt="nisi pulvinar interdum">
							<div class="desc_pattern">
								<p>
									Donec at ultricies nisi. Phasellus id massa nisl. Nulla lacinia nulla ac augue pulvinar suscipit. Aenean volutpat faucibus sapien sed ornare. Aliquam blandit lacinia tincidunt. Etiam faucibus tellus vel fermentum pulvinar. Maecenas viverra scelerisque est ut pharetra. Donec id quam vitae diam posuere faucibus.
								</p>
							</div>
						</section>
					</section>
				</div>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
