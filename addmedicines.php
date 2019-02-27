
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
mysql_connect("localhost","root","");
mysql_select_db("medicalstore");
session_start();
$u=$_SESSION['username'];
if(isset($_POST['ok']))
{
    $re=mysql_query("select * from storeregister where username='$u'");
    $re1=  mysql_fetch_row($re);
    $a=$_POST['category'];
    $b=$_POST['disease'];
    $c=$_POST['medicine'];
    $d=$_POST['price'];
    $e=mysql_query("insert into addmedicine values('','$re1[1]','$a','$b','$c','$d')");
    
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Medicinal a Medical Architects Multipurpose Category Flat Bootstrap Responsive Website Template | Typography :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Medicinal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="applisalonion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />	
<link rel="stylesheet" href="css/slider.css">
<script src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!--/web-font-->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>


</head>
<body>
<!--start-home-->

<div class="main-header" id="house">
			
		<!--header-top-->
			<div class="header-top">
			  <div class="container">
					 <nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
						<div class="logo">
							<h1><a class="navbar-brand" href="index.php"><span>M</span>edicinal  <img src="images/logo.png" alt=" " /></a></h1>
						</div>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						  <div class="top-menu">
							<nav class="menu menu--francisco">
								<ul class="nav navbar-nav menu__list">
										<li class="menu__item"><a href="addmedicines.php" class="menu__link"><span class="menu__helper">Add Medicines</span></a></li>
<li class="menu__item"><a href="medicinelist.php" class="menu__link"><span class="menu__helper">Medicinal List</span></a></li>
<li class="menu__item"><a href="storerequest.php" class="menu__link"><span class="menu__helper">Requests<span class="badge badge-warning">5</span></span></a></li>
      <li class="menu__item"><a href="login.php" class="menu__link"><span class="menu__helper">Logout</span></a></li>
									</ul>
								</nav>
							</div>
					</div>
					<!-- /.navbar-collapse -->
				</nav>

			   <div class="clearfix"></div>
			</div>
	</div>
	</div>
<!--//header-top-->
 <!-- //Line Slider -->
		<div class="top_banner two">
			<div class="container">
			       <div class="sub-hd-inner">
                                   <h3 class="tittle"><b>New</b><span>Medicine</span></h3>
					</div>
			</div>
       
                </div>
 
   <div class="bottom" style="position: relative; bottom: -5px;">
		<div class="container" style="position: relative;">
			<div class="bottom-top">				
                            <p style="color: whitesmoke;font-size: larger;font-style: italic;">Be A Part Of Us.Tell Us Your Needs.</p>
                            <form method="post" enctype="multipart/form-data">
                                <center>
                                    <table style="width: 500px;" class="table table-responsive table-condensed">
                                        <tr>
                                            <td style="color: white;">
                                                Category
                                            </td>
                                            <td>
                                                <input type="text" name="category" placeholder="Which Category Of Medicine" class="form-control">
                                            </td>
                                        </tr>
                                         <tr>
                                            <td style="color: white;">
                                                Prefered Disease
                                            </td>
                                            <td>
                                                <input type="text" name="disease" placeholder="Medicine Apply For Which Disease" class="form-control">
                                            </td>
                                        </tr>
                                         <tr>
                                            <td style="color: white;">
                                                Medicine
                                            </td>
                                            <td>
                                                <input type="text" name="medicine" placeholder="Which Medicine To The Category" class="form-control">
                                            </td>
                                        </tr>
                                         <tr>
                                            <td style="color: white;">
                                               Price
                                            </td>
                                            <td>
                                                <input type="text" name="price" placeholder="Price Of Medicine To The Category" class="form-control">
                                            </td>
                                        </tr>    
                                    </table>
                                    <input type="submit" name="ok" value="OK" class="btn btn-primary" onclick="msg()">
                                    <script>
                                        function msg()
                                        {
                                            alert("Successfully Added New Medicines In Your Prefered Category");
                                        }
                                    </script>
                                </center>
                            </form>
			</div>
		</div>
</div>
			
<!-- //shortcodes -->

	<!--/start-footer-section-->
        <div class="footer-section" style="position: relative;bottom: -10px;">
				<div class="container">
					<div class="footer-grids wow bounceIn animated" data-wow-delay="0.4s">
						
						<div class="col-md-3 footer-grid tags">
								<h4>The <span>Tags</span></h4>
								<div class="border2"></div>
							<ul class="tag">
								<li><a href="#">Awesome</a></li>
								<li><a href="#">Strategy</a></li>
								<li><a href="#">Photography</a></li>
								<li><a href="#">Development</a></li>
								<li><a href="#">Css</a></li>
								<li><a href="#">photoshop</a></li>
								<li><a href="#">Html</a></li>
								<li><a href="#">Awesome</a></li>
								<li><a href="#">Strategy</a></li>
								<li><a href="#">Photoshop</a></li>
								<li><a href="#">Html</a></li>
							</ul>
						</div>
						<div class="col-md-3 footer-grid tweet">
								<h4>Latest <span>Tweets</span></h4>
								<div class="border2"></div>
								<div class="icon-3-square">
										<a href="#"><i class="square-3"></i></a>
									</div>
							<div class="icon-text">
								<p>I like this awesome freebie. Check it out By <a href="#"> Admin </a></p>
								<h5>15 mins ago</h5>
							</div>
								<div class="clearfix"></div>
								<div class="icon-3-square">
										<a href="#"><i class="square-3"></i></a>
								</div>
								<div class="icon-text">
								    <p>I like this awesome freebie. Check it out  By <a href="#"> Admin </a> </p>
									<h5>15 mins ago</h5>
								</div>
								<div class="clearfix"></div>
						</div>
						<div class="col-md-3 footer-grid flickr">
								<h4>Flickr <span>Feed </span></h4>
								<div class="border2"></div>
								<div class="flickr-grids">
										<div class="flickr-grid">
											<a href="#"><img src="images/t1.jpg" alt=" " title="CEO" /></a>
										</div>
										<div class="flickr-grid">
											<a href="#"><img src="images/t2.jpg" alt=" " title="GM" /></a>
										</div>
										<div class="flickr-grid">
											<a href="#"><img src="images/t3.jpg" alt=" " title="CEO" /></a>
										</div>
										<div class="clearfix"> </div>
										
										<div class="flickr-grid">
											<a href="#"><img src="images/t2.jpg" alt=" " title="GM" /></a>
										</div>
										<div class="flickr-grid">
											<a href="#"><img src="images/t3.jpg" alt=" " title="CEO" /></a>
										</div>
										<div class="flickr-grid">
											<a href="#"><img src="images/t1.jpg" alt=" " title="GM" /></a>
										</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
			</div>
		</div>
	<!--//end-footer-section-->
	<!--//footer-->
	<div class="footer-bottom" style="position: relative;top: -2px;">
		<div class="container">
			<p>© 2016 Medicinal. All rights reserved </p>
		</div>
	</div>
		<!--start-smooth-scrolling-->
						<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
								<!--end-smooth-scrolling-->
		<a href="#house" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<script src="js/bootstrap.js"></script>

</body>
</html>