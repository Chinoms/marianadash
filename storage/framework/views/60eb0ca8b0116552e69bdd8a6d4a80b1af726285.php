<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themekita.com/demo-atlantis-bootstrap/livepreview/examples/demo1/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Jun 2021 15:01:38 GMT -->

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Parcel Tracker Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="https://themekita.com/demo-atlantis-bootstrap/livepreview/examples/assets/img/icon.ico" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="<?php echo e(asset('assets/js/plugin/webfont/webfont.min.js')); ?>"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
                urls: ['../assets/css/fonts.min.css']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/atlantis.css')); ?>">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/demo.css')); ?>">

    <style>
        #top-header {
            height: 150px;
        }

        #addparcel {
            height: auto;
            margin-top: -50px;
            background-color: white;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="main-header">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="blue">

                <a href="index-2.html" class="logo">
                    
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="icon-menu"></i>
                    </span>
                </button>
                <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
                <div class="nav-toggle">
                    <button class="btn btn-toggle toggle-sidebar">
                        <i class="icon-menu"></i>
                    </button>
                </div>
            </div>
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

                <div class="container-fluid">
                    <div class="collapse" id="search-nav">
                        
                    </div>
                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                        <li class="nav-item toggle-nav-search hidden-caret">
                            <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>
                       
                       </ul>
                </div>
            </nav>
            <!-- End Navbar -->
        </div>

        <!-- Sidebar -->
        <div class="sidebar sidebar-style-2">
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <div class="user">
                        <div class="avatar-sm float-left mr-2">
                           
                        </div>
                        <div class="info">
                            <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                                <span>
                                   <?php echo e(Auth::user()->name); ?>

                                   
                                    <span class="caret"></span>
                                </span>
                            </a>
                            <div class="clearfix"></div>

                            <div class="collapse in" id="collapseExample">
                                <ul class="nav">
                                   
                                    <li>
                                        <a href="#settings">
                                            <span class="link-collapse">Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <ul class="nav nav-primary">
                        <li class="nav-item active">
                            <a href="dashboard" class="collapsed" aria-expanded="false">
                                <i class="fas fa-home"></i>
                                <p>Dashboard</p>
                            </a>
                          
                        </li>


                        <li class="nav-item active">
                            <a href="create-parcel" class="collapsed" aria-expanded="false">
                                <i class="fas fa-home"></i>
                                <p>Create Parcel</p>
                            </a>
                          
                        </li>
                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            
                        </li>
                        
                   
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->
        <div class="main-panel">
           <?php echo $__env->yieldContent('pagecontent'); ?>
         
        </div>



        <!--   Core JS Files   -->
        <script src="<?php echo e(asset('assets/js/core/jquery.3.2.1.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/core/popper.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/core/bootstrap.min.js')); ?> "></script>

        <!-- jQuery UI -->
        <script src="<?php echo e(asset('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')); ?>"></script>

        <!-- jQuery Scrollbar -->
        <script src="<?php echo e(asset('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')); ?>"></script>

        <!-- Moment JS -->
        <script src="<?php echo e(asset('assets/js/plugin/moment/moment.min.js')); ?>"></script>

        <!-- Chart JS -->
        <script src="<?php echo e(asset('assets/js/plugin/chart.js/chart.min.js')); ?>"></script>

        <!-- jQuery Sparkline -->
        <script src="<?php echo e(asset('assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js')); ?>"></script>

        <!-- Chart Circle -->
        <script src="<?php echo e(asset('assets/js/plugin/chart-circle/circles.min.js')); ?>"></script>

        <!-- Datatables -->
        <script src="<?php echo e(asset('assets/js/plugin/datatables/datatables.min.js')); ?>"></script>

        <!-- Bootstrap Notify -->
        <script src=""></script>

        <!-- Bootstrap Toggle -->
        <script src="<?php echo e(asset('assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js')); ?>"></script>

        <!-- jQuery Vector Maps -->
        <script src="<?php echo e(asset('assets/js/plugin/jqvmap/jquery.vmap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/plugin/jqvmap/maps/jquery.vmap.world.js')); ?>"></script>

        <!-- Google Maps Plugin -->
        <script src="<?php echo e(asset('assets/js/plugin/gmaps/gmaps.js')); ?>"></script>

        <!-- Dropzone -->
        <script src="<?php echo e(asset('assets/js/plugin/dropzone/dropzone.min.js')); ?>"></script>

        <!-- Fullcalendar -->
        <script src="<?php echo e(asset('assets/js/plugin/fullcalendar/fullcalendar.min.js')); ?>"></script>

        <!-- DateTimePicker -->
        <script src="<?php echo e(asset('assets/js/plugin/datepicker/bootstrap-datetimepicker.min.js')); ?>"></script>

        <!-- Bootstrap Tagsinput -->
        <script src="<?php echo e(asset('assets/js/plugin/bootstrap-tagsinput/bootstrap-tagsinput.min.js')); ?>"></script>

        <!-- Bootstrap Wizard -->
        <script src="<?php echo e(asset('assets/js/plugin/bootstrap-wizard/bootstrapwizard.js')); ?>"></script>

        <!-- jQuery Validation -->
        <script src="<?php echo e(asset('assets/js/plugin/jquery.validate/jquery.validate.min.js')); ?>"></script>

        <!-- Summernote -->
        <script src="<?php echo e(asset('assets/js/plugin/summernote/summernote-bs4.min.js')); ?>"></script>

        <!-- Select2 -->
        <script src="<?php echo e(asset('assets/js/plugin/select2/select2.full.min.js')); ?>"></script>

        <!-- Sweet Alert -->
        <script src="<?php echo e(asset('assets/js/plugin/sweetalert/sweetalert.min.js')); ?>"></script>

        <!-- Owl Carousel -->
        <script src="<?php echo e(asset('assets/js/plugin/owl-carousel/owl.carousel.min.js')); ?>"></script>

        <!-- Magnific Popup -->
        <script src="<?php echo e(asset('assets/js/plugin/jquery.magnific-popup/jquery.magnific-popup.min.js')); ?>"></script>

        <!-- Atlantis JS -->
        <script src="<?php echo e(asset('assets/js/atlantis.min.js')); ?>"></script>

        <!-- Atlantis DEMO methods, don't include it in your project! -->
        <script src="<?php echo e(asset('assets/js/setting-demo.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/demo.js')); ?>"></script>
        <script>
            Circles.create({
                id: 'circles-1',
                radius: 45,
                value: 60,
                maxValue: 100,
                width: 7,
                text: 5,
                colors: ['#f1f1f1', '#FF9E27'],
                duration: 400,
                wrpClass: 'circles-wrp',
                textClass: 'circles-text',
                styleWrapper: true,
                styleText: true
            })

            Circles.create({
                id: 'circles-2',
                radius: 45,
                value: 70,
                maxValue: 100,
                width: 7,
                text: 36,
                colors: ['#f1f1f1', '#2BB930'],
                duration: 400,
                wrpClass: 'circles-wrp',
                textClass: 'circles-text',
                styleWrapper: true,
                styleText: true
            })

            Circles.create({
                id: 'circles-3',
                radius: 45,
                value: 40,
                maxValue: 100,
                width: 7,
                text: 12,
                colors: ['#f1f1f1', '#F25961'],
                duration: 400,
                wrpClass: 'circles-wrp',
                textClass: 'circles-text',
                styleWrapper: true,
                styleText: true
            })

            var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

            var mytotalIncomeChart = new Chart(totalIncomeChart, {
                type: 'bar',
                data: {
                    labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
                    datasets: [{
                        label: "Total Income",
                        backgroundColor: '#ff9e27',
                        borderColor: 'rgb(23, 125, 255)',
                        data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
                    }],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    legend: {
                        display: false,
                    },
                    scales: {
                        yAxes: [{
                            ticks: {
                                display: false //this will remove only the label
                            },
                            gridLines: {
                                drawBorder: false,
                                display: false
                            }
                        }],
                        xAxes: [{
                            gridLines: {
                                drawBorder: false,
                                display: false
                            }
                        }]
                    },
                }
            });

            $('#lineChart').sparkline([105, 103, 123, 100, 95, 105, 115], {
                type: 'line',
                height: '70',
                width: '100%',
                lineWidth: '2',
                lineColor: '#ffa534',
                fillColor: 'rgba(255, 165, 52, .14)'
            });
        </script>
</body>

</html><?php /**PATH /Applications/MAMP/htdocs/marianadash/resources/views/layouts/dashboard.blade.php ENDPATH**/ ?>