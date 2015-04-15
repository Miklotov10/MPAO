<div class="rateTypes index">
	<h2><?php echo __('Rate Types'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('lookup_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($rateTypes as $rateType): ?>
	<tr>
		<td><?php echo h($rateType['RateType']['id']); ?>&nbsp;</td>
		<td><?php echo h($rateType['RateType']['name']); ?>&nbsp;</td>
		<td><?php echo h($rateType['RateType']['description']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($rateType['LookupType']['name'], array('controller' => 'lookup_types', 'action' => 'view', $rateType['LookupType']['id'])); ?>
		</td>
		<td><?php echo h($rateType['RateType']['created']); ?>&nbsp;</td>
		<td><?php echo h($rateType['RateType']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $rateType['RateType']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $rateType['RateType']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $rateType['RateType']['id']), array(), __('Are you sure you want to delete # %s?', $rateType['RateType']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Rate Type'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Lookup Types'), array('controller' => 'lookup_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lookup Type'), array('controller' => 'lookup_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rental Promos'), array('controller' => 'rental_promos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rental Promo'), array('controller' => 'rental_promos', 'action' => 'add')); ?> </li>
	</ul>
</div>
