<div class="lookups view">
<h2><?php echo __('Lookup'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($lookup['Lookup']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($lookup['Lookup']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($lookup['Lookup']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lookup Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($lookup['LookupType']['name'], array('controller' => 'lookup_types', 'action' => 'view', $lookup['LookupType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($lookup['Lookup']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($lookup['Lookup']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Lookup'), array('action' => 'edit', $lookup['Lookup']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Lookup'), array('action' => 'delete', $lookup['Lookup']['id']), array(), __('Are you sure you want to delete # %s?', $lookup['Lookup']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Lookups'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lookup'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lookup Types'), array('controller' => 'lookup_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lookup Type'), array('controller' => 'lookup_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
