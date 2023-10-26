
    <div class="row">
      <div class="col-md-12">
        <div class="userccount">
          <div class="formpanel"> 
            
            <!-- Job Information -->
            <?php 
			
			echo $this->Form->create($jfields, ['context' => ['validator' => 'education']]);?>
            <h5>Add Education</h5>
            <hr />
            <div class="row">
             <div class="col-md-12">
                <div class="formrow">
                  <?php echo $this->Form->input('degree_title',
											array('label' => 'Degree Title <span>*</span>',
												  'escape' => false,
												  'placeholder' => 'Degree Title',
												  'class' => 'form-control')); ?>
                </div>
              </div>
              <div class="col-md-12">
                <div class="formrow">
                  <?php echo $this->Form->input('institution_name',
											array('label' => 'Institution Name <span>*</span>',
												  'escape' => false,
												  'placeholder' => 'Institution Name',
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
                  <?php echo $this->Form->input('major_subject',
											array('label' => 'Major Subject <span>*</span>',
												  'escape' => false,
												  'empty' => __('Major Subject'),
												  'options' => $majors,
												  'class' => 'form-control')); ?>
                </div>
              </div> 
              <div class="col-md-6">
                <div class="formrow">
                  <?php echo $this->Form->input('grade',
											array('label' => 'Marks/GPA/Grade <span>*</span>',
												  'escape' => false,
												  'empty' => 'Marks/GPA/Grade',
												  'class' => 'form-control')); ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <?php echo $this->Form->input('date_completed',
											array('label' => 'Date Completed <span>*</span>',
												  'escape' => false,
												  'empty' => 'Date Completed',
												  'options' => $this->Select->year(),
												  'class' => 'form-control')); ?>
                </div>
              </div>
              
             
              
            </div>
            
            <br>
            <?php echo $this->Form->submit(__('Add Education'),
												   array('type' => 'button', 'class' => 'btn modelPost'));?>
            
            <?php echo $this->Form->end();?>
          </div>
        </div>
      </div>
    </div>
