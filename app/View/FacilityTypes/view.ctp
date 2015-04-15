<div class="facilityTypes view">
<h2><?php echo __('Facility Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($facilityType['FacilityType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($facilityType['FacilityType']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($facilityType['FacilityType']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($facilityType['FacilityType']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($facilityType['FacilityType']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Facility Type'), array('action' => 'edit', $facilityType['FacilityType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Facility Type'), array('action' => 'delete', $facilityType['FacilityType']['id']), array(), __('Are you sure you want to delete # %s?', $facilityType['FacilityType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Facility Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Facility Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Facilities'), array('controller' => 'facilities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Facility'), array('controller' => 'facilities', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Facilities'); ?></h3>
	<?php if (!empty($facilityType['Facility'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Facility Type Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($facilityType['Facility'] as $facility): ?>
		<tr>
			<td><?php echo $facility['id']; ?></td>
			<td><?php echo $facility['name']; ?></td>
			<td><?php echo $facility['description']; ?></td>
			<td><?php echo $facility['facility_type_id']; ?></td>
			<td><?php echo $facility['created']; ?></td>
			<td><?php echo $facility['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'facilities', 'action' => 'view', $facility['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'facilities', 'action' => 'edit', $facility['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'facilities', 'action' => 'delete', $facility['id']), array(), __('Are you sure you want to delete # %s?', $facility['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Facility'), array('controller' => 'facilities', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
