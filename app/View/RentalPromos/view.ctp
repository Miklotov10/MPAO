<div class="rentalPromos view">
<h2><?php echo __('Rental Promo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($rentalPromo['RentalPromo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Facility'); ?></dt>
		<dd>
			<?php echo $this->Html->link($rentalPromo['Facility']['name'], array('controller' => 'facilities', 'action' => 'view', $rentalPromo['Facility']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Promo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($rentalPromo['Promo']['name'], array('controller' => 'promos', 'action' => 'view', $rentalPromo['Promo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Space'); ?></dt>
		<dd>
			<?php echo $this->Html->link($rentalPromo['Space']['name'], array('controller' => 'spaces', 'action' => 'view', $rentalPromo['Space']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rate Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($rentalPromo['RateType']['name'], array('controller' => 'rate_types', 'action' => 'view', $rentalPromo['RateType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reference'); ?></dt>
		<dd>
			<?php echo $this->Html->link($rentalPromo['Reference']['name'], array('controller' => 'references', 'action' => 'view', $rentalPromo['Reference']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aircon'); ?></dt>
		<dd>
			<?php echo h($rentalPromo['RentalPromo']['aircon']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aircon Count'); ?></dt>
		<dd>
			<?php echo h($rentalPromo['RentalPromo']['aircon_count']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aircon Cost'); ?></dt>
		<dd>
			<?php echo h($rentalPromo['RentalPromo']['aircon_cost']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aircon Succeeding Count'); ?></dt>
		<dd>
			<?php echo h($rentalPromo['RentalPromo']['aircon_succeeding_count']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aircon Succeeding Cost'); ?></dt>
		<dd>
			<?php echo h($rentalPromo['RentalPromo']['aircon_succeeding_cost']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($rentalPromo['RentalPromo']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($rentalPromo['RentalPromo']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Rental Promo'), array('action' => 'edit', $rentalPromo['RentalPromo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Rental Promo'), array('action' => 'delete', $rentalPromo['RentalPromo']['id']), array(), __('Are you sure you want to delete # %s?', $rentalPromo['RentalPromo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Rental Promos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rental Promo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Facilities'), array('controller' => 'facilities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Facility'), array('controller' => 'facilities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Promos'), array('controller' => 'promos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Promo'), array('controller' => 'promos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Spaces'), array('controller' => 'spaces', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Space'), array('controller' => 'spaces', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rate Types'), array('controller' => 'rate_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rate Type'), array('controller' => 'rate_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List References'), array('controller' => 'references', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reference'), array('controller' => 'references', 'action' => 'add')); ?> </li>
	</ul>
</div>
