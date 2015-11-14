<div class="pagos view">
<h2><?php echo __('Pago'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pago['Pago']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Solicitud Arancel'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pago['SolicitudArancel']['nro_solicitud'], array('controller' => 'solicitud_arancels', 'action' => 'view', $pago['SolicitudArancel']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Banco'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pago['Banco']['banco'], array('controller' => 'bancos', 'action' => 'view', $pago['Banco']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Monto'); ?></dt>
		<dd>
			<?php echo h($pago['Pago']['monto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nro Deposito'); ?></dt>
		<dd>
			<?php echo h($pago['Pago']['nro_deposito']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Pago'), array('action' => 'edit', $pago['Pago']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Pago'), array('action' => 'delete', $pago['Pago']['id']), array(), __('Are you sure you want to delete # %s?', $pago['Pago']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pagos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pago'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Solicitud Arancels'), array('controller' => 'solicitud_arancels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Solicitud Arancel'), array('controller' => 'solicitud_arancels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bancos'), array('controller' => 'bancos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Banco'), array('controller' => 'bancos', 'action' => 'add')); ?> </li>
	</ul>
</div>
