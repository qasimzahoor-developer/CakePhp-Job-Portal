<div class="listpgWraper">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="userccount">            
		<h5>Employer Login</h5>
          <div class="socialLogin">
            <?php echo $this->Flash->render(); ?>

            <!--<a href="#." class="fb"><i class="fa fa-facebook" aria-hidden="true"></i></a> <a href="#." class="gp"><i class="fa fa-google-plus" aria-hidden="true"></i></a> <a href="#." class="tw"><i class="fa fa-twitter" aria-hidden="true"></i></a>--> </div>
          
          <!-- login form -->
          <?php echo $this->Form->create();?>
          <div class="formpanel">
            <div class="formrow">
              <?php echo $this->Form->input('username', array('class' => 'form-control', 'label'=> false, 'required'=>true)); ?>
            </div>
            <div class="formrow">
              <?php echo $this->Form->input('password', array('type'=>'password','class' => 'form-control', 'label'=> false, 'value'=>'', 'required'=>true)); ?>
            </div>
            <?php echo $this->Form->submit(__('Login'), array('class' => 'btn')); ?>
          </div>
          <?php echo $this->Form->end(); ?>
          <!-- login form  end--> 
          
          <!-- sign up form -->
          <div class="newuser"><i class="fa fa-user" aria-hidden="true"></i> New User? <?php
                                        echo $this->Html->link(
                                                        'Register Here',
                                                        ['controller' => 'users', 'action' => 'signup', 'prefix' => 'employer'],
                                                        ['escape' => false]
                                                        
                                                    );
                                        ?></div>
          <!-- sign up form end--> 
          <div class="socialLogin">
          <a href="#." class="fb"><i class="fa fa-facebook" aria-hidden="true"></i></a> <a href="#." class="gp"><i class="fa fa-google-plus" aria-hidden="true"></i></a> <a href="#." class="tw"><i class="fa fa-twitter" aria-hidden="true"></i></a>
          </div><!--socialLogin-->
          
        </div>
      </div>
    </div>
  </div>
</div>

