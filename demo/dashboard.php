<html>
<head>
    <?php  include(__DIR__ . '/includes/headers/meta.php');  ?>
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/dashboard.css">
</head>
<body data-mvelo="true">
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
            <div class="panel panel-default dashboard-item">
                <div class="panel-body">
                    <a href="#contacts">
                        <i class="fa fa-list-alt"></i>
                        <span>Manage contacts</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-default dashboard-item">
                <div class="panel-body">
                    <a href="#encrypt">
                        <i class="fa fa-files-o"></i>
                        <span>Encrypt and decrypt files</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-default dashboard-item">
                <div class="panel-body">
                    <a href="#encrypt">
                        <i class="fa fa-key"></i>
                        <span>Manage keys</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-default dashboard-item">
                <div class="panel-body">
                    <a href="#encrypt">
                        <i class="fa fa-eye"></i>
                        <span>Security logs</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-default dashboard-item">
                <div class="panel-body">
                    <a href="#encrypt">
                        <i class="fa fa-server"></i>
                        <span>Manage providers</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-default dashboard-item">
                <div class="panel-body">
                    <a href="#encrypt">
                        <i class="fa fa-question-circle"></i>
                        <span>Help</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-default dashboard-item">
                <div class="panel-body">
                    <a href="#encrypt">
                        <i class="fa fa-info-circle"></i>
                        <span>About</span>
                </div>
            </div>
        </div>
    </div><!--/tab-content-->
    <footer class="row">
        <p class="pull-left col-md-6">© 2012-2017 Mailvelope GmbH</p>
        <div id="version" class="pull-right col-md-6">v1.8.0</div>
    </footer>
</div><!--/container-->
</body>
</html>