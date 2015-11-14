<div class="bancos form">
<?php echo $this->Form->create('Banco',,array('inputDefaults'=>array('class'=>'form-control'))); ?>
	<fieldset>
		<legend><?php echo __('Edit Banco'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('banco');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Banco.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Banco.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Bancos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Pagos'), array('controller' => 'pagos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pago'), array('controller' => 'pagos', 'action' => 'add')); ?> </li>
	</ul>
</div>
