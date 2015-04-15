<div class="reservations index">
	<h2><?php echo __('Reservations'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('position'); ?></th>
			<th><?php echo $this->Paginator->sort('mobile_number'); ?></th>
			<th><?php echo $this->Paginator->sort('telephone_number'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('city_id'); ?></th>
			<th><?php echo $this->Paginator->sort('authorized_person'); ?></th>
			<th><?php echo $this->Paginator->sort('organizer'); ?></th>
			<th><?php echo $this->Paginator->sort('activity_date'); ?></th>
			<th><?php echo $this->Paginator->sort('activity_id'); ?></th>
			<th><?php echo $this->Paginator->sort('facility_id'); ?></th>
			<th><?php echo $this->Paginator->sort('status_id'); ?></th>
			<th><?php echo $this->Paginator->sort('account_id'); ?></th>
			<th><?php echo $this->Paginator->sort('headcount'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($reservations as $reservation): ?>
	<tr>
		<td><?php echo h($reservation['Reservation']['id']); ?>&nbsp;</td>
		<td><?php echo h($reservation['Reservation']['name']); ?>&nbsp;</td>
		<td><?php echo h($reservation['Reservation']['email']); ?>&nbsp;</td>
		<td><?php echo h($reservation['Reservation']['position']); ?>&nbsp;</td>
		<td><?php echo h($reservation['Reservation']['mobile_number']); ?>&nbsp;</td>
		<td><?php echo h($reservation['Reservation']['telephone_number']); ?>&nbsp;</td>
		<td><?php echo h($reservation['Reservation']['address']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($reservation['City']['name'], array('controller' => 'cities', 'action' => 'view', $reservation['City']['id'])); ?>
		</td>
		<td><?php echo h($reservation['Reservation']['authorized_person']); ?>&nbsp;</td>
		<td><?php echo h($reservation['Reservation']['organizer']); ?>&nbsp;</td>
		<td><?php echo h($reservation['Reservation']['activity_date']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($reservation['Activity']['name'], array('controller' => 'activities', 'action' => 'view', $reservation['Activity']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($reservation['Facility']['name'], array('controller' => 'facilities', 'action' => 'view', $reservation['Facility']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($reservation['Status']['name'], array('controller' => 'statuses', 'action' => 'view', $reservation['Status']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($reservation['Account']['id'], array('controller' => 'accounts', 'action' => 'view', $reservation['Account']['id'])); ?>
		</td>
		<td><?php echo h($reservation['Reservation']['headcount']); ?>&nbsp;</td>
		<td><?php echo h($reservation['Reservation']['created']); ?>&nbsp;</td>
		<td><?php echo h($reservation['Reservation']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $reservation['Reservation']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $reservation['Reservation']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $reservation['Reservation']['id']), array(), __('Are you sure you want to delete # %s?', $reservation['Reservation']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Reservation'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Cities'), array('controller' => 'cities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City'), array('controller' => 'cities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Activities'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activity'), array('controller' => 'activities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Facilities'), array('controller' => 'facilities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Facility'), array('controller' => 'facilities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Statuses'), array('controller' => 'statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status'), array('controller' => 'statuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Accounts'), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account'), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>
