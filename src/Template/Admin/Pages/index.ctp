<?php 
$this->Html->addCrumb('Pages');
?>
<?php echo $this->Form->create($Pages, ['url' => ['action'=>'bulk']]);?>
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
<?php echo $this->Html->link('<i class="fa fa-plus"></i> ' . __('Add Page'),
                                             array('action' => 'add', $parent_id),
                                             array('class' => 'btn btn-primary btn-sm pull-right',
                                                   'escape' => false)); ?>
<?php echo $this->Form->button('<i class="fa fa-save"></i> '.__('Save Page'), ['class' => 'btn btn-success btn-sm pull-right', 'escape' => false , 'type'=>'submit']); ?>
					<?php echo $this->Form->create('Page', ['class'=>'pull-left']);?>
                        <fieldset class="form-group">
                        <div class="input-group custom-search-form">
                            <?php if (!empty($search)) : ?>
                                <?php echo $this->Form->input('search', array('class' => 'form-control', 'label' => false, 'div' => false, 'value' => $search));?>
                            <?php else : ?>
                                <?php echo $this->Form->input('search',
                                                              array('type' => 'text',
                                                                    'class' => 'form-control',
                                                                    'placeholder' => 'Search...',
                                                                    'label' => false,
                                                                    'div' => false));?>
                            <?php endif; ?>
                            <span class="input-group-btn">
                                    <?php echo $this->Form->button('<i class="fa fa-search"></i>',
                                                                   array('class' => 'btn btn-default',
                                                                         'escape' => false,
                                                                         'type' => 'submit',
                                                                         'div' => false));?>
                                </span>
                        </div>
                        <!-- /input-group -->
                </fieldset>
                <?php if (!empty($search)) : ?>
                    <?php echo $this->Html->link(__('Reset'), array('action' => 'index')); ?>
                <?php endif; ?>
                <?php echo $this->Form->end();?>
</div>
</div><!-- Row -->
</div><!-- Tool Bar --->

	<div class="panel panel-primary">
		<div class="panel-heading">
			<?php if(!empty($parent)) : ?>
				<?php echo sprintf(__('Subpages of: %s'), $parent['Page']['name']);?>
			<?php else : ?>
				<?php echo __('Website Content');?>
			<?php endif; ?>
		</div>
		<div class="panel-body">
			<?php if (!empty($Pages)) : ?>
			<div id="orderMessageTop" class="alert alert-success" style="display: none"></div>
			<div class="table-responsive">
                <table id="Pages" class="sortList table table-striped table-hover" summary="<?php __('List of Top Menu Pages'); ?>">
					<thead>
                    <tr>
						<th><div class="check" style="margin-left:20px;"><input type="checkbox" name="all" /></div></th>
                        <th><?= $this->Paginator->sort('name', 'Name') ?></th>
                        <th style="width:10px;"><?= $this->Paginator->sort('featured', 'Featured') ?></th>
						<th style="width:150px;"><?= $this->Paginator->sort('modified', 'Last Modified') ?></th>
						<th class="actions" style="width:190px;"><?php echo __('Options');?></th>
					</tr>
                    <thead>
                    <tbody>
					<?php echo $this->pagelist->lister($Pages); ?>
                    </tbody>
				</table>
                
                <?php echo $this->element('pagination'); ?>
			</div>
			<?php else:?>
				<p class="no-content">
					<?php echo __('There are no top menu pages at the moment.');?>
				</p>
			<?php endif;?>
		</div>
	</div>

<?php echo $this->Form->end();?>