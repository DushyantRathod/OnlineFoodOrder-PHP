<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");  
error_reporting(0);  
session_start(); 
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Home</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet"> </head>

<body class="home">
    
        <header id="header" class="header-scroll top-header headrom">
            <nav class="navbar navbar-dark">
                <div class="container">
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button> 
                    <a class="navbar-brand" href="index.php"> <img class="img-rounded" src="images/sitelogoNew1.png" style="width: 10%; height: 10%; margin-left:-100px;" alt=""> </a>
                    <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                        <ul class="nav navbar-nav" style="margin-top: 10px;">
                            <li class="nav-item"> <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item"> <a class="nav-link active" href="restaurants.php">Restaurants <span class="sr-only"></span></a> </li>
                            
                           
							<?php
						if(empty($_SESSION["user_id"])) // if user is not login
							{
								echo '<li class="nav-item"><a href="login.php" class="nav-link active">Login</a> </li>
							  <li class="nav-item"><a href="registration.php" class="nav-link active">Register</a> </li>';
							}
						else
							{

									
									echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link active">My Orders</a> </li>';
									echo  '<li class="nav-item"><a href="logout.php" class="nav-link active">Logout</a> </li>';
							}

						?>
							 
                        </ul>
						 
                    </div>
                </div>
            </nav>

        </header>

        <section class="hero bg-image" data-image-src="images/img/pimg.jpg">
            <div class="hero-inner">
                <div class="container text-center hero-text font-white">
                    <h1>Order it, Eat it </h1>
                    
                    <div class="banner-form">
                        <form class="form-inline">
                          
                        </form>
                    </div>
                    <div class="steps">
                    <img  style="width: 50%; height: 20%;" src="images/steps.png">
                   
                    </div>
             
                </div>
            </div>
      
        </section>
      
      
	  
	
     
        <section class="popular">
            <div class="container">
                <div class="title text-xs-center m-b-30">
                    <h2>Popular Dishes of the Month</h2>
                    <p class="lead">Easiest way to order your favourite food among these top 6 dishes</p>
                </div>
                <div class="row">
						<?php 					
						$query_res= mysqli_query($db,"select * from dishes LIMIT 6"); 
                                while($r=mysqli_fetch_array($query_res))
                                {
                                        
                                    echo '  <div class="col-xs-12 col-sm-6 col-md-4 food-item">
                                            <div class="food-item-wrap">
                                                <div class="figure-wrap bg-image" data-image-src="admin/Res_img/dishes/'.$r['img'].'"></div>
                                                <div class="content">
                                                    <h5><a href="dishes.php?res_id='.$r['rs_id'].'">'.$r['title'].'</a></h5>
                                                    <div class="product-name">'.$r['slogan'].'</div>
                                                    <div class="price-btn-block"> <span class="price">&#8377;'.$r['price'].'</span> <a href="dishes.php?res_id='.$r['rs_id'].'" class="btn theme-btn-dash pull-right">Order Now</a> </div>
                                                </div>
                                                
                                            </div>
                                    </div>';                                      
                                }	
						?>
                </div>
            </div>
        </section>
 

        <section class="how-it-works">
            <div class="container">
                <div class="text-xs-center">
                    <h2>Easy to Order</h2>
                    <div class="row how-it-works-solution">
                        <div class="col-xs-12 col-sm-12 col-md-4 how-it-works-steps white-txt col1">
                            <div class="how-it-works-wrap">
                                <div class="step step-1">
                                <img style="width: 50%; height: 50%;  padding: 10px;" src="images/orderprocess-03.png">
                                    <h3>Choose a restaurant</h3>
                                    <p>We"ve got your covered with menus from a variety of delivery restaurants online.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 how-it-works-steps white-txt col2">
                            <div class="step step-2">
                            <img  style="width: 50%; height: 50%;  padding: 10px;" src="images/orderprocess-04.png">
                                <h3>Choose a dish</h3>
                                <p>We"ve got your covered with a variety of delivery restaurants online.</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 how-it-works-steps white-txt col3">
                            <div class="step step-3">
                            <img  style="width: 50%; height: 50%;  padding: 10px;" src="images/orderprocess-02.png">
                                <h3>Pick up or Delivery</h3>
                                <p>Get your food delivered! And enjoy your meal! </p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        
        
      

        <footer class="footer">
            <div class="container">
                <div class="bottom-footer">
                    <div class="row">
                        <div class="col-xs-12 col-sm-3 payment-options color-gray">
                            <h5>Payment Options</h5>
                            <ul>
                                <li>
                                    <a href="#"> <img src="images/paypal.png" alt="Paypal"> </a>
                                </li>
                                <li>
                                    <a href="#"> <img src="images/mastercard.png" alt="Mastercard"> </a>
                                </li>
                                <li>
                                    <a href="#"> <img src="images/maestro.png" alt="Maestro"> </a>
                                </li>
                                <li>
                                    <a href="#"> <img src="images/stripe.png" alt="Stripe"> </a>
                                </li>
                                <li>
                                    <a href="#"> <img src="images/bitcoin.png" alt="Bitcoin"> </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-4 address color-gray">
                                    <h5>Address</h5>
                                    <p>LDCE, Ahmedabad, Gujarat 380015</p>
                                    <h5>Phone: 96xxxxxxxx</a></h5> </div>
                                <div class="col-xs-12 col-sm-5 additional-info color-gray">
                                    <h5>Addition informations</h5>
                                   <p>It is our project for web programming subject.</p>
                                </div>
                    </div>
                </div>
          
            </div>
        </footer>
    
    

    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
</body>

</html>