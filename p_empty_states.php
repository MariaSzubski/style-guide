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
						<h4><!-- --></h4>
						<img src="img/guide/p_empty_states_01.png" alt="Large">
						<div class="desc_pattern">
							<ul>
								<li>Takes up the entire view of parent container.</li>
								<li>Supporting and directional text combination teaches a future path to success.</li>
							</ul>
						</div>
					</section>
					<!-- -->
					<section class="full">
						<h4><!-- --></h4>
						<img src="img/guide/p_empty_states_02.png" alt="Large">
						<div class="desc_pattern">
							<ul>
								<li>When there isn’t an icon present, a word can be used in place of icon in text.</li>
							</ul>
						</div>
					</section>
				</section>
				<!-- Section 2 -->
				<section class="full">
					<h2>Large: Acceptable Deviations</h2>
					<section class="full">
						<h4><!-- --></h4>
						<img src="img/guide/p_empty_states_03.png" alt="Large: Acceptable Deviation">
						<div class="desc_pattern">
							<ul>
								<li>In scenarios when no other content (icon / button) on the page provides context to action.</li>
								<li>A link can be used for longer descriptions (note: Sentence Case).</li>
							</ul>
						</div>
					</section>
					<!-- -->
					<section class="full">
						<h4><!-- --></h4>
						<img src="img/guide/p_empty_states_04.png" alt="Large: Acceptable Deviation">
						<div class="desc_pattern">
							<ul>
								<li>When there isn’t an icon present, a word can be used in place of icon in text.</li>
							</ul>
						</div>
					</section>
					<!-- -->
					<section class="full">
						<h4><!-- --></h4>
						<img src="img/guide/p_empty_states_05.png" alt="Large: Acceptable Deviation">
						<div class="desc_pattern">
							<ul>
								<li>Use when there are actions that are equal weight.</li>
							</ul>
						</div>
					</section>
				</section>
				<!-- Section 3 -->
				<section class="full">
					<h2>Large: Don't Do</h2>
					<section class="full">
						<h4><!-- --></h4>
						<img src="img/guide/p_empty_states_06.png" alt="Large: Don't Do">
						<div class="desc_pattern">
							<ul>
								<li>Icons and text compete with other content on page.</li>
								<li>No contrast between teaching and action.</li>
							</ul>
						</div>
					</section>
					<!-- -->
					<section class="full">
						<h4><!-- --></h4>
						<img src="img/guide/p_empty_states_07.png" alt="Large: Don't Do">
						<div class="desc_pattern">
							<ul>
								<li>Calls to action without any supporting detail.</li>
								<li>Give two primary equal visually weighed calls to action.</li>
								<li>Directs to another location on screen for actions, away from context</li>
							</ul>
						</div>
					</section>
					<!-- -->
					<section class="full">
						<h4><!-- --></h4>
						<img src="img/guide/p_empty_states_08.png" alt="Large: Don't Do">
						<div class="desc_pattern">
							<ul>
								<li>Does not teach the user what to do or what this function does.</li>
								<li>Watermarked / transparency overlay of content.</li>
								<li>Isolated and vague call to action.</li>
							</ul>
						</div>
					</section>
					<!-- -->
					<section class="full">
						<h4><!-- --></h4>
						<img src="img/guide/p_empty_states_09.png" alt="Large: Don't Do">
						<div class="desc_pattern">
							<ul>
								<li>Provide action in context of the message and deter from the path to success once the empty state area has been populated.</li>
							</ul>
						</div>
					</section>
				</section>
				<!-- Section 4 -->
				<section class="full">
					<h2>Medium</h2>
					<section class="full">
						<h4><!-- --></h4>
						<img src="img/guide/p_empty_states_10.png" alt="Medium">
						<div class="desc_pattern">
							<ul>
								<li>Use Case: Used as a “smaller state” when vertical space needs to be optimized and takes up full view.</li>
							</ul>
						</div>
					</section>
				</section>
				<!-- Section 5 -->
				<section class="full">
					<h2>Medium: Acceptable Deviations</h2>
					<section class="full">
						<h4><!-- --></h4>
						<img src="img/guide/p_empty_states_11.png" alt="Medium: Acceptable Deviation">
					</section>
					<!-- -->
					<section class="full">
						<h4><!-- --></h4>
						<img src="img/guide/p_empty_states_12.png" alt="Medium: Acceptable Deviation">
					</section>
				</section>
				<!-- Section 6 -->
				<section class="full">
					<h2>Medium: Don't Do</h2>
					<section class="full">
						<h4><!-- --></h4>
						<img src="img/guide/p_empty_states_13.png" alt="Medium: Don't Do">
					</section>
				</section>
				<!-- Section 7 -->
				<section class="full">
					<h2>Small</h2>
					<section class="full">
						<h4><!-- --></h4>
						<img src="img/guide/p_empty_states_14.png" alt="Small">
						<!-- -->
						<section class="full">
							<h4><!-- --></h4>
							<img src="img/guide/p_empty_states_15.png" alt="Small">
						</section>
					</section>
				</section>
				<!-- Section 8 -->
				<section class="full">
					<h2>Small: Acceptable Deviations</h2>
					<section class="full">
						<h4><!-- --></h4>
						<img src="img/guide/p_empty_states_16.png" alt="Small: Acceptable Deviation">
					</section>
				</section>
				<!-- Section 9 -->
				<section class="full">
					<h2>Small: Don't Do</h2>
					<section class="full">
						<h4><!-- --></h4>
						<img src="img/guide/p_empty_states_17.png" alt="Small: Don't Do">
					</section>
					<!-- -->
					<section class="full">
						<h4><!-- --></h4>
						<img src="img/guide/p_empty_states_17.png" alt="Small: Don't Do">
					</section>
				</section>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
