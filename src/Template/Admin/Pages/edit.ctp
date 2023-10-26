<?php 
$this->Html->addCrumb('Pages', ['controller' => 'Pages', 'action' => 'index']);
$this->Html->addCrumb('Edit Page');
?>
<?php echo $this->Form->create($page, ['type' => 'file']);?>
<div id="stickyheader" class="toolbar">
    <div class="row">
        <div class="col-md-6">
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
        <div class="col-md-6">
			<?php echo $this->Html->link( '<i class="fa fa-times-circle"></i> '.__('Cancel'), ['controller' => 'pages', 'action' => 'index'], ['class' => 'btn btn-danger pull-right  btn-sm', 'escape' => false]);?>
            <?php echo $this->Form->button('<i class="fa fa-check-square"></i> '.__('Save Page & Exit'), ['name'=>'se','class' => 'btn btn-primary  btn-sm pull-right', 'escape' => false, 'type'=>'submit']); ?>
            <?php echo $this->Form->button('<i class="fa fa-save"></i> '.__('Save Page'), ['class' => 'btn btn-success btn-sm pull-right', 'escape' => false , 'type'=>'submit']); ?>
        </div>
    </div><!-- Row -->
</div><!-- Tool Bar --->

<div class="panel panel-default">
	<div class="panel-heading">
		<?php echo __('Edit Page');?>
	</div>
	<div class="panel-body">
			<fieldset>
				<div class="form-group">
					<?php
						echo $this->Form->input('name',
												array('label' => __('Page Name *'),
													  'class' => 'form-control'));
					?>
				</div>
				<div class="form-group">
					<?php
						echo $this->Form->input('meta_title',
												array('label' => __('Meta Title *'),
													  'class' => 'form-control'));
					?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('parent_id',
											array('label' => __('Set Parent Page'),
												  'empty' => __('No Parent'),
												  'options' => $treeList,
												  'class' => 'form-control')); ?>
				</div>
				<div id="image1" class="form-group">
                        <div class="pull-left thumb">
                        	<?php $image_1 = json_decode($page->image_1); if(!empty($image_1->{'200_200'})):?>
								<div class="thmbnail">
                                	<img src="<?php print BASE_URL.'/'.$image_1->{'200_200'}; ?>" class="img-thumbnail" style="max-height:55px" />
                                    &nbsp;&nbsp;
                               	</div>
							<?php endif; ?>
                        </div> 
                    	<div class="">
						<?php echo $this->Form->input('image_1',
                                                array('label' => __('Image File'),
                                                      'class' => '',
                    	                              'type'=>'file')); ?>
						</div>
                </div>
                <hr />
				<div class="form-group">
					<?php echo $this->Cms->editor(['name'=>'content', 'id'=>'content', 'class'=>'form-control', 'rows'=>8]); ?>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="form-group">
							<?php
								echo $this->Form->input('meta_description',
														array('class' => 'form-control'));
							?>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<?php
								echo $this->Form->input('meta_keywords',
														array('class' => 'form-control'));
							?>
						</div>
					</div>
				</div>
                <div class="checkbox check">
						<?php echo $this->Form->input('featured',
													  array('label' => __('Mark as Featurs'), 'type' => 'checkbox')); ?>
				</div>
				<?php //if (Configure::read('Content.topMenu')) : ?>
					<div class="checkbox check">
						<?php echo $this->Form->input('top_show',
													  array('label' => __('Show this page in the top menu?'), 'type' => 'checkbox')); ?>
					</div>
				<?php //endif; ?>
				<?php //if (Configure::read('Content.bottomMenu')) : ?>
					<div class="checkbox check">
						<?php echo $this->Form->input('bottom_show',
													  array('label' => __('Show this page in the bottom menu?'), 'type' => 'checkbox')); ?>
					</div>
				<?php //endif; ?>

				<div id="newWindow" class="checkbox check">
					<?php echo $this->Form->input('new_window',
													  array('label' => __('Make this page open in a new window?'), 'type' => 'checkbox')); ?>
				</div>

				<div class="well">
					<h3><?php echo __('Advanced Settings'); ?></h3>
					<p><?php echo __('These settings are optional and should only be edited if you are sure what you are doing.'); ?></p>
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<?php
									echo $this->Form->input('slug',
															array('label' => __('Page Slug'),
																  'class' => 'form-control'));
								?>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<?php
									echo $this->Form->input('view',
															array('label' => __('Page View'),
																  'class' => 'form-control'));
								?>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-12">
							<div class="checkbox check">
								<?php echo $this->Form->input('make_homepage', array('label' => __('Make this page the home page'), 'type' => 'checkbox')); ?>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<?php
									echo $this->Form->input('route',
															array('label' => __('301 Redirect'),
																  'class' => 'form-control',
																  'after' => __('If set, the page will link to this URL')));
								?>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<?php
									echo $this->Form->input('post_route',
															array('label' => __('Post Redirect'),
																  'class' => 'form-control',
																  'after' => __('If set, any form will be redirected to this URL.')));
								?>
							</div>
						</div>
					</div>
				</div>
			</fieldset>
		
	</div>
</div>
<?php echo $this->Form->end();?>
<script>
	$(function() {

		function showHide() {
			if ($('#PageTopShow').prop('checked') || $('#PageBottomShow').prop('checked')) {
				$('#newWindow').show();
			} else {
				$('#newWindow').hide();
			}
		};

		$('#PageTopShow').click(function() { showHide(); });
		$('#PageBottomShow').click(function() { showHide(); });

		showHide();
	});
</script>