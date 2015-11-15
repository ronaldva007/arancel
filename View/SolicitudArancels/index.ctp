<div class="solicitudArancels index">
	<h2><?php echo __('Mis Solicitudes de Arancels'); ?></h2>
	<table  class="table table-bordered table-hover" width="100%">
	<?php echo $this->Html->link(__('Nueva Solicitud'), array('controller' => 'solicitudArancels','action' => 'add')); ?>
	<thead>
	<tr>
			<!--<th><?php echo $this->Paginator->sort('id'); ?></th>-->
			<th><?php echo $this->Paginator->sort('nro_solicitud'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th>Estatus</th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($solicitudArancels as $solicitudArancel): ?>
	<tr>
		<!--<td><?php echo h($solicitudArancel['SolicitudArancel']['id']); ?>&nbsp;</td>-->
		<td><?php echo h($solicitudArancel['SolicitudArancel']['nro_solicitud']); ?>&nbsp;</td>
		<td><?php echo h($solicitudArancel['SolicitudArancel']['fecha']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($solicitudArancel['User']['nombres']." ".$solicitudArancel['User']['apellidos'], array('controller' => 'users', 'action' => 'view', $solicitudArancel['User']['id'])); ?>
		</td>
		<td>Abierta</td>
		<td class="actions">
		<i class="fa fa-desktop	"></i><?php echo $this->Html->link(__('Cerrar'), array('action' => 'view', $solicitudArancel['SolicitudArancel']['id'])); ?>
		<?php echo $this->Html->link(__('Pagar'), array('controller' => 'pagos','action' => 'add', $solicitudArancel['SolicitudArancel']['id'])); ?>



			<!--<?php echo $this->Html->link(__('View'), array('action' => 'view', $solicitudArancel['SolicitudArancel']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $solicitudArancel['SolicitudArancel']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $solicitudArancel['SolicitudArancel']['id']), array(), __('Are you sure you want to delete # %s?', $solicitudArancel['SolicitudArancel']['id'])); ?>-->
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
	<hr>
</div>
<!--<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Solicitud Arancel'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pagos'), array('controller' => 'pagos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pago'), array('controller' => 'pagos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Solicitud Arancel Detalles'), array('controller' => 'solicitud_arancel_detalles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Solicitud Arancel Detalle'), array('controller' => 'solicitud_arancel_detalles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Solicitud Arancel Estatuses'), array('controller' => 'solicitud_arancel_estatuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Solicitud Arancel Estatus'), array('controller' => 'solicitud_arancel_estatuses', 'action' => 'add')); ?> </li>
	</ul>
</div>-->

