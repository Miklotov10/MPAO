<div class="cities view">
<h2><?php echo __('City'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($city['City']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($city['City']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($city['City']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($city['City']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit City'), array('action' => 'edit', $city['City']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete City'), array('action' => 'delete', $city['City']['id']), array(), __('Are you sure you want to delete # %s?', $city['City']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cities'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Accounts'), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account'), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reservations'), array('controller' => 'reservations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reservation'), array('controller' => 'reservations', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Accounts'); ?></h3>
	<?php if (!empty($city['Account'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Middle Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Code'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Bank Account Number'); ?></th>
		<th><?php echo __('Mobile Number'); ?></th>
		<th><?php echo __('Telephone Number'); ?></th>
		<th><?php echo __('City Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($city['Account'] as $account): ?>
		<tr>
			<td><?php echo $account['id']; ?></td>
			<td><?php echo $account['first_name']; ?></td>
			<td><?php echo $account['middle_name']; ?></td>
			<td><?php echo $account['last_name']; ?></td>
			<td><?php echo $account['email']; ?></td>
			<td><?php echo $account['code']; ?></td>
			<td><?php echo $account['address']; ?></td>
			<td><?php echo $account['bank_account_number']; ?></td>
			<td><?php echo $account['mobile_number']; ?></td>
			<td><?php echo $account['telephone_number']; ?></td>
			<td><?php echo $account['city_id']; ?></td>
			<td><?php echo $account['user_id']; ?></td>
			<td><?php echo $account['created']; ?></td>
			<td><?php echo $account['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'accounts', 'action' => 'view', $account['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'accounts', 'action' => 'edit', $account['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'accounts', 'action' => 'delete', $account['id']), array(), __('Are you sure you want to delete # %s?', $account['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Account'), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Reservations'); ?></h3>
	<?php if (!empty($city['Reservation'])): ?>
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
	<?php foreach ($city['Reservation'] as $reservation): ?>
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
