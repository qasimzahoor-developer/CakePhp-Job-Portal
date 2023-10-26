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
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= $this->fetch('title') ?></title>
<?= $this->fetch('meta') ?>
<?= $this->Html->meta('icon') ?>
<?= $this->Html->css('owl.carousel.css') ?>
<?= $this->Html->css('bootstrap.min.css') ?>
<?= $this->Html->css('font-awesome.css') ?>
<?= $this->Html->css('bootstrap-datepicker.min.css') ?>
<?= $this->Html->css('select2.min.css') ?>
<?= $this->Html->css('main.css') ?> 
<?= $this->fetch('css') ?>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="js/html5shiv.min.js"></script>
  <script src="js/respond.min.js"></script>
<![endif]-->
</head>
<body>
<!-- Header start -->
<div class="header">
  <div class="container">
    <div class="row">
      <div class="col-md-2 col-sm-3 col-xs-12"> <a href="<?php echo BASE_URL; ?>" class="logo"><img src="<?php echo $this->request->webroot; ?>images/logo.png" alt="" /></a>
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="col-md-10 col-sm-12 col-xs-12"> 
        <!-- Nav start -->
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-collapse collapse" id="nav-main">
            <ul class="nav navbar-nav pull-right">
            	<li class="dropdown">
            		<div class="userInfo">
                       Guest User <span><span class="glyphicon glyphicon-menu-down"></span>
					   	My Account
                        </span>
                     </div>
					 <div class="userPic">
                        <img src="<?php echo $this->request->webroot; ?>images/coment-avatar-2.jpg" alt="" class="img-responsive">
                      </div>
                 	<ul class="dropdown-menu">
                  	  <li><?php
						  echo $this->Html->link('Login',['controller' => 'users', 'action' => 'login', 'prefix' => 'employee'],
						  ['escape' => false]);
					  ?></li>
              		<li><?php
                                        echo $this->Html->link(
                                                        'Signup',
                                                        ['controller' => 'users', 'action' => 'signup', 'prefix' => 'employee'],
                                                        ['escape' => false]
                                                        
                                                    );
                                        ?></li>
                    </ul>
                 </li>
                 <!--<li class="postjob">
				 	<?php  echo $this->Html->link('Post A Job',['controller' => 'jobs', 'action' => 'post'],['escape' => false]);?></li>-->
            </ul>
            <ul class="nav navbar-nav pull-left">
            <?php if(!isset($cUser['id'])): ?>
              <li><?php
                  echo $this->Html->link('Login',['controller' => 'users', 'action' => 'login', 'prefix' => 'employee'],['escape' => false]);
              ?></li>
              <li><?php
                                        echo $this->Html->link(
                                                        'Signup',
                                                        ['controller' => 'users', 'action' => 'signup', 'prefix' => 'employee'],
                                                        ['escape' => false]
                                                        
                                                    );
                                        ?></li>
              <li class="postjob"><?php
                                        echo $this->Html->link(
                                                        'Post A Job',
                                                        ['controller' => 'jobs', 'action' => 'post'],
                                                        ['escape' => false]
                                                        
                                                    );
                                        ?></li>
              <li class="jobseeker"><?php
                                        echo $this->Html->link(
                                                        'Job Seeker',
                                                        ['controller' => 'users', 'action' => 'login'],
                                                        ['escape' => false]
                                                        
                                                    );
                                        ?></li>
            <?php else: ?>
          						  
              					<li><?php
                                        echo $this->Html->link(
                                                        'Dashboard',
                                                        ['controller' => 'users', 'action' => 'home', 'prefix' => 'employer'],
                                                        ['escape' => false]
                                                        
                                                    );
                                        ?></li>
                                        <li><?php
                                        echo $this->Html->link(
                                                        'Job Applications',
                                                        ['controller' => 'jobs', 'action' => 'applications', 'prefix' => 'employer'],
                                                        ['escape' => false]
                                                        
                                                    );
                                        ?></li>    
                                        <li><?php
                                        echo $this->Html->link(
                                                        'Job Manager',
                                                        ['controller' => 'jobs', 'action' => 'index', 'prefix' => 'employer'],
                                                        ['escape' => false]
                                                        
                                                    );
                                        ?></li>
                                        <li><?php
                                        echo $this->Html->link(
                                                        'Company Manager',
                                                        ['controller' => 'company', 'action' => 'index', 'prefix' => 'employer'],
                                                        ['escape' => false]
                                                        
                                                    );
                                        ?></li>
                                        <li><?php
                                        echo $this->Html->link(
                                                        'Packages',
                                                        ['controller' => 'company', 'action' => 'packages', 'prefix' => 'employer'],
                                                        ['escape' => false]
                                                        
                                                    );
                                        ?></li>
                                        
                                        
            
			<?php endif; ?>
            </ul>
            <!-- Nav collapes end --> 
          </div>
          <div class="clearfix"></div>
        </div>
        <!-- Nav end --> 
      </div>
    </div>
    <!-- row end --> 
  </div>
  <!-- Header container end --> 
</div>
<!-- Header end --> 
<?php
	 //echo $this->Flash->render();
	 echo $this->fetch('content');
