<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">NX Guidelines - Button</title>
	<link rel="stylesheet" href="css/build/style.css" charset="utf-8">
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Button</h2>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			<img src="img/n_tab.svg" alt="Nielsen" id="icon_ntab">
		</header>
		<article id="guidelines">
			<div id="container">
				<section>
					<h4></h4>
					<img src="img/guide/button_01.svg" alt="Buttons">
				</section>
				<aside>
					<dl>
						<dt>Grouping</dt>
						<dd class="note">Actions and Toolbar Buttons should not be grouped together. Action buttons advance the user's workflow. Toolbar buttons perform in-page functions.</dd>
						<!-- -->
						<dt>Green Buttons</dt>
						<dd>Text: 15px (11pt)</dd>
						<dd>Weight: 600</dd>
						<dd>Case: Capitalize</dd>
						<dd>Corner Radius: 4px</dd>
						<dd>
							<dl class="sub">
								<dt>Raised (Primary)</dt>
								<dd>Text Color: #FFFFFF</dd>
								<dd>Background: #26B910</dd>
								<dd>Hover Background: #1D8E0C</dd>
								<dd>Down Background: #135807</dd>
								<!-- -->
								<dt>Raised (Standard)</dt>
								<dd>Text Color: #26B910</dd>
								<dd>Border: 1.5px #26B910</dd>
								<dd>Background: #FFFFFF</dd>
								<dd>Hover Background: #D0F7CC</dd>
								<dd>Down Background: #B6EEAF</dd>
								<!-- -->
								<dt>Flat (Tertiary)</dt>
								<dd>Text Color: #26B910</dd>
								<dd>Hover Text Color: #1D8D0C</dd>
								<dd>Down Text Color: #135807</dd>
							</dl>
						</dd>
						<!-- -->
						<dt>Blue Buttons</dt>
						<dd>Text: 15px (11pt)</dd>
						<dd>Weight: 600</dd>
						<dd>Case: Capitalize</dd>
						<dd>Corner Radius: 4px</dd>
						<dd>
							<dl class="sub">
								<dt>Raised (Primary)</dt>
								<dd>Text Color: #FFFFFF</dd>
								<dd>Background: #0098F3</dd>
								<dd>Hover Background: #007BC5</dd>
								<dd>Down Background: #00568B</dd>
								<!-- -->
								<dt>Raised (Standard)</dt>
								<dd>Text Color: #0098F3</dd>
								<dd>Border: 1.5px #0098F3</dd>
								<dd>Background: #FFFFFF</dd>
								<dd>Hover Background: #D4EEFD</dd>
								<dd>Down Background: #B4E0FC</dd>
								<!-- -->
								<dt>Flat (Tertiary)</dt>
								<dd>Text Color: #0098F3</dd>
								<dd>Hover Text Color: #007BC4</dd>
								<dd>Down Text Color: #00568A</dd>
							</dl>
						</dd>
						<!-- -->
						<dt>Navy Buttons</dt>
						<dd>Text: 13px (10pt)</dd>
						<dd>Weight: 600</dd>
						<dd>Case: Capitalize</dd>
						<dd>Corner Radius: 4px</dd>
						<dd>
							<dl class="sub">
								<dt>Raised (Toolbar)</dt>
								<dd>Content Color: #EDEEF0</dd>
								<dd>Background: #354052</dd>
								<dd>Hover Background: #151921</dd>
								<dd>Down Background: #838F93</dd>
								<!-- -->
								<dt>Flat (Toolbar)</dt>
								<dd>Text: 13px (10pt) #354052</dd>
								<!-- -->
								<dt>Purpose</dt>
								<dd class="note">This style is for buttons that perform in-page actions. It is not used for actions that advance the user’s workflow.
								</dd>
							</dl>
						</dd>
						<!-- -->
						<dt>Disabled Buttons</dt>
						<dd>
							<dl class="sub">
								<dt>Raised (Primary)</dt>
								<dd>Text Color: #FFFFFF</dd>
								<dd>Background: #D4D6DA</dd>
								<!-- -->
								<dt>Raised (Standard)</dt>
								<dd>Text Color: #D4D6DA</dd>
								<dd>Border Color: #D4D6DA</dd>
								<!-- -->
								<dt>Flat (Tertiary)</dt>
								<dd>Text Color: #D4D6DA</dd>
							</dl>
						</dd>
						<!-- -->
						<dt>Icons</dt>
						<dd>
							<dl class="sub">
								<dt>Raised</dt>
								<dd>Text Color: #FFFFFF</dd>
								<dd>Background: #354052</dd>
								<dd>Hover Background: #151921</dd>
								<dd>Down Background: #838F93</dd>
								<!-- -->
								<dt>Flat</dt>
								<dd>Color: #354052</dd>
								<!-- -->
								<dt>Library</dt>
								<dd class="note">See Iconography section for full icon library.</dd>
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
