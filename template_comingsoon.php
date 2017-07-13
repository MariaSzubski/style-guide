<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines &ndash; %s &ndash; %n</title>
	<link rel="stylesheet" href="css/build/style_v8-2.css">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">%s &ndash; %n</h2>
			<div class="btn-group" role="group">
				Units:
				<button type="button" id="size-px" class="btn-selected">px</button><button type="button" id="size-rem">rem</button>
			</div>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<div class="desc">
					<!--Remove-->
					<p>Coming Soon</p>
				</div>
				<section>
					<h4></h4>
					<!-- <img src="img/guide/" alt=""> -->
				</section>
				<aside>
					<dl class="dl_root">
						<dt></dt>
						<dd>
							<dl class="sub">
								<dt></dt>
								<dd></dd>
								<!-- -->
								<dt></dt>
								<dd></dd>
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
