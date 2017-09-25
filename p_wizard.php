<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<?php require 'template/meta.inc.php'; ?>
	<title id="title">Style Guide &ndash; Patterns &ndash; Wizard</title>
	<?php require 'template/css.inc.php'; ?>
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Patterns &ndash; Wizard</h2>
			<div class="btn-group" role="group">
				Measurement Units:
				<button type="button" id="size-px" class="btn-selected">px</button><button type="button" id="size-rem">rem</button>
			</div>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			
		</header>
		<article id="guidelines">
			<div id="container">
				<section>
					
					<img src="img/guide/p_wizard_01.png" alt="Wizard">
				</section>
				<aside>
					<dl class="dl_root">
						<dt>Wizard Tabs</dt>
						<dd>Text: 12px (9pt)</dd>
						<dd>Case: Uppercase</dd>
						<dd>Weight: 600</dd>
						<dd>Alignment: Centered</dd>
						<dd>Borders: <span class="pxrem">1px</span> <span title="Gray 400" class="theme">#BBCCDD</span></dd>
						<dd>Height: <span class="pxrem">42px</span></dd>
						<!-- -->
						<dt>States</dt>
						<dd>
							<dl class="sub">
								<dt>Completed</dt>
								<dd>Text Color: <span title="Blue 500" class="theme">#0098F3</span></dd>
								<dd>Background: #FFFFFF</dd>
								<!-- -->
								<dt>Active</dt>
								<dd>Text Color: <span title="Gray 800" class="theme">#354052</span></dd>
								<dd>Background: <span title="Gray 200" class="theme">#DDE6ED</span></dd>
								<!-- -->
								<dt>Future</dt>
								<dd>Text Color: <span title="Gray 300" class="theme">#D5D7DB</span></dd>
								<dd>Background: #FFFFFF</dd>
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
