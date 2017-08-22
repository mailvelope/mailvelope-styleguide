<html>
<head>
	<?php  include(__DIR__ . '/includes/headers/meta.php');  ?>
	<script type="text/javascript" src="../js/tether.js"></script>
	<script type="text/javascript" src="../js/shepherd.js"></script>
	<link rel="stylesheet" href="../css/shepherd-theme-arrows.css" />
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/dashboard.css">
</head>
<body data-mvelo="true">
<div class="shepherd-backdrop"></div>
<div id="settingsPanel">
	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<?php  include(__DIR__ . '/includes/nav/primary_menu.php');  ?>
		</div>
	</div>
</div>
<div class="container">
	<div class="dashboard">
		<div class="col-md-12">
			<h3>Dashboard</h3>
			<div class="alert alert-warning alert-dismissible col-md-12" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<strong>Warning!</strong> Something happened here. Pay attention to what is inside.
			</div>
		</div>
		<div class="col-md-3">
			<a class="dashboard-item configure" href="#">
				<i class="fa fa-gear"></i>
				<span>Configure Mailvelope</span>
			</a>
		</div>
		<div class="col-md-3">
			<a class="dashboard-item" href="key-management.php">
				<i class="fa fa-key"></i>
				<span>Manage keys</span>
			</a>
		</div>
		<div class="col-md-3">
			<a class="dashboard-item" href="#">
				<i class="fa fa-files-o"></i>
				<span>Encrypt and decrypt files</span>
			</a>
		</div>
		<div class="col-md-3">
			<a class="dashboard-item" href="#">
				<i class="fa fa-eye"></i>
				<span>View security logs</span>
			</a>
		</div>
		<div class="col-md-3">
			<a class="dashboard-item" href="#">
				<i class="fa fa-server"></i>
				<span>Manage email providers</span>
			</a>
		</div>
		<div class="col-md-3">
			<a class="dashboard-item" href="#">
				<i class="fa fa-question-circle"></i>
				<span>Help</span>
			</a>
		</div>
	</div><!--/tab-content-->
	<footer class="row">
		<p class="pull-left col-md-6">© 2012-2017 Mailvelope GmbH</p>
		<div id="version" class="pull-right col-md-6">v1.8.0</div>
	</footer>
</div><!--/container-->
<script type="text/javascript">
	var tour = new Shepherd.Tour({
		defaults: {
			classes: 'shepherd shepherd-open shepherd-theme-arrows'
		}
	});

	tour.addStep('example', {
		title: 'Configure Mailvelope',
		text: 'Before you can start using Mailvelope, you need to configure it. <br><br>Click on the "Configure Mailvelope" button on the left to get started!',
		attachTo: '.configure right',
		//advanceOn: '.docs-link click',
		buttons: [
			{
				text: 'Got it!',
				classes: 'shepherd-button-primary',
				action: tour.cancel
			}
		]
	});

	tour.start();
</script>
</body>
</html>