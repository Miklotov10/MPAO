<div class="facilities view">
<h2><?php echo __('Facility'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($facility['Facility']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($facility['Facility']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($facility['Facility']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Facility Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($facility['FacilityType']['name'], array('controller' => 'facility_types', 'action' => 'view', $facility['FacilityType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($facility['Facility']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($facility['Facility']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Facility'), array('action' => 'edit', $facility['Facility']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Facility'), array('action' => 'delete', $facility['Facility']['id']), array(), __('Are you sure you want to delete # %s?', $facility['Facility']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Facilities'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Facility'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Rental Promos'); ?></h3>
	<?php if (!empty($facility['RentalPromo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Facility Id'); ?></th>
		<th><?php echo __('Promo Id'); ?></th>
		<th><?php echo __('Space Id'); ?></th>
		<th><?php echo __('Rate Type Id'); ?></th>
		<th><?php echo __('Reference Id'); ?></th>
		<th><?php echo __('Aircon'); ?></th>
		<th><?php echo __('Aircon Count'); ?></th>
		<th><?php echo __('Aircon Cost'); ?></th>
		<th><?php echo __('Aircon Succeeding Count'); ?></th>
		<th><?php echo __('Aircon Succeeding Cost'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($facility['RentalPromo'] as $rentalPromo): ?>
		<tr>
			<td><?php echo $rentalPromo['id']; ?></td>
			<td><?php echo $rentalPromo['facility_id']; ?></td>
			<td><?php echo $rentalPromo['promo_id']; ?></td>
			<td><?php echo $rentalPromo['space_id']; ?></td>
			<td><?php echo $rentalPromo['rate_type_id']; ?></td>
			<td><?php echo $rentalPromo['reference_id']; ?></td>
			<td><?php echo $rentalPromo['aircon']; ?></td>
			<td><?php echo $rentalPromo['aircon_count']; ?></td>
			<td><?php echo $rentalPromo['aircon_cost']; ?></td>
			<td><?php echo $rentalPromo['aircon_succeeding_count']; ?></td>
			<td><?php echo $rentalPromo['aircon_succeeding_cost']; ?></td>
			<td><?php echo $rentalPromo['created']; ?></td>
			<td><?php echo $rentalPromo['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'rental_promos', 'action' => 'view', $rentalPromo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'rental_promos', 'action' => 'edit', $rentalPromo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'rental_promos', 'action' => 'delete', $rentalPromo['id']), array(), __('Are you sure you want to delete # %s?', $rentalPromo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Rental Promo'), array('controller' => 'rental_promos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Rental Requirements'); ?></h3>
	<?php if (!empty($facility['RentalRequirement'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Unit Type Id'); ?></th>
		<th><?php echo __('Facility Id'); ?></th>
		<th><?php echo __('Requirement Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($facility['RentalRequirement'] as $rentalRequirement): ?>
		<tr>
			<td><?php echo $rentalRequirement['id']; ?></td>
			<td><?php echo $rentalRequirement['name']; ?></td>
			<td><?php echo $rentalRequirement['price']; ?></td>
			<td><?php echo $rentalRequirement['unit_type_id']; ?></td>
			<td><?php echo $rentalRequirement['facility_id']; ?></td>
			<td><?php echo $rentalRequirement['requirement_id']; ?></td>
			<td><?php echo $rentalRequirement['created']; ?></td>
			<td><?php echo $rentalRequirement['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'rental_requirements', 'action' => 'view', $rentalRequirement['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'rental_requirements', 'action' => 'edit', $rentalRequirement['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'rental_requirements', 'action' => 'delete', $rentalRequirement['id']), array(), __('Are you sure you want to delete # %s?', $rentalRequirement['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Rental Requirement'), array('controller' => 'rental_requirements', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Reservations'); ?></h3>
	<?php if (!empty($facility['Reservation'])): ?>
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
	<?php foreach ($facility['Reservation'] as $reservation): ?>
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
<div class="related">
	<h3><?php echo __('Related Spaces'); ?></h3>
	<?php if (!empty($facility['Space'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Facility Id'); ?></th>
		<th><?php echo __('Gender Id'); ?></th>
		<th><?php echo __('Male Count'); ?></th>
		<th><?php echo __('Female Count'); ?></th>
		<th><?php echo __('Total Count'); ?></th>
		<th><?php echo __('Other Facility'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($facility['Space'] as $space): ?>
		<tr>
			<td><?php echo $space['id']; ?></td>
			<td><?php echo $space['name']; ?></td>
			<td><?php echo $space['facility_id']; ?></td>
			<td><?php echo $space['gender_id']; ?></td>
			<td><?php echo $space['male_count']; ?></td>
			<td><?php echo $space['female_count']; ?></td>
			<td><?php echo $space['total_count']; ?></td>
			<td><?php echo $space['other_facility']; ?></td>
			<td><?php echo $space['created']; ?></td>
			<td><?php echo $space['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'spaces', 'action' => 'view', $space['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'spaces', 'action' => 'edit', $space['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'spaces', 'action' => 'delete', $space['id']), array(), __('Are you sure you want to delete # %s?', $space['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Space'), array('controller' => 'spaces', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
