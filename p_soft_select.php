<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<?php require 'template/meta.inc.php'; ?>
	<title id="title">Style Guide &ndash; Components &ndash; Soft Select</title>
	<?php require 'template/css.inc.php'; ?>
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Components &ndash; Soft Select</h2>
			<div class="btn-group" role="group">
				Measurement Units:
				<button type="button" id="size-px" class="btn-selected">px</button><button type="button" id="size-rem">rem</button>
			</div>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			
		</header>
		<article id="guidelines">
			<div id="container">
				<section class="full">
					<div class="desc_pattern">
						<p>
							The Soft Select Pattern allows the user to view more details prior to selecting an item. In Nielsen’s detailed analytic environments, it clarifies the user’s choices without forcing him / her to pogo back and forth between pages in an attempt to find the item he / she wants to investigate.
						</p>
					</div>
				</section>
				<section class="full">
					<h4>Soft Selectable Item Cursor Change</h4>
					<div class="desc_pattern">
						<p>
							To indicate there is a Soft Select available, the cursor will change over the Soft Selectable item.
						</p>
						<p>
							There are 2 types of Soft Select – small and medium.
						</p>
					</div>
					<img src="img/guide/p_soft-select_01.png" alt="Soft Selectable Item Cursor Change">
				</section>
				<!-- Section 2 -->
				<section class="full">
					<h2>Soft Select Small</h2>
					<section class="full">
						<div class="desc_pattern">
							<p>
								Soft Select Small helps clarify focused and detailed information. Data visualizations such as charts, graphs, maps, and timelines may leverage Soft Select Small to clarify values and present secondary options.
							</p>
						</div>
					</section>
					<!-- -->
					<section class="full">
						<h4>Soft Select Small</h4>
						<div class="desc_pattern">
							<p>
								In this example, the Soft Select Small clarifies the value and allows the user to drill or navigate up a level based on the variable within the data visualization.
							</p>
						</div>
						<img src="img/guide/p_soft-select_02.png" alt="Soft Select Small">
					</section>
					<!-- -->
					<section class="full">
						<h4>Anatomy of the Soft Select Small</h4>
						<img src="img/guide/p_soft-select_03.png" alt="Anatomy of the Soft Select Small">

						<div class="desc_pattern">
							<p>
								Soft Select Small can be horizontal or vertical. It has a similar construction to a card. It incorporates the title at top and the action button row at bottom. The remainder of the space is dedicated to contextual content and / or metadata. The Soft Select Small is intended to be compact. Keep the content direct and informative.
							</p>
						</div>
					</section>
				</section>
				<!-- Section 3 -->
				<section class="full">
					<h2>Soft Select Medium</h2>
					<section class="full">
						<div class="desc_pattern">
							<p>
								Soft Select Medium clarifies a moderate amount of information such as the metadata associated with a Card. The card may represent a detailed report or group.
							</p>
						</div>
					</section>
					<!-- -->
					<section class="full">
						<h4>Soft Select Medium</h4>
						<div class="desc_pattern">
							<p>
								The Soft Select Medium can provide links to the associated metadata allowing the user to investigate the details of the entity.
							</p>
						</div>
						<img src="img/guide/p_soft-select_04.png" alt="Soft Select Medium">
					</section>
					<!-- -->
					<section class="full">
						<h4>Anatomy of the Soft Select Medium</h4>
						<div class="desc_pattern">
							<p>
								Soft Select Medium expands to the width of the card grid. The columnar structure within the Soft Select Medium should reflect the structure of the metadata associated with the card. The example shown has a 4-column structure that accommodates the most important metadata associated with the card. If there were fewer types of important metadata associated with the card, fewer columns would be required.
							</p>
						</div>
						<img src="img/guide/p_soft-select_05.png" alt="Anatomy of the Soft Select Medium">
					</section>
				</section>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
