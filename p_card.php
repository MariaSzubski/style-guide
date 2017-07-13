<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines &ndash; Patterns &ndash; Card</title>
	<link rel="stylesheet" href="css/build/style_v8-2.css">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Patterns &ndash; Card</h2>
			<div class="btn-group" role="group">
				Units:
				<button type="button" id="size-px" class="btn-selected">px</button><button type="button" id="size-rem">rem</button>
			</div>
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
						<dd>Margin: <span class="pxrem">12px</span></dd>
						<!-- -->
						<dt>Content</dt>
						<dd>
							<dl class="sub">
								<dt>Dividers</dt>
								<dd>Primary: <span class="pxrem">1px</span> <span title="Gray 400" class="theme">#BBCCDD</span></dd>
								<dd>Secondary: <span class="pxrem">1px</span> <span title="Gray 200" class="theme">#DDE6ED</span></dd>
								<!-- -->
								<dt>Title</dt>
								<dd>Text: 15px (11pt)</dd>
								<dd>Weight: 600</dd>
								<dd>Line Height: <span class="pxrem">20px</span></dd>
								<!-- -->
								<dt>Subheader</dt>
								<dd>Text: 11px (8pt) <span title="Gray 500" class="theme">#94A3B0</span></dd>
								<dd>Weight: 500</dd>
								<dd>Line Height: <span class="pxrem">24px</span></dd>
								<!-- -->
								<dt>Description</dt>
								<dd>Text: 13px (10pt) <span title="Gray 900" class="theme">#151921</span></dd>
								<dd>Line Height: <span class="pxrem">20px</span></dd>
								<!-- -->
								<dt>Chips</dt>
								<dd class="note">See Chips component</dd>
								<!-- -->
								<dt>Author Name</dt>
								<dd>Text: 13px (10pt) <span title="Gray 500" class="theme">#94A3B0</span></dd>
								<dd>Line Height: <span class="pxrem">20px</span></dd>
								<dd>Weight: 600</dd>
								<!-- -->
								<dt>Card Actions</dt>
								<dd>Divider: <span class="pxrem">1px</span> <span title="Gray 400" class="theme">#BBCCDD</span></dd>
								<dd>Background: <span title="Gray 50" class="theme">#F5F9FC</span></dd>
								<dd>Text: 13px (10pt) <span title="Gray 700" class="theme">#5D6574</span></dd>
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
