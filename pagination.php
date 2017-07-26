<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines &ndash; Components &ndash; Pagination</title>
	<link rel="stylesheet" href="css/build/style_v8-2.css">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Components &ndash; Pagination</h2>
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

					<img src="img/guide/pagination_01.png" alt="Pagnation">
				</section>
				<aside>
					<dl class="dl_root">
						<dt>Numbers</dt>
						<dd>
							<dl class="sub">
								<dt>Unselected Page</dt>
								<dd>Text: 13px (10pt) <span title="Blue 500" class="theme">#0098F3</span></dd>
								<dd>Alignment: Centered</dd>
								<!-- -->
								<dt>Selected Page</dt>
								<dd>Text: 13px (10pt) <span title="Gray 100" class="theme">#EDEEF0</span></dd>
								<dd>Alignment: Centered</dd>
								<dd>Background: <span title="Gray 800" class="theme">#354052</span></dd>
								<dd>Corner Radius: <span class="pxrem">4px</span></dd>
								<dd>Padding: <span class="pxrem">16px</span></dd>
								<dd>Height: <span class="pxrem">28px</span></dd>
							</dl>
						</dd>
						<!-- -->
						<dt>‘Go to Page’</dt>
						<dd>
							<dl class="sub">
								<dt>Label</dt>
								<dd>Text: 12px (9pt) <span title="Gray 500" class="theme">#94A3B0</span></dd>
								<dd>Case: Uppercase</dd>
								<!-- -->
								<dt>Field</dt>
								<dd>Border: <span class="pxrem">1px</span> <span title="Gray 500" class="theme">#94A3B0</span></dd>
								<dd>Text Color: <span title="Gray 900" class="theme">#151921</span></dd>
								<dd>Height: <span class="pxrem">28px</span></dd>
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
