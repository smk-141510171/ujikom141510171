<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link href="<?php echo e(url('/master/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">



    <!-- MetisMenu CSS -->

    <link href="<?php echo e(url('/master/vendor/metisMenu/metisMenu.min.css')); ?>" rel="stylesheet">



    <!-- Custom CSS -->

    <link href="<?php echo e(url('/master/dist/css/sb-admin-2.css')); ?>" rel="stylesheet">



    <!-- Morris Charts CSS -->

    <link href="<?php echo e(url('/master/vendor/morrisjs/morris.css')); ?>" rel="stylesheet">



    <!-- Custom Fonts -->

    <link href="<?php echo e(url('/master/vendor/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css">
    
    
</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
    <div id="app">
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    

                    <!-- Branding Image -->

                    
                    </div>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    
                    <ul class="nav navbar-nav navbar-left">
                       <a href="#menu-toggle" style="margin-top: 10px" class="btn btn-default" id="menu-toggle" title="Side Bar"><i class="fa fa-bar-chart-o fa-list-ul " ></i></a> 
                    </ul>
                    <ul>
        <div id="sidebar-wrapper">
            
            <div class="navbar-default sidebar" role="navigation">

                <div class="sidebar-nav navbar-collapse">

                    <ul class="nav" id="side-menu">

                        <li>

                            <p><font color="white" size="20"> Menu <i class="glyphicon glyphicon-book"></i></font></p>

                        </li>

                        <li>

                            <a href="#" class="btn btn-default"><font color="black"><i class="fa fa-bar-chart-o fa-male"></i> Golongan<span class="fa arrow"></span></font></a>

                            <ul class="nav nav-second-level">

                                <li style="background-color: white">

                                    <a href="<?php echo e(url('/golongan')); ?>"><font color="black">Table</font></a>

                                </li>

                                <li style="background-color: white">

                                    <a href="<?php echo e(url('/golongan/create')); ?>"><font color="black">Buat Baru<</a>

                                </li>

                            </ul>

                            <!-- /.nav-second-level -->

                        </li>

                        <li>

                            <a href="#" class="btn btn-default"><font color="black"><i class="fa fa-bar-chart-o fa-group"></i> Jabatan<span class="fa arrow"></span></font></a>

                            <ul class="nav nav-second-level">

                                <li>

                                    <a href="<?php echo e(url('/jabatan')); ?>">Table</a>

                                </li>

                                <li>

                                    <a href="<?php echo e(url('/jabatan/create')); ?>">Buat Baru</a>

                                </li>

                            </ul>

                            <!-- /.nav-second-level -->

                        </li>

                        <li>

                            <a href="#" class="btn btn-default"><font color="black"><i class="fa fa-bar-chart-o fa-list-ul"></i> Kategori Lembur<span class="fa arrow"></span></font></a>

                            <ul class="nav nav-second-level">

                                <li>

                                    <a href="<?php echo e(url('/kategorilembur')); ?>">Table</a>

                                </li>

                                <li>

                                    <a href="<?php echo e(url('/kategorilembur/create')); ?>">Buat Baru</a>

                                </li>

                            </ul>

                            <!-- /.nav-second-level -->

                        </li>

                        <li>

                            <a href="#" class="btn btn-default"><font color="black"><i class="fa fa-bar-chart-o fa-child"></i> Pegawai<span class="fa arrow"></span></font></a>

                            <ul class="nav nav-second-level">

                                <li>

                                    <a href="<?php echo e(url('/pegawai')); ?>">Table</a>

                                </li>

                                <li>

                                    <a href="<?php echo e(url('/pegawai/create')); ?>">Buat Baru</a>

                                </li>

                            </ul>

                            <!-- /.nav-second-level -->

                        </li>

                        <li>

                            <a href="#" class="btn btn-default"><font color="black"><i class="glyphicon glyphicon-hourglass"></i> Lembur Pegawai<span class="fa arrow"></span></font></a>

                            <ul class="nav nav-second-level">

                                <li>

                                    <a href="<?php echo e(url('/lemburpegawai')); ?>">Table</a>

                                </li>

                                <li>

                                    <a href="<?php echo e(url('/lemburpegawai/create')); ?>">Buat Baru</a>

                                </li>

                            </ul>

                            <!-- /.nav-second-level -->

                        </li>

                        <li>

                            <a href="#" class="btn btn-default"><font color="black"><i class="fa fa-bar-chart-o fa-usd"></i> Tunjangan<span class="fa arrow"></span></font></a>

                            <ul class="nav nav-second-level">

                                <li>

                                    <a href="<?php echo e(url('/tunjangan')); ?>">Table</a>

                                </li>

                                <li>

                                    <a href="<?php echo e(url('/tunjangan/create')); ?>">Buat Baru</a>

                                </li>

                            </ul>

                            <!-- /.nav-second-level -->

                        </li>

                        <li>

                            <a href="#" class="btn btn-default"><font color="black"><i class="fa fa-bar-chart-o fa-usd"></i> Tunjangan Pegawai<span class="fa arrow"></span></font></a>

                            <ul class="nav nav-second-level">

                                <li>

                                    <a href="<?php echo e(url('/tunjanganpegawai')); ?>">Table</a>

                                </li>

                                <li>

                                    <a href="<?php echo e(url('/tunjanganpegawai/create')); ?>">Buat Baru</a>

                                </li>

                            </ul>

                            <!-- /.nav-second-level -->

                        </li>
                        <li>
                            <a href="#" class="btn btn-default"><font color="black"><i class="fa fa-bar-chart-o fa-usd"></i> Penggajian<span class="fa arrow"></span></font></a>

                            <ul class="nav nav-second-level">

                                <li>

                                    <a href="<?php echo e(url('/penggajian')); ?>">Table</a>

                                </li>

                                <li>

                                    <a href="<?php echo e(url('/penggajian/create')); ?>">Buat Baru</a>

                                </li>

                            </ul>

                            <!-- /.nav-second-level -->

                        </li>


                    </ul>

                </div>

                <!-- /.sidebar-collapse -->


        </nav>
        <?php echo $__env->yieldContent('content'); ?>
        

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    
    <script src="<?php echo e(url('/master/vendor/jquery/jquery.min.js')); ?>"></script>



    <!-- Bootstrap Core JavaScript -->

    <script src="<?php echo e(url('/master/vendor/bootstrap/js/bootstrap.min.js')); ?>"></script>



    <!-- Metis Menu Plugin JavaScript -->

    <script src="<?php echo e(url('/master/vendor/metisMenu/metisMenu.min.js')); ?>"></script>



    <!-- Morris Charts JavaScript -->

    <script src="<?php echo e(url('/master/vendor/raphael/raphael.min.js')); ?>"></script>

    <script src="<?php echo e(url('/master/vendor/morrisjs/morris.min.js')); ?>"></script>

    <script src="<?php echo e(url('/master/data/morris-data.js')); ?>"></script>



    <!-- Custom Theme JavaScript -->

    <script src="<?php echo e(url('/master/dist/js/sb-admin-2.js')); ?>"></script>
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
