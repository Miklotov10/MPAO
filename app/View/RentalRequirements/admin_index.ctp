<div class="rentalRequirements index">
	<h2><?php echo __('Rental Requirements'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('price'); ?></th>
			<th><?php echo $this->Paginator->sort('unit_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('facility_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($rentalRequirements as $rentalRequirement): ?>
	<tr>
		<td><?php echo h($rentalRequirement['RentalRequirement']['id']); ?>&nbsp;</td>
		<td><?php echo h($rentalRequirement['RentalRequirement']['name']); ?>&nbsp;</td>
		<td><?php echo h($rentalRequirement['RentalRequirement']['price']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($rentalRequirement['UnitType']['name'], array('controller' => 'unit_types', 'action' => 'view', $rentalRequirement['UnitType']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($rentalRequirement['Facility']['name'], array('controller' => 'facilities', 'action' => 'view', $rentalRequirement['Facility']['id'])); ?>
		</td>
		<td><?php echo h($rentalRequirement['RentalRequirement']['created']); ?>&nbsp;</td>
		<td><?php echo h($rentalRequirement['RentalRequirement']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $rentalRequirement['RentalRequirement']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $rentalRequirement['RentalRequirement']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $rentalRequirement['RentalRequirement']['id']), array(), __('Are you sure you want to delete # %s?', $rentalRequirement['RentalRequirement']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Rental Requirement'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Unit Types'), array('controller' => 'unit_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unit Type'), array('controller' => 'unit_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Facilities'), array('controller' => 'facilities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Facility'), array('controller' => 'facilities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Requirements'), array('controller' => 'requirements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Requirement'), array('controller' => 'requirements', 'action' => 'add')); ?> </li>
	</ul>
</div>
