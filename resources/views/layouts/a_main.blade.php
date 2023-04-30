<!doctype html>
<html lang="en">



<head>


    <meta charset="utf-8" />
    <title>Dashboard | Morvin - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- plugin css -->
        <link href="{{ asset('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css"/>

        <!-- Bootstrap Css -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css"/>
        <!-- Icons Css -->
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css"/>
        <!-- App Css-->
        <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css"/>



</head>


<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('layouts.a_header')


        @include('layouts.a_Left_Sidebar')

        <!-- ============================================================== -->

        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">

                <!-- start page title -->
                <div class="page-title-box">
                    <div class="container-fluid">
                     <div class="row align-items-center">
                         <div class="col-sm-6">
                             <div class="page-title">
                                 <h4>Dashboard</h4>
                                     <ol class="breadcrumb m-0">
                                         <li class="breadcrumb-item"><a href="javascript: void(0);">Admin panel</a></li>
                                         <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                         <li class="breadcrumb-item active">Dashboard</li>
                                     </ol>
                             </div>
                         </div>
                         <div class="col-sm-6">
                            <div class="float-end d-none d-sm-block">
                                <a href="#" class="btn btn-success">Add Widget</a>
                            </div>
                         </div>
                     </div>
                    </div>
                 </div>
                 <!-- end page title -->


                <div class="container-fluid">

                    <div class="page-content-wrapper">



                        @yield('a_conten')


                    </div>


                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script> © Morvin.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">

                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->


    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>

    <!-- apexcharts -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Plugins js-->
    <script src="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>

    <script src="assets/js/pages/dashboard.init.js"></script>


    <script src="assets/js/app.js"></script>

</body>



</html>
