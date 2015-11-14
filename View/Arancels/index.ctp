 <div class="span10">
	<h2><?php echo __('Arancels'); ?></h2>
	<table  class="table table-bordered table-hover" width="100%">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('monto'); ?></th>
			<th><?php echo $this->Paginator->sort('max'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($arancels as $arancel): ?>
	<tr>
		<td><?php echo h($arancel['Arancel']['id']); ?>&nbsp;</td>
		<td><?php echo h($arancel['Arancel']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($arancel['Arancel']['monto']); ?>&nbsp;</td>
		<td><?php echo h($arancel['Arancel']['max']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $arancel['Arancel']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $arancel['Arancel']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $arancel['Arancel']['id']), array(), __('Are you sure you want to delete # %s?', $arancel['Arancel']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Arancel'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Solicitud Arancel Detalles'), array('controller' => 'solicitud_arancel_detalles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Solicitud Arancel Detalle'), array('controller' => 'solicitud_arancel_detalles', 'action' => 'add')); ?> </li>
	</ul>
</div>
