<div class="estatusSolicituds index">
	<h2><?php echo __('Estatus Solicituds'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('estatus'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($estatusSolicituds as $estatusSolicitud): ?>
	<tr>
		<td><?php echo h($estatusSolicitud['EstatusSolicitud']['id']); ?>&nbsp;</td>
		<td><?php echo h($estatusSolicitud['EstatusSolicitud']['estatus']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $estatusSolicitud['EstatusSolicitud']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $estatusSolicitud['EstatusSolicitud']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $estatusSolicitud['EstatusSolicitud']['id']), array(), __('Are you sure you want to delete # %s?', $estatusSolicitud['EstatusSolicitud']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Estatus Solicitud'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Solicitud Arancel Estatuses'), array('controller' => 'solicitud_arancel_estatuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Solicitud Arancel Estatus'), array('controller' => 'solicitud_arancel_estatuses', 'action' => 'add')); ?> </li>
	</ul>
</div>
