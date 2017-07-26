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
				<section class="full">
					<h2>Order &amp; Position</h2>
					<section class="full">
						<h4>Default</h4>
						<img src="img/guide/p_button_01.png" alt="Default Button Order &amp; Position">
						<div class="desc_pattern">
							<ul>
								<li>Position buttons in the bottom right of a panel.</li>
								<li>The most common or important action is on the far right.</li>
								<li>Arrange buttons from the edge of the panel in CRUD order:
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
					<!-- -->
					<section class="full">
						<h4>Acceptable Deviation: Forms</h4>
						<img src="img/guide/p_button_02.png" alt="Acceptable Deviation: Forms">
						<div class="desc_pattern">
							<p>
								Reverse and left align buttons below a form, with the most important action on the far left.
							</p>
						</div>
					</section>
					<!-- -->
					<section class="full">
						<h4>Acceptable Deviation: Vertical Card</h4>
						<img src="img/guide/p_button_03.png" alt="Vertical Card">
						<div class="desc_pattern">
							<p>
								Center align actions at the bottom of a Vertical Card.
							</p>
						</div>
					</section>
					<!-- -->
					<section class="full">
						<h4>Acceptable Deviation: Back Button In a Wizard</h4>
						<img src="img/guide/p_button_04.png" alt="Back Button">
						<div class="desc_pattern">
							<p>
								Left align the back button in a wizard.
							</p>
						</div>
					</section>
				</section>
				<!-- -->
				<section class="full">
					<h2>Primary Buttons</h2>
					<div class="desc_pattern">
						<p>
							Primary Buttons elevate common actions in a page.
						</p>
						<p>
							While there is no limit on the amount of Primary Buttons used on a page or in a set, Raised Primary Buttons should be used sparingly to highlight important actions on the screen.
						</p>
					</div>
					<img src="img/guide/p_button_05.png" alt="Primary Button Examples">
				</section>
				<!-- -->
				<section class="full">
					<h2>Accent Buttons</h2>
					<div class="desc_pattern">
						<p>
							Accent Buttons elevate important or final actions. They generally come at the end of a workflow and represent Commit, Submit, or Create actions.
						</p>
						<p>
							Use Accent Buttons sparingly, with no more than one per page. Accent Button cannot be combine with Primary Buttons in a set.
						</p>
					</div>
					<img src="img/guide/p_button_06.png" alt="Accent Button Examples">
				</section>
				<!-- -->
				<section class="full">
					<h2>Secondary Buttons</h2>
					<div class="desc_pattern">
						<p>
							Secondary Buttons demote less common actions on a page. There is no limit on the amount of Secondary Buttons on a page.
						</p>
						<p>
							Raised Secondary Buttons can also be used in a Button Group.
						</p>
					</div>
					<img src="img/guide/p_button_07.png" alt="Secondary Button Examples">
				</section>
				<!-- -->
				<section class="full">
					<h2>Tertiary Buttons</h2>
					<div class="desc_pattern">
						<p>
							Tertiary Buttons demote actions grouped with to Secondary Buttons in a set. There is no limit on the amount of Tertiary Buttons on a page.
						</p>
						<p>
							Raised Tertiary Buttons can also be used in a Button Group.
						</p>
					</div>
					<img src="img/guide/p_button_08.png" alt="Tertiary Button Examples">
				</section>
				<!-- -->
				<section class="full">
					<h2>Hierarchy</h2>
					<section class="full">
						<h4>Examples of Valid Button Sets</h4>
						<img src="img/guide/p_button_09.png" alt="Valid Button Sets">
					</section>
				</section>
				<!-- -->
				<section class="full">
					<h2>Don'ts</h2>
					<section class="full">
					<div class="desc_pattern">
						<p>Don’t use more than one Accent Button per set or page.</p>
					</div>
						<img src="img/guide/p_button_10.png" alt="Don’t use more than one Accent button per set or page.">
					</section>
					<!-- -->
					<section class="full">
					<div class="desc_pattern">
						<p>
							Don’t mix primary and accent buttons in a set.
						</p>
					</div>
						<img src="img/guide/p_button_11.png" alt="Don't Do">
					</section>
					<!-- -->
					<section class="full">
					<div class="desc_pattern">
						<p>
							Don’t mix button sizes in a set.
						</p>
					</div>
						<img src="img/guide/p_button_12.png" alt="Don't Do">
					</section>
				</section>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
