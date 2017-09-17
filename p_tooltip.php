<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">Style Guide &ndash; Patterns &ndash; Tooltip</title>
	<?php require 'template/css.inc.php'; ?>
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Patterns &ndash; Tooltip</h2>
			<div class="btn-group" role="group">
				Measurement Units:
				<button type="button" id="size-px" class="btn-selected">px</button><button type="button" id="size-rem">rem</button>
			</div>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">

		</header>
		<article id="guidelines">
			<div id="container">
				<section>
					<img src="img/guide/p_tooltip_01.png" alt="Tooltip Patterns">
				</section>
				<section>
					<h2>Acceptable Deviation</h2>
					<div class="desc_pattern">
						<p>Tooltips can be displayed without a carrot, if there is a technology limitation.</p>
					</div>
					<img src="img/guide/p_tooltip_02.png" alt="Tooltip Pattern Deviation">

				<aside>
					<dl class="related">
						<dt>Related Content</dt>
						<dd class="pg_link"><a href="tooltip.php">Tooltip Component</a></dd>
					</dl>
					<!-- -->
					<dl class="dl_root">
						<dt>Themes</dt>
						<dd>
							<dl class="sub">
								<dt>Dark</dt>
								<dd>Text: 13px (10pt) <span title="Gray 100" class="theme">#EDEEF0</span></dd>
								<dd>Background: <span title="Gray 800" class="theme">#354052</span></dd>
								<!-- -->
								<dt>Light</dt>
								<dd>Text: 13px (10pt) <span title="Gray 900" class="theme">#151921</span></dd>
								<dd>Background: #FFFFFF</dd>
								<!-- -->
								<dt>Accent Color</dt>
								<dd>Border: <span class="pxrem">2px</span> #FFFFFF</dd>
								<dd>Background: Matches Data</dd>
							</dl>
						</dd>
						<dt>Data Tooltip</dt>
						<dd>
							<dl class="sub">
								<dt>Data Value</dt>
								<dd>Text: 24pt (18pt)</dd>
								<!-- -->
								<dt>Label</dt>
								<dd>Text: 12px (9pt)</dd>
								<dd>Case: Uppercase</dd>
								<dd>Weight: 600</dd>
								<dd>Line Height: <span class="pxrem">20px</span></dd>
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
