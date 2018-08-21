<?php
session_start();

ini_set('error_reporting',0);

if(isset($_SESSION['Usuario']))
{
    header("Location: index.php");
}

include ('../lib/config.php');

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
    <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
    <!-- Material Design -->
    <link rel="stylesheet" href="../../dist/css/bootstrap-material-design.min.css">
    <link rel="stylesheet" href="../../dist/css/ripples.min.css">
    <link rel="stylesheet" href="../../dist/css/MaterialAdminLTE.min.css">
    <!-- iCheck -->
    <!-- <link rel="stylesheet" href="../../plugins/iCheck/square/blue.css"> -->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition register-page">
<div class="register-box">
    <div class="register-logo">
        <a href="">LEGISL<b>APP</b></a>
    </div>

    <div class="register-box-body">
        <p class="login-box-msg">Registro</p>

        <form action="" method="post">
            <div class="form-group has-feedback">
                <input type="text" name="TarjetaPro" class="form-control" placeholder="Tarjeta Profesional" value="<?php echo $_POST['TarjetaPro']; ?>" required>
                <span class="glyphicon glyphicon-star form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="text" name="UniversidadPre" class="form-control" placeholder="Universidad de pregrado" value="<?php echo $_POST['UniversidadPre']; ?>" required>
                <span class="glyphicon glyphicon-star form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="text" name="UniversidadPost" class="form-control" placeholder="Universidad de postgrado" value="<?php echo $_POST['UniveridadPost']; ?>" required>
                <span class="glyphicon glyphicon-star form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="text" name="ExperienciaL" class="form-control" placeholder="Experiencia laboral" value="<?php echo $_POST['ExperienciaL']; ?>" required>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>

            <div class="form-group has-feedback">
      <p> Seleccione el tipo de abogado segun especialidad</p>
          <select name="Especialidad">
              <option value="1">Laborista</option>
              <option value="2">Penalista</option>
              <option value="3">Civilista</option>
              <option value="4">Familia</option>
              <option value="5">Mercantilista</option>
              <option value="6">Administrativista</option>
              <option value="7">Ficalista</option>
          </select>
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
            </div>

            <div class="row">
                <div class="col-xs-10">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox" name="check" required> Acepto los <a href="#">términos y condiciones</a>
                        </label>
                    </div>
                </div>

                <div class="col-xs-12">
                    <button type="submit" name="registrar" class="btn btn-primary btn-block btn-flat">Registrarme</button>
                </div>
            </div>
        </form>


        <div class="social-auth-links text-center">
            <p>- OR -</p>
            <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
                Facebook</a>
            <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
                Google+</a>
        </div>









      <?php

      if(isset($_POST['registrar'])) {
        $TarjetaPro = $_POST["TarjetaPro"];
        $UniversidadPre = $_POST["UniversidadPre"];
        $UniversidadPro = $_POST["UniveridadPost"];
        $ExperienciaL = $_POST["ExperienciaL"];

               $actualizar = "UPDATE Usuario SET  TarjetaPro = 'TarjetaPro' AND UniversidadPre = 'UniversidadPre' 
                AND  UniversidadPro = 'UniversidadPro' AND ExperienciaL = 'ExperienciaL' WHERE Usuario = $_SESSION[Usuario]";
              //$insertar = "INSERT INTO usuario (TarjetaProfesional, UniverdidadPregrado, UniversidadPostgrado, ExperienciaLaboral, FechaRegistro, IdTipoUsuario, IdEspecialidad) VALUES ('$nombres','$apellidos','$documento','$email','$telefono','$celular','$usuario','$contrasena','defect.jpg',now(),1,1)";
              $cantualizar = IDU($actualizar);
              if($cantualizar == true) { ?>
                <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  Felicidades se ha registrado correctamente
                </div>
                <?php

                header("Refresh: 2; url = login.php");
              }
      }
      ?>
      <hr>
      <a href="login.php" class="text-center">Tengo actualmente una cuenta</a>
    </div>
    <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Material Design -->
<script src="../../dist/js/material.min.js"></script>
<script src="../../dist/js/ripples.min.js"></script>
<script>
    $.material.init();
</script>
<!-- iCheck -->
<!-- <script src="../../plugins/iCheck/icheck.min.js"></script>
<script>
$(function () {
$('input').iCheck({
checkboxClass: 'icheckbox_square-blue',
radioClass: 'iradio_square-blue',
increaseArea: '20%' /* optional */
});
});-->
</body>
</html>