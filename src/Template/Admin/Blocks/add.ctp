<?php 
$this->Html->addCrumb('Blocks', ['controller' => 'Blocks', 'action' => 'index']);
$this->Html->addCrumb('Add New Block');
?>
<?php echo $this->Form->create($block);?>
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
            <?php echo $this->Form->button('<i class="fa fa-save"></i> '.__('Save Block'), ['class' => 'btn btn-success btn-sm pull-right', 'escape' => false , 'type'=>'submit']); ?>
        </div>
    </div><!-- Row -->
</div><!-- Tool Bar --->

<div class="panel panel-default">
	<div class="panel-heading">
		<?php echo __('Block Details');?>
	</div>
	<div class="panel-body">
			<fieldset>
				<div class="form-group">
					<?php
						echo $this->Form->input('name',
												array('label' => __('Name *'),
													  'class' => 'form-control'));
					?>
				</div>
				<div class="form-group">
					<?php
						echo $this->Form->input('slug',
												array('label' => __('Slug / Key'),
													  'class' => 'form-control',
													  'after' => __('Used to call the content block in your front end code')));
					?>
				</div>
				<div class="form-group">
					<?php echo $this->Cms->editor(['name'=>'content', 'id'=>'content', 'class'=>'form-control', 'rows'=>8]); ?>
				</div>
			</fieldset>

	</div>
</div>

<?php echo $this->Form->end();?>