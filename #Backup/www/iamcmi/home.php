<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
<title>Home</title>
<!-- <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" />
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css" /> -->
<link rel="stylesheet" href="../js/jquery-ui-themes-1.12.0-rc.2/themes/smoothness/jquery-ui.css" />
<link rel="stylesheet" href="../css/iamStyle.css">
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css">
<script src="../js/jquery-1.12.4.js"></script>
<script src="../js/jquery-1.12.4.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../js/jquery-ui-1.12.0-rc.2/jquery-ui.js"></script>
 <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!-- MAIN STYLE SECTION-->
<link href="../assets/plugins/isotope/isotope.css" rel="stylesheet" media="screen" />
<link href="../assets/plugins/fancybox/jquery.fancybox.css" rel="stylesheet" />
<link href="../assets/plugins/IconHoverEffects-master/css/component.css" rel="stylesheet" />
<link href="../assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
<link href="../assets/css/about-achivements.css" rel="stylesheet" />
<link id="mainStyle" href="../assets/css/style.css" rel="stylesheet" />
<!-- END MAIN STYLE SECTION-->
</head>
<body>

	  <!-- HEADER SECTION-->
    <div class="navbar navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="fa fa-bars mobile-bars" style=""></span>
                </button>               
            </div>
            <div class="navbar-brand" href="index.html" >
                    <img src="../img/logo2.png" /> <!-- logo here-->
            </div>
            <div class="navbar-collapse collapse" data-scrollreveal="enter from the right 50px">
                <div align="right" class="logout">
                    User: <?php echo $_SESSION["usrName"]; ?> <a href="">Logout</a>
                    Current Date: <?php echo date("d-m-Y h:i:sa"); ?>
                </div> 
                <ul class="nav navbar-nav">
                    <li class=""><a href="#Homepage">Home</a></li><!-- menu links-->
                    <li><a href="#section-about">Create</a></li>  
                    <li><a href="#section-works">Query</a></li>
                    <li><a href="#section-services">Print</a></li>
                </ul>
            </div>

        </div>
    </div>
     <!-- END HEADER SECTION-->
         <!-- HOMEPAGE SECTION-->  

    <section id="Homepage" style="background-color:orange; height:598px;">
        <div class="container-fluid">
            <div class="row">
                <br><br>
                <div data-scrollreveal="wait 0.5s and then ease-in-out 50px" class="col-md-6 col-md-offset-3">

                    <div class="align-center">
                        <h2 class="main-text">WELCOME TO IAMCMI</h2>

                    </div>
                </div>
            </div><br><br>
            <div class="row">
                <div data-scrollreveal="enter from the left 500px" class="col-md-8 col-md-offset-2">
                    <div class="align-center">
                        <div class="col-md-12 align-center">
                            <div class="hi-icon-effect-9 hi-icon-effect-9a">
                                <a href="#Homepage" onMouseOver="document.MyImage1.src='../img/create-hover.png'; " onMouseOut="document.MyImage1.src='../img/create-icono.png';"><img src="../img/create-icono.png" width="120" height="120"  name="MyImage1"></a> 
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                              
                                <a href="#section-works" onMouseOver="document.MyImage2.src='../img/query-hover.png';" onMouseOut="document.MyImage2.src='../img/search-icono.png';"><img src="../img/search-icono.png" width="120" height="120" name="MyImage2"></a>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                <a href="#section-about" onMouseOver="document.MyImage3.src='../img/print-hover.png';" onMouseOut="document.MyImage3.src='../img/print-icono.png';"><img src="../img/print-icono.png" width="120" height="120" name="MyImage3"></a>
                            </div>
                            <br />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <!--END HOMEPAGE SECTION-->

     <div id="footer" class="container-fluid" align="center" style="background-color:#e5e5e5; height:60px;" >
     <footer>
     <br>
     	<span><img src="../img/copy.png"></a> <font color="#666666">1999-2016 IAMCMI.com All rights reserved.</span>
     </footer>
     </div>

</body>
</html>