<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - Button Group</title>
	<link rel="stylesheet" href="css/build/style.css" charset="utf-8">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Button Group</h2>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<section>
					<h4>Secondary Button Group</h4>
					<img src="img/guide/button_group_01.png" alt="Secondary Button Group">
				</section>
				<section>
					<h4>Tertiary Button Group</h4>
					<img src="img/guide/button_group_02.png" alt="Tertiary Button Group">
				</section>
				<aside>
					<dl class="related">
						<dt>Related Content</dt>
						<dd class="pg_link"><a href="button_raised.php">Raised Button Component</a></dd>
					</dl>
					<!-- -->
					<dl class="dl_root">
						<dt>Styles</dt>
						<dd>
							<dl class="sub">
								<dt>Notes</dt>
								<dd class="note">Use Secondary or Tertiary Raised button style.</dd>
								<!-- -->
								<dt>Dividers</dt>
								<dd>Secondary Group: 1px #FFFFFF</dd>
								<dd>Tertiary Group: 1px <span title="Gray 500" class="theme">#94A3B0</span></dd>
							</dl>
						</dd>
					</dl>
				</aside>
			</div>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
