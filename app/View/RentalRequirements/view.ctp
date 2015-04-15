<div class="rentalRequirements view">
<h2><?php echo __('Rental Requirement'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($rentalRequirement['RentalRequirement']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($rentalRequirement['RentalRequirement']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($rentalRequirement['RentalRequirement']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unit Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($rentalRequirement['UnitType']['name'], array('controller' => 'unit_types', 'action' => 'view', $rentalRequirement['UnitType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Facility'); ?></dt>
		<dd>
			<?php echo $this->Html->link($rentalRequirement['Facility']['name'], array('controller' => 'facilities', 'action' => 'view', $rentalRequirement['Facility']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Requirement'); ?></dt>
		<dd>
			<?php echo $this->Html->link($rentalRequirement['Requirement']['name'], array('controller' => 'requirements', 'action' => 'view', $rentalRequirement['Requirement']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($rentalRequirement['RentalRequirement']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($rentalRequirement['RentalRequirement']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Rental Requirement'), array('action' => 'edit', $rentalRequirement['RentalRequirement']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Rental Requirement'), array('action' => 'delete', $rentalRequirement['RentalRequirement']['id']), array(), __('Are you sure you want to delete # %s?', $rentalRequirement['RentalRequirement']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Rental Requirements'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rental Requirement'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Unit Types'), array('controller' => 'unit_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unit Type'), array('controller' => 'unit_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Facilities'), array('controller' => 'facilities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Facility'), array('controller' => 'facilities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Requirements'), array('controller' => 'requirements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Requirement'), array('controller' => 'requirements', 'action' => 'add')); ?> </li>
	</ul>
</div>
