<?php 
$this->Html->addCrumb('Users', ['controller' => 'Users', 'action' => 'index']);
$this->Html->addCrumb('Add User');
?>
<div class="row">
<div class="col-md-12">
<!--breadcrumbs start -->
<?php
echo $this->Html->getCrumbList(
    [
        'firstClass' => false,
        'lastClass' => 'active',
        'class' => 'breadcrumb',
		'escape'=> false,
		
    ],
    ['url' => ['controller' => 'Users', 'action' => 'dashboard'], 'text'=>'<i class="fa fa-home"></i>&nbsp;&nbsp; Dashboard']
);
?>
<!--breadcrumbs end -->
</div>
</div><!-- Row -->
<div class="row">
                      <div class="col-lg-12">
                          <section class="panel">
                              <header class="panel-heading">
                                  <?php echo __('Add a User'); ?>
                              </header>
                              <div class="panel-body form-horizontal">
                                  <?php echo $this->Form->create($user, ['type' => 'post']); ?>
                                      	<div class="form-group">
                                          <?php echo $this->Form->label('username', 'Your username', ['class'=>'col-lg-2 col-sm-2 control-label']); ?>
                                          <div class="col-lg-10">
                                              <?php echo $this->Form->input('username', array('class' => 'form-control', 'label'=> false)); ?>
                                          </div>
                                      </div>
                                      
                                      <div class="form-group">
                                          <?php echo $this->Form->label('full_name', 'Name', ['class'=>'col-lg-2 col-sm-2 control-label']); ?>
                                          <div class="col-lg-10">
                                              <?php echo $this->Form->input('full_name', array('class' => 'form-control', 'label'=> false)); ?>
                                          </div>
                                      </div>
                                      
                                      <div class="form-group">
                                          <?php echo $this->Form->label('password', 'Password', ['class'=>'col-lg-2 col-sm-2 control-label']); ?>
                                          <div class="col-lg-10">
                                              <?php echo $this->Form->input('password', array('type'=>'password','class' => 'form-control', 'label'=> false, 'value'=>'')); ?>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <?php echo $this->Form->label('email', 'Email', ['class'=>'col-lg-2 col-sm-2 control-label']); ?>
                                          <div class="col-lg-10">
                                          	<div class="input-group  m-b-10">
                                          	<span class="input-group-addon">@</span>
                                              <?php echo $this->Form->input('email', array('type'=>'email', 'class' => 'form-control', 'label'=> false)); ?>																
                                          </div>
                                          </div>
                                      </div>
                                      
									<div class="col-lg-offset-2 col-lg-1">
                                     <?php echo $this->Form->submit(__('Add User'), array('class' => 'btn btn-info')); ?>
									 </div>
                                     <div class="col-lg-1">
									 <?php echo $this->Form->button('Reset Form', ['type' => 'reset', 'class'=>'btn btn-danger']);
									  ?>
                                     </div> 
                                  <?php echo $this->Form->end(['data-type' => 'hidden']); ?>

                              </div>
                          </section>
                      </div>


</div><!--row -->

