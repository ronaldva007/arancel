<div class="solicitudArancelEstatuses form">
<?php echo $this->Form->create('SolicitudArancelEstatus'); ?>
	<fieldset>
		<legend><?php echo __('Add Solicitud Arancel Estatus'); ?></legend>
	<?php
		echo $this->Form->input('solicitud_arancel_id');
		echo $this->Form->input('fecha');
		echo $this->Form->input('estatus_solicitud_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Solicitud Arancel Estatuses'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Solicitud Arancels'), array('controller' => 'solicitud_arancels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Solicitud Arancel'), array('controller' => 'solicitud_arancels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estatus Solicituds'), array('controller' => 'estatus_solicituds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estatus Solicitud'), array('controller' => 'estatus_solicituds', 'action' => 'add')); ?> </li>
	</ul>
</div>
