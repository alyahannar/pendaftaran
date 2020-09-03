<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/library/admin2/assets/images/favicon.png">
    <title>ADMIN</title>
    <!-- Bootstrap Core CSS -->
    <link href="/assets/library/admin2/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/assets/library/admin2/monster-html/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="/assets/library/admin2/monster-html/css/colors/blue.css" id="theme" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{url('/dashboard')}}">
                        <!-- Logo icon -->
                        <b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="/assets/library/admin2/assets/images/logo-icon.png" alt="homepage" class="dark-logo" />

                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span>
                            <!-- dark Logo text -->
                            <img src="/assets/library/admin2/assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                        </span>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0 ">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item hidden-sm-down">
                            <form class="app-search p-l-20">
                                <input type="text" class="form-control" placeholder="Search for..."> <a class="srh-btn"><i class="ti-search"></i></a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->

                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                <ul id="sidebarnav">
                        <!-- <li>
                            <a class="waves-effect" href="{{url('/dashboard')}}"><i class="fa fa-clock-o m-r-10" aria-hidden="true"></i>Dashboard</a>
                        </li>
                        <li>
                            <a class="waves-effect" href="{{url('/kategoriadmin')}}"><i class="fa fa-user m-r-10" aria-hidden="true"></i>Kategori</a>
                        </li> -->
                        <li>
                            <a class="waves-effect" href="{{url('/')}}" ><i class="fa fa-table m-r-10" aria-hidden="true"></i>Pendaftaran</a>
                        </li>
                        <!-- <li>
                            <a class="waves-effect" href="{{url('/multiple-upload/form')}}" ><i class="fa fa-table m-r-10" aria-hidden="true"></i>Multiple Upload</a>
                        </li> -->
                        <!-- <li>
                            <a href="table-basic.html" class="waves-effect"><i class="fa fa-table m-r-10" aria-hidden="true"></i>Basic Table</a>
                        </li>
                        <li>
                            <a href="icon-fontawesome.html" class="waves-effect"><i class="fa fa-font m-r-10" aria-hidden="true"></i>Icons</a>
                        </li>
                        <li>
                            <a href="map-google.html" class="waves-effect"><i class="fa fa-globe m-r-10" aria-hidden="true"></i>Google Map</a>
                        </li>
                        <li>
                            <a href="pages-blank.html" class="waves-effect"><i class="fa fa-columns m-r-10" aria-hidden="true"></i>Blank Page</a>
                        </li>
                        <li>
                            <a href="pages-error-404.html" class="waves-effect"><i class="fa fa-info-circle m-r-10" aria-hidden="true"></i>Error 404</a>
                        </li> -->
                    </ul>
                    <div class="text-center m-t-30">
                        <a href = "{{url('/sign-out')}}" class="btn btn-danger">SIGN OUT</a>
                    </div>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Produk</h3>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <!-- Column -->
                    <!-- Column -->
                    <!-- Column -->

                <!-- Row -->
                <!-- Row -->
                    <!-- column -->
                </div>
                <!-- Row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-block">
                                <center>
                                <h4 class="card-title">Pendaftaran</h4>
                                </center>
                                <div class="table-responsive m-t-40">

                                    <table class="table stylish-table">
                                        <thead>
                                        </thead>
                                        <tbody>
                                        <form action="{{url('/pendaftaran/save')}}" method="POST" enctype="multipart/form-data">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">

                                        <div class="form-group">
                                         <label>Id </label>
                                         <input type="id" name="id" rows="5" class="form-control" placeholder=""></input><br>
                                         </div>
                                        <div class="form-group">
                                         <label>Nama</label>
                                         <input type="id" name="nama" rows="5" class="form-control" placeholder=""></input><br>
                                         </div>
                                         <div class="form-group">
                                         <label>Agama</label>
                                         <input type="id" name="agama" rows="5" class="form-control" placeholder=""></input><br>
                                         </div>
                                         <div class="form-group">
                                         <label>Tempat,Tanggal Lahir</label>
                                         <input type="id" name="ttl" rows="5" class="form-control" placeholder=""></input><br>
                                         </div>
                                         <div class="form-group">
                                         <label>NIK</label>
                                         <input type="id" name="nik" rows="5" class="form-control" placeholder=""></input><br>
                                         </div>
                                         <div class="form-group">
                                         <label>Telp</label>
                                         <input type="id" name="telp" rows="5" class="form-control" placeholder=""></input><br>
                                         </div>
                                         <div class="form-group">
                                         <label>Email</label>
                                         <input type="id" name="email" rows="5" class="form-control" placeholder=""></input><br>
                                         </div>
                                         <div class="form-group">
                                         <label>Pendidikan</label>
                                         <input type="id" name="pendidikan" rows="5" class="form-control" placeholder=""></input><br>
                                         </div>

                                         <!-- <div class="form-group">
                                            <label>Foto Produk</label><br>
                                            <input type="file" name="file">
                                        </div> -->

                                        <input type="submit" value="Simpan" class="btn btn-success">
                                        </form>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <!-- Column -->
                    <!-- Column -->
                    <!-- Column -->
                    <!-- Column -->
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                © 2017 Monster Admin by wrappixel.com
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="/assets/library/admin2/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="/assets/library/admin2/assets/plugins/bootstrap/js/tether.min.js"></script>
    <script src="/assets/library/admin2/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="/assets/library/admin2/monster-html/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="/assets/library/admin2/monster-html/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="/assets/library/admin2/monster-html/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="/assets/library/admin2/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="/assets/library/admin2/monster-html/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- Flot Charts JavaScript -->
    <script src="/assets/library/admin2/assets/plugins/flot/jquery.flot.js"></script>
    <script src="/assets/library/admin2/assets/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="/assets/library/admin2/monster-html/js/flot-data.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="/assets/library/admin2/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
    <script type="text/javascript">
    jQuery(document).ready(function ()
    {
            jQuery('select[name="id_kategori"]').on('change',function(){
               var id_kategori = jQuery(this).val();
               if(id_kategori)
               {
                  jQuery.ajax({
                     url : 'dropdownlist/getkategori/' +id_kategori,
                     type : "GET",
                     dataType : "json",
                     success:function(data)
                     {
                        console.log(data);
                        jQuery('select[name="nama_kategori"]').empty();
                        jQuery.each(data, function(key,value){
                           $('select[name="nama_kategori"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });
                     }

                  });
               }
               else
               {
                  $('select[name="nama_kategori"]').empty();
               }
            });
    });
    </script>
</body>

</html>

