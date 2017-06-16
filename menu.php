<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - Menu</title>
	<link rel="stylesheet" href="css/build/style_v8-2.css" charset="utf-8">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Menu</h2>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<section>
					<h4></h4>
					<img src="img/guide/menu_01.png" alt="Menus with and without icons">
				</section>
				<section>
					<h4></h4>
					<img src="img/guide/menu_02.png" alt="Menu States">
				</section>
				<section>
					<h4></h4>
					<img src="img/guide/menu_03.png" alt="Menu sizes, without dividers">
				</section>
				<section>
					<h4></h4>
					<img src="img/guide/menu_04.png" alt="Menu sizes, with dividers">
				</section>
				<aside>
					<dl class="dl_root">
						<dt>Container</dt>
						<dd>Background: #FFFFFF</dd>
						<dd>Box Shadow: 0px 1px 2px rgba(0,0,0,.45)</dd>
						<dd>Optional Dividers: 1px <span title="Gray 200" class="theme">#DDE6ED</span></dd>
						<!-- -->
						<dt>Measurements</dt>
						<dd>Left &amp; Right Padding: 12px</dd>
						<dd>Default Row Height: 48px</dd>
						<dd>Compact Row Height: <span title="36px" class="theme">2.25rem</span></dd>
						<!-- -->
						<dt>Content</dt>
						<dd>Text: 15px (11pt) <span title="Gray 800" class="theme">#354052</span></dd>
						<dd>Icon Color: <span title="Gray 800" class="theme">#354052</span></dd>
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
								<dd>Optional Background for Multi-Select: <span title="Yellow 100" class="theme">#FFEEBA</span> (Yellow)</dd>
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
