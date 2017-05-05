<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - Pagination</title>
	<link rel="stylesheet" href="css/build/style.css" charset="utf-8">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Pagination</h2>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<section>
					<h4></h4>
					<img src="img/guide/pagination_01.png" alt="Pagnation">
				</section>
				<aside>
					<dl class="dl_root">

						<dt>Numbers</dt>
						<dd>
							<dl class="sub">
								<dt>Unselected Page</dt>
								<dd>Text: 13px (10pt) #0098F3</dd>
								<dd>Alignment: Centered</dd>
								<!-- -->
								<dt>Selected Page</dt>
								<dd>Text: 13px (10pt) #EDEEF0</dd>
								<dd>Alignment: Centered</dd>
								<dd>Background: #354052</dd>
								<dd>Corner Radius: 4px</dd>
							</dl>
						</dd>
						<!-- -->
						<dt>‘Go to Page’</dt>
						<dd>
							<dl class="sub">
								<dt>Label</dt>
								<dd>Text: 12px (9pt) #989EA7</dd>
								<dd>Case: Uppercase</dd>
								<!-- -->
								<dt>Field</dt>
								<dd>Border: 1px #A7AEB2</dd>
								<dd>Text Color: #0098F3</dd>
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
