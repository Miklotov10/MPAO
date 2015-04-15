<div class="rentalPromos form">
<?php echo $this->Form->create('RentalPromo'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Rental Promo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('facility_id');
		echo $this->Form->input('space_id');
		echo $this->Form->input('rate_type_id');
		echo $this->Form->input('reference_id');
		echo $this->Form->input('aircon');
		echo $this->Form->input('aircon_count');
		echo $this->Form->input('aircon_cost');
		echo $this->Form->input('aircon_succeeding_count');
		echo $this->Form->input('aircon_succeeding_cost');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('RentalPromo.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('RentalPromo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Rental Promos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Facilities'), array('controller' => 'facilities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Facility'), array('controller' => 'facilities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Promos'), array('controller' => 'promos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Promo'), array('controller' => 'promos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Spaces'), array('controller' => 'spaces', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Space'), array('controller' => 'spaces', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rate Types'), array('controller' => 'rate_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rate Type'), array('controller' => 'rate_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List References'), array('controller' => 'references', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reference'), array('controller' => 'references', 'action' => 'add')); ?> </li>
	</ul>
</div>
