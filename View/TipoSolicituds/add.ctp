<div class="tipoSolicituds form">
<?php echo $this->Form->create('TipoSolicitud'); ?>
	<fieldset>
		<legend><?php echo __('Add Tipo Solicitud'); ?></legend>
	<?php
		echo $this->Form->input('solicitud');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tipo Solicituds'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Citas'), array('controller' => 'citas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cita'), array('controller' => 'citas', 'action' => 'add')); ?> </li>
	</ul>
</div>
