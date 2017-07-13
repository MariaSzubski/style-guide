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
				<section>
					<h4></h4>
					<img src="img/guide/" alt="">
					<div class="desc_pattern">
						<h2>Section Header</h2>
						<p>
							This is a pattern description. Duis vulputate iaculis nisi, vitae malesuada enim ultrices non. Phasellus molestie lacinia nibh, id imperdiet ligula finibus in. Fusce pharetra varius varius. Nam ut neque eu libero fermentum ultricies tristique vel ex.
						</p>
						<p>
							Phasellus euismod, est eget dictum maximus, libero est hendrerit ipsum, placerat consequat nibh orci vitae purus. Nam luctus lacus et tortor dapibus placerat. Curabitur vitae rutrum velit. Nunc sit amet interdum ex. Integer ornare nisi ac augue aliquet hendrerit.
						</p>
						<h4>Section Subheader / Image Label</h4>
						<p>
							Praesent a metus vitae ex imperdiet consectetur in nec lacus. Morbi sem libero, facilisis ac dignissim eu, facilisis eu mi. Proin vel metus ac urna porta ullamcorper et eu diam. Ut hendrerit dignissim efficitur.
						</p>
					</div>
				</section>

				<aside>
					<dl class="related">
						<dt>Related Content</dt>
						<dd class="pg_link"><a href="toolbar.php">Toolbar Component</a></dd>
					</dl>
					<!-- -->
					<dl class="dl_root">
						<dt>Specification Header</dt>
						<dd>
							<dl class="sub">
								<dt>Specification Suheader</dt>
								<dd>Font Size: <span class="pxrem">13px</span></dd>
								<dd>Corner Radius: <span class="pxrem">12px</span></dd>
								<dd>Padding: <span class="pxrem">12px</span></dd>
								<!-- -->
								<dt>Notes</dt>
								<dd class="note">Use px for measurements. Nunc eu sapien id diam feugiat facilisis.</dd>
								<!-- -->
							</dl>
						</dd>
						<!-- -->
						<dt>Section Header</dt>
						<dd>
							<dl class="sub">
								<dt>Suheader</dt>
								<dd>Text: 13px (9pt) <span title="Gray 500" class="theme">#354052</span></dd>
								<dd>Font Weight: 600</dd>
							</dl>
						</dd>
						<!-- -->
					</dl>
				</aside>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
