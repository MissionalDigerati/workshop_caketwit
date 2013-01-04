<div class="tweets form">
<?php echo $this->Form->create('Tweet'); ?>
	<fieldset>
		<legend><?php echo __('Add Tweet'); ?></legend>
	<?php
		echo $this->Form->input('post');
		echo $this->Form->input('author');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tweets'), array('action' => 'index')); ?></li>
	</ul>
</div>
