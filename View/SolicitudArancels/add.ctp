

 <div class="col-md-6">
                            <div class="box box-info">
                                <div class="box-header">
                                    
                                    <h3 class="box-title"><?php echo $this->Html->image('solic.ico')."  Nueva Solcitud";?></h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    
<div class="solicitudArancels form">
<?php echo $this->Form->create('SolicitudArancel',array('inputDefaults'=>array('class'=>'form-control'))); ?>
	<fieldset>
		<legend></legend>
	<?php
		//echo $this->Form->input('nro_solicitud');
		//echo $this->Form->input('fecha');
		//echo $this->Form->input('user_id',);
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Solicitud Arancels'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pagos'), array('controller' => 'pagos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pago'), array('controller' => 'pagos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Solicitud Arancel Detalles'), array('controller' => 'solicitud_arancel_detalles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Solicitud Arancel Detalle'), array('controller' => 'solicitud_arancel_detalles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Solicitud Arancel Estatuses'), array('controller' => 'solicitud_arancel_estatuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Solicitud Arancel Estatus'), array('controller' => 'solicitud_arancel_estatuses', 'action' => 'add')); ?> </li>
	</ul>
</div>

                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- /.col -->
                    </div> <!-- /.row -->