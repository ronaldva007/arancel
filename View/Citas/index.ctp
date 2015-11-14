<div class="citas index">
	<h2><?php echo __('Citas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_ini'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_fin'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo_solicitud_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($citas as $cita): ?>
	<tr>
		<td><?php echo h($cita['Cita']['id']); ?>&nbsp;</td>
		<td><?php echo h($cita['Cita']['fecha_ini']); ?>&nbsp;</td>
		<td><?php echo h($cita['Cita']['fecha_fin']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cita['User']['username'], array('controller' => 'users', 'action' => 'view', $cita['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($cita['TipoSolicitud']['solicitud'], array('controller' => 'tipo_solicituds', 'action' => 'view', $cita['TipoSolicitud']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cita['Cita']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cita['Cita']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cita['Cita']['id']), array(), __('Are you sure you want to delete # %s?', $cita['Cita']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Cita'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo Solicituds'), array('controller' => 'tipo_solicituds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Solicitud'), array('controller' => 'tipo_solicituds', 'action' => 'add')); ?> </li>
	</ul>
</div>
