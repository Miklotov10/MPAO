<div class="facilities index">
	<h2><?php echo __('Facilities'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('facility_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($facilities as $facility): ?>
	<tr>
		<td><?php echo h($facility['Facility']['id']); ?>&nbsp;</td>
		<td><?php echo h($facility['Facility']['name']); ?>&nbsp;</td>
		<td><?php echo h($facility['Facility']['description']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($facility['FacilityType']['name'], array('controller' => 'facility_types', 'action' => 'view', $facility['FacilityType']['id'])); ?>
		</td>
		<td><?php echo h($facility['Facility']['created']); ?>&nbsp;</td>
		<td><?php echo h($facility['Facility']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $facility['Facility']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $facility['Facility']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $facility['Facility']['id']), array(), __('Are you sure you want to delete # %s?', $facility['Facility']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Facility'), array('action' => 'add')); ?></li>
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
