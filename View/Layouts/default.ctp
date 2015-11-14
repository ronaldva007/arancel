<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/png" href="../img/unerg.ico" />

        <title>Sitema de solicitud de documentos</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <?php echo $this->Html->css('bootstrap.min');?>
        <!-- font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <?php echo $this->Html->css('font-awesome.min');?>
        <!-- Ionicons -->
        <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <?php echo $this->Html->css('ionicons.min');?>
        <!-- Morris chart -->
        <link href="css/morris/morris.css" rel="stylesheet" type="text/css" />
        <?php echo $this->Html->css('morris');?>
        <!-- jvectormap -->
        <link href="css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <?php echo $this->Html->css('jquery-jvectormap-1.2.2');?>
        <!-- fullCalendar -->
        <link href="css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
        <?php echo $this->Html->css('jquery-jvectormap-1.2.2');?>
        <!-- Daterange picker -->
        <link href="css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <?php echo $this->Html->css('AdminLTE');?>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.html" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Secretaria
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>Jane Doe <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <?php echo $this->Html->image('usuario.png')?>
                                    <p>
                                        <?php echo $this->set('username')?>
                                       
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        
                                    </div>
                                    <div class="col-xs-4 text-center">
                                       
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        
                                    </div>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        
                                    </div>
                                    <div class="pull-right">
                                      <button class="bg-light-blue">  <?php echo $this->Html->link('Cerrar Sesion',array('controller'=>'users','action'=>'logout')); ?></button>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        
                            <center>MENU</center> 
                    
                        <div class="pull-left info">
                           
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            
                            <span class="input-group-btn">
                                
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="index.html">
                                 <span><?php echo $this->Html->image('home.ico')."  Inicio";?></span>
                            </a>
                        </li>
                       
                        <li class="treeview">
                            <a href="#">
                                
                                 <span><?php echo $this->Html->image('doc.ico')."  Solicitudes";?></span>
                                
                            </a>
                            <ul class="treeview-menu">
                                <li><i ></i> <?php echo $this->Html->link('Nueva Solicitud',array('controller'=>'solicitudArancels','action'=>'add')); ?></a></li>
                                <li><?php echo $this->Html->link('Estatus Solicitud',array('controller'=>'solicitudArancelEstatuses','action'=>'index')); ?></li>
                                <li><?php echo $this->Html->link('Registrar Pago',array('controller'=>'pagos','action'=>'add')); ?></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                
                                <span><?php echo $this->Html->image('user.ico')."  Mi Perfil";?></span>
                                
                            </a>
                            <ul class="treeview-menu">
                                <li><?php echo $this->Html->link('Editar Datos',array('controller'=>'users','action'=>'edit')); ?></li>
                                 <li><?php echo $this->Html->link('Consultar Pagos',array('controller'=>'pagos','action'=>'index')); ?></li>

                            </ul>
                        </li>
                          <li class="treeview">
                            <a href="#">
                                
                                <span><?php echo $this->Html->image('salir.ico')."  Sesion";?></span>
                                
                            </a>
                            <ul class="treeview-menu">
                                <li><?php echo $this->Html->link('Cerrar Sesion',array('controller'=>'users','action'=>'logout')); ?></li>

                            </ul>
                        </li>
                        

                        <li class="treeview">
                            <a href="#">
                               
                        </li>
                       
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
               

                <!-- Main content -->
                <section class="content">

                    <!-- Small boxes (Stat box) -->
                  <?php echo $this->Session->flash();?>
	<?php echo $this->fetch('content');?>

                    <!-- top row -->
                    <div class="row">
                        <div class="col-xs-12 connectedSortable">
                            
                        </div><!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- Main row -->
                    
                                
                            
                            <!-- Custom tabs (Charts with tabs)-->
                           
                                                
                            <!-- Calendar -->
                           
                            </div><!-- /.box -->

                            <!-- quick email widget -->
                            
                        </section><!-- /.Left col -->
                        <!-- right col (We are only adding the ID to make the widgets sortable)-->
                        
                            <!-- /.box -->

                            <!-- Chat box -->
                           
                                    <!-- chat item -->
                                    
                                    <!-- chat item -->
                                 

                            <!-- TO DO List -->
                          
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <?php echo $this->Html->script('jquery-1.11.3.min');?>
        <!-- jQuery UI 1.10.3 -->
        <script src="js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
       <?php echo $this->Html->script('jquery-ui-1.10.3.min');?>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <?php echo $this->Html->script('bootstrap.min');?>
        <!-- Morris.js charts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="js/plugins/morris/morris.min.js" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- fullCalendar -->
        <script src="js/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="js/AdminLTE/app.js" type="text/javascript"></script>
        <?php echo $this->Html->script('app'); ?>
        
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="js/AdminLTE/dashboard.js" type="text/javascript"></script>
        <?php echo $this->Html->script('dashboard'); ?>        

    </body>
</html>