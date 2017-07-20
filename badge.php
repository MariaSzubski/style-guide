<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines &ndash; Component &ndash; Badge</title>
	<link rel="stylesheet" href="css/build/style_v8-2.css">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Component &ndash; Badge</h2>
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
					
					<img src="img/guide/badge_01.png" alt="Badges">
				</section>

				<aside>
					<dl class="dl_root">
						<dt>Badge</dt>
						<dd>
							<!-- -->
							<dl class="sub">
								<dt>Background</dt>
								<dd>Height: <span class="pxrem">12px</span></dd>
								<dd>Min Width: <span class="pxrem">12px</span></dd>
								<dd>Corner Radius: <span class="pxrem">6px</span></dd>
								<dd>Background Color: <span title="Red 500" class="theme">#DD0014</span></dd>
								<!-- -->
								<dt>Badge Width</dt>
								<dd class="note">Badge expands to accomodate up to 4 digitas and an ellipsis. Truncate longer values.</dd>
								<!-- -->
								<dt>Numbers</dt>
								<dd>Text: 11px (8pt) #FFFFFF</dd>
								<dd>Weight: 600</dd>
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
