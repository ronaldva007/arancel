<!DOCTYPE html>
<html class="bg-black">
    <head>
    <link rel="icon" type="image/png" href="../img/unerg.ico" />
        <meta charset="UTF-8">
        <title>Sistema de solicitud de documentos</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
         <?php echo $this->Html->css('bootstrap.min'); ?>
        <!-- font Awesome -->
        <link href="../../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
         <?php echo $this->Html->css('font-awesome.min'); ?>
        <!-- Theme style -->
        <link href="../../css/AdminLTE.css" rel="stylesheet" type="text/css" />
         <?php echo $this->Html->css('AdminLTE.css'); ?>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bg-black">

        <div class="form-box" id="login-box">
            <div class="header bg-blue">Iniciar Sesion</div>
            
                <div class="body bg-gray">
                         
                    <div class="form-group ">
                        <?php
	echo $this->Session->flash('auth');

	echo $this->Form->create('User',
							array('inputDefaults'=> array('class'=>'form-control'))
							);

		echo $this->Form->input('username', array('label'=>'Nombre de Usuario', 'placeholder'=>'Ingrese su nombre de Usuario'));
		echo $this->Form->input('password', array('label' => 'Contraseña', 'placeholder' => 'Ingrese su Contraseña' ));
		?>
		<br>
		<br>
		<?php
	echo $this->Form->end('Entrar', array('class' => 'btn-block'));
?>
                    </div>
                </div>
                <div class="footer">                                                               
                     
                    
                  
                    
                    <a href="register.html" class="text-center"><?php echo $this->Html->link('Registro',array('controller'=>'users','action'=>'add')); ?></a>
                </div>
            </form>

            <div class="margin text-center">
           

            </div>
        </div>


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../../js/bootstrap.min.js" type="text/javascript"></script> 
        <?php echo $this->Html->script('bootstrap.min'); ?>       

    </body>
</html>