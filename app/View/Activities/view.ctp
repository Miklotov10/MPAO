<div class="activities view">
<h2><?php echo __('Activity'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($activity['Activity']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($activity['Activity']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($activity['Activity']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($activity['Activity']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($activity['Activity']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Activity'), array('action' => 'edit', $activity['Activity']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Activity'), array('action' => 'delete', $activity['Activity']['id']), array(), __('Are you sure you want to delete # %s?', $activity['Activity']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Activities'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activity'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reservations'), array('controller' => 'reservations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reservation'), array('controller' => 'reservations', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Reservations'); ?></h3>
	<?php if (!empty($activity['Reservation'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Position'); ?></th>
		<th><?php echo __('Mobile Number'); ?></th>
		<th><?php echo __('Telephone Number'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('City Id'); ?></th>
		<th><?php echo __('Authorized Person'); ?></th>
		<th><?php echo __('Organizer'); ?></th>
		<th><?php echo __('Activity Date'); ?></th>
		<th><?php echo __('Activity Id'); ?></th>
		<th><?php echo __('Facility Id'); ?></th>
		<th><?php echo __('Status Id'); ?></th>
		<th><?php echo __('Account Id'); ?></th>
		<th><?php echo __('Headcount'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($activity['Reservation'] as $reservation): ?>
		<tr>
			<td><?php echo $reservation['id']; ?></td>
			<td><?php echo $reservation['name']; ?></td>
			<td><?php echo $reservation['email']; ?></td>
			<td><?php echo $reservation['position']; ?></td>
			<td><?php echo $reservation['mobile_number']; ?></td>
			<td><?php echo $reservation['telephone_number']; ?></td>
			<td><?php echo $reservation['address']; ?></td>
			<td><?php echo $reservation['city_id']; ?></td>
			<td><?php echo $reservation['authorized_person']; ?></td>
			<td><?php echo $reservation['organizer']; ?></td>
			<td><?php echo $reservation['activity_date']; ?></td>
			<td><?php echo $reservation['activity_id']; ?></td>
			<td><?php echo $reservation['facility_id']; ?></td>
			<td><?php echo $reservation['status_id']; ?></td>
			<td><?php echo $reservation['account_id']; ?></td>
			<td><?php echo $reservation['headcount']; ?></td>
			<td><?php echo $reservation['created']; ?></td>
			<td><?php echo $reservation['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'reservations', 'action' => 'view', $reservation['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'reservations', 'action' => 'edit', $reservation['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'reservations', 'action' => 'delete', $reservation['id']), array(), __('Are you sure you want to delete # %s?', $reservation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Reservation'), array('controller' => 'reservations', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
