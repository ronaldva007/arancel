<div class="unidadTributarias view">
<h2><?php echo __('Unidad Tributaria'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($unidadTributaria['UnidadTributaria']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unidad'); ?></dt>
		<dd>
			<?php echo h($unidadTributaria['UnidadTributaria']['unidad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($unidadTributaria['UnidadTributaria']['fecha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Isinactiva'); ?></dt>
		<dd>
			<?php echo h($unidadTributaria['UnidadTributaria']['isinactiva']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Unidad Tributaria'), array('action' => 'edit', $unidadTributaria['UnidadTributaria']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Unidad Tributaria'), array('action' => 'delete', $unidadTributaria['UnidadTributaria']['id']), array(), __('Are you sure you want to delete # %s?', $unidadTributaria['UnidadTributaria']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Unidad Tributarias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unidad Tributaria'), array('action' => 'add')); ?> </li>
	</ul>
</div>
