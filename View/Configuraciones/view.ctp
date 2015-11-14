<div class="configuraciones view">
<h2><?php echo __('Configuracione'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($configuracione['Configuracione']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vigencia Solicitud'); ?></dt>
		<dd>
			<?php echo h($configuracione['Configuracione']['vigencia_solicitud']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dias Elaboracion'); ?></dt>
		<dd>
			<?php echo h($configuracione['Configuracione']['dias_elaboracion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dias Firma'); ?></dt>
		<dd>
			<?php echo h($configuracione['Configuracione']['dias_firma']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dias Entrega'); ?></dt>
		<dd>
			<?php echo h($configuracione['Configuracione']['dias_entrega']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Configuracione'), array('action' => 'edit', $configuracione['Configuracione']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Configuracione'), array('action' => 'delete', $configuracione['Configuracione']['id']), array(), __('Are you sure you want to delete # %s?', $configuracione['Configuracione']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Configuraciones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Configuracione'), array('action' => 'add')); ?> </li>
	</ul>
</div>
