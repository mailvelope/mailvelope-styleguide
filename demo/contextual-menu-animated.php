<html>
<head>
	<?php  include( __DIR__ . '/includes/headers/meta.php' );  ?>
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/contextual-menu.css">
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#mvelo-advanced-options-button').click(function(e) {
				e.stopImmediatePropagation();
				$('.contextual-menu-container-slide').animate({left: "-230px"}, 200);
				return false;
			});
			$('#mvelo-normal-options-button').click(function(e) {
				e.stopImmediatePropagation();
				$('.contextual-menu-container-slide').animate({left: "0px"}, 200);
				return false;
			});
		});
	</script>
</head>
<body data-mvelo="true">
		<?php
		include( __DIR__ . '/includes/contextual-menu/header.php' );
		?>
		<div class="contextual-menu-container">
			<div class="contextual-menu-container-slide">
				<div class="contextual-menu-wrapper normal">
					<?php
					include( __DIR__ . '/includes/contextual-menu/normal-state.php' );
					?>
				</div>
				<div class="contextual-menu-wrapper advanced">
					<?php
					include( __DIR__ . '/includes/contextual-menu/advanced-state.php' );
					?>
				</div>
			</div>
		</div>
</body>
</html>