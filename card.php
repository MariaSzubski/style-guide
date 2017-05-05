<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - Card</title>
	<link rel="stylesheet" href="css/build/style.css" charset="utf-8">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Card</h2>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<section>
					<h4>Default Card</h4>
					<img src="img/guide/card_01.png" alt="Default Card">
				</section>
				<section>
					<h4>Locked Card</h4>
					<img src="img/guide/card_02.png" alt="Locked Card">
				</section>
				<aside>
					<dl class="related">
						<dt>Related Content</dt>
						<dd class="pg_link"><a href="p_card.php">Card Patterns</a></dd>
					</dl>
					<!-- -->
					<dl class="dl_root">
						<dt>Card</dt>
						<dd>Dividers: 1px #DCE5EC</dd>
						<dd>Background: #FFFFFF</dd>
						<dd>Corner Radius: 5px</dd>
						<dd>Box Shadow:	0px 1px 2px rgba(0,0,0,.45)</dd>
						<dd>Angular Shadow: 2dp</dd>
						<!-- -->
						<dd>
							<dl class="sub">
								<dt>Primary Actions</dt>
								<dd>Divider: 1px #BBCCDB</dd>
								<dd>Background: #F5F9FC</dd>
							</dl>
						</dd>
						<!-- -->
						<dt>Type Styles</dt>
						<dd>
							<dl class="sub">
								<dt>Title</dt>
								<dd>[Page/Panel Typestyle]</dd>
								<dd>Text: 20px (15pt) #0098F3</dd>
								<dd>Line Height: 25px</dd>
								<dd>Weight: 600</dd>
								<!-- -->
								<dt>Subheader</dt>
								<dd>[Small Text Typestyle]</dd>
								<dd>Text: 11px (8pt) #989EA7</dd>
								<!-- -->
								<dt>Description</dt>
								<dd>[Body Text Typestyle]</dd>
								<dd>Text: 13px (10pt) #151921</dd>
								<dd>Line Height: 20px</dd>
								<!-- -->
								<dt>Keyword Chips</dt>
								<dd class="note">See Chips component for recommendations.</dd>
								<!-- -->
								<dt>Author Name &amp; Buttons</dt>
								<dd>[Body Text Typestyle]</dd>
								<dd>Text: 13px (10pt) #151921</dd>
								<dd>Line Height: 20px</dd>
								<dd>Weight: 600</dd>
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
