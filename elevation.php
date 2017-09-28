<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<?php require 'template/meta.inc.php'; ?>
	<title id="title">Style Guide &ndash; Content Elevation</title>
	<?php require 'template/css.inc.php'; ?>
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Content Elevation</h2>
			<?php require 'template/units.inc.php'; ?>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
		</header>
		<article id="guidelines">
			<div id="container">
				<div class="spec_content">
					<section>
						<div class="elevation">
							<div class="elevation" id="level_1">
								<h4>Level 1 : Content Panels</h4>
								<div class="elevation" id="level_2">
									<h4>Level 2 : App Bar &amp; Menus</h4>
									<div class="elevation" id="level_3">
										<h4>Level 3 : Overlays</h4>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
				<aside>
					<dl class="dl_root">
						<dt>Content Elevation</dt>
						<dd>
							<dl class="sub">
								<dt>Usage</dt>
								<dd class="note">Use box shadows to convey elevation based on content type.</dd>
								<!-- -->
								<dt>Level 1</dt>
								<dd>Box Shadow: <br><span class="pxrem">0px</span> <span class="pxrem">1px</span> <span class="pxrem">4px</span> rgba(0,0,0,.25)</dd>
								<!-- -->
								<dt>Level 2</dt>
								<dd>Box Shadow: <br><span class="pxrem">0px</span> <span class="pxrem">2px</span> <span class="pxrem">8px</span> rgba(0,0,0,.25)</dd>
								<!-- -->
								<dt>Level 3</dt>
								<dd>Box Shadow: <br><span class="pxrem">0px</span> <span class="pxrem">3px</span> <span class="pxrem">16px</span> rgba(0,0,0,.25)</dd>
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
