<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->fetch('meta') ?>
   	 <!--<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all">
        <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">-->
		<?= $this->Html->css('../admin/css/bootstrap.min.css'); ?>
        <?= $this->Html->css('../admin/css/font-awesome.min.css'); ?>
        <?= $this->Html->css('../admin/css/ionicons.min.css'); ?>
        <?= $this->Html->css('../admin/css/morris/morris.css'); ?>
        <?= $this->Html->css('../admin/css/jvectormap/jquery-jvectormap-1.2.2.css'); ?>
        <?= $this->Html->css('../admin/css/datepicker/datepicker3.css'); ?>
        <?= $this->Html->css('../admin/css/daterangepicker/daterangepicker-bs3.css'); ?>
        <?= $this->Html->css('../admin/css/iCheck/all.css'); ?>
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <?= $this->Html->css('../admin/css/style.css'); ?>
        <?= $this->fetch('css') ?>
        
		<?= $this->Html->script('../admin/js/custom-msg.js'); ?>
        <!-- jQuery 2.0.2 -->
        <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>-->
        <?= $this->Html->script('../admin/js/jquery.min.js'); ?>
        <?= $this->Html->script('../admin/js/jquery-ui-1.10.3.min.js'); ?>
        <?= $this->Html->script('../admin/js/bootstrap.min.js'); ?>
        <?= $this->Html->script('../admin/js/plugins/daterangepicker/daterangepicker.js'); ?>
        <?= $this->Html->script('../admin/js/plugins/chart.js'); ?>
        <?= $this->Html->script('../admin/js/tinymce/tinymce.min.js'); ?>
        <!-- datepicker
        <?= $this->Html->script('../admin/js/plugins/datepicker/bootstrap-datepicker.js'); ?>-->
        <!-- Bootstrap WYSIHTML5
        <script src="js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>-->
        <!-- iCheck -->
        <?= $this->Html->script('../admin/js/plugins/iCheck/icheck.min.js'); ?>
        <?= $this->Html->script('../admin/js/plugins/fullcalendar/fullcalendar.js'); ?>
        <?= $this->Html->script('../admin/js/Director/app.js'); ?>
        <?= $this->fetch('script') ?>
</head>

<body class="skin-black">
		<?php if(isset($cUser)): ?>
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.html" class="logo">
                Admin
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-user"></i>
                                <span><?php echo $cUser['full_name']; ?><i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                                <li class="dropdown-header text-center">Account</li>
                                <li class="divider"></li>

                                    <li>
										<?php
                                        echo $this->Html->link(
                                                        '<i class="fa fa-user fa-fw pull-right"></i> Profile',
                                                        ['controller' => 'users', 'action' => 'profile' , $cUser['id'] ],
                                                        ['escape' => false]
                                                        
                                                    );
                                        ?>
                                        <?php
                                        echo $this->Html->link(
                                                        '<i class="fa fa-cog fa-fw pull-right"></i> Settings',
                                                        ['controller' => 'settings', 'action' => 'index'],
                                                        ['escape' => false]
                                                        
                                                    );
                                        ?>
                                        </li>

                                        <li class="divider"></li>

                                        <li>
                                            <?php
									echo $this->Html->link(
													'<i class="fa fa-ban fa-fw pull-right"></i> Logout',
													['controller' => 'users', 'action' => 'logout'],
													['escape' => false]
													
												);
									?>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </header>
                <div class="wrapper row-offcanvas row-offcanvas-left">
                    <!-- Left side column. contains the logo and sidebar -->
                    <aside class="left-side sidebar-offcanvas">
                        <!-- sidebar: style can be found in sidebar.less -->
                        <section class="sidebar">
                            <!-- Sidebar user panel -->
                            <div class="user-panel">
                            <!-- sidebar menu: : style can be found in sidebar.less -->
                            <ul class="sidebar-menu">
                                <li class="active">
                                    <a href="index.html">
                                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <?php
									echo $this->Html->link(
													'<i class="fa  fa-columns"></i> Banners',
													['controller' => 'banners', 'action' => 'index'],
													['escape' => false]
													
												);
									?>
                                </li>
                                <li>
                                    <?php
									echo $this->Html->link(
													'<i class="fa  fa-file-text-o"></i> Pages',
													['controller' => 'pages', 'action' => 'index'],
													['escape' => false]
													
												);
									?>
                                </li>
                                <li>
                                    <?php
									echo $this->Html->link(
													'<i class="fa fa-puzzle-piece"></i> Blocks',
													['controller' => 'blocks', 'action' => 'index'],
													['escape' => false]
													
												);
									?>
                                </li>
                                <li>
                                    <?php
									echo $this->Html->link(
													'<i class="fa fa-comments-o"></i> Blog',
													['controller' => 'blog', 'action' => 'index'],
													['escape' => false]
													
												);
									?>
                                </li>
                                <li>
                                    <?php
									echo $this->Html->link(
													'<i class="fa fa-user"></i> Users',
													['controller' => 'users', 'action' => 'index'],
													['escape' => false]
													
												);
									?>
                                </li>
                                <li>
                                    <?php
									echo $this->Html->link(
													'<i class="fa fa-cogs"></i> Settings',
													['controller' => 'settings', 'action' => 'index'],
													['escape' => false]
													
												);
									?>
                                </li>

                            </ul>
                        </section>
                        <!-- /.sidebar -->
                    </aside>
					
                    <aside class="right-side">
                    <!-- Main content -->
                    <section class="content">
                            <?= $this->Flash->render() ?>
                            <?= $this->fetch('content') ?>
                    </section><!-- /.content -->
                    <div class="footer-main">
                        Copyright &copy Admin, 2016
                    </div>
                </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        <?php else: ?>
        		<section class="content">
                            <?= $this->Flash->render() ?>
                            <?= $this->fetch('content') ?>
                    </section><!-- /.content -->
		<?php endif; // login check ?>
        
</body>
</html>
