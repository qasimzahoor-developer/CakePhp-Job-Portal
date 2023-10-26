<?php use Cake\I18n\Time; //print_r($applications); exit; ?>
<div class="listpgWraper">
  <div class="container"> 
  
  <div class="row">

    <div class="col-md-3"> 
       <div class="sidebar"> 
          <!-- Categories -->
          <div class="widget">
           <h5 class="widget-title">Manage Jobs</h5>
           asfasf
           </div>
   	  </div>
	</div><!--col-md-3-->
    <div class="col-md-9 jobsList"> 
            <ul class="searchList">
              <!-- job start -->
              <?php foreach($applications as $application): ?>
              <li>
                <div class="row">
                  <div class="col-md-7 col-sm-7">
                    <div class="jobinfo">
                      <h3><a href="#."><?php  echo $application['id']; ?></a></h3>
                      <div class="salaryDate pull-left">Posted on: <?php // print $job['publish_date']->format('M d Y')?>, </div>
                      <div class="salaryRange pull-left">Offered salary: <?php //echo $this->Select->salaryRange()[$job['salary_min']]; ?> - <?php //echo $this->Select->salaryRange()[$job['salary_max']]; ?></div>
                      <div class="companyName">Edixen Solutions (pvt.) Ltd.   - <span>Posted by: Ahmad Hassan</span></div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
				</div>
              </li>
              <!-- job end --> 
              <?php endforeach; ?>
            </ul>
            </div><!--col-md-9-->
		</div><!--row-->
	</div><!--container-->
</div><!--listpgWraper-->