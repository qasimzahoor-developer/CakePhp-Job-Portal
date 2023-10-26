<!-- Start Results Bar -->
<?php
	//$this->Paginator->options(array('url'=>Router::getParam('pass')));
?>
<div class="paging">
	<div class="totalresults pull-left">
		<?= $this->Paginator->counter([
    'format' => 'Page {{page}} of {{pages}}, showing {{current}} records out of
             {{count}} total'
]) ?>
	</div>
	<div class="pagenumber">
		<ul class="pagination pull-right">
			<?php if($this->Paginator->hasPrev()) : ?>
				<li><?php echo $this->Paginator->first('|<'); ?></li>
				<li><?php echo $this->Paginator->prev('<'); ?></li>
			<?php endif; ?>

			<?php if (is_string($this->Paginator->numbers())): ?>
				<?php echo $this->Paginator->numbers(array('separator' => '',
														   'before' => '',
														   'after' => '',
														   'tag' => 'li',
														   'currentTag' => 'span',
														   'currentClass' => 'active'));?>
			<?php endif; ?>

			<?php if($this->Paginator->hasNext()): ?>
				<li><?php echo $this->Paginator->next(' >'); ?></li>
				<li><?php echo $this->Paginator->last(' >|'); ?></li>
			<?php endif; ?>
		</ul>
	</div>
</div>
<!-- End Results Bar -->