<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - Input</title>
	<link rel="stylesheet" href="css/build/style.css" charset="utf-8">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Input</h2>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<section>
					<h4></h4>
					<img src="img/guide/input_01.png" alt="Input States">
				</section>
				<aside>
					<dl>
						<dt>Labels</dt>
						<dd>
							<dl class="sub">
								<dt>Primary Label</dt>
								<dd>[Large Text Typestyle]</dd>
								<dd>Text: 15px (11pt) #151921</dd>
								<dd>Weight: 600</dd>
								<dd>Required Asterisk: #FF8300</dd>
								<!-- -->
								<dt>Helper Text</dt>
								<dd>[Body Text Typestyle]</dd>
								<dd>Text: 13px (10pt) #151921</dd>
								<dd>Weight: 400</dd>
								<dd>Line Height: 20px</dd>
								<dd>Error Color: #FF8100</dd>
							</dl>
						</dd>
						<!-- -->
						<dt>Input Text</dt>
						<dd>[Body Text Typestyle]</dd>
						<dd>Text: 13px (10pt)  #151921</dd>
						<dd>Hint Text: #A8AFB3</dd>
						<!-- -->
						<dt>Field States</dt>
						<dd>
							<dl class="sub">
								<dt>Normal</dt>
								<dd>Background: #FFFFFF</dd>
								<dd>Border: 1px #A8AFB3</dd>
								<!-- -->
								<dt>Focus</dt>
								<dd>Background: #FFFFFF</dd>
								<dd>Border: 1px #0098F3</dd>
								<!-- -->
								<dt>Error</dt>
								<dd>Background: #FFFFFF</dd>
								<dd>Border: 1px #FF8100</dd>
								<!-- -->
								<dt>Disabled</dt>
								<dd>Background: #F0F0F0</dd>
								<dd>Border: 1px #A8AFB3</dd>
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
