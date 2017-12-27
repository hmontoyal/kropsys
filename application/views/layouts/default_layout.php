<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title;?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets/admin_theme') ?>/vendor/bootstrap/css/bootstrap.min.css?v=<?php echo VERSION; ?>" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href=".<?php echo base_url('assets/admin_theme') ?>/vendor/metisMenu/metisMenu.min.css?v=<?php echo VERSION; ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/admin_theme') ?>/dist/css/sb-admin-2.css?v=<?php echo VERSION; ?>" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url('assets/admin_theme') ?>/vendor/morrisjs/morris.css?v=<?php echo VERSION; ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('assets/admin_theme') ?>/vendor/font-awesome/css/font-awesome.min.css?v=<?php echo VERSION; ?>" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="<?php echo base_url('assets/admin_theme')?>/vendor/datepicker/datepicker3.css?v=<?php echo VERSION; ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/admin_theme'); ?>/vendor/bootstrap-select/dist/css/bootstrap-select.css?v=<?php echo VERSION; ?>">
	 <link rel="stylesheet" href="<?php echo base_url('assets/admin_theme/vendor') ?>/toastr/toastr.css?v=<?php echo VERSION; ?>">
    <?php foreach ($css as $css) :?>
    <link href="<?php echo base_url('assets/admin_theme/').$css.'?v='.VERSION ; ?>" rel="stylesheet" />
    <?php endforeach; ?>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin_theme')?>/vendor/datatables-plugins/buttons.dataTables.min.css?v=<?php echo VERSION; ?>">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-light navbar-static-top bg-inverse" role="navigation" style="margin-bottom: 0;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url(); ?>">
                    <img src="<?php echo base_url('assets/img/logo.png') ?>" alt="" class="logo" style="height:30px;margin-top:-5px;">
                </a>
            </div>
            <!-- /.navbar-header -->

       <ul class="nav navbar-top-links navbar-right">
               
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                       <li><a href="#"><i class="fa fa-user fa-fw"></i><?php echo $auth_email; ?></a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url('logout'); ?>"><i class="fa fa-sign-out fa-fw"></i> Salir</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
	            <!-- /.navbar-top-links -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                      <!--   <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                        
                        </li> -->
                        <li>
                            <a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard fa-fw"></i> Inicio</a>
                        </li>
                           <li>
                            <a href="<?php echo base_url('registros'); ?>"><i class="fa fa-eye fa-fw"></i> Mis Registros</a>
                        </li>

                      <li>
                            <a href="#"><i class="fa fa-calendar fa-fw"></i> Cupos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url('cupos/listado'); ?>">Listado</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('cupos'); ?>">Ingresar cupo</a>
                                </li>
                       </ul>
                          
                        </li> 
                        <!-- <li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">Panels and Wells</a>
                                </li>
                                <li>
                                    <a href="buttons.html">Buttons</a>
                                </li>
                                <li>
                                    <a href="notifications.html">Notifications</a>
                                </li>
                                <li>
                                    <a href="typography.html">Typography</a>
                                </li>
                                <li>
                                    <a href="icons.html"> Icons</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grid</a>
                                </li>
                            </ul>
                            
                        </li> -->
                        <!-- <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul>
                                  </li>
                            </ul>
                           
                        </li> -->
                       <!--  <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html">Blank Page</a>
                                </li>
                                <li>
                                    <a href="login.html">Login Page</a>
                                </li>
                            </ul>
                            
                        </li> -->
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->


        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><?php echo $page_header; ?></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
              <!-- PAGE CONTENT BEGINS -->
 <?php echo $contents;?>
 <!-- PAGE CONTENT ENDS -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->



                   <!-- Modal -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                        </div>
                                        <div class="modal-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/admin_theme') ?>/vendor/jquery/jquery.min.js?v=<?php echo VERSION; ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/admin_theme') ?>/vendor/bootstrap/js/bootstrap.min.js?v=<?php echo VERSION; ?>"></script>
      <script src="<?php echo base_url('assets/admin_theme') ?>/vendor/ajaxform/jquery.form.js?v=<?php echo VERSION; ?>"></script>
    <script src="<?php echo base_url('assets/admin_theme') ?>/dist/js/sb-admin-2.js?v=<?php echo VERSION; ?>"></script>
     <script src="<?php echo base_url('assets/admin_theme/vendor')?>/metisMenu/metisMenu.min.js?v=<?php echo VERSION; ?>"></script>
     <script src="<?php echo base_url('assets/admin_theme/vendor') ?>/jquery-validation/jquery.validate.js?v=<?php echo VERSION; ?>"></script>
     <script src="<?php echo base_url('assets/admin_theme/vendor') ?>/mask/jquery.mask.js?v=<?php echo VERSION; ?>"></script>
	 <script src="<?php echo base_url('assets/admin_theme/vendor') ?>/toastr/toastr.min.js?v=<?php echo VERSION; ?>"></script>
     <script type="text/javascript" src="<?php echo base_url('assets/admin_theme/vendor')?>/timepicker/dist/wickedpicker.min.js?v=<?php echo VERSION; ?>"></script>
     <script type="text/javascript" src="<?php echo base_url('assets/admin_theme/vendor')?>/datepicker/bootstrap-datepicker.js?v=<?php echo VERSION; ?>"></script>
      <script type="text/javascript" src="<?php echo base_url('assets/admin_theme/vendor')?>/datepicker/locales/bootstrap-datepicker.es.js?v=<?php echo VERSION; ?>"></script>
     <script type="text/javascript" src="<?php echo base_url('assets/admin_theme/vendor')?>/bootstrap-select/dist/js/bootstrap-select.js?v=<?php echo VERSION; ?>"></script>
     <script src="<?php echo base_url('assets')?>/global.js?v=<?php echo VERSION; ?>"></script>
         <script type="text/javascript" src="<?php echo base_url('assets/admin_theme/vendor')?>/snow/snowfall.jquery.min.js?v=<?php echo VERSION; ?>"></script>
  
 <?php foreach ($scripts as $js) :?>
        <script src="<?php echo base_url('assets/admin_theme/').$js.'?v='.VERSION; ?>"></script>
    <?php endforeach; ?>
</body>

</html>
