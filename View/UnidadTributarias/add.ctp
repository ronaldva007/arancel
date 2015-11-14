<div class="unidadTributarias form">
<?php echo $this->Form->create('UnidadTributaria'); ?>
	<fieldset>
		<legend><?php echo __('Add Unidad Tributaria'); ?></legend>
	<?php
		echo $this->Form->input('unidad');
		echo $this->Form->input('fecha');
		echo $this->Form->input('isinactiva');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Unidad Tributarias'), array('action' => 'index')); ?></li>
	</ul>
</div>
