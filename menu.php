<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines &ndash; Components &ndash; Menu</title>
	<link rel="stylesheet" href="css/build/style_v8-2.css">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Components &ndash; Menu</h2>
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
					<h4></h4>
					<img src="img/guide/menu_01.png" alt="Menus with and without icons">
				</section>
				<section>
					<h4></h4>
					<img src="img/guide/menu_02.png" alt="Menu States">
				</section>
				<section>
					<h4></h4>
					<img src="img/guide/menu_03.png" alt="Menu sizes, without dividers">
				</section>
				<section>
					<h4></h4>
					<img src="img/guide/menu_04.png" alt="Menu sizes, with dividers">
				</section>
				<aside>
					<dl class="dl_root">
						<dt>Container</dt>
						<dd>Background: #FFFFFF</dd>
						<dd>Box Shadow: <span class="pxrem">0px</span> <span class="pxrem">1px</span> <span class="pxrem">2px</span> rgba(0,0,0,.45)</dd>
						<dd>Optional Dividers: <span class="pxrem">1px</span> <span title="Gray 200" class="theme">#DDE6ED</span></dd>
						<!-- -->
						<dt>Measurements</dt>
						<dd>Left &amp; Right Padding: <span class="pxrem">12px</dd>
						<dd>Row Height (Default): <span class="pxrem">48px</dd>
						<dd>Row Height (Compact): <span class="pxrem">36px</span></dd>
						<!-- -->
						<dt>Content</dt>
						<dd>Text: 15px (11pt) <span title="Gray 800" class="theme">#354052</span></dd>
						<dd>Icon Color: <span title="Gray 800" class="theme">#354052</span></dd>
						<!-- -->
						<dt>States</dt>
						<dd>Hover Background: <span title="Blue 50" class="theme">#D4EEFD</span></dd>
						<dd>Selected Background: <span title="Gray 200" class="theme">#DDE6ED</span></dd>
					</dl>
				</aside>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
