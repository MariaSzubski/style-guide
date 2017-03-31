<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - Switch</title>
	<link rel="stylesheet" href="css/build/style.css" charset="utf-8">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Switch</h2>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<section class="desc">
					<h4>Material Design Switch</h4>
					<img src="img/guide/switch_01.png" alt="Color Options">
				</section>
				<section>
					<h4>Grouped Actions (Large)</h4>
					<img src="img/guide/switch_02.png" alt="Grouped Actions (Large)">
				</section>
				<section>
					<h4>Grouped Toolbar (Small)</h4>
					<img src="img/guide/switch_03.png" alt="Grouped Toolbar Options (Small)">
				</section>
				<aside>
					<dl>
						<dt>Material Design Switch</dt>
						<dd>Blue: #00AEEF</dd>
						<dd>Green: #26B910</dd>
						<dd>Navy: #354052</dd>
						<!-- -->
						<dt>Grouped Actions (Large)</dt>
						<dd>Text: 15px (11pt)</dd>
						<dd>Weight: 600</dd>
						<dd>Case: Capitalize</dd>
						<dd>Corner Radius: 4px</dd>
						<dd>
							<dl class="sub">
								<dt>Selected State</dt>
								<dd>Text Color: #FFFFFF</dd>
								<dd>Background: #0098F3</dd>
								<!-- -->
								<dt>Hover State</dt>
								<dd>Text Color: #0098F3</dd>
								<dd>Border: 1px #0098F3</dd>
								<dd>Background: #D4EEFD</dd>
								<!-- -->
								<dt>Unselected State</dt>
								<dd>Text Color: #0098F3</dd>
								<dd>Border: 1px #0098F3</dd>
								<dd>Background: #FFFFFF</dd>
							</dl>
						</dd>
						<!-- -->
						<dt>Grouped Toolbar (Small)</dt>
						<dd>Text: 13px (10pt)</dd>
						<dd>Weight: 600</dd>
						<dd>Case: Capitalize</dd>
						<dd>Corner Radius: 4px</dd>
						<dd>
							<dl class="sub">
								<dt>Selected State</dt>
								<dd>Text Color: #EDEEF0</dd>
								<dd>Background: #354052</dd>
								<!-- -->
								<dt>Hover State</dt>
								<dd>Text Color: #354052</dd>
								<dd>Border: 1px #354052</dd>
								<dd>Background: #DDE6ED</dd>
								<!-- -->
								<dt>Unselected State</dt>
								<dd>Text Color: #354052</dd>
								<dd>Border: 1px #354052</dd>
								<dd>Background: #FFFFFF</dd>
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
