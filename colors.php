<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines &ndash; Color</title>
	<link rel="stylesheet" href="css/build/style_v8-2.css">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Color</h2>
			<div class="btn-group" role="group">
				Units:
				<button type="button" id="size-px" class="btn-selected">px</button><button type="button" id="size-rem">rem</button>
			</div>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<!--					GRAY -->
				<section class="full">
					<h4>Gray</h4>
					<table class="colors">
						<tr id="g50">
							<td>50</td>
							<td>#F5F9FC</td>
							<td>rgb(245,249,252)</td>
							<td>Background</td>
						</tr>
						<tr id="g100">
							<td>100</td>
							<td>#EDEEF0</td>
							<td>rgb(237,238,240)</td>
							<td></td>
						</tr>
						<tr id="g200">
							<td>200</td>
							<td>#DDE6ED</td>
							<td>rgb(221,230,237)</td>
							<td>Secondary Divider</td>
						</tr>
						<tr id="g300">
							<td>300</td>
							<td>#D5D7DB</td>
							<td>rgb(213,215,219)</td>
							<td>Disabled Content</td>
						</tr>
						<tr id="g400">
							<td>400</td>
							<td>#BBCCDD</td>
							<td>rgb(187,204,221)</td>
							<td>Primary Dividers</td>
						</tr>
						<tr id="g500">
							<td>500</td>
							<td>#94A3B0</td>
							<td>rgb(155,170,184)</td>
							<td>Inputs &amp; Secondary Text</td>
						</tr>
						<tr id="g600">
							<td>600</td>
							<td>#79818C</td>
							<td>rgb(121,129,140)</td>
							<td></td>
						</tr>
						<tr id="g700">
							<td>700</td>
							<td>#5D6574</td>
							<td>rgb(93,101,116)</td>
							<td></td>
						</tr>
						<tr id="g800">
							<td>800</td>
							<td>#354052</td>
							<td>rgb(53,64,82)</td>
							<td>Titles &amp; Icons</td>
						</tr>
						<tr id="g900">
							<td>900</td>
							<td>#151921</td>
							<td>rgb(21,25,33)</td>
							<td>Body Copy</td>
						</tr>
					</table>
				</section>
				<!--					BLUES -->
				<section class="full">
					<h4>Blue</h4>
					<table class="colors">
						<tr id="b50">
							<td>50</td>
							<td>#D4EEFD</td>
							<td>rgb(212,238,253)</td>
							<td>Hover Background</td>
						</tr>
						<tr id="b100">
							<td>100</td>
							<td>#B4E0FC</td>
							<td>rgb(180,224,252)</td>
							<td></td>
						</tr>
						<tr id="b200">
							<td>200</td>
							<td>#8CD1FA</td>
							<td>rgb(140,209,250)</td>
							<td></td>
						</tr>
						<tr id="b300">
							<td>300</td>
							<td>#5BBFF5</td>
							<td>rgb(91,191,245)</td>
							<td></td>
						</tr>
						<tr id="b400">
							<td>400</td>
							<td>#00AEEF</td>
							<td>rgb(0,174,239)</td>
							<td>Nielsen Blue</td>
						</tr>
						<tr id="b500">
							<td>500</td>
							<td>#0098F3</td>
							<td>rgb(0,152,243)</td>
							<td>Buttons &amp; Links</td>
						</tr>
						<tr id="b600">
							<td>600</td>
							<td>#008CE0</td>
							<td>rgb(0,139,223)</td>
							<td></td>
						</tr>
						<tr id="b700">
							<td>700</td>
							<td>#007BC5</td>
							<td>rgb(0,123,196)</td>
							<td></td>
						</tr>
						<tr id="b800">
							<td>800</td>
							<td>#0068A6</td>
							<td>rgb(0,104,165)</td>
							<td></td>
						</tr>
						<tr id="b900">
							<td>900</td>
							<td>#00568B</td>
							<td>rgb(0,86,138)</td>
							<td></td>
						</tr>
					</table>
				</section>
				<!--					GREEN -->
				<section class="full">
					<h4>Green (Accent Color)</h4>
					<table class="colors">
						<tr id="gr50">
							<td>50</td>
							<td>#D0F7CC</td>
							<td>rgb(208,247,204)</td>
							<td></td>
						</tr>
						<tr id="gr100">
							<td>100</td>
							<td>#B6EEAF</td>
							<td>rgb(182,238,175)</td>
							<td></td>
						</tr>
						<tr id="gr200">
							<td>200</td>
							<td>#90E085</td>
							<td>rgb(144,224,133)</td>
							<td></td>
						</tr>
						<tr id="gr300">
							<td>300</td>
							<td>#66D156</td>
							<td>rgb(102,209,86)</td>
							<td></td>
						</tr>
						<tr id="gr400">
							<td>400</td>
							<td>#40C32D</td>
							<td>rgb(64,195,45)</td>
							<td></td>
						</tr>
						<tr id="gr500">
							<td>500</td>
							<td>#26B810</td>
							<td>rgb(38,184,16)</td>
							<td>Accent Buttons</td>
						</tr>
						<tr id="gr600">
							<td>600</td>
							<td>#23A60F</td>
							<td>rgb(35,166,15)</td>
							<td></td>
						</tr>
						<tr id="gr700">
							<td>700</td>
							<td>#1D8D0C</td>
							<td>rgb(29,141,12)</td>
							<td></td>
						</tr>
						<tr id="gr800">
							<td>800</td>
							<td>#18720A</td>
							<td>rgb(24,114,10)</td>
							<td></td>
						</tr>
						<tr id="gr900">
							<td>900</td>
							<td>#135807</td>
							<td>rgb(19,86,7)</td>
							<td></td>
						</tr>
					</table>
				</section>
				<!--					PURPLE -->
				<section class="full">
					<h4>Purple (Accent Color)</h4>
					<table class="colors">
						<tr id="p50">
							<td>50</td>
							<td>#FFDEFA</td>
							<td>rgb(255,222,250)</td>
							<td></td>
						</tr>
						<tr id="p100">
							<td>100</td>
							<td>#F7BFF2</td>
							<td>rgb(247,191,242)</td>
							<td></td>
						</tr>
						<tr id="p200">
							<td>200</td>
							<td>#EB9FE3</td>
							<td>rgb(235,159,227)</td>
							<td></td>
						</tr>
						<tr id="p300">
							<td>300</td>
							<td>#DB78D0</td>
							<td>rgb(219,120,208)</td>
							<td></td>
						</tr>
						<tr id="p400">
							<td>400</td>
							<td>#C24ABD</td>
							<td>rgb(194,74,189)</td>
							<td></td>
						</tr>
						<tr id="p500">
							<td>500</td>
							<td>#B21DAC</td>
							<td>rgb(178,85,172)</td>
							<td> Nielsen Purple</td>
						</tr>
						<tr id="p600">
							<td>600</td>
							<td>#9C1596</td>
							<td>rgb(156,21,150)</td>
							<td></td>
						</tr>
						<tr id="p700">
							<td>700</td>
							<td>#80157B</td>
							<td>rgb(128,21,123)</td>
							<td></td>
						</tr>
						<tr id="p800">
							<td>800</td>
							<td>#61115E</td>
							<td>rgb(97,17,94)</td>
							<td></td>
						</tr>
						<tr id="p900">
							<td>900</td>
							<td>#4F0D4C</td>
							<td>rgb(79,13,76)</td>
							<td></td>
						</tr>
					</table>
				</section>
				<!--					YELLOW -->
				<section class="full">
					<h4>Yellow (Alert Color)</h4>
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
							<td>#FFE299</td>
							<td>rgb(255,226,153)</td>
							<td></td>
						</tr>
						<tr id="y300">
							<td>300</td>
							<td>#FFD670</td>
							<td>rgb(255,214,112)</td>
							<td></td>
						</tr>
						<tr id="y400">
							<td>400</td>
							<td>#FFC742</td>
							<td>rgb(255,199,66)</td>
							<td></td>
						</tr>
						<tr id="y500">
							<td>500</td>
							<td>#FFB100</td>
							<td>rgb(255,177,0)</td>
							<td>Nielsen Gold</td>
						</tr>
						<tr id="y600">
							<td>600</td>
							<td>#F29100</td>
							<td>rgb(242,145,0)</td>
							<td></td>
						</tr>
						<tr id="y700">
							<td>700</td>
							<td>#E67219</td>
							<td>rgb(230,114,25)</td>
							<td></td>
						</tr>
						<tr id="y800">
							<td>800</td>
							<td>#CF5900</td>
							<td>rgb(207,89,0)</td>
							<td></td>
						</tr>
						<tr id="y900">
							<td>900</td>
							<td>#AB4A0E</td>
							<td>rgb(171,74,14)</td>
							<td></td>
						</tr>
					</table>
				</section>
				<!--					REDS -->
				<section class="full">
					<h4>Red (Error Color)</h4>
					<table class="colors">
						<tr id="r50">
							<td>50</td>
							<td>#FCE1E1</td>
							<td>rgb(252,225,225)</td>
							<td></td>
						</tr>
						<tr id="r100">
							<td>100</td>
							<td>#FFC9CC</td>
							<td>rgb(255,201,204)</td>
							<td></td>
						</tr>
						<tr id="r200">
							<td>200</td>
							<td>#FAA7AA</td>
							<td>rgb(250,167,170)</td>
							<td></td>
						</tr>
						<tr id="r300">
							<td>300</td>
							<td>#FF7D7D</td>
							<td>rgb(255,125,125)</td>
							<td></td>
						</tr>
						<tr id="r400">
							<td>400</td>
							<td>#FA4F4F</td>
							<td>rgb(250,79,79)</td>
							<td></td>
						</tr>
						<tr id="r500">
							<td>500</td>
							<td>#DD0014</td>
							<td>rgb(221,0,20)</td>
							<td> Nielsen Red</td>
						</tr>
						<tr id="r600">
							<td>600</td>
							<td>#BF0012</td>
							<td>rgb(191,0,18)</td>
							<td></td>
						</tr>
						<tr id="r700">
							<td>700</td>
							<td>#9C000D</td>
							<td>rgb(156,0,13)</td>
							<td></td>
						</tr>
						<tr id="r800">
							<td>800</td>
							<td>#7D000B</td>
							<td>rgb(125,0,11)</td>
							<td></td>
						</tr>
						<tr id="r900">
							<td>900</td>
							<td>#610008</td>
							<td>rgb(97,0,8)</td>
							<td></td>
						</tr>
					</table>
				</section>
				<section class="desc full">
					<h4>Data Colors</h4>
					<p>
						See <a href="reporting_palette.php">Reporting Palette</a>
					</p>
				</section>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
