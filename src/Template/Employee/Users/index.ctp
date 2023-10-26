<?php 
$this->Html->addCrumb('Users');
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
<div class="row">
	<div class="col-md-12">
                        <div class="panel">
                                <header class="panel-heading">
                                    Users List
									 <?php
												echo $this->Html->link(
													'+ Add New',
													['controller' => 'users', 'action' => 'add'],
													['class' => 'btn btn-primary pull-right btn-add']
													
												);
									?>
                                </header>
                                <div class="panel-body">
                                    <table class="table table-striped" id="users">
                                       <thead>
                                        <tr>
                                            <th style="width: 10px"><?= $this->Paginator->sort('id', 'ID') ?></th>
                                            <th>Name</th>
                                            <th><?= $this->Paginator->sort('username', 'Username') ?></th>
                                            <th><?= $this->Paginator->sort('email', 'Email') ?></th>
                                            <th>Action</th>
                                        </tr>
                                       </thead>
                                       <tbody> 
                                      <?php foreach($users as $user): //print_r( $user); ?>
                                        <tr>
                                            <td><?php echo $user['id']; ?></td>
                                            <td><?php echo $user['full_name']; ?></td>
                                            <td><?php echo $user['username']; ?></td>
                                            <td><?php echo $user['email']; ?></td>
                                            <td class="actions">
                                                <?php
												echo $this->Html->link(
													'Edit',
													['controller' => 'users', 'action' => 'edit', $user['id']],
													['class' => 'btn btn-primary btn-sm']
													
												);
												if($user['id'] !== 1):
												echo $this->Form->postLink(
													'Delete',
													['controller' => 'users', 'action' => 'delete', $user['id']],
													['confirm' => 'Are you sure you wish to delete this user?', 'class' => 'btn btn-danger btn-sm']
													
												);
												else:
												echo $this->Form->postLink(
													'Delete',
													'',
													['confirm' => 'You can not delete main user', 'class' => 'btn btn-default btn-sm', 'disabled' => 'disabled']
													
												);
												endif;
												?>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                    <?php echo $this->element('pagination'); ?>
                                </div><!-- /.panel-body -->
                            </div><!-- /.panel -->
	</div><!-- /.col -->
</div><!-- /.row -->                   