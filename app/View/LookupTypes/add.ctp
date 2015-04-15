<div class="lookupTypes form">
<?php echo $this->Form->create('LookupType'); ?>
	<fieldset>
		<legend><?php echo __('Add Lookup Type'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Lookup Types'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Lookups'), array('controller' => 'lookups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lookup'), array('controller' => 'lookups', 'action' => 'add')); ?> </li>
	</ul>
</div>
