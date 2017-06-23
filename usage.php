<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - Usage</title>
	<link rel="stylesheet" href="css/build/style_v8-2.css">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header"></h2>
			<div class="btn-group" role="group">
				Units:
				<button type="button" id="size-px" class="btn-selected">px</button><button type="button" id="size-rem">rem</button>
			</div>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<div class="desc_i">
					<h2>Usage</h2>
					<p>
						The Nielsen Experience Standards are used to create continuity and connectedness among Nielsen’s diverse product ecosystem. It results from a collaboration between Nielsen Experience and Global Brand.
					</p>
					<p>
						If you are creating a marketing or communication piece (infographic, video, poster, etc.) and need Brand Assets, request them from the <a href="https://docs.google.com/a/nielsen.com/forms/d/e/1FAIpQLSc36ja3pqa90ffKdTo7BnG0TalMWtVzC9R9xYdIiixCBEQCiw/viewform" target="blank">Global Brand Team</a>. Keep in mind, you’ll need to complete Brand Training to be eligible to receive the Design Assets.
					</p>
					<p>
						To learn more about Nielsen Experience, visit the <a href="http://experience.nielsen.com/" target="_blank">Nielsen Experience Exchange</a>. The exchange is a global resource for all things UX - Research, Design, and Best Practices. It provides insights and assets that enable product experiences that are a delight to use.
					</p>
				</div>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
