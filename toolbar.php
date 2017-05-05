<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - Toolbar</title>
	<link rel="stylesheet" href="css/build/style.css" charset="utf-8">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Toolbar</h2>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<section>
					<!-- <h4>Content Toolbars</h4> -->
					<img src="img/guide/toolbar_01.png" alt="Content Toolbars">
				</section>
				<aside>
					<dl class="dl_root">
						<dt>Content Toolbars</dt>
						<!-- -->
						<dd>
							<dl class="sub">
								<dt>Background Colors</dt>
								<dd>White: #FFFFFF</dd>
								<dd>Optional Background: #F5F9FC</dd>
								<!-- -->
								<dt>Text Buttons</dt>
								<dd>[Body Text Typestyle]</dd>
								<dd>Text: 13px (10pt) #354052</dd>
								<dd>Weight: 600</dd>
								<!-- -->
								<dt>Buttons with Dark Background</dt>
								<dd class="note">See Button component for recommendations.</dd>
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
