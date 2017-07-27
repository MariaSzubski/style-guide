<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines &ndash; Patterns &ndash; App Structure</title>
	<link rel="stylesheet" href="css/build/style_v8-2.css">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Patterns &ndash; App Structure</h2>
			<div class="btn-group" role="group">
				Units:
				<button type="button" id="size-px" class="btn-selected">px</button><button type="button" id="size-rem">rem</button>
			</div>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<section class="full">
					<div class="desc_pattern">
						<p>
							Nielsen uses two App Structures in its products, Primary App Structure and a Secondary App Structure.
						</p>
						<p>
							For Applications that are more compact and have content based navigation, we recommend using the Primary App Structure.
						</p>
						<p>
							For deeper apps that have several analytic areas with little overlap between these areas, we recommend the Secondary App Structure.
						</p>
					</div>
				</section>
				<!-- Section 1 -->
				<section class="full">
					<h2>Primary App Structure</h2>
					<section class="full">
						<h4>Schematic</h4>
						<img src="img/guide/p_app-structure_01.png" alt="Primary App Structure Schematic">
						<div class="desc_pattern">
							<p>Use Primary App Structure in products where:
								<ul>
									<li>The app is straightforward and well focused</li>
									<li>There three or fewer levels of navigation</li>
									<li>The toolbar provides the majority of the functionality</li>
								</ul>
							</p>
							<p>Primary App Structure incorporates:
								<ul>
									<li>App Bar with 3-level Navigation</li>
									<li>Toolbar</li>
									<li>Sidenav Right</li>
									<li>Page content that incorporates contextual navigation</li>
									<li>Copyright</li>
								</ul>
							</p>
						</div>
					</section>
					<!-- -->
					<section class="full">
						<h4>Primary App Structure: Landing Page</h4>
						<img src="img/guide/p_app-structure_02.png" alt="Primary App Structure: Landing Page">
					</section>
					<!-- -->
					<section class="full">
						<h4>Primary App Structure: Level 2</h4>
						<img src="img/guide/p_app-structure_03.png" alt="Primary App Structure: Level 2">
					</section>
					<!-- -->
					<section class="full">
						<h4>Primary App Structure: Level 3</h4>
						<img src="img/guide/p_app-structure_04.png" alt="Primary App Structure: Level 3">
					</section>
				</section>

				<!-- Section 2 -->
				<section class="full">
					<h2>Secondary App Structure</h2>
					<!-- -->
					<section class="full">
						<h4>Schematic</h4>
						<img src="img/guide/p_app-structure_05.png" alt="Secondary App Structure Schematic">
						<div class="desc_pattern">
							<p>Use this app structure when:
								<ul>
									<li>The app has several analysis areas that have minimal overlap</li>
									<li>There are more than 3 levels of navigation</li>
									<li>The toolbar can only provide some of the functionality</li>
								</ul>
							</p>
						</div>
					</section>
					<!-- -->
					<section class="full">
						<h4>Secondary App Structure: Landing Page</h4>
						<div class="desc_pattern">
							<p>
								The Secondary App Structure has both Sidenav Right and Sidenav Left (shown above.) Secondary App Structure is reserved for large apps in which there are several types of analysis / actions that may be loosely associated.
							</p>
						</div>
						<img src="img/guide/p_app-structure_06.png" alt="Secondary App Structure: Landing Page">
					</section>

			</section>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
