<div class="configuraciones form">
<?php echo $this->Form->create('Configuracione',array('inputDefaults'=>array('class'=>'form-control'))); ?>
	<fieldset>
		<legend><?php echo __('Edit Configuracione'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('vigencia_solicitud');
		echo $this->Form->input('dias_elaboracion');
		echo $this->Form->input('dias_firma');
		echo $this->Form->input('dias_entrega');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Configuracione.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Configuracione.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Configuraciones'), array('action' => 'index')); ?></li>
	</ul>
</div>
