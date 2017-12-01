<?php 
session_start();

if(isset($_POST['register'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = 'changeme';


include 'config.php';

$sql = "INSERT INTO user () VALUES (null,'$name', '$username', '$password', 'std')";
$r=mysqli_query($con,$sql);
if ($r>0) {
   echo "<script>alert('New Student Added')</script>";
}

}

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
    <link rel="stylesheet" href="css/style.css">
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

        <nav class="navbar navbar-inverse" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h3 class="navbar-brand"><a href="home.php">BALKPAY</a></h3>
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
                <h2>ADD NEW STUDENT</h2>
                <p class="lead">Payment made easier and more secure.</p>
            </div>  

            <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <div class="basic-login">
                            <form method="post">
                                <div class="form-group">
                                    <label for="login-username"><i class="icon-user"></i> <b>Name</b></label>
                                    <input class="form-control" id="login-username" type="text" placeholder="" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="login-username"><i class="icon-user"></i> <b>Matric Number</b></label>
                                    <input class="form-control" id="login-username" type="text" placeholder="" name="username">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn pull-right" name="register">Register</button>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        </div><!--/container-->
    </section><!--/pricing-page-->
           

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2017 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">PAYIT</a>. All Rights Reserved.
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