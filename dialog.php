<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - Dialog</title>
	<link rel="stylesheet" href="css/build/style.css" charset="utf-8">
</head>
<body>
	<main class="opened">
		<header>
			<h2 id="pg_header">Dialog</h2>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<section>
					<h4>Alert Dialog</h4>
					<img src="img/guide/dialog_01.svg" alt="Alert Dialog">
				</section>
				<section>
					<h4>Confirm Dialog</h4>
					<img src="img/guide/dialog_02.svg" alt="Confirm Dialog">
				</section>
				<section>
					<h4>Custom Dialog</h4>
					<img src="img/guide/dialog_03.svg" alt="Custom Dialog">
				</section>
				<section>
					<h4>Tab Dialog</h4>
					<img src="img/guide/dialog_04.svg" alt="Tab Dialog">
				</section>
				<aside>
					<dl>
						<dt>Page Mask</dt>
						<dd>Background: rgba(0,0,0,0.55)</dd>
						<!-- -->
						<dt>Dialog</dt>
						<dd>Background: #FFFFFF</dd>
						<dd>Corner Radius: 4px</dd>
						<dd>Border: none</dd>
						<dd>Box Shadow: 0px 0px 5px rgba(0,0,0,0.25)</dd>
						<!-- -->
						<dd>
							<dl class="sub">
								<dt>Header</dt>
								<dd>[Overlay Title Typestyle]</dd>
								<dd>Text: 20px (15pt)</dd>
								<dd>Standard Header: #354052</dd>
								<dd>Alert Header: #FF8100</dd>
								<dd>Case: Capitalize</dd>
								<dd>Weight: 600</dd>
								<dd>Divider: 1px #DDDDDD</dd>
								<!-- -->
								<dt>Content</dt>
								<dd>[Large Text Typestyle]</dd>
								<dd>Text: 15px (11pt) #172730</dd>
								<!-- -->
								<dt>Tabs</dt>
								<dd>See Tabs component for recommendations.</dd>
								<!-- -->
								<dt>Buttons</dt>
								<dd>See Button component for recommendations.</dd>
							</dl>
						</dd>
						<!-- -->
						<dt>Custom Dialog</dt>
						<dd>Upper Background: #FFFFFF</dd>
						<dd>Lower Background: #354052 (gray) or #0098F3 (blue)</dd>
						<dd>Corner Radius: 4px</dd>
						<dd>Border: none</dd>
						<dd>Box Shadow:	0px 0px 3px rgba(0,0,0,0.25)</dd>
						<!-- -->
						<dd>
							<dl class="sub">
								<dt>Title</dt>
								<dd>Text: 24px (18pt) #FFFFFF</dd>
								<dd>Case: Uppercase</dd>
								<dd>Text Alignemnt: Centered</dd>
								<dd>Weight: 600</dd>
								<!-- -->
								<dt>Description</dt>
								<dd>[Large Text Typestyle]</dd>
								<dd>Text: 15px (11pt) #EDEEF0</dd>
								<dd>Text Alignment: Centered</dd>
								<dd>Line Height: 25px</dd>
								<!-- -->
								<dt>Icons</dt>
								<dd>Back/Forward: #0098F3</dd>
								<dd>Close: #989EA7</dd>
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
