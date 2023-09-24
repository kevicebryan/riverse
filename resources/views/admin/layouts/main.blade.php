<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        <title>Riverse | {{ $title }}</title>

        <link rel="icon" href="{{ asset('images/logo.png') }}">

        <!-- Google Font: Poppins -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,700;1,400&display=swap"
            rel="stylesheet">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
        <!-- DataTables -->
        <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Tempusdominus Bootstrap 4 -->
        <link rel="stylesheet"
            href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
        <!-- iCheck -->
        <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
        <!-- JQVMap -->
        <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
        <!-- summernote -->
        <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
        <!-- Select2 -->
        <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
        <!-- SweetAlert2 -->
        <link rel="stylesheet" href="{{ asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
        <style>
            body {
                font-family: 'Poppins', sans-serif;
            }

            .required::after {
                content: "*";
                color: #dc3545;
                margin-left: 4px;
            }
        </style>
    </head>

    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <!-- Navbar -->
            @include('admin.partials.navbar')
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            @include('admin.partials.sidebar')
            <!-- /.main sidebar container -->

            <!-- Content Wrapper -->
            <div class="content-wrapper">
                <!-- Content Header -->
                @include('admin.partials.header')
                <!-- /.content-header -->

                <!-- Main content -->
                <section class="content">
                    <!-- Container Fluid -->
                    <div class="container-fluid">
                        <!-- Row -->
                        @yield('admin.information')
                        <!-- /.row -->
                    </div>
                    <!-- /.container fluid -->
                </section>
                <!-- /.main content -->
            </div>
            <!-- /.content-wrapper -->

            <!-- Footer -->
            @include('admin.partials.footer')
            <!-- ./footer -->
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>
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
        <!-- Bootstrap 4 -->
        <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- ChartJS -->
        <script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
        <!-- Sparkline -->
        <script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
        <!-- JQVMap -->
        <script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
        <script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
        <!-- jQuery Knob Chart -->
        <script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
        <!-- daterangepicker -->
        <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
        <script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
        <!-- Select2 -->
        <script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
        <!-- Summernote -->
        <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
        <!-- overlayScrollbars -->
        <script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('dist/js/adminlte.js') }}"></script>
        <!-- Axios -->
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <!-- bs-custom-file-input -->
        <script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
        <!-- SweetAlert2 -->
        <script src="{{ asset('plugins/sweetalert2/sweetalert2.min.js') }}"></script>
        <!-- Page specific script -->
        <script>
            $(function() {
                $("#table1").DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "order": [],
                    "autoWidth": false,
                    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                }).buttons().container().appendTo('#table1_wrapper .col-md-6:eq(0)');

                $("#example2").DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "order": [],
                    "autoWidth": false,
                    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');

                $("#example3").DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "order": [],
                    "autoWidth": false,
                    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                }).buttons().container().appendTo('#example3_wrapper .col-md-6:eq(0)');

                $("#example4").DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "order": [],
                    "autoWidth": false,
                    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                }).buttons().container().appendTo('#example4_wrapper .col-md-6:eq(0)');

                $("#example5").DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "order": [],
                    "autoWidth": false,
                    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                }).buttons().container().appendTo('#example5_wrapper .col-md-6:eq(0)');

                $("#example6").DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "order": [],
                    "autoWidth": false,
                    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                }).buttons().container().appendTo('#example6_wrapper .col-md-6:eq(0)');

                $("#example7").DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "order": [],
                    "autoWidth": false,
                    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                }).buttons().container().appendTo('#example7_wrapper .col-md-6:eq(0)');

                $("#dob").datetimepicker({
                    format: 'DD/MM/YYYY'
                });

                $("#dow").datetimepicker({
                    format: 'YYYY/MM/DD'
                });

                $("#doj").datetimepicker({
                    format: 'YYYY/MM/DD'
                });

                $('#st').datetimepicker({
                    format: 'YYYY/MM/DD HH:mm',
                    stepping: 1,
                    icons: {
                        time: 'fas fa-clock'
                    }
                });

                $('#et').datetimepicker({
                    format: 'YYYY/MM/DD HH:mm',
                    stepping: 1,
                    icons: {
                        time: 'fas fa-clock'
                    }
                });

                $('.select2bs4').select2({
                    theme: 'bootstrap4'
                })

                $(function() {
                    bsCustomFileInput.init();
                });

                @if (session('success'))
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: '{{ session('success') }}',
                    });
                @endif

                @if (session('error'))
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: '{{ session('error') }}',
                    });
                @endif

                const password_input = document.getElementById('password');
                const toggle_password_button = document.getElementById('toggle_password');
                const password_eye_icon = document.getElementById('password_eye_icon');

                if (toggle_password_button) {
                    toggle_password_button.addEventListener('click', function() {
                        if (password_input.type == 'password') {
                            password_input.type = 'text';
                            password_eye_icon.classList.remove('fa-eye');
                            password_eye_icon.classList.add('fa-eye-slash');
                        } else {
                            password_input.type = 'password';
                            password_eye_icon.classList.remove('fa-eye-slash');
                            password_eye_icon.classList.add('fa-eye');
                        }
                    });
                }

                const password_confirmation_input = document.getElementById('password_confirmation');
                const toggle_password_confirmation_button = document.getElementById('toggle_password_confirmation');
                const password_confirmation_eye_icon = document.getElementById('password_confirmation_eye_icon');

                if (toggle_password_confirmation_button) {
                    toggle_password_confirmation_button.addEventListener('click', function() {
                        if (password_confirmation_input.type == 'password') {
                            password_confirmation_input.type = 'text';
                            password_confirmation_eye_icon.classList.remove('fa-eye');
                            password_confirmation_eye_icon.classList.add('fa-eye-slash');
                        } else {
                            password_confirmation_input.type = 'password';
                            password_confirmation_eye_icon.classList.remove('fa-eye-slash');
                            password_confirmation_eye_icon.classList.add('fa-eye');
                        }
                    });
                }

                const old_password_input = document.getElementById('old_password');
                const toggle_old_password_button = document.getElementById('toggle_old_password');
                const old_password_eye_icon = document.getElementById('old_password_eye_icon');

                if (toggle_old_password_button) {
                    toggle_old_password_button.addEventListener('click', function() {
                        if (old_password_input.type == 'password') {
                            old_password_input.type = 'text';
                            old_password_eye_icon.classList.remove('fa-eye');
                            old_password_eye_icon.classList.add('fa-eye-slash');
                        } else {
                            old_password_input.type = 'password';
                            old_password_eye_icon.classList.remove('fa-eye-slash');
                            old_password_eye_icon.classList.add('fa-eye');
                        }
                    });
                }
            });
        </script>
    </body>

</html>
