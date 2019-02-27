
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
ob_start();
mysql_connect("localhost","root","");
mysql_select_db("medicalstore");
session_start();
 $u=$_SESSION['username'];
   $k=$_GET['k'];
   $tp=mysql_query("select * from addmedicine where sname='$k'");
                  $ii= mysql_fetch_row($tp);
                if(isset($_POST['send']))
                {
                    $rt=$_POST['txt'];
                    $df=$_FILES['file']['name'];
                    $yt=move_uploaded_file($_FILES['file']['tmp_name'],getcwd()."//docu/$df");
                    $nn=mysql_query("insert into chatbox values('','$ii[1]','$u','$rt','$df','0')");
                    if($nn>0)
                    {
                    
                       header("location:availablemedicine.php?k=$k");
                 
                    }
                    else
                    {
                        echo mysql_error();
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
<a href="fonts/glyphicons-halflings-regular.eot"></a>
<a href="fonts/glyphicons-halflings-regular.ttf"></a>
<a href="fonts/glyphicons-halflings-regular.woff2"></a>
<a href="fonts/glyphicons-halflings-regular.woff"></a>

<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<style>
    .bottom-top1 {
       width: 65%;
       background: white;    
    text-align: center;
  
    padding: 5% 21px;
    margin: 0 auto;
       position: relative;
    top: -195px;
    right: -400px;
}
 .bottom-top2 {
       width: 75%;
       background: #00cccc;
    text-align: center;
    padding: 5% 21px;
    margin: 0 auto;
    color: #1ba1a5;
 
}
#ff{
    display: none;
}
</style>
</head>
<body>
<!--start-home-->
<script>
$(document).ready(function()
{
    $('#re').click(function()
    {
      $('#ff').toggle();  
    }
                );
    
});

</script>
    
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
                                   <h3 class="tittle"><b>Medi</b><span>Cine</span></h3>
					</div>
			</div>         
                </div> 
   <div class="bottom" style="position: relative; bottom: -5px;">
		<div class="container" style="position: relative; bottom: -px;">
			<div class="bottom-top">				
               <p style="color: whitesmoke;font-size: larger;font-style: italic;">Be A Part Of Us.Tell Us Your Needs.</p>
               <form method="post" enctype="multipart/form-data">
                        <?php
                         if(isset($_GET['k']))
                         {
                       
                        $tt=mysql_query("select * from addmedicine where sname='$k'");
                       while($ee=mysql_fetch_row($tt))
                        {
                        ?>                            
                                <center>
                                    <table class="table table-responsive table-condensed">
                                        <tr>
                                            <td style="color: white;"><?php echo $ee[2]?></td>
                                            <td style="color: white;">For:<span></span><?php echo $ee[3]?></td>
                                            <td style="color: white;"><?php echo $ee[4]?></td>
                                            <td style="color: white;">Rs.<?php echo $ee[5]?></td>
                                            <td>
                                                <button><a href="purchase.php?l=<?php echo $ee[0]?>" class="btn btn-primary">Buy</a></button>
                                           
             
                                            </td>
                                        </tr>
                                    </table>
                                </center>
                           
                        <?php
                        }
                         }
                        ?>
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
                
                                                            
                <!--CHAT BOX PART-->
                <span  style=" background-color: #1f4e39;padding: 1%; width: 70px;height: 70px; border-radius: 50px; position: relative;color: #f2e1e1; top: -1210px;right: -1250px; " id="re" >chat</span>
                <div id="ff" style="position:fixed;top:450px;left: 549px;">  
    <div class="bottom-top1" style="width: 400px;height: 400px;border-style: solid;border-color: black;border-radius: 5px;">
     
     <div style="background-color: #04a6e3;width: 400px;height: 50px;border-radius: 5px;position: relative;left: -21px;top: -67px;">
         <span style="color:white;position: relative;bottom: -10px;left: -20px;"><b style="color: black;">Chat With</b> <?php echo $ii[1]?> <b style="color: black;">store</b></span>              
     </div>
               
       <div class="bottom-top2"id="sh" style="width: 380px;height: 190px;border-radius: 5px;overflow-y: auto;box-shadow: 4px 3px;position: relative;top: -45px;left: -10px;">
           <p style="color: black;">
           <?php 
           $gg=  mysql_query("select * from chatbox where (toid='$k' and fromid='$u')or (toid='$u' and fromid='$k') order by id desc");
           while ($qq=mysql_fetch_row($gg))
           {
               if($qq[1]==$u)
               {
                 ?>
               <div style=" position: relative;width: 40%;height: auto;padding: 3%;border: 1px #71c8de solid;margin-top: 1%;border-radius: 20px;background-color: #f2e1e1;text-align: left;">
                  
                   <?php if($qq[4]!="")
                   {
                      $ext= strchr($qq[4],'.');                     
                      ?>                
                    <?php                    
                      if($ext=='.jpg' || $ext=='.jpeg' || $ext=='.png' || $ext=='.gif')
                      {
                          ?>              
               <img src="docu/<?php echo $qq[4]?>" width="50px;" height="50px;">           
                   <?php
                      }                  
             else if($ext=='.mp4')
               {
                 ?>               
               <video src="docu/<?php echo $qq[4] ?>"controls width="100%;"></video>
               <?php   
              }
               else if($ext=='.mp3' || $ext=='.m4a')
               {
                 ?>
               <audio src="docu/<?php echo $qq[4]?>" width="50%" controls></audio>
               <?php   
              }
                   }                                 
                  ?>
            <?php echo $qq[3]?>
               </div>
                   <?php
               }
               else
               {
                   ?>
           <div style="position: relative;left:54%;width: 40%;height: auto;padding: 3%;border: 1px white solid;margin-bottom: 1%;border-radius: 20px;background-color: white;text-align: right;">
              <?php                   
                if($qq[4]!="")
                   {
                      $ext= strchr($qq[4],'.mp');  
                      echo $ext;
                      ?>               
                    <?php                     
                      if($ext=='.jpg' || $ext=='.jpeg' || $ext=='.png' || $ext=='.gif')
                      {
                          ?>              
               <img src="docu/<?php echo $qq[4]?>" width="50px;" height="50px;">           
                   <?php
                      }                   
             else if($ext=='.mp4')
               {
                 ?>               
               <video src="docu/<?php echo $qq[4] ?>" controls width="100%"> </video>
               <?php   
              }
               else if($ext=='.mp3' || $ext=='.m4a')
               {
                   
                 ?>
               <?php echo $qq[4]?>
      <audio controls>
  <source src="docu/<?php echo $qq[4]?>" type="audio/mp3">  
</audio>
               
               <?php   
              }
                   }              
                   echo $qq[3]?>              
               </div>  
           <?php                   
               }              
           }
           ?></p>
                   </div>
      
        <div style="position: relative;right: -30px;top: -20px;">
              <form method="post" enctype="multipart/form-data">
            <textarea name="txt" class="form-control" placeholder="Write Message..."  style="width: 200px;height: 40px;"></textarea>                   
                   <div style="position: relative;right: -70px;top: -36px;">
                        <input type="submit" name="send" value="Send" class="btn btn-primary"> 
                          <input type="file" name="file" class="form-control" style="position: relative;bottom: -10px;left: -90px;">
                   </div>
            </form>
                      </div>
         
                   </div>
               
</div>
</div>
               
<!--CHAT BOX PART ENDS-->

                
                
                
                
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