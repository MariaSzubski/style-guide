<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - Date Picker</title>
	<link rel="stylesheet" href="css/build/style_v8-1.css" charset="utf-8">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Date Picker</h2>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<section>
					<h4>Date Picker</h4>
					<img src="img/guide/date_picker_01.png" alt="Date Picker">
				</section>
				<section>
					<h4>Opened Date Picker</h4>
					<img src="img/guide/date_picker_02.png" alt="Opened Calendar">
				</section>
				<aside>
					<dl class="related">
						<dt>Related Content</dt>
						<dd class="pg_link"><a href="input.php">Input Component</a></dd>
					</dl>
					<!-- -->
					<dl class="dl_root">
						<dt>Date Picker</dt>
						<dd class="note">Uses standard Input Component</dd>
						<!-- -->
						<dt>Opened Date Picker</dt>
						<dd>Text Color: <span title="Gray 900" class="theme">#151921</span></dd>
						<dd>Weekday BG: <span title="Gray 200" class="theme">#DDE6ED</span></dd>
						<dd>Hover BG: <span title="Blue 50" class="theme">#D4EEFD</span></dd>
						<dd>Selected Text: <span title="Gray 800" class="theme">#354052</dd>
						<dd>Selected BG: <span title="Gray 100" class="theme">#EDEEF0</span></dd>
						<dd>
							<dl class="sub">
								<dt>&nbsp;</dt>
								<dd class="note">Use default framework calendar when possible.</dd>
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
