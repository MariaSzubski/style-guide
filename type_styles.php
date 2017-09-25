<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<?php require 'template/meta.inc.php'; ?>
	<title id="title">Style Guide &ndash; Type Styles</title>
	<?php require 'template/css.inc.php'; ?>
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Type Styles</h2>
			<?php require 'template/units.inc.php'; ?>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
		</header>
		<article id="guidelines">
			<div id="container">
				<section class="full">
					<section class="type">
						<section class="typestyle">
							<div id="pageTitle">Page Title</div>
							<pre>
<!--						 -->.page_title{
<!--						 -->	font-family: 'Roboto Condensed';
<!--						 -->	font-size: 20px;
<!--						 -->	font-weight: 400;
<!--						 -->	color: #000000;
<!--						 -->	text-transform: uppercase;
<!--						 -->}
<!--					 --></pre>
						</section>
						<section class="typestyle">
							<div id="sectionTitle">Section Title</div>
							<pre>
<!--						 -->.section_title{
<!--						 -->	font-family: 'Roboto Condensed';
<!--						 -->	font-size: 30px;
<!--						 -->	font-weight: 400;
<!--						 -->	color: #00BFA5;
<!--						 -->	text-transform: uppercase;
<!--						 -->}
<!--					 --></pre>
						</section>
						<section class="typestyle">
							<div id="label">Label</div>
								<pre>
<!--						 -->.label{
<!--						 -->	font-family: 'Roboto Condensed';
<!--						 -->	font-size: 12px;
<!--						 -->	font-weight: 600;
<!--						 -->	color: #94A3B0;
<!--						 -->	line-height: 120%;
<!--						 -->	text-transform: uppercase;
<!--						 -->}
<!--						 --></pre>
						</section>
						<section class="typestyle">
							<div id="lg_copy">Large Copy</div>
							<pre>
<!--						 -->.copy{
<!--						 -->	font-family: 'Roboto';
<!--						 -->	font-size: 20px;
<!--						 -->	font-weight: 400;
<!--						 -->	color: #37474F;
<!--						 -->	line-height: 150%;
<!--						 -->}
<!--					 --></pre>
						</section>
						<section class="typestyle">
							<div id="sm_copy">Small Copy</div>
							<pre>
<!--						 -->.copy{
<!--						 -->	font-family: 'Roboto';
<!--						 -->	font-size: 14px;
<!--						 -->	font-weight: 400;
<!--						 -->	color: #37474F;
<!--						 -->	line-height: 150%;
<!--						 -->}
<!--					 --></pre>
						</section>
						<section class="typestyle">
							<div id="footnotes">Footnotes</div>
								<pre>
<!--							 -->.footnotes{
<!--							 -->	font-family: 'Roboto Mono';
<!--							 -->	font-size: 11px;
<!--							 -->	font-weight: 400;
<!--							 -->	color: #37474F;
<!--							 -->	line-height: 170%;
<!--							 -->}
<!--						 --></pre>
						</section>
						<section class="typestyle">
							<div id="links">Links</div>
								<pre>
<!--							 -->a{
<!--							 -->	color: #FB9700;
<!--							 -->	&amp;:hover{ text-decoration: underline; }
<!--							 -->}
<!--						 --></pre>
						</section>
					</section>
				</section>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
