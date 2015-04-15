<div class="spaces form">
<?php echo $this->Form->create('Space'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Space'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('facility_id');
		echo $this->Form->input('gender_id');
		echo $this->Form->input('male_count');
		echo $this->Form->input('female_count');
		echo $this->Form->input('total_count');
		echo $this->Form->input('other_facility');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Space.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Space.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Spaces'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Facilities'), array('controller' => 'facilities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Facility'), array('controller' => 'facilities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Genders'), array('controller' => 'genders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gender'), array('controller' => 'genders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rental Promos'), array('controller' => 'rental_promos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rental Promo'), array('controller' => 'rental_promos', 'action' => 'add')); ?> </li>
	</ul>
</div>
