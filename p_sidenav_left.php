<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - Sidenav (Left)</title>
	<link rel="stylesheet" href="css/build/style.css" charset="utf-8">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Sidenav (Left)</h2>
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
						<dt>Menu Items</dt>
						<dd>[Large Text Typestyle]</dd>
						<dd>Text: 15px (11pt) #FFFFFF</dd>
						<dd>Case: Capitalize</dd>
						<!-- -->
						<dd>
							<dl class="sub">
								<dt>Hover State</dt>
								<dd>Background: #647484</dd>
								<dd>Highlight Height: 30px</dd>
								<!-- -->
								<dt>Selected Item</dt>
								<dd>Background: #EDEEF0</dd>
								<dd>Left Border: 5px #151921</dd>
								<dd>Text Color: #151921</dd>
								<!-- -->
								<dt>List View</dt>
								<dd>Weight: 600</dd>
								<dd>Line Height: 40px</dd>
								<dd>Indent: 20px</dd>
								<!-- -->
								<dt>Tree View</dt>
								<dd>Folder Weight: 600</dd>
								<dd>Tree Item Weight: 400</dd>
								<dd>Folder Line Height: 40px</dd>
								<dd>Tree Item Line Height: 30px</dd>
								<dd>Indent: 20px</dd>
								<!-- -->
								<dt>Collapsed Folder Containg Selection</dt>
								<dd>Icon: wizard_completed.png</dd>
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