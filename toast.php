<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - Toast</title>
	<link rel="stylesheet" href="css/build/style.css" charset="utf-8">
</head>
<body>
	<main class="opened">
		<header>
			<h2 id="pg_header">Toast</h2>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<section>
					<h4>Simple Toast</h4>
					<img src="img/guide/toast_01.svg" alt="Simple Toast">
				</section>
				<section>
					<h4>Notification</h4>
					<img src="img/guide/toast_02.svg" alt="Notification">
				</section>
				<aside>
					<dl>
						<dt>Location on Screen</dt>
						<dd>Simple Toast: Top Center</dd>
						<dd>Notification: Bottom Right</dd>
						<!-- -->
						<dt>Simple Toast</dt>
						<dd>Text: 15px (11pt) #354052</dd>
						<dd>Text Align: Centered</dd>
						<dd>Corner Radius: 4px</dd>
						<dd>Box Shadow:	0px 0px 2px rgba(0,0,0,0.25)</dd>
						<!-- -->
						<dd>
							<dl class="sub">
								<dt>Green (Positive)</dt>
								<dd>Background: #BCE7C9</dd>
								<dd>Icon Background: #E3F5E9</dd>
								<dd>Border: 1px #00BC65</dd>
								<!-- -->
								<dt>Yellow (Warning)</dt>
								<dd>Background: #FFE1B1</dd>
								<dd>Icon Background: #FFF3E0</dd>
								<dd>Border: 1px #FFA900</dd>
								<!-- -->
								<dt>Red (Error)</dt>
								<dd>Background: #FFCED3</dd>
								<dd>Icon Background: #FFECEF</dd>
								<dd>Border: 1px #FF7474</dd>
							</dl>
						</dd>
						<!-- -->
						<dt>Notification</dt>
						<dd>Background: #FFFFFF</dd>
						<dd>Border: 1px #BBBBBB</dd>
						<dd>Box Shadow:	0px 0px 2px rgba(0,0,0,0.25)</dd>
						<!-- -->
						<dd>
							<dl class="sub">
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
