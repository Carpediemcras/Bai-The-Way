<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Contact Us | Nova</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/sl-slide.css">

    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>

<body>

    <!--Header-->
    <header class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a id="logo" class="pull-left" href="index.html"></a>
                <div class="nav-collapse collapse pull-right">
                    <ul class="nav">
                        <li><a href="home.php">Home</a></li>
                        <li><a href="login.php">Booking</a></li>
                        <li><a href="terms.php">Terms of Use</a></li>
                        <li class="active"><a href="contact-us.php">Contact</a></li>
                        <li class="login">
                            <a data-toggle="modal" href="#loginForm"><i class="icon-lock"></i></a>
                        </li>
                    </ul>        
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </header>
    <!-- /header -->

    
    <section id="contact-page" class="container">
        <div class="row-fluid">

            <div class="span8">
                <h4>Contact Form</h4>
                <div class="status alert alert-success" style="display: none"></div>

                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                  <div class="row-fluid">
                    <div class="span5">
                        <label>Customer Id</label>
                        <input type="text" class="input-block-level" required="required" placeholder="Enter Customer Id">
                        <label>Name</label>
                        <input type="text" class="input-block-level" required="required" placeholder="Your Name">
                        <label>Email Address</label>
                        <input type="text" class="input-block-level" required="required" placeholder="Your email address">
                    </div>
                    <div class="span7">
                        <label>Message</label>
                        <textarea name="message" id="message" placeholder="ENTER CHANGES TO BE MADE" required="required" class="input-block-level" rows="8"></textarea>
                    </div>

                </div>
                <button type="submit" class="btn btn-primary btn-large pull-right">Send Message</button>
                <p> </p>

            </form>
        </div>

        <div class="span3">
            <h4>Our Address</h4>
            <p></p>
            <p>
                <i class="icon-map-marker pull-left"></i>
                10 / 14 B BELI ROAD NEW KATRA<br> ALLAHABAD,211002, UTTAR PRADESH
            </p>
            <p>
                <i class="icon-envelope"></i> &nbsp;ajiteshs10@gmail.com
            </p>
            <p>
                <i class="icon-phone"></i> &nbsp;+91 8896754394
            </p>
            <p>
                <i class="icon-globe"></i> &nbsp;http://www.baitheway.co.in
            </p>
        </div>

    </div>

</section>

<!--Bottom-->
<section id="bottom" class="main" style="background-color: #96858f;height: 250px;">
    <!--Container-->
    <div class="container">

        <!--row-fluids-->
        <div class="row-fluid">

            <!--Contact Form-->
            <div class="span3">
                <h4>ADDRESS</h4>
                <ul class="unstyled address">
                    <li>
                        <i class="icon-home"></i><strong>Address:</strong>10 / 14 B BELI ROAD NEW KATRA
                    </li>
                    <li>
                        <i class="icon-envelope"></i>
                        <strong>Email: </strong> ajiteshs10@gmail.com
                    </li>
                    <li>
                        <i class="icon-globe"></i>
                        <strong>Website:</strong> www.domain.com
                    </li>
                    <li>
                        <i class="icon-phone"></i>
                        <strong>Toll Free:</strong> +91 8896754394
                    </li>
                </ul>
            </div>
            <!--End Contact Form-->

            <!--Important Links-->
           <div id="tweets" class="span3">
            
                <div>
                <div class="mapouter">
                  <div class="gmap_canvas">
                    <iframe width="1500" height="200" id="gmap_canvas" src="https://maps.google.com/maps?q=Allahabad%2C%20IN&t=&z=14&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                      
                    </iframe>
                    <a href="http://www.embedgooglemap.net"></a>
                    </div>
                    <style>
                    .mapouter
                    {
                      overflow:hidden;height:300px;width:600px;
                    }
                    .gmap_canvas 
                    {
                      background:none!important;height:300px;width:600px;
                    }
                    </style>
                </div>
            <!--Important Links-->

            <!--Archives-->
            <div id="archives" class="span3">
                
            </div>
            <!--End Archives-->

            <div class="span3">
                
            </div>
            <div class="row-fluid">
                            </div>

        </div>

    </div>
    <!--/row-fluid-->
</div>
<!--/container-->

</section>
<!--/bottom-->

<!--Footer-->
<footer id="footer">
    <div class="container">
        <div class="row-fluid">
            <div class="span5 cp">
                &copy; 2013 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">Bai The Way</a>. All Rights Reserved.
            </div>
            <!--/Copyright-->

            <div class="span6">
                <ul class="social pull-right">
                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-pinterest"></i></a></li>
                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                    <li><a href="#"><i class="icon-google-plus"></i></a></li>                       
                    <li><a href="#"><i class="icon-youtube"></i></a></li>
                    <li><a href="#"><i class="icon-tumblr"></i></a></li>                        
                    <li><a href="#"><i class="icon-dribbble"></i></a></li>
                    <li><a href="#"><i class="icon-rss"></i></a></li>
                    <li><a href="#"><i class="icon-github-alt"></i></a></li>
                    <li><a href="#"><i class="icon-instagram"></i></a></li>                   
                </ul>
            </div>

            <div class="span1">
                <a id="gototop" class="gototop pull-right" href="#"><i class="icon-angle-up"></i></a>
            </div>
            <!--/Goto Top-->
        </div>
    </div>
</footer>
<!--/Footer-->

<?php
$tbl_name="old";
$t="user";
$connect=mysqli_connect('localhost','root','','project');
if(isset($_POST['submit']))
{
    $usermail=$_POST['amail'];
    $userpassword=$_POST['apassword'];
    $sql="select * from $tbl_name where email='$usermail' and password='$userpassword'";
    $s="select name from $t where email='$usermail' and password='$userpassword'";
    $result=mysqli_query($connect,$sql);
    $r=mysqli_query($connect,$s);
    $row=mysqli_fetch_row($r);
    $count=mysqli_num_rows($result);
    if($count==1)
    {
        ?>
        <script type='text/javascript'>alert('Logged-In');
        window.location.href = "dash.php";
        </script>
        <?php
        
    }
    else
    {
        ?>
        <script type="text/javascript">alert('Incorrect Details')
        window.location.href = 'home.php';
        </script>
        <?php
    }
     $_SESSION["n"]=strtoupper($row[0]);
}
?>

<!--  Login form -->
<div class="modal hide fade in" id="loginForm" aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Login Form</h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
        <form class="form-inline" action="dash.php" method="post" id="form-login">
            <input type="text" class="input-small" placeholder="Email">
            <input type="password" class="input-small" placeholder="Password">
            <label class="checkbox">
                <input type="checkbox"> Remember me
            </label>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
        <a href="forgot.php">Forgot your password?</a>
    </div>
    <!--/Modal Body-->
</div>
<!--  /Login form -->

<script src="js/vendor/jquery-1.9.1.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/main.js"></script>   

</body>
</html>
