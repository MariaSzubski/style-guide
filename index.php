<?php $current = array_pop(explode("/", $_SERVER['PHP_SELF'])); ?>
<!DOCTYPE html>
<html>
<head>
	<?php require 'template/meta.inc.php'; ?>
	<title id="title">Style Guide</title>
	<?php require 'template/css.inc.php'; ?>
</head>
<body>
	<main class="default_state">
		<header>
			<h2 id="pg_header"></h2>
			<?php require 'template/units.inc.php'; ?>
			<img src="img/hamburger.svg" alt="Navigation" id="icon_nav">
		</header>
		<article id="guidelines">
			<div id="container">
				<div class="desc_i">
					<h2>Introduction</h2>
					<p>
						Donec vel odio vel massa molestie semper. Donec id gravida nibh. Suspendisse venenatis tempus imperdiet. Nunc sagittis nec ipsum sit amet rhoncus. Ut pulvinar erat mi, vel rhoncus elit euismod. Nam auctor odio justo, vitae convallis magna elementum venenatis.
					</p>
					<p>
						In hac habitasse platea dictumst. Ut ac aliquet est. Curabitur placerat a mauris quis vestibulum. Nulla tincidunt commodo tincidunt. Sed id ipsum sit amet nisi aliquet tincidunt eget eget quam.
					</p>
					<p>
						Proin faucibus felis id turpis mattis posuere. Vestibulum fringilla mattis enim ultricies pretium. Nunc vestibulum nunc magna, vel interdum quam faucibus et. In hendrerit erat non lacus vehicula posuere.
					<p>
						Quisque sed vulputate nisi. Morbi tincidunt, tellus vel congue venenatis, leo enim rhoncus nisi, at lacinia nisi elit in risus. Donec vel sapien facilisis, eleifend libero vel, finibus enim. <a>Sed finibus tincidunt mauris</a>, id egestas augue scelerisque et.
					</p>
				</div>
			</div>
		</article>
	</main>
	<?php require 'template/nav.inc.php'; ?>
	<?php require 'template/scripts.inc.php'; ?>
</body>
</html>
