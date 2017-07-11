<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - App Structure</title>
	<link rel="stylesheet" href="css/build/style_v8-2.css">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">App Structure</h2>
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
							App structure has 3 sections: UI Areas, Primary App Structure, and Secondary App Structure. These notions have direction impacts on App Bar and Sidenav.
						</p>
					</div>
				</section>
				<!-- Section 1 -->
				<section class="full">
					<h2>UI Areas (Schematic)</h2>
					<section class="full">
						<div class="desc_pattern">
							<p>
								Both Primary and Secondary App Structure have the same UI Areas:
							</p>
							<ul>
								<li>App Bar</li>
								<li>Toolbar</li>
								<li>Sidenav Right</li>
								<li>Content</li>
								<li>Copyright</li>
							</ul>
							<p>
								Nielsen’s Secondary App Structure adds Sidenav Left.
							</p>
						</div>
					</section>
					<!-- -->
					<section class="full">
						<h4>Primary App Structure</h4>
						<img src="img/guide/p_app-structure_01.png" alt="UI Areas: Primary App Structure">
					</section>
					<!-- -->
					<section class="full">
						<h4>Secondary App Structure</h4>
						<img src="img/guide/p_app-structure_02.png" alt="UI Areas: Secondary App Structure">
					</section>
				</section>

				<!-- Section 2 -->
				<section class="full">
					<h2>Primary App Structure</h2>
					<!-- -->
					<section class="full">
						<div class="desc_pattern">
							<p>
								As mentioned in UI Areas, Primary App Structure has only a Sidenav Right. The Primary App Structure relies on contextual navigation within the content area.
							</p>
							<p>
								Use Primary App Structure in cases where:
								<ul>
									<li>The app is straightforward and well focused</li>
									<li>There 3 or fewer levels of navigation</li>
									<li>The toolbar provides the majority of the functionality</li>
								</ul>
							</p>
						</div>
					</section>
					<!-- -->
					<section class="full">
						<h4>Primary App Structure: Landing Page</h4>
						<img src="img/guide/p_app-structure_03.png" alt="Primary App Structure: Landing Page">
					</section>
					<!-- -->
					<section class="full">
						<h4>Primary App Structure: Level 2</h4>
						<img src="img/guide/p_app-structure_04.png" alt="Primary App Structure: Level 2">
					</section>
					<!-- -->
					<section class="full">
						<h4>Primary App Structure: Level 3</h4>
						<img src="img/guide/p_app-structure_05.png" alt="Primary App Structure: Level 3">
					</section>
				</section>

				<!-- Section 3 -->
				<section class="full">
					<h2>Secondary App Structure</h2>
					<!-- -->
					<section class="full">
						<div class="desc_pattern">
							<p>
								The Secondary App Structure has both Sidenav Right and Sidenav Left. The Secondary App Structure is reserved for large apps in which there are several types of analysis / actions that may be loosely associated
							</p>
							<p>
								Use Secondary App Structure in cases where:
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
						<h4></h4>
						<img src="img/guide/p_app-structure_06.png" alt="Secondary App Structure">
					</section>
				</section>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
