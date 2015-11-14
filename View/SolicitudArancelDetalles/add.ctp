<div class="solicitudArancelDetalles form">
<?php echo $this->Form->create('SolicitudArancelDetalle'); ?>
	<fieldset>
		<legend><?php echo __('Add Solicitud Arancel Detalle'); ?></legend>
	<?php
		echo $this->Form->input('solicitud_arancel_id');
		echo $this->Form->input('arancel_id');
		echo $this->Form->input('cantidad');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>


<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Solicitud Arancel Detalles'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Solicitud Arancels'), array('controller' => 'solicitud_arancels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Solicitud Arancel'), array('controller' => 'solicitud_arancels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Arancels'), array('controller' => 'arancels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Arancel'), array('controller' => 'arancels', 'action' => 'add')); ?> </li>
	</ul>
</div>