?>
<!--Footer-->
<div class="footerWrap">
  <div class="container">
    <div class="row"> 
      <!--About Us-->
      <div class="col-md-3 col-sm-12">
        <div class="ft-logo"><img src="<?php echo $this->request->webroot; ?>images/logo.png" alt="Your alt text here"></div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et consequat elit. Proin molestie eros sed urna auctor lobortis. Integer eget scelerisque arcu. Pellentesque scelerisque pellentesque nisl, sit amet aliquam mi pellentesque fringilla. Ut porta augue a libero pretium laoreet. Suspendisse sit amet massa accumsan, pulvinar augue id, tristique tortor.</p>
        
        <!-- Social Icons -->
        <div class="social"> <a href="#." target="_blank"> <i class="fa fa-facebook-square" aria-hidden="true"></i></a> <a href="#." target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a> <a href="#." target="_blank"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a> <a href="#." target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a> <a href="#." target="_blank"><i class="fa fa-youtube-square" aria-hidden="true"></i></a> </div>
        <!-- Social Icons end --> 
      </div>
      <!--About us End--> 
      
      <!--Quick Links-->
      <div class="col-md-2 col-sm-6">
        <h5>Quick Links</h5>
        <!--Quick Links menu Start-->
        <ul class="quicklinks">
          <li><a href="#.">Career Services</a></li>
          <li><a href="#.">CV Writing</a></li>
          <li><a href="#.">Career Resources</a></li>
          <li><a href="#.">Company Listings</a></li>
          <li><a href="#.">Success Stories</a></li>
          <li><a href="#.">Contact Us</a></li>
          <li><a href="#.">Create Account</a></li>
          <li><a href="#.">Post a Job</a></li>
          <li><a href="#.">Contact Sales</a></li>
        </ul>
      </div>
      <!--Quick Links menu end--> 
      
      <!--Jobs By Industry-->
      <div class="col-md-3 col-sm-6">
        <h5>Jobs By Industry</h5>
        <!--Industry menu Start-->
        <ul class="quicklinks">
          <li><a href="#.">Information Technology Jobs</a></li>
          <li><a href="#.">Recruitment/Employment Firms Jobs</a></li>
          <li><a href="#.">Education/Training Jobs</a></li>
          <li><a href="#.">Manufacturing Jobs</a></li>
          <li><a href="#.">Call Center Jobs</a></li>
          <li><a href="#.">N.G.O./Social Services Jobs</a></li>
          <li><a href="#.">BPO Jobs</a></li>
          <li><a href="#.">Textiles/Garments Jobs</a></li>
          <li><a href="#.">Telecommunication/ISP Jobs</a></li>
        </ul>
        <!--Industry menu End-->
        <div class="clear"></div>
      </div>
      
      <!--Latest Articles-->
      <div class="col-md-4 col-sm-12">
        <h5>Latest Articles</h5>
        <ul class="posts-list">
          <!--Article 1-->
          <li>
            <article class="post post-list">
              <div class="entry-content media">
                <div class="media-left"> <a href="#." title="" class="entry-image"> <img width="80" height="80" src="<?php echo $this->request->webroot; ?>images/news-1.jpg" alt="Your alt text here"> </a> </div>
                <div class="media-body">
                  <h4 class="entry-title"> <a href="#.">Sed fermentum at lectus nec porta.</a> </h4>
                  <div class="entry-content-inner">
                    <div class="entry-meta"> <span class="entry-date">Jan 28, 2016</span> </div>
                  </div>
                </div>
              </div>
            </article>
          </li>
          <!--Article end 1--> 
          
          <!--Article 2-->
          <li>
            <article class="post post-list">
              <div class="entry-content media">
                <div class="media-left"> <a href="#." title="" class="entry-image"> <img width="80" height="80" src="<?php echo $this->request->webroot; ?>images/news-2.jpg" alt="Your alt text here"> </a> </div>
                <div class="media-body">
                  <h4 class="entry-title"> <a href="#.">Sed fermentum at lectus nec porta.</a> </h4>
                  <div class="entry-content-inner">
                    <div class="entry-meta"> <span class="entry-date">Jan 28, 2016</span> </div>
                  </div>
                </div>
              </div>
            </article>
          </li>
          <!--Article end 2--> 
          
          <!--Article 3-->
          <li>
            <article class="post post-list">
              <div class="entry-content media">
                <div class="media-left"> <a href="#." title="" class="entry-image"> <img width="80" height="80" src="<?php echo $this->request->webroot; ?>images/news-3.jpg" alt="Your alt text here"> </a> </div>
                <div class="media-body">
                  <h4 class="entry-title"> <a href="#.">Sed fermentum at lectus nec porta.</a> </h4>
                  <div class="entry-content-inner">
                    <div class="entry-meta"> <span class="entry-date">Jan 28, 2016</span> </div>
                  </div>
                </div>
              </div>
            </article>
          </li>
          <!--Article end 3-->
        </ul>
      </div>
    </div>
  </div>
</div>
<!--Footer end--> 

<!--Copyright-->
<div class="copyright">
  <div class="container">
    <div class="bttxt">Copyright &copy; 2017 Your Company Name. All Rights Reserved. Design by: <a href="http://graphicriver.net/user/ecreativesol" target="_blank">eCreativeSolutions</a></div>
  </div>
</div>
<?= $this->Html->script('jquery-2.1.4.min.js') ?>
<?= $this->Html->script('bootstrap.min.js') ?>
<?= $this->Html->script('owl.carousel.js') ?> 
<?= $this->Html->script('bootstrap-datepicker.min.js') ?>
<?= $this->Html->script('select2.min.js') ?> 
<?= $this->fetch('script'); ?>
<?=  ''//$scripts_for_layout; ?>
<?= $this->Html->script('script.js') ?>
</body>
</html>