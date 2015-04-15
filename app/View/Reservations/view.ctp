<div class="reservations view">
<h2><?php echo __('Reservation'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($reservation['Reservation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($reservation['Reservation']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($reservation['Reservation']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Position'); ?></dt>
		<dd>
			<?php echo h($reservation['Reservation']['position']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mobile Number'); ?></dt>
		<dd>
			<?php echo h($reservation['Reservation']['mobile_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telephone Number'); ?></dt>
		<dd>
			<?php echo h($reservation['Reservation']['telephone_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($reservation['Reservation']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo $this->Html->link($reservation['City']['name'], array('controller' => 'cities', 'action' => 'view', $reservation['City']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Authorized Person'); ?></dt>
		<dd>
			<?php echo h($reservation['Reservation']['authorized_person']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Organizer'); ?></dt>
		<dd>
			<?php echo h($reservation['Reservation']['organizer']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activity Date'); ?></dt>
		<dd>
			<?php echo h($reservation['Reservation']['activity_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activity'); ?></dt>
		<dd>
			<?php echo $this->Html->link($reservation['Activity']['name'], array('controller' => 'activities', 'action' => 'view', $reservation['Activity']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Facility'); ?></dt>
		<dd>
			<?php echo $this->Html->link($reservation['Facility']['name'], array('controller' => 'facilities', 'action' => 'view', $reservation['Facility']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo $this->Html->link($reservation['Status']['name'], array('controller' => 'statuses', 'action' => 'view', $reservation['Status']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Account'); ?></dt>
		<dd>
			<?php echo $this->Html->link($reservation['Account']['id'], array('controller' => 'accounts', 'action' => 'view', $reservation['Account']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Headcount'); ?></dt>
		<dd>
			<?php echo h($reservation['Reservation']['headcount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($reservation['Reservation']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($reservation['Reservation']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Reservation'), array('action' => 'edit', $reservation['Reservation']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Reservation'), array('action' => 'delete', $reservation['Reservation']['id']), array(), __('Are you sure you want to delete # %s?', $reservation['Reservation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Reservations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reservation'), array('action' => 'add')); ?> </li>
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
