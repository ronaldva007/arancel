<div class="solicitudArancelDetalles view">
<h2><?php echo __('Solicitud Arancel Detalle'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($solicitudArancelDetalle['SolicitudArancelDetalle']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Solicitud Arancel'); ?></dt>
		<dd>
			<?php echo $this->Html->link($solicitudArancelDetalle['SolicitudArancel']['nro_solicitud'], array('controller' => 'solicitud_arancels', 'action' => 'view', $solicitudArancelDetalle['SolicitudArancel']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Arancel'); ?></dt>
		<dd>
			<?php echo $this->Html->link($solicitudArancelDetalle['Arancel']['nombre'], array('controller' => 'arancels', 'action' => 'view', $solicitudArancelDetalle['Arancel']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cantidad'); ?></dt>
		<dd>
			<?php echo h($solicitudArancelDetalle['SolicitudArancelDetalle']['cantidad']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Solicitud Arancel Detalle'), array('action' => 'edit', $solicitudArancelDetalle['SolicitudArancelDetalle']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Solicitud Arancel Detalle'), array('action' => 'delete', $solicitudArancelDetalle['SolicitudArancelDetalle']['id']), array(), __('Are you sure you want to delete # %s?', $solicitudArancelDetalle['SolicitudArancelDetalle']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Solicitud Arancel Detalles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Solicitud Arancel Detalle'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Solicitud Arancels'), array('controller' => 'solicitud_arancels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Solicitud Arancel'), array('controller' => 'solicitud_arancels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Arancels'), array('controller' => 'arancels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Arancel'), array('controller' => 'arancels', 'action' => 'add')); ?> </li>
	</ul>
</div>
