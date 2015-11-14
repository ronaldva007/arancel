<div class="arancels view">
<h2><?php echo __('Arancel'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($arancel['Arancel']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($arancel['Arancel']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Monto'); ?></dt>
		<dd>
			<?php echo h($arancel['Arancel']['monto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Max'); ?></dt>
		<dd>
			<?php echo h($arancel['Arancel']['max']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Arancel'), array('action' => 'edit', $arancel['Arancel']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Arancel'), array('action' => 'delete', $arancel['Arancel']['id']), array(), __('Are you sure you want to delete # %s?', $arancel['Arancel']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Arancels'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Arancel'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Solicitud Arancel Detalles'), array('controller' => 'solicitud_arancel_detalles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Solicitud Arancel Detalle'), array('controller' => 'solicitud_arancel_detalles', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Solicitud Arancel Detalles'); ?></h3>
	<?php if (!empty($arancel['SolicitudArancelDetalle'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Solicitud Arancel Id'); ?></th>
		<th><?php echo __('Arancel Id'); ?></th>
		<th><?php echo __('Cantidad'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($arancel['SolicitudArancelDetalle'] as $solicitudArancelDetalle): ?>
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
