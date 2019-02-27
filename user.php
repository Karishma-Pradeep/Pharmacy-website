
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
mysql_connect("localhost","root","");
mysql_select_db("medicalstore");
if(isset($_POST['register']))
{
    $a=$_POST['name'];
    $b=$_POST['contact'];
    $c=$_POST['email'];
    $d=$_POST['address'];
    $e=$_POST['username'];
    $f=$_POST['pass'];
    $g=$_FILES['file']['name'];
    $h=move_uploaded_file($_FILES['file']['tmp_name'],getcwd()."//piks/$g");
    $i=mysql_query("insert into userregister values('','$a','$b','$c','$d','$e','$f','$g','0')"); 
     $j=mysql_query("insert into login values('','$e','$f','user')");
    
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
                        
                        function msg1()
                        {
                            var a=document.getElementById("name").value;                          
                             if(a==null || a=="")
                             {
                                 document.getElementById("name").style.borderColor="red";
                                  document.getElementById("n1").innerHTML="<font color='red'>Please Enter Your Name!</font>";
                                  document.getElementById("name").focus();
                             }
                           else
                            {
                                document.getElementById("name").style.borderColor="blue";
                                 document.getElementById("n1").innerHTML="";
                            }
                        }
                        
                         function msg2()
                        {
                            var a=document.getElementById("contact").value;                          
                             if(a==null || a=="")
                             {
                                 document.getElementById("contact").style.borderColor="red";
                                  document.getElementById("n2").innerHTML="<font color='red'>Please Enter Your Contact!</font>";
                                  document.getElementById("contact").focus();
                             }
                           else
                            {
                                document.getElementById("contact").style.borderColor="blue";
                                 document.getElementById("n2").innerHTML="";
                            }
                        }
                        
                         function msg3()
                        {
                            var a=document.getElementById("email").value;                          
                             if(a==null || a=="")
                             {
                                 document.getElementById("email").style.borderColor="red";
                                  document.getElementById("n3").innerHTML="<font color='red'>Please Enter Your Email Id!</font>";
                                  document.getElementById("email").focus();
                             }
                           else
                            {
                                document.getElementById("email").style.borderColor="blue";
                                 document.getElementById("n3").innerHTML="";
                            }
                        }
                        
                         function msg4()
                        {
                            var a=document.getElementById("address").value;                          
                             if(a==null || a=="")
                             {
                                 document.getElementById("address").style.borderColor="red";
                                  document.getElementById("n4").innerHTML="<font color='red'>Please Enter Your Address!</font>";
                                  document.getElementById("address").focus();
                             }
                           else
                            {
                                document.getElementById("address").style.borderColor="blue";
                                 document.getElementById("n4").innerHTML="";
                            }
                        }
                        
                         function msg5()
                        {
                            var a=document.getElementById("username").value;                          
                             if(a==null || a=="")
                             {
                                 document.getElementById("username").style.borderColor="red";
                                  document.getElementById("n5").innerHTML="<font color='red'>Please Enter A Username!</font>";
                                  document.getElementById("username").focus();
                             }
                           else
                            {
                                document.getElementById("username").style.borderColor="blue";
                                 document.getElementById("n5").innerHTML="";
                            }
                        }
                        
                         function msg7()
                        {
                            var a=document.getElementById("file").value;                          
                             if(a==null || a=="")
                             {
                                 document.getElementById("file").style.borderColor="red";
                                  document.getElementById("n7").innerHTML="<font color='red'>Please Upload Picture!</font>";
                                  document.getElementById("file").focus();
                             }
                           else
                            {
                                document.getElementById("file").style.borderColor="blue";
                                 document.getElementById("n7").innerHTML="";
                            }
                        }
                        
                        function msg1(a)
                        {
                            var len=a.length;
                            if(len<6)
                            {
                                document.getElementById("n6").innerHTML="<font color='red'>Weak Password</font>";
                                document.getElementById("pass").style.borderColor="red";
                                document.getElementById(n6).focus();
                            }
                            else
                            {
                                document.getElementById("n6").innerHTML="<font color='green'>Strong Password</font>";
                                document.getElementById("pass").style.borderColor="green"; 
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
                                   <h3 style="position: relative;top: -90px;" class="tittle">User<span>Registration</span></h3>
                                   
                                                <div class="bottom" style="height: 50%;position: relative; top: -80px;">
		<div class="container" style="position: relative; bottom:  -15px;">
			<div class="bottom-top">				
                            
                             <div class="opening_hours">
                                 <form method="post" enctype="multipart/form-data">
                                    <center>
                                        <table class="table table-responsive table-condensed" style="width: 400px;">
                                            <tr>
                                                <td style="color: white;"><b>Name</b></td>
                                                <td>
        <input type="text" name="name" id="name" placeholder="Enter Your Name" class="form-control" onblur="msg1()"><span id="n1"></span>
                                                </td>
                                            </tr> 
                                            <tr>
                                                <td style="color: white;"><b>Contact</b></td>
                                                <td>
                                                    <input type="text" name="contact" id="contact" placeholder="Enter Your Contact" class="form-control" onblur="msg2()"><span id="n2"></span>
                                                </td>
                                                </td>
                                            </tr> 
                                            <tr>
                                                <td style="color: white;"><b>Email</b></td>
                                                <td>
                                                    <input type="text" name="email" id="email" placeholder="Enter Your Email" class="form-control" onblur="msg3()"><span id="n3"></span>
                                                </td>
                                                </td>
                                            </tr> 
                                            <tr>
                                                <td style="color: white;"><b>Address</b></td>
                                                <td>
                                                    <input type="text" name="address" id="address" placeholder="Enter Your Address" class="form-control" onblur="msg4()"><span id="n4"></span>
                                                </td>
                                                </td>
                                            </tr> 
                                            <tr>
                                                <td style="color: white;"><b>Username</b></td>
                                                <td>
                                                    <input type="text" name="username" id="username" placeholder="Enter Your Username" class="form-control" onblur="msg5()"><span id="n5"></span>
                                                </td>
                                                </td>
                                            </tr> 
                                            <tr>
                                                <td style="color: white;"><b>Password</b></td>
                                                <td>
<input type="password" name="pass" placeholder="Enter Your Password" id="pass" class="form-control" onkeyup="msg1(this.value)"><span id="n6"></span>
                                                </td>
                                                </td>
                                            </tr> 
                                            <tr>
                                                <td></td>
                                                <td>
                                                    <input type="file" name="file" value="Choose Pic" id="file" onblur="msg7()"><span id="n7"></span>
                                                </td>
                                                </td>
                                            </tr>
                                        </table>
                                        <input type="submit" name="register" value="Register" class="btn btn-primary" onclick="msg()" >
                                         <script>
                                            function msg()
                                            {
                                                alert("Successfully Inserted.THANK YOU!!!");
                                            }
                                        </script>
                                    </center>
                                 </form>
					</div>
			</div>
		</div>
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