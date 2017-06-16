<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines &ndash; Patterns &ndash; Button</title>
	<link rel="stylesheet" href="css/build/style_v8-2.css" charset="utf-8">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Button Patterns</h2>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<section>
					<h4>Implementation</h4>
					<img src="img/guide/p_button_01.png" alt="Button Patterns">
				</section>
				<aside>
					<dl class="related">
						<dt>Related Content</dt>
						<dd class="pg_link"><a href="button_raised.php">Raised Button Component</a></dd>
						<dd class="pg_link"><a href="button_flat.php">Flat Button Component</a></dd>
					</dl>
					<!-- -->
					<dl class="dl_root">
						<dt>Notes</dt>
						<dd>
							<dl class="sub">
								<dt>Default Button</dt>
								<dd class="note">Blue is the default button color. Accent buttons should be used rarely to elevate an important action on the page.</dd>
								<!-- -->
								<dt>Color</dt>
								<dd class="note">Don't mix colors (blue and green) in a button group.</dd>
								<!-- -->
								<dt>Primary Buttons</dt>
								<dd class="note">There is only one primary action per group. It uses the Primary or Accent button style.</dd>
								<!-- -->
								<dt>Secondary Buttons</dt>
								<dd class="note">Use Flat Secondary style for buttons grouped with a primary action.</dd>
								<!-- -->
							</dl>
						</dd>
					</dl>
				</aside>
			</div>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
