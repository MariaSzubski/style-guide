<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - Reporting Palette</title>
	<link rel="stylesheet" href="css/build/style_v8-1.css" charset="utf-8">
	<link rel="stylesheet" href="css/build/src/colors.css" charset="utf-8">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Reporting Palette</h2>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<!--					Data Colors -->
				<section class="full">
					<h4>Data Colors</h4>
					<table class="colors">
						<tr id="c1">
							<td>#006699</td>
							<td>rgb(0,102,153)</td>
							<td>Blue</td>
						</tr>
						<tr id="c2">
							<td>#44AAAA</td>
							<td>rgb(68,170,170)</td>
							<td>Aqua</td>
						</tr>
						<tr id="c3">
							<td>#447733</td>
							<td>rgb(68,119,51)</td>
							<td>Green</td>
						</tr>
						<tr id="c4">
							<td>#BBAA44</td>
							<td>rgb(187,170,68)</td>
							<td>Gold</td>
						</tr>
						<tr id="c5">
							<td>#CC7711</td>
							<td>rgb(204,119,17)</td>
							<td>Orange</td>
						</tr>
						<tr id="c6">
							<td>#993344</td>
							<td>rgb(153,51,68)</td>
							<td>Red</td>
						</tr>
						<tr id="c7">
							<td>#AA55AA</td>
							<td>rgb(170,85,170)</td>
							<td>Pink</td>
						</tr>
						<tr id="c8">
							<td>#552288</td>
							<td>rgb(85,34,136)</td>
							<td>Purple</td>
						</tr>
						<tr id="c9">
							<td>#999999</td>
							<td>rgb(153,153,153)</td>
							<td>Light Gray</td>
						</tr>
						<tr id="c10">
							<td>#7799BB</td>
							<td>rgb(119,153,187)</td>
							<td>Light Blue</td>
						</tr>
						<tr id="c11">
							<td>#AACCCC</td>
							<td>rgb(170,204,204)</td>
							<td>Light Aqua</td>
						</tr>
						<tr id="c12">
							<td>#88AA77</td>
							<td>rgb(136,170,119)</td>
							<td>Light Green</td>
						</tr>
						<tr id="c13">
							<td>#EEDD55</td>
							<td>rgb(238,221,85)</td>
							<td>Light Gold</td>
						</tr>
						<tr id="c14">
							<td>#DDAA77</td>
							<td>rgb(221,170,119)</td>
							<td>Light Orange</td>
						</tr>
						<tr id="c15">
							<td>#CC7788</td>
							<td>rgb(240,119,136)</td>
							<td>Light Red</td>
						</tr>
						<tr id="c16">
							<td>#DDCCDD</td>
							<td>rgb(221,204,221)</td>
							<td>Light Pink</td>
						</tr>
						<tr id="c17">
							<td>#9977BB</td>
							<td>rgb(153,119,187)</td>
							<td>Light Purple</td>
						</tr>
						<tr id="c18">
							<td>#777777</td>
							<td>rgb(119,119,119)</td>
							<td>Dark Gray</td>
						</tr>
					</table>
				</section>
				<!--					Threshold Colors -->
				<section class="full">
					<h4>Threshold Colors</h4>
					<table class="colors">
						<tr id="t1">
							<td>#26B910</td>
							<td>rgb(38,185,16)</td>
							<td>Green 500</td>
						</tr>
						<tr id="t2">
							<td><span title="Red 500" class="theme">#DD0014</span></td>
							<td>rgb(221,0,20)</td>
							<td>Red 500</td>
						</tr>
					</table>
				</section>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
