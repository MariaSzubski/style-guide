<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<?php require 'template/meta.inc.php'; ?>
	<title id="title">Style Guide &ndash; Tech Stack</title>
	<?php require 'template/css.inc.php'; ?>
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header"></h2>
			<?php require 'template/units.inc.php'; ?>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
		</header>
		<article id="guidelines">
			<div id="container">
				<section class="full">
					<h2>Style Guide Tech</h2>
					<table class="techstack">
						<tbody>
							<tr>
								<td>AJAX</td>
								<td>
									<p>
										Page contents load dynamically with AJAX. This allows for a persistent nav menu that doesn't reload as the user clicks through content.
									</p>
									<p>
										AJAX calls are loaded into the browser history to that users can step backward without backing out of the site. The page URL also updates easy copy/paste and bookmarking.
									</p>
									<p>
										If JavaScript is disabled the site works as standard HTML.
									</p>
								</td>
							</tr>
							<tr>
								<td>PX to REM Conversion</td>
								<td>
									Users can choose between pixels or rem units. This selection is site-wide and is saved to the browser's local storage. The values are calculated on the fly with JavaScript.
								</td>
							</tr>
							<tr>
								<td>PHP</td>
								<td>
									<p>
										The navigation menu, scripts, CSS, unit switcher, and meta tags are loaded with PHP includes for basic templating.
									</p>
									<p>
										The nav menu auto-selects the correct nav item based on the content's URL.
									</p>
								</td>
							</tr>
							<tr>
								<td>Responsive Design</td>
								<td>
									<p>
										This style guide is responsive using flexbox to display the content at any screen size. On wide monitors the nav menu is pinned open by default and sites next to a multi-column spec layout. Below 1200px the nav menu collapses by default and can be opened on hover.
									</p>
									<p>
										As the screen continues to scale down the content switches to a single column layout and the nav bar moves completely off the screen. On small handheld devices the page header is simplified to prevent overlapping content.
									</p>
								</td>
							</tr>
						</tbody>
					</table>
					<h2>Development Tools</h2>
					<table class="techstack">
						<tbody>
							<tr>
								<td>Git</td>
								<td>Version control</td>
							</tr>
							<tr>
								<td>LESS</td>
								<td>CSS Pre-Processor</td>
							</tr>
							<tr>
								<td>Grunt</td>
								<td>Watch and compile LESS files
									<br/>Add vendor prefixes
									<br/>Concatenate CSS to one file
								</td>
							</tr>
						</tbody>
					</table>
				</section>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
