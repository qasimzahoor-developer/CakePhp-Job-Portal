<?php

namespace App\View\Helper;

use Cake\View\Helper;
use Cake\View\View;
use Cake\View\Helper\FormHelper;

class PagelistHelper extends FormHelper
{
    public function lister($Pages){
		
					$i = 0;
					foreach ($Pages as $page):
						$class = null;
						if ($i++ % 2 == 0) {
							$class = ' class="altrow sortable_top"';
						}else{
							$class = ' class="sortable_top"';
						}
						
						//set Level - hypn
						$lvl = '';
								for($l = 0; $l < $page['level']; $l++){
									$lvl .= '_';
								}
					?>
						<tr <?php echo $class;?> id="page_<?php echo $page['id'];?>">
							<td>
                                <div class="checkbox check">
                                    <?php echo $this->input('id',
                                            array('label' => '',  'type' => 'checkbox')); ?>
                                </div>
							</td>
                            <td>
								<?php echo $lvl.$page['name']; ?>
							</td>
                            <td style="text-align:center;">
								<?php echo ($page['featured'] !== 0)? 
									'<span class="label label-success">'.__('Yes').'</span>'
									: '<span class="label label-default">'.__('No').'</span>'; ?>
							</td>
							<td>
								<?php echo $page['modified']; ?>
							</td>
							<td class="actions">
								<?php
								if (!empty($page['route'])) {
									$page['slug'] = $page['route'];
								} else {
									$page['slug'] = '/' . $page['slug'];
								}
								
								echo $this->Html->link('<i class="fa fa-eye"></i>',
														   $page['slug'],
														   array('class' => 'btn btn-success btn-sm',
																 'escape' => false,
																 'alt' => __('View'),
																 'title' => __('View'),
																 'target' => '_blank'));
																 ?>

								<?php
								echo $this->Html->link('<i class="fa fa-pencil"></i>',
														   array('action' => 'edit',
																 $page['id']),
														   array('class' => 'btn btn-primary btn-sm',
																 'escape' => false,
																 'alt' => __('Edit'),
																 'title' => __('Edit')));
								?>

								<?php
									echo $this->Html->link('<i class="fa fa-copy"></i>',
														   array('action' => 'add',
																 0,
																 $page['id']),
														   array('class' => 'btn btn-default btn-sm',
																 'escape' => false,
																 'alt' => __('Duplicate'),
																 'title' => __('Duplicate')));
								?>
								<?php if(empty($page['permanent'])) : ?>
									<?php
										echo $this->postLink('<i class="fa fa-times"></i>',
																   array('action' => 'delete',
																		 $page['id']),
																   array('class' => 'btn btn-danger btn-sm',
																		 'escape' => false,
																		 'alt' => __('Delete'),
																		 'title' => __('Delete'),
																		 'confirm' => __('Are you sure you want to delete the page '.$page['name'])));
									?>
								<?php endif; ?>
							</td>
						</tr>
					<?php 
						if (!empty($page['children'])) $this->lister($page['children']);
					endforeach;
		
	}
	
}