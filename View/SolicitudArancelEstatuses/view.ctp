<div class="solicitudArancelEstatuses view">
<h2><?php echo __('Solicitud Arancel Estatus'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($solicitudArancelEstatus['SolicitudArancelEstatus']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Solicitud Arancel'); ?></dt>
		<dd>
			<?php echo $this->Html->link($solicitudArancelEstatus['SolicitudArancel']['nro_solicitud'], array('controller' => 'solicitud_arancels', 'action' => 'view', $solicitudArancelEstatus['SolicitudArancel']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($solicitudArancelEstatus['SolicitudArancelEstatus']['fecha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estatus Solicitud'); ?></dt>
		<dd>
			<?php echo $this->Html->link($solicitudArancelEstatus['EstatusSolicitud']['estatus'], array('controller' => 'estatus_solicituds', 'action' => 'view', $solicitudArancelEstatus['EstatusSolicitud']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Solicitud Arancel Estatus'), array('action' => 'edit', $solicitudArancelEstatus['SolicitudArancelEstatus']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Solicitud Arancel Estatus'), array('action' => 'delete', $solicitudArancelEstatus['SolicitudArancelEstatus']['id']), array(), __('Are you sure you want to delete # %s?', $solicitudArancelEstatus['SolicitudArancelEstatus']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Solicitud Arancel Estatuses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Solicitud Arancel Estatus'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Solicitud Arancels'), array('controller' => 'solicitud_arancels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Solicitud Arancel'), array('controller' => 'solicitud_arancels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estatus Solicituds'), array('controller' => 'estatus_solicituds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estatus Solicitud'), array('controller' => 'estatus_solicituds', 'action' => 'add')); ?> </li>
	</ul>
</div>
