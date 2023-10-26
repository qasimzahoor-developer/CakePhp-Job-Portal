<?php use Cake\I18n\Time; //print_r($companies); exit; ?>
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
              <?php foreach($companies as $company): ?>
              <li>
                <div class="row">
                  <div class="col-md-7 col-sm-7">
                    <div class="jobinfo">
                      <h3><a href="#."><?php  echo $company['co_title']; ?></a></h3>
                      <div class="salaryDate pull-left">Jobs Posted: <?php // print $company['created']->format('M d Y')?>, </div>
                      <div class="salaryRange pull-left">Active Jobs: <?php //echo $this->Select->salaryRange()[$job['salary_min']]; ?> 
                    </div>
                    <div class="clearfix"></div>
                  </div>
                 </div>
                  <div class="col-md-5 col-sm-5 jobAction">
                  	<div class="arrow"></div>
                    <div class="applicationsNum jStats"><span><em><?php  echo $company['id']; ?></em></span><br /> Applications</div>
                    <div class="reviewedNum jStats"><span><em><?php  echo $company['id']; ?></em></span><br /> Reviewed</div>
                    <div class="shortlistedNum jStats"><span><em><?php  echo $company['id']; ?></em></span><br /> Shortlisted</div>
                    <div class="interviewsNum jStats"><span><em><?php  echo $company['id']; ?></em></span><br /> Interviews</div>
                    <div class="sep"></div>
                    <div class="jTools"><i class="fa fa-pencil" aria-hidden="true"></i> <a href="#">Edit</a></div>
                    <div class="jTools"><i class="fa fa-trash-o" aria-hidden="true"></i> <a href="#">Delete</a></div>
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