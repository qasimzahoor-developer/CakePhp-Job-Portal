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