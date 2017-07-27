<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines</title>
	<link rel="stylesheet" href="css/build/style_v8-2.css">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header"></h2>
			<div class="btn-group" role="group">
				Units:
				<button type="button" id="size-px" class="btn-selected">px</button><button type="button" id="size-rem">rem</button>
			</div>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<div class="desc_i">
					<h2>Introduction</h2>
					<p>
						In our effort to be an Open, Connected, and Personal company, we have created a more flexible, modern, and communicative set of Nielsen Experience standards. It is a structured system of elements that brings unity to our diverse global product ecosystem.
					</p>
					<p>
						The visual language is infused with our new brand. It results from a collaboration between Nielsen Experience and the Global Brand team with input from Product Leadership and Engineering. The new documentation reflects the structure of several Material Design libraries.
					</p>
					<p>
						We will update the standards on a monthly basis.
					</p>
					<p>
						These updates may contain minor refinements or revisions to components - the building blocks of our design system.
					</p>
					<p>
						Updates will also extend the patterns. Patterns utilize a combination of several components to address a universal need.
					</p>
					<p>
						We will send out an email when updates are posted. <a href="https://goo.gl/forms/BYCAU2ncshIkIexC3" target="_blank">Please sign up to receive notifications about our updates.</a>
						<br/>
					</p>
				</div>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
