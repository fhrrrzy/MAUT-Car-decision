<!DOCTYPE html>
<html lang="en" data-layout-mode="detached" data-topbar-color="dark" data-sidenav-user="true">

    
<!-- Mirrored from coderthemes.com/ubold/layouts/modern/pages-starter.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Apr 2024 01:12:39 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Starter | SPK</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {{-- <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" /> --}}
        {{-- <meta content="Coderthemes" name="author" /> --}}

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

                <!-- third party css -->
        <link href="https://coderthemes.com/ubold/layouts/assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <link href="https://coderthemes.com/ubold/layouts/assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <link href="https://coderthemes.com/ubold/layouts/assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <link href="https://coderthemes.com/ubold/layouts/assets/libs/datatables.net-select-bs5/css//select.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <link href="https://coderthemes.com/ubold/layouts/assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="https://coderthemes.com/ubold/layouts/assets/libs/dropify/css/dropify.min.css" rel="stylesheet" type="text/css" />



        <link href="https://coderthemes.com/ubold/layouts/assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

        <!-- third party css end -->

		<!-- Theme Config Js -->
		<script src="{{ asset('assets/js/head.js') }}"></script>
        

		<!-- Bootstrap css -->
		<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

		<!-- App css -->
		<link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

		<!-- Icons css -->
		<link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

        <style>
            .swal2-container.swal2-top-end.swal2-backdrop-show {
                background: transparent !important;
            }
        </style>
    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">


            <!-- ========== Menu ========== -->
            @include('layout.sidebar')
            <!-- ========== Left menu End ========== -->





            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">

                <!-- ========== Topbar Start ========== -->
                @include('layout.topbar')
                <!-- ========== Topbar End ========== -->

                <div class="content">


                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        @yield('content')
                        <!-- end page title -->

                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                @include('layout.footer')
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Theme Settings -->
        @include('layout.rightbar')

        <!-- Vendor js -->
        <script src="{{ asset('assets/js/vendor.min.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('assets/js/app.min.js') }}"></script>

        <!-- third party js -->
        <script src="https://coderthemes.com/ubold/layouts/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="https://coderthemes.com/ubold/layouts/assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
        <script src="https://coderthemes.com/ubold/layouts/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="https://coderthemes.com/ubold/layouts/assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
        <script src="https://coderthemes.com/ubold/layouts/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="https://coderthemes.com/ubold/layouts/assets/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
        <script src="https://coderthemes.com/ubold/layouts/assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="https://coderthemes.com/ubold/layouts/assets/libs/datatables.net-buttons/js/buttons.flash.min.js"></script>
        <script src="https://coderthemes.com/ubold/layouts/assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="https://coderthemes.com/ubold/layouts/assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
        <script src="https://coderthemes.com/ubold/layouts/assets/libs/datatables.net-select/js/dataTables.select.min.js"></script>
        <script src="https://coderthemes.com/ubold/layouts/assets/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="https://coderthemes.com/ubold/layouts/assets/libs/pdfmake/build/vfs_fonts.js"></script>

        <script src="https://coderthemes.com/ubold/layouts/assets/libs/sweetalert2/sweetalert2.all.min.js"></script>

        <!-- third party js ends -->

        @yield('scripts')

    </body>

<!-- Mirrored from coderthemes.com/ubold/layouts/modern/pages-starter.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Apr 2024 01:12:39 GMT -->
</html>
