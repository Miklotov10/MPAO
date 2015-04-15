<div class="rentalRequirements form">
<?php echo $this->Form->create('RentalRequirement'); ?>
	<fieldset>
		<legend><?php echo __('Add Rental Requirement'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('price');
		echo $this->Form->input('unit_type_id');
		echo $this->Form->input('facility_id');
		echo $this->Form->input('requirement_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Rental Requirements'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Unit Types'), array('controller' => 'unit_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unit Type'), array('controller' => 'unit_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Facilities'), array('controller' => 'facilities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Facility'), array('controller' => 'facilities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Requirements'), array('controller' => 'requirements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Requirement'), array('controller' => 'requirements', 'action' => 'add')); ?> </li>
	</ul>
</div>
