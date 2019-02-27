
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
                 var a=document.getElementById("num1").value;                                                    
                 var b=document.getElementById("num2").value;
                 var c=parseInt(a)*parseInt(b);
                 document.getElementById("num3").value=c;
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
										<li class="menu__item"><a href="userpage.php" class="menu__link"><span class="menu__helper">Back</span></a></li>
										  <li class="menu__item"><a href="userprofile.php" class="menu__link"><span class="menu__helper">Profile</span></a></li>	
                                                                         <li class="menu__item"><a href="contact.php" class="menu__link"><span class="menu__helper">Contact Us</span></a></li>
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
						<h3 class="tittle">Pur<span>Chase</span></h3>
					</div>
			</div>
		</div>
 
   <div class="bottom" style="position: relative; bottom: -5px;">
		<div class="container" style="position: relative;">
			<div class="bottom-top">				
                            <p style="color: whitesmoke;font-size: larger;font-style: italic;">Be A Part Of Us.Tell Us Your Needs.</p>
<div class="opening_hours" >
                     <?php
                      if(isset($_GET['l']))
                      {
                       $q=$_GET['l'];
                     $q2=mysql_query("select * from addmedicine where id='$q'");
                     $f=mysql_fetch_row($q2);
                    
                         ?>
    <?php
    if(isset($_POST['buy']))
{
    $u=$_SESSION['username'];
     $e=$_POST['quantity'];
     $y=$_POST['total'];
    $d=mysql_query("select * from addmedicine where id='$q'");
    $d1=mysql_fetch_row($d); 
    $mm=$_POST['m'];
    $d=date('y-m-d');
    $g=mysql_query("insert into purchase values('','$u','$d1[1]','$d1[2]','$d1[4]','$d1[3]','$e','$d1[5]','$y','$d')");  
}
?>                     
      <form method="post" enctype="multipart/form-data">
                                    <center>
                                        <table class="table table-responsive table-condensed" style="width: 560px;">
                                            <tr>
                                                <td style="color: white;"><b>Category</b></td>
                                                <td style="color: #000000;"><big><?php echo $f[2]?></big></td>
                                            </tr>
                                            <tr>
                                                <td style="color: white;"><b>Store</b></td>
                                                <td style="color: #000000;"><big><input type="text" name="m" value="<?php echo $f[1]?>" readonly="readonly"></big></td>
                                            </tr>
                                            <tr>
                                                <td style="color: white;"><b>Medicine</b></td>
                                                <td style="color: #000000;"><big><?php echo $f[4]?></big></td>
                                            </tr>
                                            <tr>

                                                <td style="color: white;"><b>Quantity</b></td>
                                                <td><input type="text" name="quantity"class="form-control" id="num1"></td>
                                                
                                                <td style="color: white;width: 70px;"><b>Price</b></td>
                             <td><input type="text" name="price" value="<?php echo $f[5]?>" class="form-control" id="num2"></td>
<!--                             <td>
                         <a href="purchase.php"><input type="submit" name="total" value="Total Amount" class="btn btn-link"></a>
                             </td>-->
                                            </tr> 
                                              
                                            <tr>
                                                <td style="color: white;width: 70px;"><b>Amount Paid</b></td>
                                                <td><input type="text" name="total"  onclick="msg1()" class="form-control" id="num3"></td>
                           
                                            </tr>
                                           
                                      <?php
                                     } 
                                       ?>
                                        </table>
 <a href="purchase.php?id=<?php echo $f[0]?>" onclick="msg()"><input type="submit" name="buy" value="Buy" class="btn btn-primary" ></a>
 <a href="availablemedicine.php"  class="btn btn-primary">Cancel</a>
                                        <script>
                                            function msg()
                                            {
                                                alert("Your Requirements Submitted Successfully.Thank You.");
                                            }
                                            </script>
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