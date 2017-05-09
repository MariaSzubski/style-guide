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
								<dd>Track: #DDE6ED</dd>
								<!-- -->
								<dt>Off, Disabled</dt>
								<dd>Thumb: #D5D7DB</dd>
								<dd>Track: #EDEEF0</dd>
								<!-- -->
								<dt>On</dt>
								<dd>Thumb: #26B810</dd>
								<dd>Track: #B6EEAF</dd>
								<!-- -->
								<dt>Invalid</dt>
								<dd>Thumb: 	#DD0014</dd>
								<dd>Track: #FFC9CC</dd>
								<!-- -->
								<dt>Accent (Blue)</dt>
								<dd>Thumb: #0098F3</dd>
								<dd>Track: #B4E0FC</dd>
								<!-- -->
								<dt>Accent (Purple)</dt>
								<dd>Thumb: #B21DAC</dd>
								<dd>Track: #F7BFF2</dd>
								<!-- -->
								<dt>On, Disabled</dt>
								<dd>Thumb: #D5D7DB</dd>
								<dd>Track: #EDEEF0</dd>
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
