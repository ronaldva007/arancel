
<!DOCTYPE html>
<html class="bg-gray">
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE | Registration Page</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <?php echo $this->Html->css('bootstrap.min'); ?>
        <!-- font Awesome -->
        <link href="../../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <?php echo $this->Html->css('font-awesome.minn'); ?>
        <!-- Theme style -->
        <link href="../../css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <?php echo $this->Html->css('AdminLTE'); ?>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bg-black">

        <div class="form-box" id="login-box">
            <div class="header bg-blue"><?php echo __('Registro'); ?></div>
            
                <div class="body bg-gray">
                    <?php echo $this->Form->create('User',array('inputDefaults'=>array('class'=>'form-control'))); ?>
		<legend></legend>
	<?php
		//echo $this->Form->input('username');
		//echo $this->Form->input('password');
		//echo $this->Form->input('grupos_id');
		echo $this->Form->input('cedula');
		echo $this->Form->input('apellidos');
		echo $this->Form->input('nombres');
		echo $this->Form->input('telefono');
		echo $this->Form->input('correo');
	?>
	</fieldset><br><br>
<?php echo $this->Form->end(__('Guardar')); ?>
                </div>
                <div class="footer">                    

                    <a href="register.html" class="text-center"><?php echo $this->Html->link('¿Ya es un usuario?',array('controller'=>'users','action'=>'login')); ?></a>
                    
                </div>
            </form>

        </div>


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../../js/bootstrap.min.js" type="text/javascript"></script>

    </body>
</html>