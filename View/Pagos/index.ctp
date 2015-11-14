<div class="pagos index">
	<h2><?php echo __('Pagos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('solicitud_arancel_id'); ?></th>
			<th><?php echo $this->Paginator->sort('banco_id'); ?></th>
			<th><?php echo $this->Paginator->sort('monto'); ?></th>
			<th><?php echo $this->Paginator->sort('nro_deposito'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($pagos as $pago): ?>
	<tr>
		<td><?php echo h($pago['Pago']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($pago['SolicitudArancel']['nro_solicitud'], array('controller' => 'solicitud_arancels', 'action' => 'view', $pago['SolicitudArancel']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($pago['Banco']['banco'], array('controller' => 'bancos', 'action' => 'view', $pago['Banco']['id'])); ?>
		</td>
		<td><?php echo h($pago['Pago']['monto']); ?>&nbsp;</td>
		<td><?php echo h($pago['Pago']['nro_deposito']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $pago['Pago']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $pago['Pago']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $pago['Pago']['id']), array(), __('Are you sure you want to delete # %s?', $pago['Pago']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Pago'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Solicitud Arancels'), array('controller' => 'solicitud_arancels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Solicitud Arancel'), array('controller' => 'solicitud_arancels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bancos'), array('controller' => 'bancos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Banco'), array('controller' => 'bancos', 'action' => 'add')); ?> </li>
	</ul>
</div>
