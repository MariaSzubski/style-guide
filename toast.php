<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - Toast</title>
	<link rel="stylesheet" href="css/build/style.css" charset="utf-8">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Toast</h2>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<section>
					<h4>Simple Toast</h4>
					<img src="img/guide/toast_01.png" alt="Simple Toast">
				</section>
				<section>
					<h4>Notification</h4>
					<img src="img/guide/toast_02.png" alt="Notification">
				</section>
				<aside>
					<dl class="dl_root">
						<dt>Location on Screen</dt>
						<dd>Simple Toast: Top Center</dd>
						<dd>Notification: Bottom Right</dd>
						<!-- -->
						<dt>Simple Toast</dt>
						<dd>Height: 44px</dd>
						<dd>Minimum Width: 170px</dd>
						<dd>Corner Radius: 4px</dd>
						<dd>Text: 15px (11pt)</dd>
						<dd>Box Shadow:	0px 3px 4px rgba(0,0,0,0.45)</dd>
						<dd>Angular Shadow: 6dp</dd>
						<!-- -->
						<dt>States</dt>
						<dd>
							<dl class="sub">
								<dt>Green (Positive)</dt>
								<dd>Text Color: #1D8D0C</dd>
								<dd>Background: #B6EEAF</dd>
								<dd>Icon Background: #D0F7CC</dd>
								<dd>Border: 1px #23A60F</dd>
								<!-- -->
								<dt>Yellow (Warning)</dt>
								<dd>Text Color: #E67219</dd>
								<dd>Background: #FFEEBA</dd>
								<dd>Icon Background: #FFF7DE</dd>
								<dd>Border: 1px #F29100</dd>
								<!-- -->
								<dt>Red (Error)</dt>
								<dd>Text Color: #DD0014</dd>
								<dd>Background: #FFC9CC</dd>
								<dd>Icon Background: #FCE1E1</dd>
								<dd>Border: 1px #FA4F4F</dd>
							</dl>
						</dd>
						<!-- -->
						<dt>Notification</dt>
						<dd>
							<dl class="sub">
								<dt>Container</dt>
								<dd>Background: #FFFFFF</dd>
								<dd>Padding: 16px</dd>
								<dd>Box Shadow:	0px 3px 4px rgba(0,0,0,0.45)</dd>
								<dd>Angular Shadow: 6dp</dd>
								<dd>Margin Between Notifications: 10px</dd>
								<!-- -->
								<dt>Header</dt>
								<dd>Text: 15px (11pt) #354052</dd>
								<dd>Weight: 600</dd>
								<dd>Line Height: 20px</dd>
								<!-- -->
								<dt>Description</dt>
								<dd>Text: 13px (10pt) #354052</dd>
								<dd>Line Height: 20px</dd>
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
