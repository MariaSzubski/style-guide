<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - Whiteframe</title>
	<link rel="stylesheet" href="css/build/style.css" charset="utf-8">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Whiteframe</h2>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<section>
					<h4></h4>
					<img src="img/guide/whiteframe_01.png" alt="Whiteframe">
				</section>
				<aside>
					<dl>
						<dt>Whiteframes</dt>
						<dd>
							<dl class="sub">
								<dt>Usage</dt>
								<dd class="note">The shadwos applied to content panels convey elevation. Use one of the three shadows defined below, based on content type.</dd>
								<!-- -->
								<dt>Level 1</dt>
								<dd>Box Shadow: <br>0px 1px 2px rgba(0,0,0,.45)</dd>
								<dd>Angular Equivalent: 2dp</dd>
								<!-- -->
								<dt>Level 2</dt>
								<dd>Box Shadow: <br>0px 2px 3px rgba(0,0,0,.25)</dd>
								<dd>Angular Equivalent: 4dp</dd>
								<!-- -->
								<dt>Level 3</dt>
								<dd>Box Shadow: <br>0px 3px 4px rgba(0,0,0,.45)</dd>
								<dd>Angular Equivalent: 6dp</dd>
							</dl>
						</dd>
						<!-- -->
						<dt></dt>
						<dd></dd>
					</dl>
				</aside>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
