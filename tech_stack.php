<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">Style Guide &ndash; Tech Stack</title>
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
					<h2>Style Guide Tech</h2>
					<table>
						<tr>
							<th>Tech</th>
							<th>Description</th>
						</tr>
						<tr>
							<td>AJAX</td>
							<td>Page contents load dynamically to maintain user's nav position.
								<br/>AJAX calls are loaded into the history button to that users can step backward without backing out of the site.
								<br/>The page URL updates for easy copy and paste.
								<br/>Site works as standard HTML without AJAX if JavaScript is disabled.</td>
						</tr>
						<tr>
							<td>PX to REM Conversion</td>
							<td>User can choose between pixels or rem units. This selection is site-wide and is saved to the browser's local storage. The values are calculated on the fly with JavaScript.</td>
						</tr>
						<tr>
							<td>PHP</td>
							<td>The css, scripts, and navigation are loaded as PHP includes for basic templating.
								<br/>The nav menu auto-selects the correct nav item based on the page URL.</td>
						</tr>
					</table>
					<h2>Development Tools</h2>
					<table>
						<tr>
							<th>Tech</th>
							<th>Description</th>
						</tr>
						<tr>
							<td>Git</td>
							<td>Version control</td>
						</tr>
						<tr>
							<td>Grunt</td>
							<td>Compile less
								<br/>PostCSS / Auto-Prefixer
								<br/>Concat CSS to one file</td>
						</tr>
						<tr>
							<td>LESS</td>
							<td>CSS Pre-Processor</td>
						</tr>
					</table>
				</div>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
