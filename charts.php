<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - Charts</title>
	<link rel="stylesheet" href="css/build/style.css" charset="utf-8">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Charts</h2>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
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
					<dl>
						<dt>Using Frameworks</dt>
						<dd class="note">Start with the out-of-box chart styles built into a product’s framework. Use the specifications listed here drive unity between Nielsen products.</dd>
						<!-- -->
						<dt>Chart Styles</dt>
						<dd>Primary Axis: 2px #151921</dd>
						<dd>Secondary Lines 1px #DDE6ED</dd>
						<dd>Background Color: #FFFFFF</dd>
						<!-- -->
						<dt>Data Colors</dt>
						<dd class="note">See Reporting Palette section.</dd>
						<!-- -->
						<dt>Axis Label</dt>
						<dd>[Label Typestyle]</dd>
						<dd>Text: 12px (9pt) #989EA7</dd>
						<dd>Weight: 600</dd>
						<dd>X-Axis Labels: Horizontal or 45º angle</dd>
						<dd>
							<dl class="sub">
								<dt>Primary Axis Lines</dt>
								<dd class="note">The dark axis line highlights the baseline of the chart, usually ‘0’. These aren’t necessarily the bottom- and left-most axis lines.</dd>
								<!-- -->
								<dt>Vertical Axis Lines</dt>
								<dd class="note">Use vertical axis lines when more than one data point is grouped on a single x-axis label.</dd>
							</dl>
						</dd>
						<!-- -->
						<dt>Data Values</dt>
						<dd>
							<dl class="sub">
								<dt>Label</dt>
								<dd>[Label Typestyle]</dd>
								<dd>Text: 12px (9pt) #989EA7</dd>
								<dd>Case: Uppercase</dd>
								<!-- -->
								<dt>Value</dt>
								<dd>Text: 24px (18pt) #172730</dd>
								<dd>Line Height: 30px</dd>
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
