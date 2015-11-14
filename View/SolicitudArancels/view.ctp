<div class="solicitudArancels view">
<h2><?php echo __('Solicitud Arancel'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($solicitudArancel['SolicitudArancel']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nro Solicitud'); ?></dt>
		<dd>
			<?php echo h($solicitudArancel['SolicitudArancel']['nro_solicitud']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($solicitudArancel['SolicitudArancel']['fecha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($solicitudArancel['User']['username'], array('controller' => 'users', 'action' => 'view', $solicitudArancel['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Solicitud Arancel'), array('action' => 'edit', $solicitudArancel['SolicitudArancel']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Solicitud Arancel'), array('action' => 'delete', $solicitudArancel['SolicitudArancel']['id']), array(), __('Are you sure you want to delete # %s?', $solicitudArancel['SolicitudArancel']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Solicitud Arancels'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Solicitud Arancel'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pagos'), array('controller' => 'pagos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pago'), array('controller' => 'pagos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Solicitud Arancel Detalles'), array('controller' => 'solicitud_arancel_detalles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Solicitud Arancel Detalle'), array('controller' => 'solicitud_arancel_detalles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Solicitud Arancel Estatuses'), array('controller' => 'solicitud_arancel_estatuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Solicitud Arancel Estatus'), array('controller' => 'solicitud_arancel_estatuses', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Pagos'); ?></h3>
	<?php if (!empty($solicitudArancel['Pago'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Solicitud Arancel Id'); ?></th>
		<th><?php echo __('Banco Id'); ?></th>
		<th><?php echo __('Monto'); ?></th>
		<th><?php echo __('Nro Deposito'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($solicitudArancel['Pago'] as $pago): ?>
		<tr>
			<td><?php echo $pago['id']; ?></td>
			<td><?php echo $pago['solicitud_arancel_id']; ?></td>
			<td><?php echo $pago['banco_id']; ?></td>
			<td><?php echo $pago['monto']; ?></td>
			<td><?php echo $pago['nro_deposito']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'pagos', 'action' => 'view', $pago['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'pagos', 'action' => 'edit', $pago['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'pagos', 'action' => 'delete', $pago['id']), array(), __('Are you sure you want to delete # %s?', $pago['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Pago'), array('controller' => 'pagos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Solicitud Arancel Detalles'); ?></h3>
	<?php if (!empty($solicitudArancel['SolicitudArancelDetalle'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Solicitud Arancel Id'); ?></th>
		<th><?php echo __('Arancel Id'); ?></th>
		<th><?php echo __('Cantidad'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($solicitudArancel['SolicitudArancelDetalle'] as $solicitudArancelDetalle): ?>
		<tr>
			<td><?php echo $solicitudArancelDetalle['id']; ?></td>
			<td><?php echo $solicitudArancelDetalle['solicitud_arancel_id']; ?></td>
			<td><?php echo $solicitudArancelDetalle['arancel_id']; ?></td>
			<td><?php echo $solicitudArancelDetalle['cantidad']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'solicitud_arancel_detalles', 'action' => 'view', $solicitudArancelDetalle['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'solicitud_arancel_detalles', 'action' => 'edit', $solicitudArancelDetalle['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'solicitud_arancel_detalles', 'action' => 'delete', $solicitudArancelDetalle['id']), array(), __('Are you sure you want to delete # %s?', $solicitudArancelDetalle['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Solicitud Arancel Detalle'), array('controller' => 'solicitud_arancel_detalles', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Solicitud Arancel Estatuses'); ?></h3>
	<?php if (!empty($solicitudArancel['SolicitudArancelEstatus'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Solicitud Arancel Id'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th><?php echo __('Estatus Solicitud Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($solicitudArancel['SolicitudArancelEstatus'] as $solicitudArancelEstatus): ?>
		<tr>
			<td><?php echo $solicitudArancelEstatus['id']; ?></td>
			<td><?php echo $solicitudArancelEstatus['solicitud_arancel_id']; ?></td>
			<td><?php echo $solicitudArancelEstatus['fecha']; ?></td>
			<td><?php echo $solicitudArancelEstatus['estatus_solicitud_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'solicitud_arancel_estatuses', 'action' => 'view', $solicitudArancelEstatus['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'solicitud_arancel_estatuses', 'action' => 'edit', $solicitudArancelEstatus['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'solicitud_arancel_estatuses', 'action' => 'delete', $solicitudArancelEstatus['id']), array(), __('Are you sure you want to delete # %s?', $solicitudArancelEstatus['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Solicitud Arancel Estatus'), array('controller' => 'solicitud_arancel_estatuses', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
