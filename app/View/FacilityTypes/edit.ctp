<div class="facilityTypes form">
<?php echo $this->Form->create('FacilityType'); ?>
	<fieldset>
		<legend><?php echo __('Edit Facility Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('FacilityType.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('FacilityType.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Facility Types'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Facilities'), array('controller' => 'facilities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Facility'), array('controller' => 'facilities', 'action' => 'add')); ?> </li>
	</ul>
</div>
