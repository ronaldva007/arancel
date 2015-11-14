<div class="configuraciones index">
	<h2><?php echo __('Configuraciones'); ?></h2>
	<table  class="table table-bordered table-hover" width="100%">
	
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('vigencia_solicitud'); ?></th>
			<th><?php echo $this->Paginator->sort('dias_elaboracion'); ?></th>
			<th><?php echo $this->Paginator->sort('dias_firma'); ?></th>
			<th><?php echo $this->Paginator->sort('dias_entrega'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($configuraciones as $configuracione): ?>
	<tr>
		<td><?php echo h($configuracione['Configuracione']['id']); ?>&nbsp;</td>
		<td><?php echo h($configuracione['Configuracione']['vigencia_solicitud']); ?>&nbsp;</td>
		<td><?php echo h($configuracione['Configuracione']['dias_elaboracion']); ?>&nbsp;</td>
		<td><?php echo h($configuracione['Configuracione']['dias_firma']); ?>&nbsp;</td>
		<td><?php echo h($configuracione['Configuracione']['dias_entrega']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $configuracione['Configuracione']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $configuracione['Configuracione']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $configuracione['Configuracione']['id']), array(), __('Are you sure you want to delete # %s?', $configuracione['Configuracione']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Configuracione'), array('action' => 'add')); ?></li>
	</ul>
</div>
