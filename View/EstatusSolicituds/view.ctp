<div class="estatusSolicituds view">
<h2><?php echo __('Estatus Solicitud'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($estatusSolicitud['EstatusSolicitud']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estatus'); ?></dt>
		<dd>
			<?php echo h($estatusSolicitud['EstatusSolicitud']['estatus']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Estatus Solicitud'), array('action' => 'edit', $estatusSolicitud['EstatusSolicitud']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Estatus Solicitud'), array('action' => 'delete', $estatusSolicitud['EstatusSolicitud']['id']), array(), __('Are you sure you want to delete # %s?', $estatusSolicitud['EstatusSolicitud']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Estatus Solicituds'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estatus Solicitud'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Solicitud Arancel Estatuses'), array('controller' => 'solicitud_arancel_estatuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Solicitud Arancel Estatus'), array('controller' => 'solicitud_arancel_estatuses', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Solicitud Arancel Estatuses'); ?></h3>
	<?php if (!empty($estatusSolicitud['SolicitudArancelEstatus'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Solicitud Arancel Id'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th><?php echo __('Estatus Solicitud Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($estatusSolicitud['SolicitudArancelEstatus'] as $solicitudArancelEstatus): ?>
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
