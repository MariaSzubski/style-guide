<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines &ndash; Type Styles</title>
	<link rel="stylesheet" href="css/build/style_v8-2.css">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Type Styles</h2>
			<div class="btn-group" role="group">
				Units:
				<button type="button" id="size-px" class="btn-selected">px</button><button type="button" id="size-rem">rem</button>
			</div>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<section class="full">
					<img src="img/guide/type_styles_01.png" alt="Type Styles">
				</section>
				<!-- -->
				<section class="full">
					<h2>Content Example</h2>
					<img src="img/guide/type_styles_02.png" alt="Content Example">
				</section>
				<!-- -->
				<section class="full">
					<h2>Font Files</h2>
					<section class="full">
						<div class="desc_pattern">
							<h4>Open Sans</h4>
							<p>
								<a href="https://fonts.google.com/specimen/Open+Sans?selection.family=Open+Sans:400,600,700" target="blank">Open Sans</a> is available on Google Fonts. Use weights 400, 600, and 700.
							</p>
						</div>
					</section>
					<!-- -->
					<section class="full">
						<div class="desc_pattern">
							<h4>Knockout</h4>
							<p>
								Knockout is a licensed font. To receive access to Knockout, please <a href="https://goo.gl/forms/CXs2n3vbWpNp2FSv2" target="blank">complete this form</a>. Do not upload this font to any server outside of Nielsen.com, including development servers and cloud-based prototyping tools.
							</p>
						</div>
					</section>
				</section>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
