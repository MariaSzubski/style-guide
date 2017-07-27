<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines &ndash; Patterns &ndash; Multiselect</title>
	<link rel="stylesheet" href="css/build/style_v8-2.css">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Patterns &ndash; Multiselect</h2>
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
							The multiselect pattern that enables users to take select and take action on multiple entities. Multiselect can take place in several forms – among them are, select boxes, lists, trees and tables.
						</p>
					</div>
				</section>
				<!-- Section 1 -->
				<section class="full">
					<h2>Multiselect Boxes</h2>
					<section class="full">
						<h4>Multiselect Box (First Use)</h4>
						<div class="desc_pattern">
							<p>The Multiselect Box field should be used as a select incorporating type ahead that also enables the cursor to make selections.</p>
						</div>
						<img src="img/guide/p_multiselect_01.png" alt="Label">
					</section>
					<!-- -->
					<section class="full">
						<h4>Multiselect Box (Repeat Use)</h4>
						<div class="desc_pattern">
							<p>After the first use, the Multiselect Box field will contain indicators that show items have been selected.</p>
						</div>
						<img src="img/guide/p_multiselect_02.png" alt="Label">
					</section>
					<!-- -->
					<section class="full">
						<h4>Multiselect Field Label Indicators – Chips</h4>
						<div class="desc_pattern">
							<p>Chips should be used to indicate which items are selected.</p>
						</div>
						<img src="img/guide/p_multiselect_03.png" alt="Label">
					</section>
					<!-- -->
					<section class="full">
						<h4>Multiselect Numeric</h4>
						<div class="desc_pattern">
							<p>
								However, numeric indicators can be used to indicate items selected:
								<ul>
									<li>If the field is a fixed size and selections overflow the field dimension.</li>
									<li>If chips cannot be incorporated due to technical constraints.</li>
								</ul>
							</p>
						</div>
						<img src="img/guide/p_multiselect_04.png" alt="Label">
					</section>
					<!-- -->
					<section class="full">
						<h4>Multiselect Submission – Automatic</h4>
						<div class="desc_pattern">
							<p>Submission of the selection should automatically occur upon submission.</p>
						</div>
						<img src="img/guide/p_multiselect_05.png" alt="Label">
					</section>
					<!-- -->
					<section class="full">
						<h4>Multiselect Submission – User Action</h4>
						<div class="desc_pattern">
							<p>However, if the round trip to the server inhibits performance, user confirmation with a button action is an acceptable fall back.</p>
						</div>
						<img src="img/guide/p_multiselect_06.png" alt="Label">
					</section>
					<!-- -->
				</section>
				<!-- Section 2 -->
				<section class="full">
					<h2>Multiselect Grids</h2>
					<section class="full">
						<h4>Multiselect Grids</h4>
						<div class="desc_pattern">
							<p>Multiselect can be applied to grids in which multiple rows need to be selected in order to perform an action. This may apply to several types of grids.
							</p>
							<p>
								The arrow icon expands or collapses a tree level. Clicking anywhere outside of the arrow selects the row.
							</p>
						</div>
						<img src="img/guide/p_multiselect_07.png" alt="Label">
					</section>
					<!-- -->
					<section class="full">
						<h4>Multiselect Grouped Grids</h4>
						<img src="img/guide/p_multiselect_08.png" alt="Label">
					</section>
					<!-- -->
					<section class="full">
						<h4>Multiselect Tree Grids</h4>
						<img src="img/guide/p_multiselect_09.png" alt="Label">
					</section>
				</section>
				<!-- Section 3 -->
				<section class="full">
					<h2>ACCEPTABLE DEVIATIONS</h2>
					<section class="full">
						<h4>Clear All (Due to Technical Constraints)</h4>
						<img src="img/guide/p_multiselect_10.png" alt="Clear All (Due to Technical Constraints)">
					</section>
					<!-- -->
					<section class="full">
						<h4>Left Aligned Submit Buttons </h4>
						<img src="img/guide/p_multiselect_11.png" alt="Left Aligned Submit Buttons ">
					</section>
					<!-- -->
					<section class="full">
						<h4>Limitations of Quantity Selected</h4>
						<img src="img/guide/p_multiselect_12.png" alt="Limitations of Quantity Selected">
					</section>
				</section>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
