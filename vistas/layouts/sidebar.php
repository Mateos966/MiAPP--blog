        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="home.html" class="brand-link">
                <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">miAPP</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?php echo $_SESSION['usuario']['nombre'] ?></a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        <li class="nav-item">
                            <a href="home.php" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    Home
                                </p>
                            </a>
                        </li>
                         <?php
                        if ($_SESSION['usuario']['rol'] == 1):
                        ?>
                        <li class="nav-item">
                            <a href="categorias.php" class="nav-link">
                                <i class="fas fa-list"></i>
                                <p>
                                    Categorías
                                </p>
                            </a>
                        </li>
                        <?php endif ?>
                        <?php
                        if ($_SESSION['usuario']['rol'] == 1):
                        ?>
                            <li class="nav-item">
                                <a href="usuarios.php" class="nav-link">
                                    <i class="fas fa-users"></i>
                                    <p>
                                        Usuarios
                                    </p>
                                </a>
                            </li>
                        <?php endif ?>
                        <li class="nav-item">
                            <a href="posteos.php" class="nav-link">
                                <i class="fas fa-plus"></i>
                                <p>
                                    Posts
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="salir-end.php" class="nav-link">
                                <i class="nav-icon fas fa-door-closed"></i>
                                <p>
                                    Salir
                                </p>
                            </a>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>