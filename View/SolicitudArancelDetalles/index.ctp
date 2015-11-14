<div class="solicitudArancelDetalles index">
	<h2><?php echo __('Solicitud Arancel Detalles'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('solicitud_arancel_id'); ?></th>
			<th><?php echo $this->Paginator->sort('arancel_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cantidad'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($solicitudArancelDetalles as $solicitudArancelDetalle): ?>
	<tr>
		<td><?php echo h($solicitudArancelDetalle['SolicitudArancelDetalle']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($solicitudArancelDetalle['SolicitudArancel']['nro_solicitud'], array('controller' => 'solicitud_arancels', 'action' => 'view', $solicitudArancelDetalle['SolicitudArancel']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($solicitudArancelDetalle['Arancel']['nombre'], array('controller' => 'arancels', 'action' => 'view', $solicitudArancelDetalle['Arancel']['id'])); ?>
		</td>
		<td><?php echo h($solicitudArancelDetalle['SolicitudArancelDetalle']['cantidad']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $solicitudArancelDetalle['SolicitudArancelDetalle']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $solicitudArancelDetalle['SolicitudArancelDetalle']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $solicitudArancelDetalle['SolicitudArancelDetalle']['id']), array(), __('Are you sure you want to delete # %s?', $solicitudArancelDetalle['SolicitudArancelDetalle']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Solicitud Arancel Detalle'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Solicitud Arancels'), array('controller' => 'solicitud_arancels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Solicitud Arancel'), array('controller' => 'solicitud_arancels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Arancels'), array('controller' => 'arancels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Arancel'), array('controller' => 'arancels', 'action' => 'add')); ?> </li>
	</ul>
</div>
