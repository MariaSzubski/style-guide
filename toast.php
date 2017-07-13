<span class="pxrem"><?p</span>hp $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines &ndash; Components &ndash; Toast</title>
	<link rel="stylesheet" href="css/build/style_v8-2.css">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Components &ndash; Toast</h2>
			<div class="btn-group" role="group">
				Units:
				<button type="button" id="size-px" class="btn-selected">px</button><button type="button" id="size-rem">rem</button>
			</div>
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
						<dd>Height: <span class="pxrem">44px</span></dd>
						<dd>Minimum Width: <span class="pxrem">170px</span></dd>
						<dd>Corner Radius: <span class="pxrem">4px</span></dd>
						<dd>Text: 15px (11pt)</dd>
						<dd>Box Shadow:	<span class="pxrem">0px</span> <span class="pxrem">3px</span> <span class="pxrem">4px</span> rgba(0,0,0,0.45)</dd>
						<dd>Angular Shadow: 6dp</dd>
						<!-- -->
						<dt>States</dt>
						<dd>
							<dl class="sub">
								<dt>Green (Positive)</dt>
								<dd>Text Color: <span title="Green 700" class="theme">#1D8D0C</span></dd>
								<dd>Background: <span title="Green 100" class="theme">#B6EEAF</span></dd>
								<dd>Icon Background: <span title="Green 50" class="theme">#D0F7CC</span></dd>
								<dd>Border: <span class="pxrem">1px</span> <span title="Green 600" class="theme">#23A60F</span></dd>
								<!-- -->
								<dt>Yellow (Warning)</dt>
								<dd>Text Color: <span title="Yellow 700" class="theme">#E67219</span></dd>
								<dd>Background: <span title="Yellow 100" class="theme">#FFEEBA</span></dd>
								<dd>Icon Background: <span title="Yellow 50" class="theme">#FFF7DE</span></dd>
								<dd>Border: <span class="pxrem">1px</span> <span title="Yellow 600" class="theme">#F29100</span></dd>
								<!-- -->
								<dt>Red (Error)</dt>
								<dd>Text Color: <span title="Red 500" class="theme">#DD0014</span></dd>
								<dd>Background: <span title="Red 100" class="theme">#FFC9CC</span></dd>
								<dd>Icon Background: <span title="Red 50" class="theme">#FCE1E1</span></dd>
								<dd>Border: <span class="pxrem">1px</span> <span title="Red 400" class="theme">#FA4F4F</span></dd>
							</dl>
						</dd>
						<!-- -->
						<dt>Notification</dt>
						<dd>
							<dl class="sub">
								<dt>Container</dt>
								<dd>Background: #FFFFFF</dd>
								<dd>Padding: <span class="pxrem">16px</span></dd>
								<dd>Box Shadow:	<span class="pxrem">0px</span> <span class="pxrem">3px</span> <span class="pxrem">4px</span> rgba(0,0,0,0.45)</dd>
								<dd>Angular Shadow: 6dp</dd>
								<dd>Margin Between Notifications: <span class="pxrem">10px</span></dd>
								<!-- -->
								<dt>Header</dt>
								<dd>Text: 15px (11pt) <span title="Gray 800" class="theme">#354052</span></dd>
								<dd>Weight: 600</dd>
								<dd>Line Height: <span class="pxrem">20px</span></dd>
								<!-- -->
								<dt>Description</dt>
								<dd>Text: 13px (10pt) <span title="Gray 800" class="theme">#354052</span></dd>
								<dd>Line Height: <span class="pxrem">20px</span></dd>
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
