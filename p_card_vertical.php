<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines &ndash; Patterns &ndash; Card (Vertical)</title>
	<link rel="stylesheet" href="css/build/style_v8-2.css">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Patterns &ndash; Card (Vertical)</h2>
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
					<h4>All Card Contents</h4>
					<img src="img/guide/p_card_vertical_01.png" alt="Large Card / All Content Types">
				</section>
				<!-- -->
				<section>
					<h4>Medium Card Examples</h4>
					<img src="img/guide/p_card_vertical_02.png" alt="Medium Card Examples">
				</section>
				<!-- -->
				<section>
					<h4>Small Card</h4>
					<img src="img/guide/p_card_vertical_03.png" alt="Small Card Examples">
				</section>
				<!-- -->
				<section>
					<h2>Selectable Cards</h2>
					<img src="img/guide/p_card_vertical_04.png" alt="Selectable Cards">
				</section>
				<!-- -->
				<section>
					<h2>Acceptable Deviations</h2>
					<section class="full">
						<h4>Headers &amp; Footers</h4>
						<img src="img/guide/p_card_vertical_05.png" alt="Headers &amp; Footers">
					</section>
					<!-- -->
					<section class="full">
						<h4>Expandable Cards</h4>
						<img src="img/guide/p_card_vertical_06.png" alt="Expandable Cards">
					</section>
				</section>
				<!-- -->
				<aside>
					<dl class="related">
						<dt>Related Content</dt>
						<dd class="pg_link"><a href="card.php">Card Component</a></dd>
						<dd class="pg_link"><a href="p_card_horizontal.php">Horizontal Card Patterns</a></dd>
						<dd class="pg_link"><a href="chips.php">Chip Component</a></dd>
						<dd class="pg_link"><a href="icon.php">Icon Component</a></dd>
					</dl>
					<!-- -->
					<dl class="dl_root">
						<dt>Measurements</dt>
						<dd>Margin: <span class="pxrem">12px</span></dd>
						<dd>Padding: <span class="pxrem">16px</span></dd>
						<!-- -->
						<dt>Content</dt>
						<dd>
							<dl class="sub">
								<dt>Dividers</dt>
								<dd>Primary: <span class="pxrem">1px</span> <span title="Gray 400" class="theme">#BBCCDD</span></dd>
								<dd>Secondary: <span class="pxrem">1px</span> <span title="Gray 200" class="theme">#DDE6ED</span></dd>
								<!-- -->
								<dt>Accent</dt>
								<dd>Height: 4px</dd>
								<!-- -->
								<dt>Title</dt>
								<dd>Text: 15px (11pt)</dd>
								<dd>Weight: 600</dd>
								<dd>Line Height: <span class="pxrem">20px</span></dd>
								<!-- -->
								<dt>Icons</dt>
								<dd>See Icon component</dd>
								<!-- -->
								<dt>Date</dt>
								<dd>Text: 11px (8pt) <span title="Gray 500" class="theme">#94A3B0</span></dd>
								<dd>Weight: 400</dd>
								<dd>Line Height: <span class="pxrem">24px</span></dd>
								<!-- -->
								<dt>Description</dt>
								<dd>Text: 13px (10pt) <span title="Gray 900" class="theme">#151921</span></dd>
								<dd>Line Height: <span class="pxrem">20px</span></dd>
								<!-- -->
								<dt>Card Expander</dt>
								<dd class="note">Click to expand and collapse metadata. Card actions remain visible when the card is collapsed.</dd>
								<br>
								<dd class="note">Expandable cards are optional. Medium cards can display small amounts of metadata without expanding and collapsing.</dd>
								<!-- -->
								<dt>Author</dt>
								<dd>Label: 11px (8pt)</dd>
								<dd>Name: 13px (10pt)</dd>
								<dd>Weight: 600</dd>
								<dd>Color: <span title="Gray 500" class="theme">#94A3B0</span></dd>
								<dd>Line Height: <span class="pxrem">20px</span></dd>
								<dd>Image: <span class="pxrem">48px</span> x <span class="pxrem">48px</span></dd>
								<!-- -->
								<dt>Chips</dt>
								<dd class="note">See Chips component</dd>
								<!-- -->
								<dt>Metadata</dt>
								<dd>Text: 13px (10pt) <span title="Gray 500" class="theme">#94A3B0</span></dd>
								<dd>Weight: 600</dd>
								<dd>Row Height: 40px</dd>
								<dd>Icon Color: <span title="Gray 500" class="theme">#94A3B0</span></dd>
								<!-- -->
								<dt>Card Actions</dt>
								<dd>Divider: <span class="pxrem">1px</span> <span title="Gray 400" class="theme">#BBCCDD</span></dd>
								<dd>Background: <span title="Gray 50" class="theme">#F5F9FC</span></dd>
								<dd>Actions: Small Flat Secondary Buttons</dd>
							</dl>
						</dd>
						<!-- -->
						<dt>Small Card</dt>
						<dd>
							<dl class="sub">
								<dt>Card Contents</dt>
								<dd class="note">Small Cards display up to:
									<ul>
										<li>• One Title line</li>
										<li>• Two Subheader lines</li>
										<li>• One Thumbnail</li>
									</ul>
								</dd>
								<!-- -->
								<dt>Subheaders</dt>
								<dd>Text: 11px (8pt) <span title="Gray 500" class="theme">#94A3B0</span></dd>
								<dd>Weight: 400</dd>
								<dd>Line Height: <span class="pxrem">20px</span></dd>
							</dl>
						</dd>
						<!-- -->
						<dt>Selectable Cards</dt>
						<dd>
							<dl class="sub">
								<dt>Checkbox</dt>
								<dd>Top Margin: <span class="pxrem">-8px</span></dd>
								<dd>Left Margin: <span class="pxrem">-8px</span></dd>
								<dd>Size: <span class="pxrem">24px</span></dd>
								<!-- -->
								<dt>Hover State</dt>
								<dd>Card Box Shadow: <span class="pxrem">0px</span> <span class="pxrem">2px</span> <span class="pxrem">3px</span> rgba(0,0,0,.25)</dd>
								<!-- -->
								<dt>Selected State</dt>
								<dd>Box Shadow: none</dd>
								<dd>Border: 2px <span title="Gray 800" class="theme">#354052</span></dd>
							</dl>
						</dd>
						<!-- -->
						<dt>Acceptable Deviations</dt>
						<dd>
							<dl class="sub">
								<dt>Locked</dt>
								<dd>Background: <span title="Gray 500" class="theme">#94A3B0</span></dd>
								<dd>Card Title: <span title="Gray 800" class="theme">#354052</span></dd>
								<!-- -->
								<dt>Disabled</dt>
								<dd>Background: <span title="Gray 500" class="theme">#94A3B0</span></dd>
								<dd>Card Title: <span title="Gray 300" class="theme">#D5D7DB</span></dd>
								<dd>Accent: <span title="Gray 300" class="theme">#D5D7DB</span></dd>
								<!-- -->
								<dt>Error</dt>
								<dd>Card Title: <span title="Red 500" class="theme">#DD0014</span></dd>
								<dd>Accent: <span title="Red 500" class="theme">#DD0014</span></dd>
								<!-- -->
								<dt>Simple Metadata</dt>
								<dd class="note">Metadata can be simplified to one line without labels.</dd>
								<!-- -->
								<dt>Linked Metadata</dt>
								<dd>Hover Color: <span title="Blue 500" class="theme">#0098F3</span></dd>
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
