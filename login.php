<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
mysql_connect("localhost","root","");
mysql_select_db("medicalstore");
if(isset($_POST['login']))
{
 $u=$_POST['username'];
    $p=$_POST['pass'];
    $n=mysql_query("select * from login where username='$u' and password='$p'");
    
           if(mysql_num_rows($n)>0)
                      {
               
                  $m=mysql_fetch_row($n);
                       if($m[3]=='ad')
                       {
                       
                        header("location:adminpage.php");
                      }
                     if ($m[3]=='user')
                     {
                        session_start();
                        $_SESSION['username']=$u;
                        header("location:userpage.php");
                     }
                     if ($m[3]=='store')
                     {
                        session_start();
                        $_SESSION['username']=$u;
                        header("location:storepage.php");
                     }
                      }
                     else 
                         {
                      ?>
<script>
    function msg()
    {
        alert("Invalid Credential...Please Check");
    }
    </script>
    
<?php
         }
  
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
<style>
    .bottom-to {
       width: 65%;
       color: black;
    background: rgba(11, 145, 148, 0.100);
    text-align: center;
    padding: 5% 21px;
    margin: 0 auto
}
.bottom-to i{
    color: black;
    font-size: 2.1em;
    font-weight: 700;
    text-transform: uppercase;
</style>

<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
                        
                        
                         function msg1()
                        {
                            var a=document.getElementById("username").value;                          
                             if(a==null || a=="")
                             {
                                 document.getElementById("username").style.borderColor="red";
                                  document.getElementById("n1").innerHTML="<font color='red'>Please Enter User Name!</font>";
                                  document.getElementById("username").focus();
                             }
                           else
                            {
                                document.getElementById("username").style.borderColor="blue";
                                 document.getElementById("n1").innerHTML="";
                            }
                        }
                        
                         function msg2()
                        {
                            var a=document.getElementById("pass").value;                          
                             if(a==null || a=="")
                             {
                                 document.getElementById("pass").style.borderColor="red";
                                  document.getElementById("n2").innerHTML="<font color='red'>Please Enter Your Password!</font>";
                                  document.getElementById("pass").focus();
                             }
                           else
                            {
                                document.getElementById("pass").style.borderColor="blue";
                                 document.getElementById("n2").innerHTML="";
                            }
                        }
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
										<li class="menu__item"><a href="index.php" class="menu__link"><span class="menu__helper">Home</span></a></li>
										<li class="menu__item"><a href="about.php" class="menu__link"><span class="menu__helper">About Us</span></a></li>
										<li class="menu__item  menu__item--current"><a href="login.php" class="menu__link"><span class="menu__helper">Login</span></a></li>
										<li class="menu__item"><a href="registration.php" class="menu__link"><span class="menu__helper">Registration</span></a></li>
										<li class="menu__item"><a href="contact.php" class="menu__link"><span class="menu__helper">Contact Us</span></a></li>
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
						<h3 class="tittle">LOG <span>IN</span></h3>
					</div>
			</div>
		</div>
 
   <div class="bottom" style="position: relative; bottom: -5px;">
		<div class="container" style="position: relative; bottom: -50px;">
			<div class="bottom-top">				
                            <p style="color: whitesmoke;font-size: larger;font-style: italic;">Be A Part Of Us.Tell Us Your Needs.</p>
                            <div class="opening_hours"  >
      <form method="post" enctype="multipart/form-data">
                                    <center>
                                        <table class="table table-responsive table-condensed" style="width: 400px;">
                                            <tr>
                                                <td style="color: white;"><b>Username</b></td>
                                                <td>
                                                    <input type="text" name="username" id="username" placeholder="Enter Your Name" class="form-control" onblur="msg1()"><span id="n1"></span>
                                                </td>
                                            </tr> 
                                            <tr>
                                                <td style="color: white;"><b>Password</b></td>
                                                <td>
                                                    <input type="password" name="pass" id="pass" placeholder="Enter Your Password" class="form-control" onblur="msg2()"><span id="n2"></span>
                                                </td>
                                            </tr> 
                                        </table>
                                        <input type="submit" name="login" value="Login" class="btn btn-primary" onclick="msg()">
                                    
                                    </center>
      </form>
					</div>
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