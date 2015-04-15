<div class="lookups form">
<?php echo $this->Form->create('Lookup'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Lookup'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('lookup_type_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Lookup.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Lookup.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Lookups'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Lookup Types'), array('controller' => 'lookup_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lookup Type'), array('controller' => 'lookup_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
