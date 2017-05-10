<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines &ndash; Patterns &ndash; Sidenav (Left)</title>
	<link rel="stylesheet" href="css/build/style.css" charset="utf-8">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Sidenav (Left) Patterns</h2>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<section>
					<h4>List View</h4>
					<img src="img/guide/p_sidenav_l_01.png" alt="List View">
				</section>
				<section>
					<h4>Tree View</h4>
					<img src="img/guide/p_sidenav_l_02.png" alt="Tree View">
				</section>
				<aside>
					<dl class="related">
						<dt>Related Content</dt>
						<dd class="pg_link"><a href="sidenav.php">Sidenav Component</a></dd>
						<dd class="pg_link"><a href="p_copyright.php">Copyright Pattern</a></dd>
					</dl>
					<!-- -->
					<dl class="dl_root">
						<dt>Styles</dt>
						<dd>
							<dl class="sub">
								<dt>All Menu Items</dt>
								<dd>Text: 15px (11pt) <span title="Gray 900" class="theme">#151921</span></dd>
								<dd>Case: Capitalize</dd>
								<!-- -->
								<dt>List View</dt>
								<dd>Weight: 600</dd>
								<dd>Line Height: 40px</dd>
								<dd>Indent: 20px</dd>
								<!-- -->
								<dt>Tree View</dt>
								<dd>Folder Label Weight: 600</dd>
								<dd>Folder Line Height: 40px</dd>
								<dd>Item Weight: 400</dd>
								<dd>Item Line Height: 30px</dd>
								<dd>Indent: 20px</dd>
								<!-- -->
								<dt>Icons</dt>
								<dd>New Window: open_in.svg</dd>
								<dd>Collapsed Folder With Selected Item: wizard_completed.png</dd>
							</dl>
						</dd>
						<!-- -->
						<dt>States</dt>
						<dd>
							<dl class="sub">
								<dt>Hover</dt>
								<dd>Background: <span title="Blue 50" class="theme">#D4EEFD</span></dd>
								<!-- -->
								<dt>Selected</dt>
								<dd>Background: <span title="Gray 100" class="theme">#EDEEF0</span></dd>
								<dd>Border-Bottom: 2px <span title="Gray 800" class="theme">#354052</span></dd>
							</dl>
						</dd>
						<!-- -->
						<dt>Copyright</dt>
						<dd class="note">See Copyright Pattern</dd>
					</dl>
				</aside>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
