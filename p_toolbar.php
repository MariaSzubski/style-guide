<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines &ndash; Patterns &ndash; Toolbar</title>
	<link rel="stylesheet" href="css/build/style_v8-2.css">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Patterns &ndash; Toolbar</h2>
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
					<h2>Alignment</h2>
					<section class="full">
						<h4>Left: Actions that impact panel contents</h4>
						<img src="img/guide/p_toolbar_01.png" alt="Left: Actions that impact panel contents">
					</section>
					<!-- -->
					<section class="full">
						<h4>Right: Actions related to panel contents</h4>
						<img src="img/guide/p_toolbar_02.png" alt="Right: Actions related to panel contents">
					</section>
					<!-- -->
					<section class="full">
						<h4>Actions Combined with Panel Title</h4>
						<img src="img/guide/p_toolbar_03.png" alt="Actions Combined with Panel Title">
					</section>
				</section>
				<!-- Section 2 -->
				<section>
					<h2>Examples</h2>
					<section class="full">
						<h4>App Menu</h4>
						<img src="img/guide/p_toolbar_04.png" alt="App Menu">
					</section>
					<!-- -->
					<section class="full">
						<h4>Custom Menus or Filters</h4>
						<img src="img/guide/p_toolbar_05.png" alt="Custom Menus or Filters">
					</section>
				</section>
				<!-- Section 3 -->
				<section>
					<h2>Acceptable Deviations</h2>
					<section class="full">
						<h4>Highlighted Background</h4>
						<img src="img/guide/p_toolbar_06.png" alt="Blue Toolbar Background">
					</section>
					<!-- -->
					<section class="full">
						<h4>Raised Icon Buttons</h4>
						<img src="img/guide/p_toolbar_07.png" alt="Raised Icon Buttons">
					</section>
					<!-- -->
					<section class="full">
						<h4>Tertiary Icon Button Group</h4>
						<img src="img/guide/p_toolbar_08.png" alt="Tertiary Icon Button Group">
					</section>
				<aside>
					<dl class="related">
						<dt>Related Content</dt>
						<dd class="pg_link"><a href="toolbar.php">Toolbar Component</a></dd>
						<dd class="pg_link"><a href="icon.php">Icon Component</a></dd>
						<dd class="pg_link"><a href="button_group.php">Button Group Component</a></dd>
					</dl>
					<!-- -->
					<dl class="dl_root">
						<dt>Styles</dt>
						<dd>Group Divider: <span class="pxrem">1px</span> <span title="Gray 400" class="theme">#BBCCDD</span></dd>
						<dd>Highlighted Background: <span title="Gray 200" class="theme">#DDE6ED</span></dd>
						<dd>Menu Arrow: select.svg</dd>
						<!-- -->
						<dt>Order</dt>
						<dd class="note">Arrange toolbar actions from <mark>right to left</mark> in CRUD order:
							<ul>
								<li><strong>C</strong>reate</li>
								<li><strong>R</strong>ead (Retrieve)</li>
								<li><strong>U</strong>pdate (Modify)</li>
								<li><strong>D</strong>elete</li>
							</ul>
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
