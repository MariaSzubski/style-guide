<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<?php require 'template/meta.inc.php'; ?>
	<title id="title">Style Guide &ndash; Patterns &ndash; Charts</title>
	<?php require 'template/css.inc.php'; ?>
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Patterns &ndash; Chart</h2>
			<div class="btn-group" role="group">
				Measurement Units:
				<button type="button" id="size-px" class="btn-selected">px</button><button type="button" id="size-rem">rem</button>
			</div>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">

		</header>
		<article id="guidelines">
			<div id="container">
				<section>
					<h4>Bar Chart</h4>
					<img src="img/guide/charts_01.png" alt="Bar Chart">
				</section>
				<section>
					<h4>Grouped Data Points</h4>
					<img src="img/guide/charts_02.png" alt="Grouped Data Points">
				</section>
				<section>
					<h4>Bubble Chart</h4>
					<img src="img/guide/charts_03.png" alt="Bubble Chart">
				</section>
				<section>
					<h4>Ring Chart</h4>
					<img src="img/guide/charts_04.png" alt="Ring Chart">
				</section>
				<section>
					<h4>Data Values</h4>
					<img src="img/guide/charts_05.png" alt="Data Values">
				</section>
				<aside>
					<dl class="dl_root">
						<dt>Chart</dt>
						<dd>Primary Axis: <span class="pxrem">2px</span> <span title="Gray 900" class="theme">#151921</span></dd>
						<dd>Secondary Axis: <span class="pxrem">1px</span> <span title="Gray 200" class="theme">#DDE6ED</span></dd>
						<dd>Background Color: #FFFFFF</dd>
						<!-- -->
						<dt>Axis Label</dt>
						<dd>Text: 12px (9pt) #989EA7</dd>
						<dd>Weight: 600</dd>
						<dd>X-Axis Orientation: Horizontal or 45º angle</dd>
						<!-- -->
						<dt>Notes</dt>
						<dd>
							<dl class="sub">
								<dt>Using Frameworks</dt>
								<dd class="note">Start with the out-of-box chart styles built into a product’s framework. Use the specifications listed here drive unity between products.</dd>
								<!-- -->
								<dt>Primary Axis Lines</dt>
								<dd class="note">The dark axis line highlights the baseline of the chart, usually ‘0’. These aren’t necessarily the bottom- and left-most axis lines.</dd>
								<!-- -->
								<dt>Vertical Axis Lines</dt>
								<dd class="note">Use vertical axis lines when more than one data point is grouped on a single x-axis label.</dd>
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
