<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines &ndash; Patterns &ndash; Content</title>
	<link rel="stylesheet" href="css/build/style_v8-2.css">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Patterns &ndash; Content</h2>
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
					
					<img src="img/guide/p_content_01.png" alt="Content">
				</section>
				<aside>
					<dl class="related">
						<dt>Related Content</dt>
						<dd class="pg_link"><a href="type_styles.php">Type Styles</a></dd>
					</dl>
					<!-- -->
					<dl class="dl_root">
						<dt>Type Styles</dt>
						<dd>
							<dl class="sub">
								<dt>Font Family</dt>
								<dd>Open Sans</dd>
								<!-- -->
								<dt>Panel Title</dt>
								<dd>Text: 20px (15pt) <span title="Gray 800" class="theme">#354052</span></dd>
								<dd>Weight: 400</dd>
								<dd>Case: Capitalize</dd>
								<!-- -->
								<dt>Body Text</dt>
								<dd>Text: 13px (10pt) <span title="Gray 900" class="theme">#151921</span></dd>
								<dd>Weight Options: 400, 600, 700</dd>
								<dd>Line Height: <span class="pxrem">20px</span></dd>
								<dd>Paragraph Spacing: <span class="pxrem">13px</span></dd>
								<!-- -->
								<dt>Small Text</dt>
								<dd>Text: 11px (8pt) <span title="Gray 900" class="theme">#151921</span></dd>
								<dd>Weight: 400, 700</dd>
								<dd>Line Height: <span class="pxrem">15px</span></dd>
								<!-- -->
								<dt>Links</dt>
								<dd>Color: <span title="Blue 500" class="theme">#0098F3</span></dd>
								<dd>Text Decoration: Underline</dd>
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
