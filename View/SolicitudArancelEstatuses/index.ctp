 <div class="box-body"><div class="solicitudArancelEstatuses index">
	<h2><?php echo __('Consultar Estatus'); ?></h2>
	<table cellpadding="0" cellspacing="0" class= "table table-bordered">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('solicitud_arancel_id'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha'); ?></th>
			<th><?php echo $this->Paginator->sort('estatus_solicitud_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($solicitudArancelEstatuses as $solicitudArancelEstatus): ?>
	<tr>
		<td><?php echo h($solicitudArancelEstatus['SolicitudArancelEstatus']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($solicitudArancelEstatus['SolicitudArancel']['nro_solicitud'], array('controller' => 'solicitud_arancels', 'action' => 'view', $solicitudArancelEstatus['SolicitudArancel']['id'])); ?>
		</td>
		<td><?php echo h($solicitudArancelEstatus['SolicitudArancelEstatus']['fecha']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($solicitudArancelEstatus['EstatusSolicitud']['estatus'], array('controller' => 'estatus_solicituds', 'action' => 'view', $solicitudArancelEstatus['EstatusSolicitud']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $solicitudArancelEstatus['SolicitudArancelEstatus']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $solicitudArancelEstatus['SolicitudArancelEstatus']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $solicitudArancelEstatus['SolicitudArancelEstatus']['id']), array(), __('Are you sure you want to delete # %s?', $solicitudArancelEstatus['SolicitudArancelEstatus']['id'])); ?>
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
</div></div>
<!--<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Solicitud Arancel Estatus'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Solicitud Arancels'), array('controller' => 'solicitud_arancels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Solicitud Arancel'), array('controller' => 'solicitud_arancels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estatus Solicituds'), array('controller' => 'estatus_solicituds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estatus Solicitud'), array('controller' => 'estatus_solicituds', 'action' => 'add')); ?> </li>
	</ul>
</div>-->
