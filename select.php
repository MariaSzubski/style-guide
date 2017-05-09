<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - Select</title>
	<link rel="stylesheet" href="css/build/style.css" charset="utf-8">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Select</h2>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<section>
					<h4>Input Select Field</h4>
					<img src="img/guide/select_01.png" alt="Input Select Field">
				</section>
				<section>
					<h4>Toolbar Select Field</h4>
					<img src="img/guide/select_02.png" alt="Alternate Select Field">
				</section>
				<aside>
					<dl class="related">
						<dt>Related Content</dt>
						<dd class="pg_link"><a href="input.php">Input Component</a></dd>
						<dd class="pg_link"><a href="menu.php">Menu Component</a></dd>
					</dl>
					<!-- -->
					<dl class="dl_root">
						<dt>Input Select</dt>
						<dd class="note">Uses standard Input Component</dd>
						<dd>Selector Icon: select.svg</dd>
						<dd>Icon Color: #9BAAB8</dd>
						<!-- -->
						<dt>Toolbar Select</dt>
						<dd>
							<dl class="sub">
								<dt>Selector</dt>
								<dd>Text: 13px (9pt) #354052</dd>
								<dd>Font Weight: 600</dd>
								<dd>Selector Icon: select.svg</dd>
								<dd>Icon Color: #151921</dd>
								<!-- -->
								<dt>Menu</dt>
								<dd>Uses standard Menu Component</dd>
							</dl>
						</dd>
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
