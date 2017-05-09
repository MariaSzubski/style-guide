<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - List</title>
	<link rel="stylesheet" href="css/build/style.css" charset="utf-8">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">List</h2>
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
						<dd>Text: 15px (11pt) #354052</dd>
						<dd>Weight: 700</dd>
						<dd>Margin Between Groups: 32px</dd>
						<!-- -->
						<dt>List Items</dt>
						<dd>Text: 13px (10pt) #151921</dd>
						<dd>Weight: 400</dd>
						<dd>Line Height: 24px</dd>
						<!-- -->
						<dt>Dividers</dt>
						<dd>1px #DDE6ED</dd>
						<!-- -->
						<dt>States</dt>
						<dd>
							<dl class="sub">
								<dt>Hover</dt>
								<dd>Background: #D4EEFD</dd>
								<!-- -->
								<dt>Selected</dt>
								<dd>Background: #EDEEF0</dd>
								<dd>Border-Bottom: 2px #354052</dd>
								<dd>Optional Background for Multi-Select: #FFEEBA (Yellow)</dd>
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
