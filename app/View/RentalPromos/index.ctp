<div class="rentalPromos index">
	<h2><?php echo __('Rental Promos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('facility_id'); ?></th>
			<th><?php echo $this->Paginator->sort('promo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('space_id'); ?></th>
			<th><?php echo $this->Paginator->sort('rate_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('reference_id'); ?></th>
			<th><?php echo $this->Paginator->sort('aircon'); ?></th>
			<th><?php echo $this->Paginator->sort('aircon_count'); ?></th>
			<th><?php echo $this->Paginator->sort('aircon_cost'); ?></th>
			<th><?php echo $this->Paginator->sort('aircon_succeeding_count'); ?></th>
			<th><?php echo $this->Paginator->sort('aircon_succeeding_cost'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($rentalPromos as $rentalPromo): ?>
	<tr>
		<td><?php echo h($rentalPromo['RentalPromo']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($rentalPromo['Facility']['name'], array('controller' => 'facilities', 'action' => 'view', $rentalPromo['Facility']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($rentalPromo['Promo']['name'], array('controller' => 'promos', 'action' => 'view', $rentalPromo['Promo']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($rentalPromo['Space']['name'], array('controller' => 'spaces', 'action' => 'view', $rentalPromo['Space']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($rentalPromo['RateType']['name'], array('controller' => 'rate_types', 'action' => 'view', $rentalPromo['RateType']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($rentalPromo['Reference']['name'], array('controller' => 'references', 'action' => 'view', $rentalPromo['Reference']['id'])); ?>
		</td>
		<td><?php echo h($rentalPromo['RentalPromo']['aircon']); ?>&nbsp;</td>
		<td><?php echo h($rentalPromo['RentalPromo']['aircon_count']); ?>&nbsp;</td>
		<td><?php echo h($rentalPromo['RentalPromo']['aircon_cost']); ?>&nbsp;</td>
		<td><?php echo h($rentalPromo['RentalPromo']['aircon_succeeding_count']); ?>&nbsp;</td>
		<td><?php echo h($rentalPromo['RentalPromo']['aircon_succeeding_cost']); ?>&nbsp;</td>
		<td><?php echo h($rentalPromo['RentalPromo']['created']); ?>&nbsp;</td>
		<td><?php echo h($rentalPromo['RentalPromo']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $rentalPromo['RentalPromo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $rentalPromo['RentalPromo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $rentalPromo['RentalPromo']['id']), array(), __('Are you sure you want to delete # %s?', $rentalPromo['RentalPromo']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Rental Promo'), array('action' => 'add')); ?></li>
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
