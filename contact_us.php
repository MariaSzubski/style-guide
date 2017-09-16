<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">Style Guide &ndash; Contact Us</title>
	<?php require 'template/css.inc.php'; ?>
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header"></h2>
			<div class="btn-group" role="group">
				Measurement Units:
				<button type="button" id="size-px" class="btn-selected">px</button><button type="button" id="size-rem">rem</button>
			</div>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">

		</header>
		<article id="guidelines">
			<div id="container">
				<div class="desc_i">
					<h2>Contact Us</h2>
					<p>
						Ut fringilla tellus quis blandit faucibus. Nam tincidunt enim vitae mauris feugiat aliquet. Nunc eget nunc vel tortor ullamcorper congue quis gravida nunc. Placeholder form.
				</div>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
