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
					<img src="img/guide/select_01.svg" alt="Input Select Field">
				</section>
				<section>
					<h4>Alternate Select Field</h4>
					<img src="img/guide/select_02.svg" alt="Alternate Select Field">
				</section>
				<aside>
					<dl>
						<dt>Basic Style</dt>
						<dd class="note">See Input component</dd>
						<!-- -->
						<dt>Input Select</dt>
						<dd>Row Height: 36px</dd>
						<!-- -->
						<dt>Alternate Select</dt>
						<dd>[Large Text Typestyle]</dd>
						<dd>Text: 15px (11pt) #FFFFFF</dd>
						<dd>Field Background: #838F93</dd>
						<dd>Corner Radius: 4px</dd>
						<dd>Row Dividers: 1px #DDDDDD</dd>
						<!-- -->
						<dt>States</dt>
						<dd>Hover Background: #D4EEFD</dd>
						<dd>Selected Background: #354052</dd>
						<dd>Selected Content: #EDEEF0</dd>
						<!-- -->
						<dt>Icons</dt>
						<dd class="note">Menu item icons are optional.</dd>
					</dl>
				</aside>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
