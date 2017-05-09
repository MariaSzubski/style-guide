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
					<h4>Input States</h4>
					<img src="img/guide/input_01.png" alt="Input States">
				</section>
				<section>
					<h4>Primary Input</h4>
					<img src="img/guide/input_02.png" alt="Primary Input">
				</section>
				<section>
					<h4>Large Input</h4>
					<img src="img/guide/input_03.png" alt="Large Input">
				</section>
				<aside>
					<dl class="related">
						<dt>Related Content</dt>
						<dd class="pg_link"><a href="date_picker.php">Date Picker Component</a></dd>
						<dd class="pg_link"><a href="select.php">Select Component</a></dd>
					</dl>
					<!-- -->
					<dl class="dl_root">
						<dt>Field Measurements</dt>
						<dd>Primary Input Height: 36px</dd>
						<dd>Large Input Height: 45px</dd>
						<dd>Padding: 16px</dd>
						<dd>Margin Between Fields: 24px</dd>
						<!-- -->
						<dt>Text</dt>
						<dd>
							<dl class="sub">
								<dt>Primary Label</dt>
								<dd>Text: 15px (11pt) #151921</dd>
								<dd>Weight: 600</dd>
								<dd>Required Asterisk: #B21DAC</dd>
								<!-- -->
								<dt>Helper Label</dt>
								<dd>Text: 13px (10pt) #151921</dd>
								<dd>Weight: 400</dd>
								<dd>Error: #DD0014</dd>
								<dd>Line Height: 20px</dd>
								<!-- -->
								<dt>Input Text</dt>
								<dd>Text Size: 13px (10pt)</dd>
								<dd>Hint Text: #9BAAB8</dd>
								<dd>User Input: #151921</dd>
								<dd>Disabled: #D5D7DB</dd>
							</dl>
						</dd>
						<!-- -->
						<dt>Field States</dt>
						<dd>
							<dl class="sub">
								<dt>Default</dt>
								<dd>Background: #FFFFFF</dd>
								<dd>Border: 1px #9BAAB8</dd>
								<!-- -->
								<dt>Focus</dt>
								<dd>Background: #FFFFFF</dd>
								<dd>Border: 1px #0098F3</dd>
								<!-- -->
								<dt>Error</dt>
								<dd>Background: #FFFFFF</dd>
								<dd>Border: 1px #DD0014</dd>
								<!-- -->
								<dt>Disabled</dt>
								<dd>Background: #F0F0F0</dd>
								<dd>Border: 1px #D5D7DB</dd>
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
