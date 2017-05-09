<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - Card</title>
	<link rel="stylesheet" href="css/build/style.css" charset="utf-8">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Card Patterns</h2>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<section>
					<h4>All Content Types</h4>
					<img src="img/guide/p_card_01.png" alt="Card Layout - All Content Types">
				</section>
				<section>
					<h4>Card Examples</h4>
					<img src="img/guide/p_card_02.png" alt="Card Examples">
				</section>
				<aside>
					<dl class="related">
						<dt>Related Content</dt>
						<dd class="pg_link"><a href="card.php">Card Component</a></dd>
						<dd class="pg_link"><a href="chip.php">Chip Component</a></dd>
					</dl>
					<!-- -->
					<dl class="dl_root">
						<dt>Measurements</dt>
						<dd>Margin: 12px</dd>
						<!-- -->
						<dt>Content</dt>
						<dd>
							<dl class="sub">
								<dt>Dividers</dt>
								<dd>Primary: 1px #BBCCDD</dd>
								<dd>Secondary: 1px #DDE6ED</dd>
								<!-- -->
								<dt>Title</dt>
								<dd>Text: 15px (11pt)</dd>
								<dd>Weight: 600</dd>
								<dd>Line Height: 20px</dd>
								<!-- -->
								<dt>Subheader</dt>
								<dd>Text: 11px (8pt) #9BAAB8</dd>
								<dd>Weight: 500</dd>
								<dd>Line Height: 24px</dd>
								<!-- -->
								<dt>Description</dt>
								<dd>Text: 13px (10pt) #151921</dd>
								<dd>Line Height: 20px</dd>
								<!-- -->
								<dt>Chips</dt>
								<dd class="note">See Chips component</dd>
								<!-- -->
								<dt>Author Name &amp; Buttons</dt>
								<dd>Text: 13px (10pt) #9BAAB8</dd>
								<dd>Line Height: 20px</dd>
								<dd>Weight: 600</dd>
								<!-- -->
								<dt>Primary Actions</dt>
								<dd>Divider: 1px #BBCCDD</dd>
								<dd>Background: #F5F9FC</dd>
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
