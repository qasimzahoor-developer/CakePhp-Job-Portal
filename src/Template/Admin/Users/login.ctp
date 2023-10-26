<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
				<div class="sm-st clearfix loginbox">
                    <div class="sm-st-info">
                   		<span><i class="fa fa-lock"></i> Admin Login</span> Login to manage your website. 
                    </div>
                    <hr />
					<?php echo $this->Form->create();?>
						<fieldset>
							<div class="form-group">
                                          <?php echo $this->Form->label('username', 'User', ['class'=>'control-label']); ?>
                                          <?php echo $this->Form->input('username', array('class' => 'form-control', 'label'=> false, 'required'=>true)); ?>
                                      </div>
                                      
                                      <div class="form-group">
                                          <?php echo $this->Form->label('password', 'Password', ['class'=>'control-label']); ?>
                                          <?php echo $this->Form->input('password', array('type'=>'password','class' => 'form-control', 'label'=> false, 'value'=>'', 'required'=>true)); ?>
                                      </div>
                                      
							<?php echo $this->Form->submit(__('Login'), array('class' => 'btn btn-lg btn-success btn-block')); ?>

						</fieldset>
					<?php echo $this->Form->end(); ?>
			</div>
		</div>
	</div>
</div>
