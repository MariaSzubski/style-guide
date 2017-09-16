<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">Style Guide &ndash; Iconography &ndash; Communication</title>
	<?php require 'template/css.inc.php'; ?>
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Iconography &ndash; Communication</h2>
			<div class="btn-group" role="group">
				Measurement Units:
				<button type="button" id="size-px" class="btn-selected">px</button><button type="button" id="size-rem">rem</button>
			</div>="img/hamburger.svg" alt="Navigation" id="icon_nav">
			
		</header>
		<article id="guidelines">
			<div id="container">
				<section class="desc full">
					<h4>Download</h4>
					<p class="guide_link">
						<a href="https://drive.google.com/open?id=0B4FYNrkqg7oDWXJGeVQyZE0zLVU"><img src="img/download.svg" alt="Download">NX Icon Library (zip)</a>
					</p>
				</section>
				<section class="full">
					
					<img src="img/guide/i_communication.png" alt="Iconography - Communication">
				</section>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
