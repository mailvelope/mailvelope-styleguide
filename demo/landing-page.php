<html>
<head>
	<?php  include(__DIR__ . '/includes/headers/meta.php');  ?>
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/landing-page.css">
</head>
<body data-mvelo="true">
<div id="settingsPanel">
	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">

			<?php
			$emptyNav = true;
			include(__DIR__ . '/includes/nav/primary_menu.php');
			?>
		</div>
	</div>
</div>
<div class="container">
	<div class="landingpage">
		<div class="col-md-10">
			<h1>Welcome to Mailvelope!</h1>
			<p>Click on the mailvelope icon <span class="mailvelopeicon"><img src="../img/cryptography-icon48.png" height="25px"></img></span> in your browser toolbar to begin with the configuration. </p>
			<p><img src="../img/mailvelope_screenshot.png" alt="Illustration of clicking on the mailvelope icon" class="gif-illustration" /></p>
			<p>Check out the <a href="#">online help</a> for more information.</p>
		</div>
		<div class="col-md-2">
			<div class="illustration"><i class="fa fa-arrow-up" aria-hidden="true"></i></div>
		</div>
	</div><!--/tab-content-->
</div><!--/container-->
</body>
</html>