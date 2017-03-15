<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - Toolbar</title>
	<link rel="stylesheet" href="css/build/style.css" charset="utf-8">
</head>
<body>
	<main class="opened">
		<header>
			<h2 id="pg_header">Toolbar</h2>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<section>
					<h4>Brand Bar</h4>
					<img src="img/guide/toolbar_01.svg" alt="Brand Bar">
				</section>
				<section>
					<h4>Content Toolbars</h4>
					<img src="img/guide/toolbar_02.svg" alt="Content Toolbars">
				</section>
				<aside>
					<dl>
						<dt>Brand Bar</dt>
						<dd>Background: #354052</dd>
						<dd>Border-Bottom: 3px #009DD9</dd>
						<dd>Text: 20px (15pt) #EDEEF0</dd>
						<!-- -->
						<dd>
							<dl class="sub">
								<dt>App Name</dt>
								<dd>[App Name Typestyle]</dd>
								<dd>Weight: 600</dd>
								<dd>Case: Uppercase</dd>
								<!-- -->
								<dt>Page Title</dt>
								<dd>[Page Title Typestyle]</dd>
								<dd>Weight: 400</dd>
								<dd>Case: Capitalize</dd>
								<dd>Two spaces around vertical pipe</dd>
								<!-- -->
								<dt>Icons</dt>
								<dd>Unselected: #EDEEF0 (White)</dd>
								<dd>Selected: #354052 (Gray)</dd>
								<dd>Selected BG: #EDEEF0 (White)</dd>
							</dl>
						</dd>
						<!-- -->
						<dt>Content Toolbars</dt>
						<!-- -->
						<dd>
							<dl class="sub">
								<dt>Background Colors</dt>
								<dd>White: #FFFFFF</dd>
								<dd>Light Gray: #F5F5F5</dd>
								<dd>Dark Gray: #EEEEEE</dd>
								<!-- -->
								<dt>Text Buttons</dt>
								<dd>[Body Text Typestyle]</dd>
								<dd>Text: 13px (10pt) #354052</dd>
								<dd>Weight: 600</dd>
								<!-- -->
								<dt>Buttons with Dark Background</dt>
								<dd>See Button component for recommendations.</dd>
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
