<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - Wizard</title>
	<link rel="stylesheet" href="css/build/style.css" charset="utf-8">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Wizard</h2>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<section>
					<h4></h4>
					<img src="img/guide/wizard_01.svg" alt="Wizard">
				</section>
				<aside>
					<dl>
						<dt>Wizard Breadcrumbs</dt>
						<dd>[Labels Typestyle]</dd>
						<dd>Text: 12px (9pt)</dd>
						<dd>Case: Uppercase</dd>
						<dd>Weight: 600</dd>
						<dd>Alignment: Centered</dd>
						<dd>Border: 1px #BBBBBB</dd>
						<!-- -->
						<dd>
							<dl class="sub">
								<dt>Completed Tab</dt>
								<dd>Text Color: #0098F3</dd>
								<dd>Background: #FFFFFF</dd>
								<!-- -->
								<dt>Active Tab</dt>
								<dd>Text Color: #354052</dd>
								<dd>Background: #EEEEEE</dd>
								<!-- -->
								<dt>Future Tab</dt>
								<dd>Text Color: #989EA7</dd>
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
