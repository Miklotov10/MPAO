<div class="facilities form">
<?php echo $this->Form->create('Facility'); ?>
	<fieldset>
		<legend><?php echo __('Edit Facility'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('facility_type_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Facility.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Facility.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Facilities'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Facility Types'), array('controller' => 'facility_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Facility Type'), array('controller' => 'facility_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rental Promos'), array('controller' => 'rental_promos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rental Promo'), array('controller' => 'rental_promos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rental Requirements'), array('controller' => 'rental_requirements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rental Requirement'), array('controller' => 'rental_requirements', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reservations'), array('controller' => 'reservations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reservation'), array('controller' => 'reservations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Spaces'), array('controller' => 'spaces', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Space'), array('controller' => 'spaces', 'action' => 'add')); ?> </li>
	</ul>
</div>
