<div class="bancos view">
<h2><?php echo __('Banco'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($banco['Banco']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Banco'); ?></dt>
		<dd>
			<?php echo h($banco['Banco']['banco']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Banco'), array('action' => 'edit', $banco['Banco']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Banco'), array('action' => 'delete', $banco['Banco']['id']), array(), __('Are you sure you want to delete # %s?', $banco['Banco']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Bancos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Banco'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pagos'), array('controller' => 'pagos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pago'), array('controller' => 'pagos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Pagos'); ?></h3>
	<?php if (!empty($banco['Pago'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Solicitud Arancel Id'); ?></th>
		<th><?php echo __('Banco Id'); ?></th>
		<th><?php echo __('Monto'); ?></th>
		<th><?php echo __('Nro Deposito'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($banco['Pago'] as $pago): ?>
		<tr>
			<td><?php echo $pago['id']; ?></td>
			<td><?php echo $pago['solicitud_arancel_id']; ?></td>
			<td><?php echo $pago['banco_id']; ?></td>
			<td><?php echo $pago['monto']; ?></td>
			<td><?php echo $pago['nro_deposito']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'pagos', 'action' => 'view', $pago['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'pagos', 'action' => 'edit', $pago['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'pagos', 'action' => 'delete', $pago['id']), array(), __('Are you sure you want to delete # %s?', $pago['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Pago'), array('controller' => 'pagos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
