<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('location:../index.php');
}
?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>miAPP | EDITAR POST</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="home.html" class="nav-link">Home</a>
                </li>
            </ul>

        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include 'layouts/sidebar.php' ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Editar Post</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="d-flex justify-content-center">

                        <div class="col-8">
                            <form action="posteoEditarEn.php" method="post" enctype="multipart/form-data">
                                <?php
                                require_once "../controladores/posteosController.php";
                                $respuesta = posteosController::selectId($_GET['id']);
                                ?>

                                <input type="hidden" name="id" id="" class="form-control" value='<?= $respuesta["id"] ?>'>
                                <input type="hidden" name="imagen_actual" value="<?=$respuesta['imagen']?>">

                                <div class="form-group">
                                    <label for="" class="form-label">Imagen actual</label><br>
                                    <img src="/blog/vistas/dist/img/posteos/<?= $respuesta["imagen"] ?>" style="width:60px;">
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Nueva imagen</label>
                                    <input type="file" name="imagen" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Categoria</label>
                                    <input type="text" name="categoria" id="" class="form-control" value='<?= $respuesta["categoria"] ?>'>
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Titulo</label>
                                    <input type="text" name="titulo" id="" class="form-control" value='<?= $respuesta["titulo"] ?>'>
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Descripcion</label>
                                    <input type="text" name="descripcion" id="" class="form-control" value='<?= $respuesta["descripcion"] ?>'>
                                </div>
                                <div class="form-group">
                                    <label for="">Estado</label>
                                    <select class="form-control" id="" name="estado">
                                        <option value="1">Creado</option>
                                        <option value="2">Publicado</option>
                                    </select>
                                </div>

                                <input type="submit" value="Editar" class="btn btn-warning">
                            </form>
                        </div>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Mateo Osorio
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2025 <a href="#">miAPP</a>.</strong> Todo los derechos
            reservados
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
</body>

</html>