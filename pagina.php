<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/favicon.png">

    <title>Easy Account</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700,800' rel='stylesheet'
          type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:300,200,100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/jquery.gritter.css" type="text/css"/>

    <link rel="stylesheet" href="fonts/font-awesome-4/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/nanoscroller.css" type="text/css"/>
    <link rel="stylesheet" href="css/bootstrap-switch.css" type="text/css"/>
    <link rel="stylesheet" href="css/bootstrap-datetimepicker.css" type="text/css"/>
    <link rel="stylesheet" href="css/select2.css" type="text/css"/>
    <link rel="stylesheet" href="css/slider.css" type="text/css"/>
    <link rel="stylesheet" href="css/datatables.css" type="text/css"/>
    <link rel="stylesheet" href="css/style.css"/>

</head>

<body>


<!-- Fixed navbar -->
<div id="head-nav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="fa fa-gear"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse">

            <ul class="nav navbar-nav navbar-right user-nav">
                <li class="dropdown profile_menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img alt="Avatar" src="images/avatar2.jpg"/>Jeff Hanneman <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu menu-usuario">
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Messages</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Sign Out</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right not-nav">
                <li class="button dropdown">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="fa fa-globe"></i><span class="bubble">2</span></a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="nano nscroller">
                                <div class="content">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fa fa-cloud-upload info">
                                            </i><b>Daniel</b> is now following you <span
                                                    class="date">2 minutes ago.</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="foot">
                                <li><a href="#">View all activity </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>

        </div>
        <!--/.nav-collapse -->
    </div>
</div>

<div id="cl-wrapper" class="fixed-menu">

    <!-- INICIO DE MENU VERTICAL +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <div class="cl-sidebar">
        <div class="cl-toggle"><i class="fa fa-bars"></i></div>
        <div class="cl-navblock">
            <div class="menu-space">
                <div class="content">
                    <div class="side-user">
                        <div class="avatar-logo">
                            <a href="">
                                <img src="images/logo-blanco.png" />
                            </a>                            
                        </div>                        
                    </div>
                    <ul class="cl-vnavigation">
                        <li class="active">
                            <a href="pagina.html"><i class="fa fa-list"></i><span>Dashboard</span></a>
                        </li>
                        <li><a href="#"><i class="fa fa-list"></i><span>Datos</span></a>
                            <ul class="sub-menu">
                                <li><a href="#">Art&iacute;culos</a></li>
                                <li><a href="tablas.html">Comentarios de Art&iacute;culos</a></li>
                                <li><a href="tables-datatables.html">Comentarios de Vers&iacute;culos</a></li>
                                <li><a href="#">Referencias</a></li>
                                <li><a href="tables-general.html">Usuarios</a></li>
                                <li><a href="#">Vers&iacute;culos</a></li>                                
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- FIN DE MENU VERTICAL +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

    <div class="container-fluid" id="pcont">

    <!-- TITULO DE SECCION ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <div class="page-head">
            <h2>Dashboard</h2>
            <ol class="breadcrumb">
                <li><a href="#">Administraci&oacute;n</a></li>
                <li><a href="#">Tables</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </div>
    <!-- FIN TITULO DE SECCION +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        
        <div class="cl-mcont">
    <!-- CONTENIDO PRINCIPAL +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ --> 
            <div class="row">
                <div class="row dash-cols">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="block">
                            <div class="header">
                                <h2><i class="fa fa-comment"></i>Comments</h2>
                            </div>
                            <div class="content no-padding">
                                <div class="fact-data text-center">
                                    <h3>Positive</h3>
                                    <h2>60%</h2>
                                </div>
                                <div class="fact-data text-center">
                                    <h3>Negative</h3>                           
                                    <h2>40%</h2>
                                </div>
                            </div>
                        </div>
                    </div>  
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="block">
                            <div class="header">
                                <h2><i class="fa fa-bug"></i>Tickets</h2>
                            </div>
                            <div class="content no-padding">
                                <div class="fact-data text-center">
                                    <h3>Frequency</h3>
                                    <h2>53%</h2>
                                </div>
                                <div class="fact-data text-center">
                                    <h3>Pending</h3>                            
                                    <h2>13</h2>
                                </div>
                            </div>
                        </div>
                    </div>  
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="block">
                            <div class="header">
                                <h2><i class="fa fa-comment"></i>Comments</h2>
                            </div>
                            <div class="content no-padding">
                                <div class="fact-data text-center">
                                    <h3>Positive</h3>
                                    <h2>60%</h2>
                                </div>
                                <div class="fact-data text-center">
                                    <h3>Negative</h3>                           
                                    <h2>40%</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <!-- FIN DE CONTENIDO PRINCIPAL ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        </div>
    </div>

</div>

<!-- SCRIPTS -->
<script src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.nanoscroller.js"></script>
<script type="text/javascript" src="js/jquery.sparkline.min.js"></script>
<script type="text/javascript" src="js/general.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/jquery.nestable.js"></script>
<script type="text/javascript" src="js/bootstrap-switch.min.js"></script>
<script type="text/javascript" src="js/bootstrap-datetimepicker.js"></script>

<script type="text/javascript" src="js/select2.min.js"></script>
<script type="text/javascript" src="js/bootstrap-slider.js"></script>
<script type="text/javascript" src="js/jquery.gritter.js"></script>
<script type="text/javascript" src="js/jquery.datatables.js"></script>
<script type="text/javascript" src="js/datatables.js"></script>

<script type="text/javascript" src="js/parsley.js"></script>
<script type="text/javascript" src="js/icheck.min.js"></script>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/voice-commands.js"></script>
<script src="js/bootstrap.min.js"></script>

<script type="text/javascript">

    $(document).ready(function () {
        //initialize the javascript
        App.init();
    });

</script>

</body>
</html>