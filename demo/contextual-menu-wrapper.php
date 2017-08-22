<html>
<head>
	<?php  include( __DIR__ . '/includes/headers/meta.php' );  ?>
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/contextual-menu.css">
</head>
<body data-mvelo="true">
		<?php
		include( __DIR__ . '/includes/contextual-menu/header.php' );
		if (isset($_GET['advanced'])) {
			include( __DIR__ . '/includes/contextual-menu/advanced-state.php' );
		}
		elseif (isset($_GET['advanced-with-icons'])) {
			include( __DIR__ . '/includes/contextual-menu/advanced-state-with-icons.php' );
		}
		elseif (isset($_GET['setup'])) {
			include( __DIR__ . '/includes/contextual-menu/setup-state.php' );
		}
		else {
			include( __DIR__ . '/includes/contextual-menu/normal-state.php' );
		}
		?>
</body>
</html>