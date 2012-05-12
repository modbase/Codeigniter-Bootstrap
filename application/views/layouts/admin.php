<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?= $title ?> | <?= $this->config->item('site_name') ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="<?= asset_url('css/bootstrap.min.css') ?>" rel="stylesheet">
        <link href="<?= asset_url('css/site.css') ?>" rel="stylesheet">
        <link href="<?= asset_url('css/bootstrap-responsive.min.css') ?>" rel="stylesheet">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <?= $headers ?>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <?= anchor('admin', $this->config->item('site_name'), 'class="brand"') ?>
                    <div class="btn-group pull-right">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="icon-user"></i> John Doe<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><?= anchor('user/account', 'My account') ?></li>
                            <li class="divider"></li>
                            <li><?= anchor('user/logout', 'Logout') ?></li>
                        </ul>
                    </div>
                    <div class="nav-collapse">
                        <ul class="nav">
                            <li class="active"><?= anchor('admin', 'Admin dashboard <span id="topnotification" class="badge badge-important">2</span>') ?></li>
                            <li><?= anchor('/', 'Public site') ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span3">
                    <div class="well sidebar-nav">
                        <ul class="nav nav-list">
                            <li<?= set_active_nav('admin') ?>><?= anchor('admin', '<i class="icon-home"></i> Overview') ?></li>
                            <li class="nav-header">Management</li>
                            <li<?= set_active_nav('admin/users') ?>><?= anchor('admin/users', '<i class="icon-check"></i> Users') ?></li>
                            <li<?= set_active_nav('admin/news') ?>><?= anchor('admin/news', '<i class="icon-user"></i> News') ?></li>
                            <?php if(is_current_uri(array('admin/news', 'admin/news/add'))): ?>
                            <ul class="nav nav-list">
                                <li<?= set_active_nav('admin/news/add') ?>><?= anchor('admin/news/add', '<i class="icon-plus"></i> Add post') ?></li>
                            </ul>
                            <?php endif; ?>
 							<li class="nav-header">Settings</li>
                            <li<?= set_active_nav('admin/settings') ?>><?= anchor('admin/settings', '<i class="icon-wrench"></i> System') ?></li>
                            <li<?= set_active_nav('user/account') ?>><?= anchor('user/account', '<i class="icon-briefcase"></i> My account') ?></li>
                            <li<?= set_active_nav('admin/updates') ?>><?= anchor('admin/updates', '<i class="icon-refresh"></i> Updates <span class="badge badge-important">2</span>') ?></li>
                        </ul>
                    </div>
                </div>
                <div class="span9">
                    <?= $contents ?>
                </div>
            </div>
            <hr>
            <footer>
                <p>&copy; <?= $this->config->item('site_name') ?> <?= date('Y') ?></p>
                <p>Powered by Codeigniter Bootstrap v<?= $this->config->item('version') ?></p>
            </footer>
        </div>
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="<?= asset_url('js/jquery.js') ?>"></script>
        <script src="<?= asset_url('js/bootstrap.min.js') ?>"></script>
        <script src="<?= asset_url('js/application.js') ?>"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('[rel=tooltip]').tooltip();
                $('#topnotification').tooltip({title: '2 updates available', placement: 'bottom'});
            });
        </script>
    </body>
</html>
