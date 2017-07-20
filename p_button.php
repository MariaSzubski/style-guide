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
						<img src="img/guide/p_button_05.png" alt="Valid Button Sets">
					</section>
					<!-- -->
					<section class="full">
						<h4>Alignment</h4>
						<div class="desc_pattern">
							<ul>
								<li>Buttons positioned in the bottom right of a panel.</li>
								<li>The most common or important action is on the right.</li>
								<li>Arrange buttons from <u>right to left</u> in CRUD order:
									<ul>
										<li><strong>C</strong>reate</li>
										<li><strong>R</strong>ead (Retrieve)</li>
										<li><strong>U</strong>pdate (Modify)</li>
										<li><strong>D</strong>elete</li>
									</ul>
								</li>
							</ul>
						</div>
					</section>
				</section>
				<!-- -->
				<section class="full">
					<h2>Acceptable Deviations</h2>
					<section class="full">
						<h4>Vertical Card</h4>
						<img src="img/guide/p_button_06.png" alt="Vertical Card">
						<div class="desc_pattern">
							<p>
								Center align buttons at the bottom of a vertical card.
							</p>
						</div>
					</section>
					<!-- -->
					<section class="full">
						<h4>Back Button</h4>
						<img src="img/guide/p_button_07.png" alt="Back Button">
						<div class="desc_pattern">
							<p>
								Left align the back button in a wizard.
							</p>
						</div>
					</section>
					<!-- -->
					<section class="full">
						<h4>Toasts</h4>
						<img src="img/guide/p_button_08.png" alt="Toasts">
						<div class="desc_pattern">
							<p>
								Use Small Primary Flat buttons for all actions in a toast.
							</p>
						</div>
					</section>
				</section>
				<!-- -->
				<section class="full">
					<h2>Don't Do</h2>
					<section class="full">
						
						<img src="img/guide/p_button_09.png" alt="Don’t use more than one Accent button per set or page.">
						<div class="desc_pattern">
							<p>Don’t use more than one Accent button per set or page.</p>
						</div>
					</section>
					<!-- -->
					<section class="full">
						
						<img src="img/guide/p_button_10.png" alt="Don't Do">
						<div class="desc_pattern">
							<p>
								Don’t mix primary and accent buttons in a set.
							</p>
						</div>
					</section>
					<!-- -->
					<section class="full">
						
						<img src="img/guide/p_button_11.png" alt="Don't Do">
						<div class="desc_pattern">
							<p>
								Don’t mix button sizes in a set.
							</p>
						</div>
					</section>
				</section>
				<!-- -->
				<section class="full">
					<h2>Examples</h2>
					<section class="full">
						<h4>Wizard</h4>
						<img src="img/guide/p_button_12.png" alt="Wizard">
					</section>
				</section>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
