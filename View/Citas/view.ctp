<div class="citas view">
<h2><?php echo __('Cita'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cita['Cita']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Ini'); ?></dt>
		<dd>
			<?php echo h($cita['Cita']['fecha_ini']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Fin'); ?></dt>
		<dd>
			<?php echo h($cita['Cita']['fecha_fin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cita['User']['username'], array('controller' => 'users', 'action' => 'view', $cita['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo Solicitud'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cita['TipoSolicitud']['solicitud'], array('controller' => 'tipo_solicituds', 'action' => 'view', $cita['TipoSolicitud']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cita'), array('action' => 'edit', $cita['Cita']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cita'), array('action' => 'delete', $cita['Cita']['id']), array(), __('Are you sure you want to delete # %s?', $cita['Cita']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Citas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cita'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo Solicituds'), array('controller' => 'tipo_solicituds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Solicitud'), array('controller' => 'tipo_solicituds', 'action' => 'add')); ?> </li>
	</ul>
</div>
