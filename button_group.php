<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title id="title">Style Guide &ndash; Components &ndash; Button Group</title>
	<?php require 'template/css.inc.php'; ?>
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header">Components &ndash; Button Group</h2>
			<div class="btn-group" role="group">
				Measurement Units:
				<button type="button" id="size-px" class="btn-selected">px</button><button type="button" id="size-rem">rem</button>
			</div>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
			
		</header>
		<article id="guidelines">
			<div id="container">
				<section>
					<h4>Secondary Button Group</h4>
					<img src="img/guide/button_group_01.png" alt="Default Secondary Button Group">
					<br/>
					<img src="img/guide/button_group_02.png" alt="Small Secondary Button Group">
				</section>
				<section>
					<h4>Tertiary Button Group</h4>
					<img src="img/guide/button_group_03.png" alt="Default Tertiary Button Group">
					<br/>
					<img src="img/guide/button_group_04.png" alt="Small Tertiary Button Group">
				</section>
				<section>
					<h4>Secondary Icon Button Group</h4>
					<img src="img/guide/button_group_05.png" alt="Secondary Icon Button Group">
				</section>
				<section>
					<h4>Tertiary Icon Button Group</h4>
					<img src="img/guide/button_group_06.png" alt="Tertiary Icon Button Group">
				</section>
				<aside>
					<dl class="related">
						<dt>Related Content</dt>
						<dd class="pg_link"><a href="button_raised.php">Raised Button Component</a></dd>
						<dd class="pg_link"><a href="icon.php">Icon Component</a></dd>
					</dl>
					<!-- -->
					<dl class="dl_root">
						<dt>Action Button Group</dt>
						<dd>
							<dl class="sub">
								<dt>Notes</dt>
								<dd class="note">Use Secondary or Tertiary Raised button style in any size.</dd>
								<!-- -->
								<dt>Dividers</dt>
								<dd>Secondary Group: <span class="pxrem">1px</span> #FFFFFF</dd>
								<dd>Tertiary Group: <span class="pxrem">1px</span> <span title="Gray 500" class="theme">#94A3B0</span></dd>
							</dl>
						</dd>
						<!-- -->
						<dt>Icon Button Group</dt>
						<dd>
							<dl class="sub">
								<dt>Secondary Icon Group</dt>
								<dd>Size: <span class="pxrem">28px</span> x <span class="pxrem">28px</span></dd>
								<dd>Corner Radius: <span class="pxrem">4px</span></dd>
								<dd>Hover BG: <span title="Blue 50" class="theme">#D4EEFD</span></dd>
								<dd>Selected BG: <span title="Gray 800" class="theme">#354052</span></dd>
								<dd>Selected Icon: <span title="Gray 100" class="theme">#EDEEF0</span></dd>
								<dd>Disabled Icon: <span title="Gray 300" class="theme">#D5D7DB</span></dd>
								<!-- -->
								<dt>Tertiary Icon Group</dt>
								<dd>Height: <span class="pxrem">28px</span></dd>
								<dd>Width: <span class="pxrem">40px</span></dd>
								<dd>Group Corner Radius: <span class="pxrem">4px</span></dd>
								<dd>Border &amp; Dividers: <span class="pxrem">1px</span> <span title="Gray 500" class="theme">#94A3B0</span></dd>
								<dd>Hover BG: <span title="Blue 50" class="theme">#D4EEFD</span></dd>
								<dd>Selected BG: <span title="Gray 800" class="theme">#354052</span></dd>
								<dd>Selected Icon: <span title="Gray 100" class="theme">#EDEEF0</span></dd>
								<dd>Disabled Border &amp; Icon: <span title="Gray 300" class="theme">#D5D7DB</span></dd>
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
