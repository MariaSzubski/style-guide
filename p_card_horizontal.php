<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<?php require 'template/meta.inc.php'; ?>
	<title id="title">Style Guide &ndash; Patterns &ndash; Card (Horizontal)</title>
	<?php require 'template/css.inc.php'; ?>
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Patterns &ndash; Card (Horizontal)</h2>
			<div class="btn-group" role="group">
				Measurement Units:
				<button type="button" id="size-px" class="btn-selected">px</button><button type="button" id="size-rem">rem</button>
			</div>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			
		</header>
		<article id="guidelines">
			<div id="container">
				<section>
					<h4>Basic Horizontal Card</h4>
					<img src="img/guide/p_horizontal-card_01.png" alt="Basic Horizontal Card">
					<div class="desc_pattern">
						<p>
							Selecting the title will open up the card. Icons appear on the top right and metadata will show under the title.
						</p>
					</div>
				</section>
				<!-- -->
				<section>
					<h4>Horizontal Card with an Accent</h4>
					<img src="img/guide/p_horizontal-card_02.png" alt="Horizontal Card with an Accent">
					<div class="desc_pattern">
						<p>
							Color could be used to show status or just for a visual appeal.
						</p>
					</div>
				</section>
				<!-- -->
				<section>
					<h4>On Hover</h4>
					<img src="img/guide/p_horizontal-card_03.png" alt="On Hover">
					<div class="desc_pattern">
						<p>
							Hover on desktop, will show a checkbox. On mobile it will show by default.
						</p>
					</div>
				</section>
				<!-- -->
				<section>
					<h4>Selected</h4>
					<img src="img/guide/p_horizontal-card_04.png" alt="Selected">
				</section>
				<!-- -->
				<section>
					<h4>Expandable (click/touch) to show more meta data</h4>
					<img src="img/guide/p_horizontal-card_05.png" alt="Expandable (Click/Touch) To Show More Meta Data">
				</section>
				<!-- -->
				<section>
					<h4>Error</h4>
					<img src="img/guide/p_horizontal-card_06.png" alt="Error">
				</section>
				<!-- -->
				<section>
					<h4>Locked</h4>
					<img src="img/guide/p_horizontal-card_07.png" alt="Locked">
				</section>
				<!-- -->
				<section>
					<h4>Disabled</h4>
					<img src="img/guide/p_horizontal-card_08.png" alt="Disabled">
				</section>
				<!-- -->
				<section>
					<h4>Adding Additional Elements</h4>
					<img src="img/guide/p_horizontal-card_09.png" alt="Adding Additional Elements">
				</section>
				<!-- -->
				<aside>
					<dl class="related">
						<dt>Related Content</dt>
						<dd class="pg_link"><a href="card.php">Card Component</a></dd>
						<dd class="pg_link"><a href="p_card_vertical.php">Vertical Card Patterns</a></dd>
					</dl>
					<dl>
						<dl class="dl_root">
							<dt>Measurements</dt>
							<dd>Basic Card Height: <span class="pxrem">90px</span></dd>
							<dd>Accent Width: <span class="pxrem">10px</span></dd>
							<dd>Left Padding: <span class="pxrem">20px</span></dd>
						</dl>
				</aside>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
