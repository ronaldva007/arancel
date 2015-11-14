<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grupos'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Grupos']['id'], array('controller' => 'grupos', 'action' => 'view', $user['Grupos']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($user['User']['updated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cedula'); ?></dt>
		<dd>
			<?php echo h($user['User']['cedula']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellidos'); ?></dt>
		<dd>
			<?php echo h($user['User']['apellidos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombres'); ?></dt>
		<dd>
			<?php echo h($user['User']['nombres']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($user['User']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Correo'); ?></dt>
		<dd>
			<?php echo h($user['User']['correo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array(), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grupos'), array('controller' => 'grupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupos'), array('controller' => 'grupos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Citas'), array('controller' => 'citas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cita'), array('controller' => 'citas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Citas'); ?></h3>
	<?php if (!empty($user['Cita'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Fecha Ini'); ?></th>
		<th><?php echo __('Fecha Fin'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Tipo Solicitud Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Cita'] as $cita): ?>
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
