<div class="unidadTributarias form">
<?php echo $this->Form->create('UnidadTributaria'); ?>
	<fieldset>
		<legend><?php echo __('Edit Unidad Tributaria'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('UnidadTributaria.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('UnidadTributaria.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Unidad Tributarias'), array('action' => 'index')); ?></li>
	</ul>
</div>
