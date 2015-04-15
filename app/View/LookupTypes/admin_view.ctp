<div class="lookupTypes view">
<h2><?php echo __('Lookup Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($lookupType['LookupType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($lookupType['LookupType']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($lookupType['LookupType']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($lookupType['LookupType']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Lookup Type'), array('action' => 'edit', $lookupType['LookupType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Lookup Type'), array('action' => 'delete', $lookupType['LookupType']['id']), array(), __('Are you sure you want to delete # %s?', $lookupType['LookupType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Lookup Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lookup Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lookups'), array('controller' => 'lookups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lookup'), array('controller' => 'lookups', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Lookups'); ?></h3>
	<?php if (!empty($lookupType['Lookup'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Lookup Type Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($lookupType['Lookup'] as $lookup): ?>
		<tr>
			<td><?php echo $lookup['id']; ?></td>
			<td><?php echo $lookup['name']; ?></td>
			<td><?php echo $lookup['description']; ?></td>
			<td><?php echo $lookup['lookup_type_id']; ?></td>
			<td><?php echo $lookup['created']; ?></td>
			<td><?php echo $lookup['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'lookups', 'action' => 'view', $lookup['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'lookups', 'action' => 'edit', $lookup['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'lookups', 'action' => 'delete', $lookup['id']), array(), __('Are you sure you want to delete # %s?', $lookup['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Lookup'), array('controller' => 'lookups', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
