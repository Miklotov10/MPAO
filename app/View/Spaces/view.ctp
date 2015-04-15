<div class="spaces view">
<h2><?php echo __('Space'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($space['Space']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($space['Space']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Facility'); ?></dt>
		<dd>
			<?php echo $this->Html->link($space['Facility']['name'], array('controller' => 'facilities', 'action' => 'view', $space['Facility']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gender'); ?></dt>
		<dd>
			<?php echo $this->Html->link($space['Gender']['name'], array('controller' => 'genders', 'action' => 'view', $space['Gender']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Male Count'); ?></dt>
		<dd>
			<?php echo h($space['Space']['male_count']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Female Count'); ?></dt>
		<dd>
			<?php echo h($space['Space']['female_count']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Total Count'); ?></dt>
		<dd>
			<?php echo h($space['Space']['total_count']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Other Facility'); ?></dt>
		<dd>
			<?php echo h($space['Space']['other_facility']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($space['Space']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($space['Space']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Space'), array('action' => 'edit', $space['Space']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Space'), array('action' => 'delete', $space['Space']['id']), array(), __('Are you sure you want to delete # %s?', $space['Space']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Spaces'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Space'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Facilities'), array('controller' => 'facilities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Facility'), array('controller' => 'facilities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Genders'), array('controller' => 'genders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gender'), array('controller' => 'genders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rental Promos'), array('controller' => 'rental_promos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rental Promo'), array('controller' => 'rental_promos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Rental Promos'); ?></h3>
	<?php if (!empty($space['RentalPromo'])): ?>
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
	<?php foreach ($space['RentalPromo'] as $rentalPromo): ?>
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
