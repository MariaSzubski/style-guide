<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - Content</title>
	<link rel="stylesheet" href="css/build/style.css" charset="utf-8">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Content</h2>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<section>
					<h4></h4>
					<img src="img/guide/content_01.png" alt="Content">
				</section>
				<aside>
					<dl>
						<dt>Type Styles</dt>
						<dd>Font Family: Open Sans</dd>
						<dd>Recommended: 13 words per line</dd>
						<!-- -->
						<dd>
							<dl class="sub">
								<dt>Panel Title</dt>
								<dd>Text: 20px (15pt) #354052</dd>
								<dd>Weight: 600</dd>
								<dd>Case: capitalize</dd>
								<!-- -->
								<dt>Body Text</dt>
								<dd>Text: 13px (10pt) $151921</dd>
								<dd>Weight: 400, 600, 700</dd>
								<dd>Line Height: 20px</dd>
								<dd>Paragraph Spacing: 13px</dd>
								<!-- -->
								<dt>Small Text</dt>
								<dd>Text: 11px (8pt) $151921</dd>
								<dd>Weight: 400, 700</dd>
								<dd>Line Height: 15px</dd>
								<!-- -->
								<dt>Links</dt>
								<dd>Color: #0098F3</dd>
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
