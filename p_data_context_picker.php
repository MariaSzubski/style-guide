<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">Style Guide &ndash; Patterns &ndash; Data Context Picker</title>
	<?php require 'template/css.inc.php'; ?>
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Patterns &ndash; Data Context Picker</h2>
			<div class="btn-group" role="group">
				Measurement Units:
				<button type="button" id="size-px" class="btn-selected">px</button><button type="button" id="size-rem">rem</button>
			</div>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			
		</header>
		<article id="guidelines">
			<div id="container">
				<section>
					<div class="desc_pattern">
						<p>
							Data Context Pickers are used when multiple attribute values in a report or similar asset can be modified.  For example, a report may allow users to change the category, brand, and/or market.
						</p>
						<p>
							There are two main components of this pattern: 1) the context statement with edit icon, and 2) the action sheet with selectors and other inputs.
						</p>
					</div>
				</section>
				<!-- Section 1 -->
				<section>
					<h2>Context Statement</h2>
					<section class="full">
						<div class="desc_pattern">
							<p>
								The context statement describes the current data context. It is usually located in the local header bar, but it is acceptable to place it within the body of the page.
							</p>
							<p>
								Clicking the context statement or the edit icon displays the action sheet. The context statement may be truncated, and hovering over the context statement shows a dark tooltip with the entire context. Attribute values in the context statement may be separated by prepositions (preferred) or stovepipes 	&ldquo; | &rdquo; symbols.
							</p>
						</div>
					</section>
					<!-- -->
					<section class="full">
						<h4>Context Statement On Local Header</h4>
						<img src="img/guide/p_data-context-picker_01.png" alt="Context Statement On Local Header">
					</section>
					<!-- -->
					<section class="full">
						<h4>Context Statement On Page Body</h4>
						<img src="img/guide/p_data-context-picker_02.png" alt="Context Statement On Page Body">
					</section>
				</section>
				<!-- Section 2 -->
				<section>
					<h2>Action Sheet</h2>
					<section class="full">
						<div class="desc_pattern">
							<p>
								Action sheets are shown after clicking the context statement or edit icon. They contain the form that is used to select attributes and may contain any form elements. They also contain the CANCEL and APPLY buttons.
							</p>
							<p>
								The action sheet animates in and out by sliding down and up, respectively. These animation use the same transition timing and effects as the <a href="sidenav.php">sidenav</a>.
							</p>
							<p>
								The CANCEL and APPLY buttons are at the bottom-left side of the form. If the form is short, then the page under the action sheet is masked using the same page mask as the <a href="dialog.php">dialog window</a>. If the form is long and scrollbars are needed, then the button row locks to the bottom of the page so that users aren’t required to scroll to see them.
							</p>
							<p>
								Special consideration: If the report or view has no default context to fill (i.e., a report and context statement cannot be shown first), then the action sheet covers all content below the app bar and there is no CANCEL button.
							</p>
						</div>
					</section>
					<!-- -->
					<section class="full">
						<h4>Action Sheet Without Scrollbar</h4>
						<img src="img/guide/p_data-context-picker_03.png" alt="Action Sheet Without Scrollbar">
					</section>
					<!-- -->
					<section class="full">
						<h4>Action Sheet With Scrollbar &amp; Buttons Locked</h4>
						<img src="img/guide/p_data-context-picker_04.png" alt="Action Sheet With Scrollbar &amp; Buttons Locked">
					</section>
				</section>
				<!-- Section 3 -->
				<section>
					<h2>MULTIPLE CONTEXT VIEWS</h2>
					<section class="full">
						<div class="desc_pattern">
							<p>
								Some instances of the data context picker require the ability to save and manage multiple views.
							</p>
						</div>
					</section>
					<!-- -->
					<section class="full">
						<h4>CONTEXT STATEMENT ON LOCAL HEADER WITH VIEW &amp; VIEW SAVE OPTIONS </h4>
						<img src="img/guide/p_data-context-picker_05.png" alt="CONTEXT STATEMENT ON LOCAL HEADER WITH VIEW &amp; VIEW SAVE OPTIONS ">
					</section>
					<!-- -->
					<section class="full">
						<h4>ACTION SHEET WITH SCROLLBAR &amp; BUTTONS LOCKED</h4>
						<img src="img/guide/p_data-context-picker_06.png" alt="ACTION SHEET WITH SCROLLBAR &amp; BUTTONS LOCKED">
					</section>
				<aside>
					<dl class="related">
						<dt>Related Content</dt>
						<dd class="pg_link"><a href="dialog.php">Dialog Component</a></dd>
						<dd class="pg_link"><a href="sidenav.php">Sidenav Component</a></dd>
					</dl>
					<!-- -->
					<dl class="dl_root">
						<dt>Context Statement</dt>
						<dd>Text: 13px (10pt) <span title="Gray 800" class="theme">#354052</span></dd>
						<dd>Attribute Font Weight: 700</dd>
						<dd>Preposition Font Weight: 400</dd>
						<!-- -->
						<dt>Action Sheet</dt>
						<dd>Border-Bottom: 2px <span title="Gray 400" class="theme">#BBCCDD</span></dd>
						<dd>Background: #FFFFFF</dd>
					</dl>
				</aside>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
