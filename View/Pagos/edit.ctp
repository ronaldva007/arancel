<div class="pagos form">
<?php echo $this->Form->create('Pago'); ?>
	<fieldset>
		<legend><?php echo __('Edit Pago'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('solicitud_arancel_id');
		echo $this->Form->input('banco_id');
		echo $this->Form->input('monto');
		echo $this->Form->input('nro_deposito');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Pago.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Pago.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Pagos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Solicitud Arancels'), array('controller' => 'solicitud_arancels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Solicitud Arancel'), array('controller' => 'solicitud_arancels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bancos'), array('controller' => 'bancos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Banco'), array('controller' => 'bancos', 'action' => 'add')); ?> </li>
	</ul>
</div>
