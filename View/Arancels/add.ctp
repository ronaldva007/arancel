<div class="arancels form">
<?php echo $this->Form->create('Arancel',array('inputDefaults'=>array('class'=>'form-control'))); ?>
	<fieldset>
		<legend><?php echo __('Add Arancel'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('monto');
		echo $this->Form->input('max');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Arancels'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Solicitud Arancel Detalles'), array('controller' => 'solicitud_arancel_detalles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Solicitud Arancel Detalle'), array('controller' => 'solicitud_arancel_detalles', 'action' => 'add')); ?> </li>
	</ul>
</div>
