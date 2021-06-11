<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>SPK System Vicenza </title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url('asset/'); ?>plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url('asset/'); ?>plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url('asset/'); ?>plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="<?php echo base_url('asset/'); ?>plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo base_url('asset/'); ?>css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url('asset/'); ?>css/themes/all-themes.css" rel="stylesheet" />
    
    <!-- Sweetalert Css -->
    <link href="<?php echo base_url('asset/'); ?>plugins/sweetalert/sweetalert.css" rel="stylesheet" />

    <!-- Jquery Core Js -->
    <script src="<?php echo base_url('asset/'); ?>plugins/jquery/jquery.min.js"></script>

    <!-- SweetAlert Plugin Js -->
    <script src="<?php echo base_url('asset/'); ?>plugins/sweetalert/sweetalert.min.js"></script>
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Mohon Tunggu...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
   
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html">SPK System Vicenza</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right"> 
                    <div class="btn-group" role="group" style="margin-top:20px;">
                        <button type="button" class="btn btn-warning waves-effect dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">account_circle</i>
                                <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:void(0);" class=" waves-effect waves-block">Pengaturan User</li>
                            <li><a href="javascript:void(0);" class=" waves-effect waves-block">Logout</a></li>
                        </ul>
                    </div>
                    
                </ul>
 
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
        <div class="user-info">
        <img src="<?php echo base_url('asset/') ?>images/vcz.png"  style="width:100%; margin-top:-80px;" >
        </div>
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">Menu Master</li>
                    <li class="active">
                        <a href="<?php echo base_url('pegawaiimport'); ?>">
                        <i class="material-icons">account_circle</i>
                            <span>Import Data Pegawai</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block toggled">
                        <i class="material-icons">account_circle</i>
                            <span>Master Pegawai</span>
                        </a>
                        <ul class="ml-menu" style="display: block;">
                            <li>
                                <a href="javascript:void(0);" class=" waves-effect waves-block">
                                    <span>Pegawai</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class=" waves-effect waves-block">
                                    <span>Jabatan</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class=" waves-effect waves-block">
                                    <span>Status Pekerjaan</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class=" waves-effect waves-block">
                                    <span>Marital Status</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class=" waves-effect waves-block">
                                    <span>Agama</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class=" waves-effect waves-block">
                                    <span>Anak</span>
                                </a>
                            </li>
                             
                        </ul>
                    </li>
                    <li class="header">Menu Transaksi</li>
                    <li>
                        <a href="pages/helper-classes.html">
                            <i class="material-icons">layers</i>
                            <span>Pembuatan SPK</span>
                        </a>
                    </li>
                    <li class="header">Pengaturan</li>
                    <li>
                        <a href="pages/helper-classes.html">
                            <i class="material-icons">layers</i>
                            <span>User</span>
                        </a>
                    </li>
                      
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2021  <a href="javascript:void(0);"> PT. RINDANG SAKTI DAMAI</a>.
                </div>
              
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        < 
        <!-- #END# Right Sidebar -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                 
            </div>
            <!-- Input -->
            <div class="row clearfix">
                <?php 
                echo $this->load->view($konten);
                ?>
            </div>
        </div>
    </section>
    

    
 
</body>


    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url('asset/'); ?>plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="<?php echo base_url('asset/')?>plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url('asset/')?>plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Bootstrap Notify Plugin Js -->
    <script src="<?php echo base_url('asset/')?>plugins/bootstrap-notify/bootstrap-notify.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url('asset/')?>plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url('asset/')?>js/admin.js"></script>

    <!-- Demo Js -->
    <script src="<?php echo base_url('asset/')?>js/demo.js"></script>
</html>
