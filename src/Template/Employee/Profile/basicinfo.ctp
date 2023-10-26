<div class="listpgWraper">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="userccount">
          <div class="formpanel"> 
            
            <!-- Job Information -->
            <?php echo $this->Form->create($profile, ['context' => ['validator' => 'basicinfo']]);?>
            <h5>Your Basic Information</h5>
            <div class="primary progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="70"
              aria-valuemin="0" aria-valuemax="100" style="width:20%;"></div>
            </div
            ><div class="row">
              <div class="col-md-6">
                <div class="formrow">
                  <?php echo $this->Form->input('first_name',
											array('label' => 'First Name <span>*</span>',
												  'escape' => false,
												  'class' => 'form-control')); ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <?php echo $this->Form->input('last_name',
											array('label' => 'Last Name <span>*</span>',
												  'escape' => false,
												  'class' => 'form-control')); ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
               <label for="dob">Date of Birth <span>*</span></label>
               <div class="clearfix"></div>
                <?php echo $this->Form->date('dob',[
														'maxYear' => date("Y",strtotime("-17 year")),
														'minYear' => 1970,  
														'monthNames' => false,
														'empty' => ['year' => 'Select Year',
																	'month' => 'Select Month',
																	'day' => 'Day...'],
														'year' => ['required' => true],
																	'month' => ['required' => true],
																	'day' => ['required' => true]
													]); ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <?php echo $this->Form->input('gender',
											array('label' => 'Gender <span>*</span>',
												  'escape' => false,
												  'empty' => __('Select Gender'),
												  'options' => $this->Select->genderProfile(),
												  'class' => 'form-control')); ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <?php echo $this->Form->input('marital_status',
											array('label' => 'Marital Status <span>*</span>',
												  'escape' => false,
												  'empty' => __('Marital Status'),
												  'options' => $this->Select->maritalStatus(),
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
                  <?php echo $this->Form->input('portfolio_link',
											array('label' => 'Portfolio Link',
												  'escape' => false,
												  'class' => 'form-control')); ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <?php echo $this->Form->input('career_level',
											array('label' => 'Career Level <span>*</span>',
												  'escape' => false,
												  'empty' => 'Select Career Level',
												  'options' => $this->Select->careerLevel(),
												  'class' => 'form-control')); ?>
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