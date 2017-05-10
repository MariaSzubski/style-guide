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
					<h4></h4>
					<img src="img/guide/switch_01.png" alt="Color Options">
				</section>
				<aside>
					<dl class="dl_root">
						<dt>Switch States</dt>
						<dd>
							<dl class="sub">
								<dt>Off</dt>
								<dd>Thumb: #FFFFFF</dd>
								<dd>Track: <span title="Gray 200" class="theme">#DDE6ED</span></dd>
								<!-- -->
								<dt>Off, Disabled</dt>
								<dd>Thumb: <span title="Gray 300" class="theme">#D5D7DB</span></dd>
								<dd>Track: <span title="Gray 100" class="theme">#EDEEF0</span></dd>
								<!-- -->
								<dt>On</dt>
								<dd>Thumb: <span title="Green 500" class="theme">#26B810</span></dd>
								<dd>Track: <span title="Green 100" class="theme">#B6EEAF</span></dd>
								<!-- -->
								<dt>Invalid</dt>
								<dd>Thumb: 	<span title="Red 500" class="theme">#DD0014</span></dd>
								<dd>Track: <span title="Red 100" class="theme">#FFC9CC</span></dd>
								<!-- -->
								<dt>Accent (Blue)</dt>
								<dd>Thumb: <span title="Blue 500" class="theme">#0098F3</span></dd>
								<dd>Track: <span title="Blue 100" class="theme">#B4E0FC</span></dd>
								<!-- -->
								<dt>Accent (Purple)</dt>
								<dd>Thumb: <span title="Purple 500" class="theme">#B21DAC</span></dd>
								<dd>Track: <span title="Purple 100" class="theme">#F7BFF2</span></dd>
								<!-- -->
								<dt>On, Disabled</dt>
								<dd>Thumb: <span title="Gray 300" class="theme">#D5D7DB</span></dd>
								<dd>Track: <span title="Gray 100" class="theme">#EDEEF0</span></dd>
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
