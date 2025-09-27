<?php
use controller\usuariosController;

session_start();
if (!isset($_SESSION['usuario'])) {
    header('location:../index.php');
}
if ($_SESSION['usuario']['rol'] != 1) {
    header('location:home.php');
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
    <title>miAPP | USUARIOS</title>

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
                    <a href="home.html" class="nav-link">USUARIOS</a>
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
                            <h1 class="m-0">Usuarios</h1>

                            <!-- AGREGAR BOTON MODAL  -->
                            <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">AGREGAR</button>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">

                        <?php
                        require_once "../controladores/usuariosController.php";
                        $respuesta = usuariosController::selectAll();
                        ?>

                        <div
                            class="table-responsive">
                            <table
                                class="table table-primary">
                                <thead>
                                    <tr>
                                        <th scope="col">NOMBRE</th>
                                        <th scope="col">EMAIL</th>
                                        <th scope="col">ESTADO</th>
                                        <th scope="col">ROL</th>
                                        <th scope="col">ACCION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    require_once "../controladores/usuariosController.php";
                                    $respuesta = usuariosController::selectAll();
                                    foreach ($respuesta as $key => $value) :
                                    ?>
                                        <tr class="">
                                            <td scope="row"><?php echo $value['nombre'] ?></td>
                                            <td scope="row"><?php echo $value['email'] ?></td>
                                            <td><?php echo $estado = $value['estado'] == 1 ? 'Activo' : 'Inactivo'; ?></td>
                                            <td><?php echo $rol = $value['rol'] == 1 ? 'Superadmin' : 'Colaborador'; ?></td>
                                            <td>
                                                <a href="usuarioEditar.php?id=<?= $value['id'] ?>" class="btn btn-warning">EDITAR</a>
                                                <a href="usuarioEliminar.php?id=<?= $value['id'] ?>" class="btn btn-danger">ELIMINAR</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
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

    <!-- AGREGAR FORMULARIO MODAL -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="usuarioAgregar.php" method="post">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Nombre de Usuario:</label>
                            <input type="text" class="form-control" id="nombre" name="nombre">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Email:</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Password:</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>

                        <input type="submit" value="Agregar" class="btn btn-primary">
                    </form>
                </div>

            </div>
        </div>
    </div>



</body>

</html>