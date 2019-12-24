
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo ASSETS_URL."images/favicon.ico"?>">
    <title>Evaluacion Docente</title>
    <!-- Custom CSS -->
    <link href="<?php echo ASSETS_URL."libs/flot/css/float-chart.css"?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo ASSETS_URL."dist/css/style.min.css"?>" rel="stylesheet">
    <link href="<?php echo ASSETS_URL."libs/toastr/build/toastr.min.css"?>" rel="stylesheet">

   	
   
<!--===============================================================================================-->
    <link href="<?php echo ASSETS_URL."vendor/bootstrap/css/bootstrap.min.css"?>" rel="stylesheet">
<!--===============================================================================================-->
    <link href="<?php echo ASSETS_URL."vendor/animate/animate.css"?>" rel="stylesheet">
<!--===============================================================================================-->	
    <link href="<?php echo ASSETS_URL."vendor/css-hamburgers/hamburgers.min.css"?>" rel="stylesheet">
<!--===============================================================================================-->
    <link href="<?php echo ASSETS_URL."vendor/animsition/css/animsition.min.css"?>" rel="stylesheet">
<!--===============================================================================================-->
    <link href="<?php echo ASSETS_URL."vendor/select2/select2.min.css"?>" rel="stylesheet">
<!--===============================================================================================-->	
    <link href="<?php echo ASSETS_URL."vendor/daterangepicker/daterangepicker.css"?>" rel="stylesheet">
<!--===============================================================================================-->
    <link href="<?php echo ASSETS_URL."fonts/font-awesome-4.7.0/css/font-awesome.min.css"?>" rel="stylesheet">
<!--===============================================================================================-->
    <link href="<?php echo ASSETS_URL."fonts/Linearicons-Free-v1.0.0/icon-font.min.css"?>" rel="stylesheet">
<!--===============================================================================================-->
    <link href="<?php echo ASSETS_URL."fonts/iconic/css/material-design-iconic-font.min.css"?>" rel="stylesheet">
<!--===============================================================================================-->
<!--===============================================================================================-->
    <link href="<?php echo ASSETS_URL."css/util.css"?>" rel="stylesheet">
    <link href="<?php echo ASSETS_URL."css/main.css"?>" rel="stylesheet">
    <link href="<?php echo ASSETS_URL."css/style.css"?>" rel="stylesheet">
<!--===============================================================================================-->
</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper">
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <a class="navbar-brand" href="<?php echo ABS_PATH."user/index"?>">
                        <b class="logo-icon p-l-10">
                            
                            <img src="<?php echo ASSETS_URL."images/unicordoba_logo1.png"?>" width="90%" alt="homepage" class="light-logo" />
                        </b>
                    </a>
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                    </ul>
                    <ul class="navbar-nav float-right">
                        <li class="nav-item dropdown"><p><?php echo $_SESSION['user']. "-" .$_SESSION['user_id'] ;  ?></p>
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo ASSETS_URL."images/hombre.png"?>" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo ABS_PATH."user/logout"?>"><i class="fa fa-power-off m-r-5 m-l-5"></i>Cerrar Sesion</a>
                                <div class="dropdown-divider"></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo ABS_PATH."evaluation/index"?>" aria-expanded="false"><i class="fas fa-tasks"></i><span class="hide-menu">Evaluacion de Docentes</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-check-circle"></i><span class="hide-menu">Gestionar Usuarios </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?php echo ABS_PATH."user/registrarnuevo"?>" class="sidebar-link"><i class="mdi mdi-checkbox-multiple-marked"></i><span class="hide-menu">Agregar Usuario</span></a></li>
                                <li class="sidebar-item"><a href="<?php echo ABS_PATH."user/editaruser"?>" class="sidebar-link"><i class="fas fa-users"></i><span class="hide-menu">Detalles Usuario</span></a></li>
                                <li class="sidebar-item"><a href="<?php echo ABS_PATH."teacher/nuevo"?>" class="sidebar-link"><i class="mdi mdi-checkbox-multiple-marked"></i><span class="hide-menu">Agregar Profesor</span></a></li>
                                <li class="sidebar-item"><a href="<?php echo ABS_PATH."teacher/editarTeacher"?>" class="sidebar-link"><i class="fas fa-users"></i><span class="hide-menu">Detalles Profesor</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-building"></i><span class="hide-menu"> Gestionar Programas </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?php echo ABS_PATH."program/newProgram"?>" class="sidebar-link"><i class="mdi mdi-book-plus"></i><span class="hide-menu"> Agregar Programas</span></a></li>
                                <li class="sidebar-item"><a href="<?php echo ABS_PATH."program/index"?>" class="sidebar-link"><i class="mdi mdi-book-plus"></i><span class="hide-menu"> Mostrar Programas </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-barcode"></i><span class="hide-menu"> Gestion Pregunta </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?php echo ABS_PATH."questions/newQuestion"?>" class="sidebar-link"><i class="mdi mdi-barcode-scan"></i><span class="hide-menu"> Agregar Pregunta </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo ABS_PATH."questions/index"?>" class="sidebar-link"><i class="mdi mdi-barcode-scan"></i><span class="hide-menu"> Mostrar Pregunta </span></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>