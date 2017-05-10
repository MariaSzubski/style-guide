<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines &ndash; Patterns &ndash; Dialog</title>
	<link rel="stylesheet" href="css/build/style_v8-1.css" charset="utf-8">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Dialog Patterns</h2>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<section>
					<h4</h4>
					<img src="img/guide/p_dialog_01.png" alt="Dialogs Patterns">
				</section>
				<aside>
					<dl class="related">
						<dt>Related Content</dt>
						<dd class="pg_link"><a href="dialog.php">Dialog Component</a></dd>
						<dd class="pg_link"><a href="button_raised.php">Button Component</a></dd>
						<dd class="pg_link"><a href="tabs.php">Tabs Component</a></dd>
					</dl>
					<!-- -->
					<dl class="dl_root">
						<dt>Content</dt>
						<dd>
							<dl class="sub">
								<dt>Content</dt>
								<dd>Text: 15px (11pt) <span title="Gray 900" class="theme">#151921</span></dd>

								<!-- -->
								<dt>Buttons &amp; Tabs</dt>
								<dd class="note">See Button &amp; Tab Component</dd>
								<!-- -->
								<dt>Alert Header</dt>
								<dd>Color: #FF8100</dd>
							</dl>
						</dd>
						<!-- -->
						<dt>Custom Dialog</dt>
						<dd>
							<dl class="sub">
								<dt>Lower Background</dt>
								<dd>Navy: <span title="Gray 800" class="theme">#354052</span></dd>
								<dd>Blue: <span title="Blue 500" class="theme">#0098F3</span></dd>
								<!-- -->
								<dt>Title</dt>
								<dd>Text: 24px (18pt) #FFFFFF</dd>
								<dd>Weight: 600</dd>
								<dd>Case: Uppercase</dd>
								<dd>Text Alignemnt: Centered</dd>
								<!-- -->
								<dt>Description</dt>
								<dd>Text: 15px (11pt) <span title="Gray 100" class="theme">#EDEEF0</span></dd>
								<dd>Text Alignment: Centered</dd>
								<dd>Line Height: 25px</dd>
								<!-- -->
								<dt>Icons</dt>
								<dd>Back/Forward: <span title="Blue 500" class="theme">#0098F3</span></dd>
								<dd>Close: <span title="Gray 500" class="theme">#94A3B0</span></dd>
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
