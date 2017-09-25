<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<?php require 'template/meta.inc.php'; ?>
	<title id="title">Style Guide &ndash; Components &ndash; Progress Circular</title>
	<?php require 'template/css.inc.php'; ?>
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Components &ndash; Progress Circular</h2>
			<div class="btn-group" role="group">
				Measurement Units:
				<button type="button" id="size-px" class="btn-selected">px</button><button type="button" id="size-rem">rem</button>
			</div>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			
		</header>
		<article id="guidelines">
			<div id="container">
				<section class="desc">
					<h4>Default Progress Circular</h4>
					<p>
						Use Material Design Progress Circular in Blue or Navy.
					</p>
				</section>
				<section>
					<h4>Alternate Progress Circular</h4>
					<img src="img/guide/throbber.gif" alt="Progress Circular">
				</section>
				<aside>
					<dl class="dl_root">
						<dt>Progress Circular</dt>
						<dd>Blue: <span title="Blue 500" class="theme">#0098F3</span></dd>
						<dd>Navy: <span title="Gray 800" class="theme">#354052</span></dd>
						<dd>Alternate Icon: throbber.gif</dd>
					</dl>
				</aside>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
