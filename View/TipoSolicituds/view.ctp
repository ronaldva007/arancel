<div class="tipoSolicituds view">
<h2><?php echo __('Tipo Solicitud'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tipoSolicitud['TipoSolicitud']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Solicitud'); ?></dt>
		<dd>
			<?php echo h($tipoSolicitud['TipoSolicitud']['solicitud']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tipo Solicitud'), array('action' => 'edit', $tipoSolicitud['TipoSolicitud']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tipo Solicitud'), array('action' => 'delete', $tipoSolicitud['TipoSolicitud']['id']), array(), __('Are you sure you want to delete # %s?', $tipoSolicitud['TipoSolicitud']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo Solicituds'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Solicitud'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Citas'), array('controller' => 'citas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cita'), array('controller' => 'citas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Citas'); ?></h3>
	<?php if (!empty($tipoSolicitud['Cita'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Fecha Ini'); ?></th>
		<th><?php echo __('Fecha Fin'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Tipo Solicitud Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tipoSolicitud['Cita'] as $cita): ?>
		<tr>
			<td><?php echo $cita['id']; ?></td>
			<td><?php echo $cita['fecha_ini']; ?></td>
			<td><?php echo $cita['fecha_fin']; ?></td>
			<td><?php echo $cita['user_id']; ?></td>
			<td><?php echo $cita['tipo_solicitud_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'citas', 'action' => 'view', $cita['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'citas', 'action' => 'edit', $cita['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'citas', 'action' => 'delete', $cita['id']), array(), __('Are you sure you want to delete # %s?', $cita['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cita'), array('controller' => 'citas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
