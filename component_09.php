<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<?php require 'template/meta.inc.php'; ?>
	<title id="title">Style Guide &ndash; Component &ndash; Praesent Quis</title>
	<?php require 'template/css.inc.php'; ?>
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header"><span>Components &ndash; </span>Praesent Quis</h2>
			<?php require 'template/units.inc.php'; ?>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
		</header>
		<article id="guidelines">
			<div id="container">
				<div class="spec_content">
					<section>
						<h4>Sed tincidunt urna</h4>
						<img src="img/guide/fpo_500.svg" alt="Component Name">
					</section>
				</div>
				<aside>
					<dl class="dl_root">
						<dt>Switch States</dt>
						<dd>
							<dl class="sub">
								<dt>Off</dt>
								<dd>Thumb: #FFFFFF</dd>
								<dd>Track: <span title="Gray 200" class="theme">#B0BEC5</span></dd>
								<!-- -->
								<dt>Off, Disabled</dt>
								<dd>Thumb: <span title="Gray 300" class="theme">#90A4AE</span></dd>
								<dd>Track: <span title="Gray 100" class="theme">#CFD8DC</span></dd>
								<!-- -->
								<dt>On</dt>
								<dd>Thumb: <span title="Teal 500" class="theme">#009688</span></dd>
								<dd>Track: <span title="Teal 100" class="theme">#B2DFDB</span></dd>
								<!-- -->
								<dt>Invalid</dt>
								<dd>Thumb: 	<span title="Red 500" class="theme">#F44336</span></dd>
								<dd>Track: <span title="Red 100" class="theme">#FFCDD2</span></dd>
								<!-- -->
								<dt>Accent (Indigo)</dt>
								<dd>Thumb: <span title="Indigo 500" class="theme">#3F51B5</span></dd>
								<dd>Track: <span title="Indigo 100" class="theme">#C5CAE9</span></dd>
								<!-- -->
								<dt>Accent (Pink)</dt>
								<dd>Thumb: <span title="Pink 500" class="theme">#E91E63</span></dd>
								<dd>Track: <span title="Pink 100" class="theme">#F8BBD0</span></dd>
								<!-- -->
								<dt>On, Disabled</dt>
								<dd>Thumb: <span title="Gray 300" class="theme">#90A4AE</span></dd>
								<dd>Track: <span title="Gray 100" class="theme">#CFD8DC</span></dd>
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
