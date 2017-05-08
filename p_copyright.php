<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - Copyright</title>
	<link rel="stylesheet" href="css/build/style.css" charset="utf-8">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Copyright</h2>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<section>
					<h4>Option 1: In Sidenav</h4>
					<img src="img/guide/p_copyright_01.png" alt="Option 1: In Navigation Menu">
				</section>
				<section>
					<h4>Option 2: In Page Footer</h4>
					<img src="img/guide/p_copyright_02.png" alt="Option 2: In Page Footer">
				</section>
				<aside>
					<dl class="related">
						<dt>Related Content</dt>
						<dd class="pg_link"><a href="p_sidenav_left.php">Sidenav (Left) Pattern</a></dd>
					</dl>
					<!-- -->
					<dl class="dl_root">
						<dt>In Sidenav Menu</dt>
						<dd>[Small Text Typestyle]</dd>
						<dd>Text: 11px (8pt) #8F9BA8</dd>
						<dd>Line height: 15px</dd>
						<dd>Divider: 1px #495970</dd>
						<dd>Nielsen Logo: #EDEEF0</dd>
						<!-- -->
						<dd>
							<dl class="sub">
								<dt>Links</dt>
								<dd>Text Decoration: Underline</dd>
							</dl>
						</dd>
						<!-- -->
						<dt>In Page Footer</dt>
						<dd>[Small Text Typestyle]</dd>
						<dd>Text: 11px (8pt) #354052</dd>
						<dd>Alignment: Centered</dd>
						<dd>Background Color: #DDE6ED</dd>
						<!-- -->
						<dd>
							<dl class="sub">
								<dt>Links</dt>
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