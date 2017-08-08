<html>
<head>
	<?php  include(__DIR__ . '/includes/headers/meta.php');  ?>
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/dashboard.css">
	<style>
		#contextual-menu-wrapper {
			position: absolute;
			right:50px;
			top:10px;

			width:200px;
			-webkit-box-shadow: 0px 1px 6px -1px rgba(0,0,0,0.75);
			-moz-box-shadow: 0px 1px 6px -1px rgba(0,0,0,0.75);
			box-shadow: 0px 1px 6px -1px rgba(0,0,0,0.75);
		}
	</style>
</head>
<body data-mvelo="true">
<div id="contextual-menu-wrapper">
	<?php
	$state = array_keys($_GET)[0];
	if (empty($state)) {
		$state = 'normal';
	}
	?>
	<iframe src="contextual-menu-wrapper.php?<?php echo $state; ?>" frameborder="0" marginheight="0" marginwidth="0" width="200" height="300"></iframe>
</div>
</body>
</html>