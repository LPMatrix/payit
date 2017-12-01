<?php 
    session_start();
    include 'config.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>BALKPAY</title>
    
    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
        <script type="text/javascript" src="js/angular.js"></script>
    <script type="text/javascript" src="js/process.js"></script>
    
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>

    <header id="header">

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h3 class="navbar-brand">BALKPAY</h3>
                    
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul style="color:#fff" class="nav navbar-nav navbar-right">
                        <li><a href="#"><?php echo $_SESSION['name']; ?></a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->

    <section class="pricing-page">
        <div class="container">
            <div class="center">  
                <h2>BALKPAY</h2>
                <p class="lead">Payment made easier and more secure.</p>
                <small>If you have any problem using this contact the admin at <a href="" mailto:"mubaraqsanusi908@gmail.com">Admin</a></small>
            </div>  
            <div class="pricing-area text-center">
                <div class="row">

                    <div class="col-sm-6 col-md-3 plan price-three wow fadeInDown">
                        <ul>
                            <li class="heading-three">
                                <h1>Logbook</h1>
                                <span>#600</span>
                            </li>
                            <li>Pay for your logbook</li>
                            <li>It costs #600</li>
                            <li class="plan-action">
                                <a href="https://paystack.com/pay/mUTyPUTbyD" class="btn btn-primary">Pay</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-md-3 plan price-two wow fadeInDown">
                        <ul>
                            <li class="heading-two">
                                <h1>GSE textbook</h1>
                                <span>#800</span>
                            </li>
                            <li>Pay for your GSE textbook</li>
                            <li>It costs #800</li>
                            <li class="plan-action">
                                <a href="https://paystack.com/pay/jh0NVR3Sob" class="btn btn-primary">Pay</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-md-3 plan price-six wow fadeInDown">
                        <ul>
                            <li class="heading-six">
                                <h1>Library</h1>
                                <span>#200</span>
                            </li>
                            <li>Pay for your library</li>
                            <li>It costs #200</li>
                            <li class="plan-action">
                                <a href="https://paystack.com/pay/dIW4nEGgl-" class="btn btn-primary">Pay</a>
                            </li>
                        </ul>
                    </div>

                     <div class="col-sm-6 col-md-3 plan price-seven wow fadeInDown">
                        <ul>
                            <li class="heading-seven">
                                <h1>Matric Gown</h1>
                                <span>#500</span>
                            </li>
                            <li>Pay for your Matric gown</li>
                            <li>It costs #500</li>
                            <li class="plan-action">
                                <a href="https://paystack.com/pay/yESX8XPJZR" class="btn btn-primary">Pay</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!--/pricing-area-->
        </div><!--/container-->
    </section><!--/pricing-page-->
           

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2017 <a target="_blank" href="#">PAYIT</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Faq</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script type="text/javascript">
        $('.carousel').carousel()
    </script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>