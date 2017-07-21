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
				<section>
					<h2>Large</h2>
					<section class="full">

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

						<img src="img/guide/p_empty_states_02.png" alt="Large">
						<div class="desc_pattern">
							<ul>
								<li>When there isn’t an icon present, a word can be used in place of icon in text.</li>
							</ul>
						</div>
					</section>
				</section>
				<!-- Section 2 -->
				<section>
					<h2>Acceptable Deviations</h2>
					<section class="full">

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

						<img src="img/guide/p_empty_states_04.png" alt="Large: Acceptable Deviation">
						<div class="desc_pattern">
							<ul>
								<li>When there isn’t an icon present, a word can be used in place of icon in text.</li>
							</ul>
						</div>
					</section>
					<!-- -->
					<section class="full">

						<img src="img/guide/p_empty_states_05.png" alt="Large: Acceptable Deviation">
						<div class="desc_pattern">
							<ul>
								<li>Use when there are actions that are equal weight.</li>
							</ul>
						</div>
					</section>
				</section>
				<!-- Section 3 -->
				<section>
					<h2>Large: Don't Do</h2>
					<section class="full">

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

						<img src="img/guide/p_empty_states_09.png" alt="Large: Don't Do">
						<div class="desc_pattern">
							<ul>
								<li>Provide action in context of the message and deter from the path to success once the empty state area has been populated.</li>
							</ul>
						</div>
					</section>
				</section>
				<!-- Section 4 -->
				<section>
					<h2>Medium</h2>
					<section class="full">
						<img src="img/guide/p_empty_states_10.png" alt="Medium">
						<div class="desc_pattern">
							<ul>
								<li>Use Case: Used as a “smaller state” when vertical space needs to be optimized and takes up full view.</li>
								<li>Same rules and princples apply as Large Empty State.</li>
							</ul>
						</div>
					</section>
				</section>
				<!-- Section 7 -->
				<section>
					<h2>Small</h2>
					<section class="full">
						<img src="img/guide/p_empty_states_11.png" alt="Small">
						<div class="desc_pattern">
							<ul>
								<li>Use Case: Used as a “smaller state” when vertical space needs to be optimized and takes up full view.</li>
								<li>Same rules and princples apply as Large Empty State.</li>
							</ul>
						</div>
					</section>
				</section>
				<!-- Section 9 -->
				<section>
					<h2>Small: Don't Do</h2>
					<section class="full">

						<div class="desc_pattern">
							<ul>
								<li>Don't give the option for the same action twice.</li>
							</ul>
						</div>
						<img src="img/guide/p_empty_states_12.png" alt="Small: Don't Do">
					</section>
					<!-- -->
					<section class="full">
						<img src="img/guide/p_empty_states_13.png" alt="Small: Don't Do">
					</section>
				</section>
				<aside>
					<dl class="dl_root">
						<dt>Text</dt>
						<dd>
							<dl class="sub">
								<dt>Heading</dt>
								<dd>Text Size: 20px (15pt)</dd>
								<dd>Weight: 600</dd>
								<dd>Color: <span title="Gray 500" class="theme">#94A3B0</span></dd>
								<!-- -->
								<dt>Body Text</dt>
								<dd>Text Size: 13px (10pt)</dd>
								<dd>Weight: 400</dd>
								<dd>Color: <span title="Gray 900" class="theme">#151921</span></dd>
								<!-- -->
							</dl>
						</dd>
						<dt>Icon</dt>
						<dd>
							<dl class="sub">
								<dt>Style</dt>
								<dd>Color: <span title="Gray 500" class="theme">#94A3B0</span></dd>
								<dd>Border: <span class="pxrem">2px</span> <span title="Gray 500" class="theme">#94A3B0</span></dd>
								<!-- -->
								<dt>Large Empty State</dt>
								<dd>Icon: <span class="pxrem">48px</span> x <span class="pxrem">48px</span></dd>
								<dd>Circle: <span class="pxrem">120px</span> x <span class="pxrem">120px</span></dd>
								<!-- -->
								<dt>Medium Empty State</dt>
								<dd>Icon Size: <span class="pxrem">40px</span> x <span class="pxrem">40px</span></dd>
								<dd>Circle: <span class="pxrem">80px</span> x <span class="pxrem">80px</span></dd>
							</dl>
						</dd>
					</dl>
				</aside>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
