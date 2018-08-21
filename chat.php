<?php
session_start();

ini_set('error_reporting',0);
if(isset($_SESSION['Usuario']))
{
    header("Location: index.php");
}

include ('lib/config.php');
include ('lib/socialnetwork-lib.php');

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LEGISLAPP | Registration Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- Material Design -->
    <link rel="stylesheet" href="dist/css/bootstrap-material-design.min.css">
    <link rel="stylesheet" href="dist/css/ripples.min.css">
    <link rel="stylesheet" href="dist/css/MaterialAdminLTE.min.css">
    <!-- iCheck -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- fullCalendar 2.2.5-->

    <link rel="stylesheet" href="plugins/fullcalendar/fullcalendar.min.css">
    <link rel="stylesheet" href="plugins/fullcalendar/fullcalendar.print.css" media="print">
    <!-- Theme style -->


    <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">

    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">

    <!-- <link rel="stylesheet" href="plugins/iCheck/square/blue.css"> -->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">


    <?php echo Headerb (); ?>

    <?php echo Side (); ?>



        <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <h1>
        Chat
        <small>13 nuevos mensajes</small>
        </h1>
        </section>

        <!-- Main content -->
        <section class="content">
        <div class="row">
        <div class="col-md-3">
        <a href="chats.php" class="btn btn-primary btn-block margin-bottom">Mis chats</a>

        <div class="box box-solid">
        <div class="box-header with-border">
        <h3 class="box-title">Carpetas</h3>

        <div class="box-tools">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
        </button>
        </div>
        </div>
        <div class="box-body no-padding">
        <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#"><i class="fa fa-inbox"></i> Mis chats
        <span class="label label-primary pull-right">13</span></a></li>
        </ul>
        </div>
        <!-- /.box-body -->
        </div>
        <!-- /. box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
        <div class="box box-primary">
        <!-- /.box-header -->
        <div class="box-body no-padding">
        <!-- /.mailbox-read-info -->
        <div class="mailbox-read-message">






        <!-- Direct Chat -->
        <div class="row">
        <div class="col-md-12">
        <!-- DIRECT CHAT PRIMARY -->
        <div class="box-header with-border">
        <h3 class="box-title">NOMBRE USUARIO</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
        <!-- Conversations are loaded here -->
        <div class="direct-chat-messages" style="overflow: scroll; height: 400px;">





        <?php
        $user = mysqli_real_escape_string($_GET['usuario']);
        $sess = $_SESSION['idUsuario'];
        $chats = mysqli_query("SELECT * FROM chat WHERE De = '$user' AND Para = '$sess' OR De = '$sess' AND Para = '$user' order by IdChat desc");
        while($ch = mysqli_fetch_array($chats)) {

        if($ch['de'] == $user) {$var = $user;} else {$var = $sess;}
        $usere = mysqli_query("SELECT * FROM usuario WHERE IdUsuario = '$var'");
        $us = mysqli_fetch_array($usere);
        ?>


        <?php if ($ch['de'] == $user) { ?>
        <!-- Message. Default to the left -->
        <div class="direct-chat-msg">
        <div class="direct-chat-info clearfix">
        <span class="direct-chat-name pull-left"><?php echo $us['usuario']; ?></span>
        <span class="direct-chat-timestamp pull-right"><?php echo $ch['fecha']; ?></span>
        </div>
        <!-- /.direct-chat-info -->
        <img class="direct-chat-img" src="avatars/<?php echo $us['avatar']; ?>"><!-- /.direct-chat-img -->
        <div class="direct-chat-text">
        <?php echo $ch['mensaje']; ?>
        </div>
        <!-- /.direct-chat-text -->
        </div>
        <!-- /.direct-chat-msg -->

        <?php } elseif ($ch['para'] == $user) { ?>

        <!-- Message to the right -->
        <div class="direct-chat-msg right">
        <div class="direct-chat-info clearfix">
        <span class="direct-chat-name pull-right"><?php echo $us['usuario']; ?></span>
        <span class="direct-chat-timestamp pull-left"><?php echo $ch['fecha']; ?></span>
        </div>
        <!-- /.direct-chat-info -->
        <img class="direct-chat-img" src="avatars/<?php echo $us['avatar']; ?>" alt="Message User Image"><!-- /.direct-chat-img -->
        <div class="direct-chat-text">
        <?php echo $ch['mensaje']; ?>
        </div>
        <!-- /.direct-chat-text -->
        </div>
        <!-- /.direct-chat-msg -->

        <?php } ?>


        <?php } ?>



        </div>
        <!--/.direct-chat-messages-->

        <!-- Contacts are loaded here -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">


        <form action="" method="post">
        <div class="input-group">
        <input type="text" name="Mensaje" placeholder="Escribe un mensaje" class="form-control">
        <span class="input-group-btn">
        <input type="submit" name="enviar" class="btn btn-primary btn-flat">Enviar</button>
        </span>
        </div>
        </form>

        <?php
        if(isset($_POST['enviar'])) {

        $mensaje = mysqli_real_escape_string($_POST['mensaje']);
        $de = $_SESSION['id'];
        $para = mysqli_real_escape_string($_GET['usuario']);

        $comprobar = mysqli_query("SELECT * FROM rchat WHERE De = '$de' AND Para = '$para' OR De = '$para' AND Para = '$de'");
        $com = mysqli_fetch_array($comprobar);
        if(mysqli_num_rows($comprobar) == 0) {
        $insert = mysqli_query("INSERT INTO rchat (De,Para) VALUES ('$de','$para')");
        $siguiente = mysqli_query("SELECT IdRChat FROM rchat WHERE De = '$de' AND Para = '$para' OR De = '$para' AND Para = '$de'");
        $si = mysqli_fetch_array($siguiente);
        $insert2 = mysqli_query("INSERT INTO chat (IdRChat,De,Para,Mensaje,Fecha,LecturaChat) VALUES ('".$si['idRChat']."','$de','$para','$mensaje',now(),'0')");
        if($insert) {echo '<script>window.location="chat.php?usuario='.$para.'"</script>';}
        }
        else
        {
        $insert3 = mysqli_query("INSERT INTO chat (IdRChat,De,Para,Mensaje,Fecha,LecturaChat) VALUES ('".$com['idRChat']."','$de','$para','$mensaje',now(),'0')");
        if($insert3) {echo '<script>window.location="chat.php?usuario='.$para.'"</script>';}
        }



        }

        ?>


        </div>
        <!-- /.box-footer-->
        </div>
        <!-- /.col -->







        </div>
        <!-- /.mailbox-read-message -->
        </div>
        <!-- /.box-body -->
        </div>
        <!-- /. box -->
        </div>
        <!-- /.col -->
        </div>
        <!-- /.row -->
        </section>
        <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
        <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
        <!-- Home tab content -->
        <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
        <li>
        <a href="javascript:void(0)">
        <i class="menu-icon fa fa-birthday-cake bg-red"></i>

        <div class="menu-info">
        <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

        <p>Will be 23 on April 24th</p>
        </div>
        </a>
        </li>
        <li>
        <a href="javascript:void(0)">
        <i class="menu-icon fa fa-user bg-yellow"></i>

        <div class="menu-info">
        <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

        <p>New phone +1(800)555-1234</p>
        </div>
        </a>
        </li>
        <li>
        <a href="javascript:void(0)">
        <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

        <div class="menu-info">
        <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

        <p>nora@example.com</p>
        </div>
        </a>
        </li>
        <li>
        <a href="javascript:void(0)">
        <i class="menu-icon fa fa-file-code-o bg-green"></i>

        <div class="menu-info">
        <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

        <p>Execution time 5 seconds</p>
        </div>
        </a>
        </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
        <li>
        <a href="javascript:void(0)">
        <h4 class="control-sidebar-subheading">
        Custom Template Design
        <span class="label label-danger pull-right">70%</span>
        </h4>

        <div class="progress progress-xxs">
        <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
        </div>
        </a>
        </li>
        <li>
        <a href="javascript:void(0)">
        <h4 class="control-sidebar-subheading">
        Update Resume
        <span class="label label-success pull-right">95%</span>
        </h4>

        <div class="progress progress-xxs">
        <div class="progress-bar progress-bar-success" style="width: 95%"></div>
        </div>
        </a>
        </li>
        <li>
        <a href="javascript:void(0)">
        <h4 class="control-sidebar-subheading">
        Laravel Integration
        <span class="label label-warning pull-right">50%</span>
        </h4>

        <div class="progress progress-xxs">
        <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
        </div>
        </a>
        </li>
        <li>
        <a href="javascript:void(0)">
        <h4 class="control-sidebar-subheading">
        Back End Framework
        <span class="label label-primary pull-right">68%</span>
        </h4>

        <div class="progress progress-xxs">
        <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
        </div>
        </a>
        </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        </div>
        <!-- /.tab-pane -->
        <!-- Stats tab content -->
        <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
        <!-- /.tab-pane -->
        <!-- Settings tab content -->
        <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
        <h3 class="control-sidebar-heading">General Settings</h3>

        <div class="form-group">
        <label class="control-sidebar-subheading">
        Report panel usage
        <input type="checkbox" class="pull-right" checked>
        </label>

        <p>
        Some information about this general settings option
        </p>
        </div>
        <!-- /.form-group -->

        <div class="form-group">
        <label class="control-sidebar-subheading">
        Allow mail redirect
        <input type="checkbox" class="pull-right" checked>
        </label>

        <p>
        Other sets of options are available
        </p>
        </div>
        <!-- /.form-group -->

        <div class="form-group">
        <label class="control-sidebar-subheading">
        Expose author name in posts
        <input type="checkbox" class="pull-right" checked>
        </label>

        <p>
        Allow the user to show his name in blog posts
        </p>
        </div>
        <!-- /.form-group -->

        <h3 class="control-sidebar-heading">Chat Settings</h3>

        <div class="form-group">
        <label class="control-sidebar-subheading">
        Show me as online
        <input type="checkbox" class="pull-right" checked>
        </label>
        </div>
        <!-- /.form-group -->

        <div class="form-group">
        <label class="control-sidebar-subheading">
        Turn off notifications
        <input type="checkbox" class="pull-right">
        </label>
        </div>
        <!-- /.form-group -->

        <div class="form-group">
        <label class="control-sidebar-subheading">
        Delete chat history
        <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
        </label>
        </div>
        <!-- /.form-group -->
        </form>
        </div>
        <!-- /.tab-pane -->
        </div>
        </aside>
        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
        immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
        </div>















    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <!-- jQuery 3 -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Material Design -->
    <script src="dist/js/material.min.js"></script>
    <script src="dist/js/ripples.min.js"></script>
    <script>
        $.material.init();
    </script>
    <!-- iCheck -->
    <!-- <script src="plugins/iCheck/icheck.min.js"></script>
    <script>
    $(function () {
    $('input').iCheck({
    checkboxClass: 'icheckbox_square-blue',
    radioClass: 'iradio_square-blue',
    increaseArea: '20%' /* optional */
    });
    });-->

    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>


</body>
</html>