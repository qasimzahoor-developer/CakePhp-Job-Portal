<?php use Cake\I18n\Time; //print_r($jobs); exit; ?>
<div class="listpgWraper">
  <div class="container"> 
  
  <div class="row">
  	<div class="col-md-12 pageSearch"> 
    
    	<div class="row">
        <div class="col-md-9  col-sm-9">
          <div class="searchform">
         
          <?php echo $this->Form->create('jobs', ['type' => 'get']);?>
            <div class="row">
              <div class="col-md-9 col-sm-9  col-xs-9">
                <input class="form-control" placeholder="Job Title" name="search" type="text">
              </div>
              <div class="col-md-3 col-sm-3 col-xs-3">
                <button class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
              </div>
            </div>
            <?php echo $this->Form->end();?>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 "><a href="#." class="btn btnPostjob pull-right"><i class="fa fa-file-text" aria-hidden="true"></i> Post New Job</a></div>
      </div>
      
    </div>
    <div class="col-md-9 jobsList"> 
            <ul class="searchList">
              <!-- job start -->
              <?php foreach($jobs as $job): ?>
              <li>
                <div class="row">
                  <div class="col-md-7 col-sm-7">
                    <div class="jobinfo">
                      <h3><a href="#."><?php  echo $job['job_title']; ?></a></h3>
                      <div class="salaryDate pull-left">Posted on: <?php print $job['publish_date']->format('M d Y')?>, </div>
                      <div class="salaryRange pull-left">Offered salary: <?php echo $this->Select->salaryRange()[$job['salary_min']]; ?> - <?php echo $this->Select->salaryRange()[$job['salary_max']]; ?></div>
                      <div class="companyName">Edixen Solutions (pvt.) Ltd.   - <span>Posted by: Ahmad Hassan</span></div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="col-md-5 col-sm-5 jobAction">
                  	<div class="arrow"></div>
                    <div class="applicationsNum jStats"><span><em><?php  echo $job['applications']; ?></em></span><br /> Applications</div>
                    <div class="reviewedNum jStats"><span><em><?php  echo $job['reviewed']; ?></em></span><br /> Reviewed</div>
                    <div class="shortlistedNum jStats"><span><em><?php  echo $job['shortlisted']; ?></em></span><br /> Shortlisted</div>
                    <div class="interviewsNum jStats"><span><em><?php  echo $job['interviews']; ?></em></span><br /> Interviews</div>
                    <div class="sep"></div>
                    <div class="jPckge"><i class="fa  fa-bookmark" aria-hidden="true"></i> Premium</div>
                    <div class="jTools"><i class="fa fa-share-alt" aria-hidden="true"></i> <a href="#">Share</a></div>
                    <div class="jTools"><i class="fa fa-clone" aria-hidden="true"></i> <a href="#">Copy</a></div>
                    <div class="jTools"><i class="fa fa-trash-o" aria-hidden="true"></i> <a href="#">Delete</a></div>
                  </div>
                </div>
              </li>
              <!-- job end --> 
              <?php endforeach; ?>
            </ul>
            </div><!--col-md-9-->
            <div class="col-md-3"> 
            	<div class="sidebar"> 
                  <!-- Categories -->
                  <div class="widget">
                    <h5 class="widget-title">Manage Jobs</h5>
                    <ul class="categories">
                      <li class="<?php echo ($status==2)?'active':''; ?>">
					 	 <?php echo $this->Html->link('Active ('.$stats['active'].')',['controller' => 'jobs', 'status'=>2]); ?></li>
                      <li class="<?php echo ($status==3)?'active':''; ?>">
					  	<?php echo $this->Html->link('Deactive ('.$stats['deactive'].')',['controller' => 'jobs', 'status'=>3]); ?></li>
                      <li class="<?php echo ($status==1)?'active':''; ?>">
					  	<?php echo $this->Html->link('Draft ('.$stats['draft'].')',['controller' => 'jobs', 'status'=>1]); ?></li>
                    </ul>
                  </div>
        		</div>
        	</div>
       	</div><!--col-md-3-->

          
		</div><!--row-->
	</div><!--container-->
</div><!--listpgWraper-->