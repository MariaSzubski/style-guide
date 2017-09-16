<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">Style Guide &ndash; About the Brand</title>
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
					<h2>About The Brand</h2>
					<p>
						In diam velit, tincidunt non magna ac, scelerisque semper est. Nunc a nunc quis libero mattis sodales. Mauris vitae mi sed justo fringilla convallis. Mauris id mauris viverra, molestie nisi id, consequat orci. Vestibulum sed molestie ipsum, sed pharetra ipsum.
					</p>
					<p>
						Fusce id purus odio. Vivamus laoreet, nisl sit amet accumsan ornare, est nibh vehicula ante, aliquam malesuada tortor augue in magna. Mauris maximus sapien lectus, a ullamcorper nibh tincidunt sed. <a>Etiam posuere</a> massa et velit fringilla pellentesque.
					</p>
					<p>
						Suspendisse potenti. Phasellus sollicitudin, elit ut vulputate eleifend, lorem libero euismod tortor, varius faucibus sapien justo ac nibh. Nullam accumsan tortor nibh, eu accumsan mi semper eget.
					</p>
				</div>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
