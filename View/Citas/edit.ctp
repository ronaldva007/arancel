<div class="citas form">
<?php echo $this->Form->create('Cita'); ?>
	<fieldset>
		<legend><?php echo __('Edit Cita'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('fecha_ini');
		echo $this->Form->input('fecha_fin');
		echo $this->Form->input('user_id');
		echo $this->Form->input('tipo_solicitud_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Cita.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Cita.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Citas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo Solicituds'), array('controller' => 'tipo_solicituds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Solicitud'), array('controller' => 'tipo_solicituds', 'action' => 'add')); ?> </li>
	</ul>
</div>
