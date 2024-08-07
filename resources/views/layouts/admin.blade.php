<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Control de Asistencia</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <!--TODO: poniendo entre corchetes es la forma correcta de llamar a un enlace -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <!-- Iconos de bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- JQUERY -->
    <script src="{{ asset('plugins/jquery/jquery.js') }}"></script>
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- CKEditor para el textarea-->
    <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ url('/') }}" class="nav-link">Sistema de Control de Asistencia</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"
                        role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ url('/') }}" class="brand-link">
                <img src="{{ url('/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Control Asistencia</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ url('/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <!-- forma de accesar a los valores del nombre del usuario que a iniciado sesión
                             validando que un nombre de usuario esste registrado
                        -->
                        <a href="#" class="d-block">{{ Auth::user()?->name }}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                        @can('usuarios')
                            <li class="nav-item">
                                <a href="#" class="nav-link active">
                                    <i class="nav-icon fas">
                                        <i class="bi bi-people"></i>
                                    </i>
                                    <p>
                                        Usuarios
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ url('usuarios/create') }}" class="nav-link">
                                            <i class="bi bi-person-fill-add"></i>
                                            <p>Nuevo Usuario</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('usuarios') }}" class="nav-link">
                                            <i class="bi bi-person-lines-fill"></i>
                                            <p>Listado de Usuarios</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endcan

                        @can('cursos')
                            <li class="nav-item">
                                <a href="#" class="nav-link active">
                                    <i class="nav-icon fas">
                                        <i class="bi bi-journal-bookmark"></i>
                                    </i>
                                    <p>
                                        Cursos
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ url('cursos/create') }}" class="nav-link">
                                            <i class="bi bi-journal-plus"></i>
                                            <p>Nuevo Cursos</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('cursos') }}" class="nav-link">
                                            <i class="bi bi-journal-text"></i>
                                            <p>Listado de Cursos</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endcan

                        @can('miembros')
                            <li class="nav-item">
                                <a href="#" class="nav-link active">
                                    <i class="nav-icon fas">
                                        <i class="bi bi-person-lines-fill"></i>
                                    </i>
                                    <p>
                                        Miembros
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ url('miembros/create') }}" class="nav-link">
                                            <i class="bi bi-person-plus-fill"></i>
                                            <p>Nuevo Miembro</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('miembros') }}" class="nav-link">
                                            <i class="bi bi-list-ul"></i>
                                            <p>Listado de Miembros</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endcan

                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas">
                                    <i class="bi bi-calendar-week"></i>
                                </i>
                                <p>
                                    Asistencias
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('asistencias/create') }}" class="nav-link">
                                        <i class="bi bi-calendar-plus"></i>
                                        <p>Nueva Asistencia</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('asistencias') }}" class="nav-link">
                                        <i class="bi bi-calendar2-check"></i>
                                        <p>Listado de Asistencias</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas">
                                    <i class="bi bi-clipboard2-data"></i>
                                </i>
                                <p>
                                    Reportes
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('usuarios/reportes') }}" class="nav-link">
                                        <i class="bi bi-people"></i>
                                        <p>Usuarios</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('cursos/reportes') }}" class="nav-link">
                                        <i class="bi bi-journal-bookmark"></i>
                                        <p>Cursos</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('miembros/reportes') }}" class="nav-link">
                                        <i class="bi bi-person-lines-fill"></i>
                                        <p>Miembros</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('asistencias/reportes') }}" class="nav-link">
                                        <i class="bi bi-clipboard2-check"></i>
                                        <p>Asistencia</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();"
                                style="background-color: #e20d18">
                                <i class="nav-icon">
                                    <i class="bi bi-door-closed"></i>
                                </i>
                                Cerrar Sesión
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="content mt-2">
                <!--TODO: solo este espacio va a ser diferente de acuerdo a cada página web que se visite -->
                @yield('content')
            </div>
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

       
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
</body>

</html>
