<div class="tweets view">
<h2><?php  echo __('Tweet'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tweet['Tweet']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post'); ?></dt>
		<dd>
			<?php echo h($tweet['Tweet']['post']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Author'); ?></dt>
		<dd>
			<?php echo h($tweet['Tweet']['author']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($tweet['Tweet']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($tweet['Tweet']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tweet'), array('action' => 'edit', $tweet['Tweet']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tweet'), array('action' => 'delete', $tweet['Tweet']['id']), null, __('Are you sure you want to delete # %s?', $tweet['Tweet']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tweets'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tweet'), array('action' => 'add')); ?> </li>
	</ul>
</div>
