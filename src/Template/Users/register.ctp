<div class="listpgWraper">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="userccount">
          <div class="formpanel"> 
            
            <!-- Co Information -->
            <?php echo $this->Form->create($company, ['type' => 'file']);?>
            <h5>Company Details</h5>
            <div class="row">
              <div class="col-md-12">
                <div class="formrow">
                  <?php echo $this->Form->input('co_title',
											array('label' => 'Co. Name <span>*</span>',
												  'escape' => false,
												  'placeholder' => 'Co. Name',
												  'class' => 'form-control')); ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <?php echo $this->Form->input('industry',
											array('label' => 'Co. Indutry <span>*</span>',
												  'escape' => false,
												  'empty' => __('Industry'),
												  'options' => $industry,
												  'class' => 'form-control')); ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <?php echo $this->Form->input('type',
											array('label' => 'Co. Type <span>*</span>',
												  'escape' => false,
												  'empty' => __('Select Company Type'),
												  'options' => $this->Select->coTypes(),
												  'class' => 'form-control')); ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <?php echo $this->Form->input('city',
											array('label' => 'City <span>*</span>',
												  'escape' => false,
												  //'multiple' => 'multiple',
												  'empty' => __('Location'),
												  'options' => $cities,
												  'class' => 'form-control')); ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <?php echo $this->Form->input('op_since',
											array('label' => 'Operating Since <span>*</span>',
												  'escape' => false,
												  'empty' => __('Operating Since'),
												  'options' => $this->Select->operSince(),
												  'class' => 'form-control')); ?>
                </div>
              </div>
              <div class="col-md-12">
                <div class="formrow">
                  <?php echo $this->Form->input('co_address',
											array('label' => 'Co. Address <span>*</span>',
												  'escape' => false,
												  'type' => 'textarea',
												  'placeholder' => 'Company Address',
												  'class' => 'form-control')); ?>
                </div>
              </div>
             <div class="col-md-6">
                <div class="formrow">
                  <?php echo $this->Form->input('landline',
											array('label' => 'Landline Phone <span>*</span>',
												  'escape' => false,
												  'placeholder' => 'Landline Phone',
												  'class' => 'form-control')); ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <?php echo $this->Form->input('mobile',
											array('label' => 'Mobile No. <span>*</span>',
												  'escape' => false,
												  'placeholder' => 'Mobile No.',
												  'class' => 'form-control')); ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <?php echo $this->Form->input('no_employee',
											array('label' => 'No. of Employees',
												  'escape' => false,
												  'empty' => __('No. of Employees'),
												  'options' => $this->Select->noEmployees(),
												  'class' => 'form-control')); ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <?php echo $this->Form->input('no_offices',
											array('label' => 'No. of Offices',
												  'escape' => false,
												  'empty' => __('No. of Offices'),
												  'options' => $this->Select->noOffices(),
												  'class' => 'form-control')); ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <?php echo $this->Form->input('website',
											array('label' => 'Co. Website',
												  'escape' => false,
												  'placeholder' => 'Co. Website',
												  'class' => 'form-control')); ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <?php echo $this->Form->input('logo',
											array('label' => 'Co. Logo <span>*</span>',
												  'escape' => false,
												  'type' => 'file',
												  'placeholder' => 'Comppany Logo',
												  'class' => 'form-control')); ?>
                </div>
              </div>
              <div class="col-md-12">
                <div class="formrow">
                  <?php echo $this->Form->input('details',
											array('label' => 'Co. Details <span>*</span>',
												  'escape' => false,
												  'type' => 'textarea',
												  'placeholder' => 'Company Details',
												  'class' => 'form-control')); ?>
                </div>
              </div>
             
              
              
            </div>
            
            <!-- Co Information -->
            <h5>Contact Details</h5>
            <div class="row">
              <div class="col-md-6">
                <div class="formrow">
                  <?php echo $this->Form->input('head_name',
											array('label' => 'Co. CEO / Head Name <span>*</span>',
												  'escape' => false,
												  'placeholder' => 'Co. CEO / Head Name',
												  'class' => 'form-control')); ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <?php echo $this->Form->input('head_cnic',
											array('label' => 'Co. CEO / Head CNIC NO. <span>*</span>',
												  'escape' => false,
												  'placeholder' => 'Co. CEO / Head CNIC NO.',
												  'class' => 'form-control')); ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <?php echo $this->Form->input('head_email',
											array('label' => 'Co. CEO / Head Email <span>*</span>',
												  'escape' => false,
												  'placeholder' => 'Co. CEO / Head Email',
												  'class' => 'form-control')); ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <?php echo $this->Form->input('head_no',
											array('label' => 'Co. CEO / Head Contact No. <span>*</span>',
												  'escape' => false,
												  'placeholder' => 'Co. CEO / Head Contact No.',
												  'class' => 'form-control')); ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <?php echo $this->Form->input('hr_name',
											array('label' => 'Co. HR Name <span>*</span>',
												  'escape' => false,
												  'placeholder' => 'Co. HR Name',
												  'class' => 'form-control')); ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <?php echo $this->Form->input('hr_cnic',
											array('label' => 'Co. HR CNIC NO. <span>*</span>',
												  'escape' => false,
												  'placeholder' => 'Co. HR CNIC NO.',
												  'class' => 'form-control')); ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <?php echo $this->Form->input('hr_email',
											array('label' => 'Co. HR Email <span>*</span>',
												  'escape' => false,
												  'placeholder' => 'Co. HR Email',
												  'class' => 'form-control')); ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <?php echo $this->Form->input('hr_no',
											array('label' => 'Co. HR Contact No.',
												  'escape' => false,
												  'placeholder' => 'Co. HR Contact No.',
												  'class' => 'form-control')); ?>
                </div>
              </div>
              
            </div><!--row-->
            
            <br>
            <?php echo $this->Form->submit(__('Submit'),
												   array('class' => 'btn'));?>
            
            <?php echo $this->Form->end();?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>