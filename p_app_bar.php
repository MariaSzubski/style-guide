<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">Style Guide &ndash; Patterns &ndash; App Bar</title>
	<?php require 'template/css.inc.php'; ?>
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Patterns &ndash; App Bar</h2>
			<div class="btn-group" role="group">
				Measurement Units:
				<button type="button" id="size-px" class="btn-selected">px</button><button type="button" id="size-rem">rem</button>
			</div>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			
		</header>
		<article id="guidelines">
			<div id="container">
				<section>
					<h4>App Bar</h4>
					<img src="img/guide/p_app_bar_01.png" alt="App Bar">
				</section>
				<section>
					<h4>Icon Selected State</h4>
					<img src="img/guide/p_app_bar_02.png" alt="Icon Selected State">
				</section>
				<aside>
					<dl class="related">
						<dt>Related Content</dt>
						<dd class="pg_link"><a href="icon.php">Icon Component</a></dd>
						<dd class="pg_link"><a href="button_group.php">Button Group Component</a></dd>
					</dl>
					<!-- -->
					<dl class="dl_root">
						<dt>App Bar Container</dt>
						<dd>
							<dl class="sub">
								<dt>Data Texture</dt>
								<dd>Height: <span class="pxrem">5px</span></dd>
								<dd class="note">Texture: app_bar_texture.png</dd>
								<!-- -->
								<dt>Toolbar</dt>
								<dd>Background: #FFFFFF</dd>
								<dd>Height: <span class="pxrem">50px</span></dd>
								<dd>Padding-Left: <span class="pxrem">13px</span></dd>
								<dd>Padding-Right: <span class="pxrem">24px</span></dd>
								<dd>Box Shadow: <span class="pxrem">0px</span> <span class="pxrem">2px</span> <span class="pxrem">3px</span> rgba(0,0,0,.25)</dd>
								<dd>Angular Shadow: 4dp</dd>
							</dl>
						</dd>
						<!-- -->
						<dt>Content</dt>
						<dd>
							<dl class="sub">
								<dt>App Name</dt>
								<dd>Text: Knockout 26px (20pt)</dd>
								<dd>Color: <span title="Gray 800" class="theme">#354052</span></dd>
								<dd>Weight: 48 Featherweight</dd>
								<dd>Case: Uppercase</dd>
								<!-- -->
								<dt>Page Name</dt>
								<dd>Text: Knockout 26px (20pt)</dd>
								<dd>Color: <span title="Gray 800" class="theme">#354052</span></dd>
								<dd>Weight: 28 Junior Featherweight</dd>
								<dd>Case: Uppercase</dd>
								<!-- -->
								<dt>Icons</dt>
								<dd>See icon component.</dd>
								<dd>Icon Divider: <span class="pxrem">1px</span> x <span class="pxrem">30px</span></dd>
								<dd>Icon Divider Color: <span title="Gray 200" class="theme">#DDE6ED</span></dd>
								<!-- -->
								<dt>User Initials</dt>
								<dd>Text Size: 13px (10pt)</dd>
								<dd>Weight: 600</dd>
								<dd>Color: <span title="Gray 800" class="theme">#354052</span></dd>
								<dd>Case: Uppercase</dd>
								<!-- -->
								<dt>N Square</dt>
								<dd>Size: <span class="pxrem">28px</span> x <span class="pxrem">28px</span></dd>
								<dd>Icon: n_square.svg</dd>
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
