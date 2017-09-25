<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<?php require 'template/meta.inc.php'; ?>
	<title id="title">Style Guide &ndash; Colors</title>
	<?php require 'template/css.inc.php'; ?>
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Colors</h2>
			<?php require 'template/units.inc.php'; ?>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
		</header>
		<article id="guidelines">
			<div id="container">
				<section class="full">
				<!--					TEAL -->
				<section class="full">
					<h4>TEAL</h4>
					<table class="colors">
						<tr id="gr50">
							<td>50</td>
							<td>#E0F2F1</td>
							<td>rgb(208,247,204)</td>
							<td></td>
						</tr>
						<tr id="gr100">
							<td>100</td>
							<td>#B2DFDB</td>
							<td>rgb(182,238,175)</td>
							<td></td>
						</tr>
						<tr id="gr200">
							<td>200</td>
							<td>#80CBC4</td>
							<td>rgb(144,224,133)</td>
							<td></td>
						</tr>
						<tr id="gr300">
							<td>300</td>
							<td>#4DB6AC</td>
							<td>rgb(102,209,86)</td>
							<td></td>
						</tr>
						<tr id="gr400">
							<td>400</td>
							<td>#26A69A</td>
							<td>rgb(64,195,45)</td>
							<td></td>
						</tr>
						<tr id="gr500">
							<td>500</td>
							<td>#009688</td>
							<td>rgb(38,184,16)</td>
							<td>Accent Buttons</td>
						</tr>
						<tr id="gr600">
							<td>600</td>
							<td>#00897B</td>
							<td>rgb(35,166,15)</td>
							<td></td>
						</tr>
						<tr id="gr700">
							<td>700</td>
							<td>#00796B</td>
							<td>rgb(29,141,12)</td>
							<td></td>
						</tr>
						<tr id="gr800">
							<td>800</td>
							<td>#00695C</td>
							<td>rgb(24,114,10)</td>
							<td></td>
						</tr>
						<tr id="gr900">
							<td>900</td>
							<td>#004D40</td>
							<td>rgb(19,86,7)</td>
							<td></td>
						</tr>
					</table>
				</section>
				<!--					AMBER -->
				<section class="full">
					<h4>Amber</h4>
					<table class="colors">
						<tr id="y50">
							<td>50</td>
							<td>#FFF7DE</td>
							<td>rgb(255,247,222)</td>
							<td></td>
						</tr>
						<tr id="y100">
							<td>100</td>
							<td>#FFEEBA</td>
							<td>rgb(255,238,186)</td>
							<td></td>
						</tr>
						<tr id="y200">
							<td>200</td>
							<td>#FFE082</td>
							<td>rgb(255,226,153)</td>
							<td></td>
						</tr>
						<tr id="y300">
							<td>300</td>
							<td>#FFD54F</td>
							<td>rgb(255,214,112)</td>
							<td></td>
						</tr>
						<tr id="y400">
							<td>400</td>
							<td>#FFCA28</td>
							<td>rgb(255,199,66)</td>
							<td></td>
						</tr>
						<tr id="y500">
							<td>500</td>
							<td>#FFC107</td>
							<td>rgb(255,177,0)</td>
							<td></td>
						</tr>
						<tr id="y600">
							<td>600</td>
							<td>#FFB300</td>
							<td>rgb(242,145,0)</td>
							<td></td>
						</tr>
						<tr id="y700">
							<td>700</td>
							<td>#FFA000</td>
							<td>rgb(230,114,25)</td>
							<td></td>
						</tr>
						<tr id="y800">
							<td>800</td>
							<td>#FF8F00</td>
							<td>rgb(207,89,0)</td>
							<td></td>
						</tr>
						<tr id="y900">
							<td>900</td>
							<td>#FF6F00</td>
							<td>rgb(171,74,14)</td>
							<td></td>
						</tr>
					</table>
				</section>
				<!--					RED -->
				<section class="full">
					<h4>Red</h4>
					<table class="colors">
						<tr id="r50">
							<td>50</td>
							<td>#FFEBEE</td>
							<td>rgb(252,225,225)</td>
							<td></td>
						</tr>
						<tr id="r100">
							<td>100</td>
							<td>#FFCDD2</td>
							<td>rgb(255,201,204)</td>
							<td></td>
						</tr>
						<tr id="r200">
							<td>200</td>
							<td>#FFCDD2</td>
							<td>rgb(250,167,170)</td>
							<td></td>
						</tr>
						<tr id="r300">
							<td>300</td>
							<td>#E57373</td>
							<td>rgb(255,125,125)</td>
							<td></td>
						</tr>
						<tr id="r400">
							<td>400</td>
							<td>#EF5350</td>
							<td>rgb(250,79,79)</td>
							<td></td>
						</tr>
						<tr id="r500">
							<td>500</td>
							<td>#F44336</td>
							<td>rgb(221,0,20)</td>
							<td></td>
						</tr>
						<tr id="r600">
							<td>600</td>
							<td>#E53935</td>
							<td>rgb(191,0,18)</td>
							<td></td>
						</tr>
						<tr id="r700">
							<td>700</td>
							<td>#D32F2F</td>
							<td>rgb(156,0,13)</td>
							<td></td>
						</tr>
						<tr id="r800">
							<td>800</td>
							<td>#C62828</td>
							<td>rgb(125,0,11)</td>
							<td></td>
						</tr>
						<tr id="r900">
							<td>900</td>
							<td>#B71C1C</td>
							<td>rgb(97,0,8)</td>
							<td></td>
						</tr>
					</table>
				</section>
				<!--					INDIGO -->
				<section class="full">
					<h4>Indigo</h4>
					<table class="colors">
						<tr id="b50">
							<td>50</td>
							<td>#E8EAF6</td>
							<td>rgb(212,238,253)</td>
							<td>Hover Background</td>
						</tr>
						<tr id="b100">
							<td>100</td>
							<td>#C5CAE9</td>
							<td>rgb(180,224,252)</td>
							<td></td>
						</tr>
						<tr id="b200">
							<td>200</td>
							<td>#9FA8DA</td>
							<td>rgb(140,209,250)</td>
							<td></td>
						</tr>
						<tr id="b300">
							<td>300</td>
							<td>#7986CB</td>
							<td>rgb(91,191,245)</td>
							<td></td>
						</tr>
						<tr id="b400">
							<td>400</td>
							<td>#5C6BC0</td>
							<td>rgb(0,174,239)</td>
							<td></td>
						</tr>
						<tr id="b500">
							<td>500</td>
							<td>#3F51B5</td>
							<td>rgb(0,152,243)</td>
							<td>Buttons &amp; Links</td>
						</tr>
						<tr id="b600">
							<td>600</td>
							<td>#3949AB</td>
							<td>rgb(0,139,223)</td>
							<td></td>
						</tr>
						<tr id="b700">
							<td>700</td>
							<td>#303F9F</td>
							<td>rgb(0,123,196)</td>
							<td></td>
						</tr>
						<tr id="b800">
							<td>800</td>
							<td>#283593</td>
							<td>rgb(0,104,165)</td>
							<td></td>
						</tr>
						<tr id="b900">
							<td>900</td>
							<td>#1A237E</td>
							<td>rgb(0,86,138)</td>
							<td></td>
						</tr>
					</table>
				</section>
				<!--					Lime -->
				<section class="full">
					<h4>Lime</h4>
					<table class="colors">
						<tr id="l50">
							<td>50</td>
							<td>#F9FBE7</td>
							<td>rgb(255,222,250)</td>
							<td></td>
						</tr>
						<tr id="l100">
							<td>100</td>
							<td>#F0F4C3</td>
							<td>rgb(247,191,242)</td>
							<td></td>
						</tr>
						<tr id="l200">
							<td>200</td>
							<td>#E6EE9C</td>
							<td>rgb(235,159,227)</td>
							<td></td>
						</tr>
						<tr id="l300">
							<td>300</td>
							<td>#DCE775</td>
							<td>rgb(219,120,208)</td>
							<td></td>
						</tr>
						<tr id="l400">
							<td>400</td>
							<td>#D4E157</td>
							<td>rgb(194,74,189)</td>
							<td></td>
						</tr>
						<tr id="l500">
							<td>500</td>
							<td>#CDDC39</td>
							<td>rgb(178,85,172)</td>
							<td></td>
						</tr>
						<tr id="l600">
							<td>600</td>
							<td>#C0CA33</td>
							<td>rgb(156,21,150)</td>
							<td></td>
						</tr>
						<tr id="l700">
							<td>700</td>
							<td>#AFB42B</td>
							<td>rgb(128,21,123)</td>
							<td></td>
						</tr>
						<tr id="l800">
							<td>800</td>
							<td>#9E9D24</td>
							<td>rgb(97,17,94)</td>
							<td></td>
						</tr>
						<tr id="l900">
							<td>900</td>
							<td>#827717</td>
							<td>rgb(79,13,76)</td>
							<td></td>
						</tr>
					</table>
				</section>
				<!--					Pink -->
				<section class="full">
					<h4>Pink</h4>
					<table class="colors">
						<tr id="p50">
							<td>50</td>
							<td>#FCE4EC</td>
							<td>rgb(255,222,250)</td>
							<td></td>
						</tr>
						<tr id="p100">
							<td>100</td>
							<td>#F8BBD0</td>
							<td>rgb(247,191,242)</td>
							<td></td>
						</tr>
						<tr id="p200">
							<td>200</td>
							<td>#F48FB1</td>
							<td>rgb(235,159,227)</td>
							<td></td>
						</tr>
						<tr id="p300">
							<td>300</td>
							<td>#F06292</td>
							<td>rgb(219,120,208)</td>
							<td></td>
						</tr>
						<tr id="p400">
							<td>400</td>
							<td>#EC407A</td>
							<td>rgb(194,74,189)</td>
							<td></td>
						</tr>
						<tr id="p500">
							<td>500</td>
							<td>#E91E63</td>
							<td>rgb(178,85,172)</td>
							<td></td>
						</tr>
						<tr id="p600">
							<td>600</td>
							<td>#D81B60</td>
							<td>rgb(156,21,150)</td>
							<td></td>
						</tr>
						<tr id="p700">
							<td>700</td>
							<td>#C2185B</td>
							<td>rgb(128,21,123)</td>
							<td></td>
						</tr>
						<tr id="p800">
							<td>800</td>
							<td>#AD1457</td>
							<td>rgb(97,17,94)</td>
							<td></td>
						</tr>
						<tr id="p900">
							<td>900</td>
							<td>#880E4F</td>
							<td>rgb(79,13,76)</td>
							<td></td>
						</tr>
					</table>
				</section>
				<!--					GRAY -->
				<section class="full">
					<h4>Gray</h4>
					<table class="colors">
						<tr id="g50">
							<td>50</td>
							<td>#CFD8DC</td>
							<td>rgb(245,249,252)</td>
							<td></td>
						</tr>
						<tr id="g100">
							<td>100</td>
							<td>#CFD8DC</td>
							<td>rgb(237,238,240)</td>
							<td></td>
						</tr>
						<tr id="g200">
							<td>200</td>
							<td>#B0BEC5</td>
							<td>rgb(221,230,237)</td>
							<td>Secondary Divider</td>
						</tr>
						<tr id="g300">
							<td>300</td>
							<td>#90A4AE</td>
							<td>rgb(213,215,219)</td>
							<td>Disabled Content</td>
						</tr>
						<tr id="g400">
							<td>400</td>
							<td>#78909C</td>
							<td>rgb(187,204,221)</td>
							<td>Primary Dividers</td>
						</tr>
						<tr id="g500">
							<td>500</td>
							<td>#607D8B</td>
							<td>rgb(155,170,184)</td>
							<td>Secondary Text</td>
						</tr>
						<tr id="g600">
							<td>600</td>
							<td>#546E7A</td>
							<td>rgb(121,129,140)</td>
							<td></td>
						</tr>
						<tr id="g700">
							<td>700</td>
							<td>#455A64</td>
							<td>rgb(93,101,116)</td>
							<td></td>
						</tr>
						<tr id="g800">
							<td>800</td>
							<td>#37474F</td>
							<td>rgb(53,64,82)</td>
							<td>Titles &amp; Icons</td>
						</tr>
						<tr id="g900">
							<td>900</td>
							<td>#263238</td>
							<td>rgb(21,25,33)</td>
							<td>Body Copy</td>
						</tr>
					</table>
				</section>
			</section>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
