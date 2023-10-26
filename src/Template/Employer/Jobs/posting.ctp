<div class="listpgWraper">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="userccount">
          <div class="formpanel"> 
            
            <!-- Job Information -->
            <?php echo $this->Form->create($job);?>
            <h5>Job Details</h5>
            <div class="row">
              <div class="col-md-12">
                <div class="formrow">
                  <?php echo $this->Form->input('job_title',
											array('label' => 'Job Title <span>*</span>',
												  'escape' => false,
												  'placeholder' => 'Job Title',
												  'class' => 'form-control')); ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <?php echo $this->Form->input('functional',
											array('label' => 'Job Function <span>*</span>',
												  'escape' => false,
												  'empty' => __('Function'),
												  'options' => $functional,
												  'class' => 'form-control')); ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <?php echo $this->Form->input('industry',
											array('label' => 'Job Indutry <span>*</span>',
												  'escape' => false,
												  'empty' => __('Industry'),
												  'options' => $industry,
												  'class' => 'form-control')); ?>
                </div>
              </div>
              <div class="col-md-12">
                <div class="formrow">
                  <?php echo $this->Form->input('skills',
											array('label' => 'Required Skill <span>*</span>',
												  'escape' => false,
												  'multiple' => 'multiple',
												  'options' => ['PHP'=>'PHP'],
												  //'empty' => __('Select Skills'),
												  'class' => 'form-control')); ?>
                </div>
              </div>
              <div class="col-md-12">
                <div class="formrow">
                  <?php echo $this->Form->input('cities',
											array('label' => 'Job Location (You can select multiple) <span>*</span>',
												  'escape' => false,
												  'multiple' => 'multiple',
												  //'empty' => __('Location'),
												  'options' => $cities,
												  'class' => 'form-control')); ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <?php echo $this->Form->input('gender',
											array('label' => 'Pref. Gender <span>*</span>',
												  'escape' => false,
												  'empty' => 'Select Pref. Gender',
												  'options' => $this->Select->gender(),
												  'class' => 'form-control')); ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <?php echo $this->Form->input('positions',
											array('label' => 'Available No. of Positions <span>*</span>',
												  'escape' => false,
												  'empty' => 'Select No. Position',
												  'options' => $this->Select->positions(),
												  'class' => 'form-control')); ?>
                </div>
              </div>
              
              <div class="col-md-6">
                <div class="formrow">
                  <?php echo $this->Form->input('job_type',
											array('label' => 'Job Type <span>*</span>',
												  'escape' => false,
												  'empty' => 'Select Job Type',
												  'options' => $this->Select->type(),
												  'class' => 'form-control')); ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <?php echo $this->Form->input('job_shift',
											array('label' => 'Job Shift <span>*</span>',
												  'escape' => false,
												  'options' => $this->Select->shift(),
												  'class' => 'form-control')); ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <?php echo $this->Form->input('salary_min',
											array('label' => 'Min. Salary <span>*</span>',
												  'escape' => false,
												  'empty' => 'Select Min. Salary',
												  'options' => $this->Select->salaryRange(),
												  'class' => 'form-control')); ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <?php echo $this->Form->input('salary_max',
											array('label' => 'Max Salary <span>*</span>',
												  'escape' => false,
												  'empty' => 'Select Max. Salary',
												  'options' => $this->Select->salaryRange(),
												  'class' => 'form-control')); ?>
                </div>
              </div>
              <div class="col-md-12">
                <div class="formrow">
                  <?php echo $this->Form->input('job_details',
											array('label' => 'Job Details <span>*</span>',
												  'escape' => false,
												  'type' => 'textarea',
												  'placeholder' => 'Job Details',
												  'class' => 'form-control')); ?>
                </div>
              </div>
              
            </div>
            <!-- Job Information -->
            <h5>Job Requirements</h5>
            <div class="row">
             <div class="col-md-12">
                <div class="formrow">
                  <?php echo $this->Form->input('degree_title',
											array('label' => 'Daegree Title <span>*</span>',
												  'escape' => false,
												  'placeholder' => 'Degree Title',
												  'class' => 'form-control')); ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <?php echo $this->Form->input('degree_type',
											array('label' => 'Degree Type <span>*</span>',
												  'escape' => false,
												  'empty' => 'Select Degree',
												  'options' => $this->Select->degreeType(),
												  'class' => 'form-control')); ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <?php echo $this->Form->input('degree_range',
											array('label' => 'Degree Prefrence <span>*</span>',
												  'escape' => false,
												  //'empty' => 'Select Degree Prefrence',
												  'options' => $this->Select->degreeRange(),
												  'class' => 'form-control')); ?>
                </div>
              </div>
              <div class="col-md-12">
                <div class="formrow">
                  <?php echo $this->Form->input('career_level',
											array('label' => 'Career Level <span>*</span>',
												  'escape' => false,
												  'empty' => 'Select Career Level',
												  'options' => $this->Select->careerLevel(),
												  'class' => 'form-control')); ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <?php echo $this->Form->input('experience_min',
											array('label' => 'Min. Experience <span>*</span>',
												  'escape' => false,
												  'empty' => 'Select Min. Experience',
												  'options' => $this->Select->experience(),
												  'class' => 'form-control')); ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <?php echo $this->Form->input('experience_max',
											array('label' => 'Max. Experience <span>*</span>',
												  'escape' => false,
												  'empty' => 'Select Max. Experience',
												  'options' => $this->Select->experience(),
												  'class' => 'form-control')); ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <?php echo $this->Form->input('age_min',
											array('label' => 'Min. Age <span>*</span>',
												  'escape' => false,
												  'empty' => 'Min. Age',
												  'options' => $this->Select->age(),
												  'class' => 'form-control')); ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <?php echo $this->Form->input('age_max',
											array('label' => 'Max. Age <span>*</span>',
												  'escape' => false,
												  'empty' => 'Max. Age',
												  'options' => $this->Select->age(),
												  'class' => 'form-control')); ?>
                </div>
              </div>
              
            </div>
            <!-- Job Information -->
            <h5>Job Tools</h5>
            <div class="row">
            <div class="col-md-12">
                <div class="formrow">
                  <?php echo $this->Form->input('apply_date',
											array('label' => 'Apply By Date <span>*</span>',
												  'escape' => false,
												  'type' => 'text',
												  'placeholder' => 'Apply By',
												  'class' => 'form-control apply_date')); ?>
                </div>
              </div>
              <div class="col-md-12">
                <div class="formrow">
                  <?php echo $this->Form->input('apply_by_deactvate',
											array('label' => 'Deactivate job after apply by date',
												  'escape' => false,
												  'type' => 'checkbox',
												  //'hiddenField' => false,
												  'placeholder' => 'Date Publish',
												  'class' => 'form-control')); ?>
                </div>
              </div>
             <div class="col-md-12">
                <div class="formrow">
                  <?php echo $this->Form->input('publish_date',
											array('label' => 'Publish on Date <span>*</span>',
												  'escape' => false,
												  'type' => 'text',
												  'placeholder' => 'Date Publish',
												  'class' => 'form-control publish_date')); ?>
                </div>
              </div>
              <div class="col-md-12">
                <div class="formrow">
                  <?php echo $this->Form->input('application_emails',
											array('label' => 'Also Send Application To (Comma Sep, Multipal email IDs allowed)',
												  'escape' => false,
												  'placeholder' => 'Comma Sep. Email IDs',
												  'class' => 'form-control')); ?>
                </div>
              </div>
              
              
            </div>
            <br>
            <?php echo $this->Form->submit(__('Post Job'),
												   array('class' => 'btn'));?>
            
            <?php echo $this->Form->end();?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>