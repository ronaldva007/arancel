<div class="col-md-6">
                            <div class="box box-info">
                                <div class="box-header">
                                    <i class="fa fa-bullhorn"></i>
                                    <h3 class="box-title"><?php echo __('Registrar Pago'); ?></h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">

                               <div class="pagos form">
<?php echo $this->Form->create('Pago',array('inputDefaults'=>array('class'=>'form-control'))); ?>
	<fieldset>
		<legend></legend>
	<?php
		echo $this->Form->input('solicitud_arancel_id');
		echo $this->Form->input('banco_id');
		echo $this->Form->input('monto');
		echo $this->Form->input('nro_deposito');
	?>
	</fieldset><br><br>
<?php echo $this->Form->end(__('Guardar')); ?>
</div>
  </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- /.col -->
                    </div> <!-- /.row -->
<!--<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Pagos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Solicitud Arancels'), array('controller' => 'solicitud_arancels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Solicitud Arancel'), array('controller' => 'solicitud_arancels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bancos'), array('controller' => 'bancos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Banco'), array('controller' => 'bancos', 'action' => 'add')); ?> </li>
	</ul>
</div>-->
