<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines &ndash; Components &ndash; List</title>
	<link rel="stylesheet" href="css/build/style_v8-2.css">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Components &ndash; List</h2>
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
					<h4>List With Dividers on Page Background</h4>
					<img src="img/guide/list_01.png" alt="List On Page Background">
				</section>
				<section>
					<h4>List Without Dividers in Card</h4>
					<img src="img/guide/list_02.png" alt="List In Panel">
				</section>
				<aside>
					<dl class="dl_root">
						<dt>Label</dt>
						<dd>Text: 15px (11pt) <span title="Gray 800" class="theme">#354052</span></dd>
						<dd>Weight: 700</dd>
						<dd>Margin Between Groups: <span class="pxrem">32px</span></dd>
						<!-- -->
						<dt>List Items</dt>
						<dd>Text: 13px (10pt) <span title="Gray 900" class="theme">#151921</span></dd>
						<dd>Weight: 400</dd>
						<dd>Line Height: <span class="pxrem">24px</span></dd>
						<!-- -->
						<dt>Dividers</dt>
						<dd>1px <span title="Gray 200" class="theme">#DDE6ED</span></dd>
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
