<?php 
    include("db_connect.php");
	session_start();
?>
<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
     <!-- Site Metas -->
    <title>Pizza Point Delivery</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

</head>

<body>
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.html">
					<img src="images/logo1.jpg" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
						<li class="nav-item active"><a class="nav-link" href="menu.php">Menu</a></li>
						<li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
						<li class="nav-item"><a class="nav-link" href="gallery.php">Galery</a></li>
						<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
						<?php
                            if(!isset($_SESSION['user'])){
                                echo '<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>';
                            }
							else{
								echo '<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>';
							}
                        ?>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	
	<!-- Start -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Menu</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End -->
	
	<!-- Start Menu -->
	<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Menu</h2>
					</div>
				</div>
			</div>
			
		<div class="row inner-menu-box">
				<div class="col-3">
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">All</a>
						<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Pizza</a>
						<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Pide/Lahmachun</</a>
						<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Drinks</a>
					</div>
				</div>
				
				
				<div class="col-9">
					<div class="tab-content" id="v-pills-tabContent">
						<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
							<div class="row">								
								<div class="col-lg-4 col-md-6 special-grid Безалкохолни пијалоци">									
									<div class="gallery-single fix">
										<img src="images/img-01.jpg" class="img-fluid" alt="Image">
											<div class="why-text">
											<h4>Pizza Margarita </h4>
											<p>Tomato sauce / mozzarella cheese /yellow x`cheese</p>
											<h5> 50/100/200/300</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="images/img-03.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Pizza Mix</h4>
											<p>tomato sauce / mozzarella cheese /yellow cheese
											 / Bosnian sausage / beef prosciutto / mushrooms</p>
											<h5> 60/120/220/350</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="images/img-033.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Pizza Salamino</h4>
											<p>Tomato sauce / mozzarella cheese /yellow cheese / beef kulen</p>
											<h5> 60/120/220/350</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid lunch">
									<div class="gallery-single fix">
										<img src="images/img-04.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Pide/Pide Mix</h4>
											<p>Pide with cheese/Pide mix</p>
											<h5> 120/170</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid lunch">
									<div class="gallery-single fix">
										<img src="images/img-05.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Lahmacun</h4>
											<p>Minced meat, vegetables and herbs</p>
											<h5> 100 den.</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid lunch">
									<div class="gallery-single fix">
										<img src="images/img-06.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Pizza Oliva</h4>
											<p>Pizza with olives</p>
											<h5> 130den.</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/img-07.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Pizza Vege</h4>
											<p>Tomato sauce / mozzarella cheese /yellow cheese/zucchini/eggplant/olive/
											peppers/spinach</p>
											<h5> 60/120/220/350</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/img-023.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Pizza zucchini</h4>
											<p>Tomato sauce / mozzarella cheese /yellow cheese/zucchini</p>
											<h5> 60/120/220/350</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/img-099.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Pizza Tuna</h4>
											<p>Pica tuna and onion</p>
											<h5> 60/120/220/350</h5>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="images/img-10.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Pizza Eggplant</h4>
												<p>Tomato sauce/mozzarella cheese/yellow cheese/eggplant</p>
												<h5> 70/140/240/370</h5>
										</div>
									</div>

								</div>
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="images/img-11.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Pizza Speciale</h4>
											<p>Tomato sauce/mozzarella cheese/yellow cheese/zucchini/tuna/fresh cheese/onion/garlic</p>
												<h5> 70/140/240/370</h5>
										</div>
									</div>

								</div>
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/cocacola.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Coca-Cola</h4>
											<p>Coca-Cola</p>
											<h5> 70den.</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/fanta.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Fanta</h4>
											<p>Orange/Shokata/Tropical</p>
											<h5>70den.</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/sprite.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Sprite</h4>
											<p>Sprite</p>
											<h5> 70den.</h5>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/bravo.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Bravo</h4>
											<p>Juice/Strawberry/Apple/Peach/Blueberry</p>
											<h5> 70den.</h5>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/rosa.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Rosa</h4>
											<p>Water</p>
											<h5> 50den.</h5>
										</div>
									</div>
								</div>
							
							</div>							
						</div>
						<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
							<div class="row">
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="images/img-01.jpg" class="img-fluid" alt="Image">
											<div class="why-text">
											<h4>Pizza Margarita </h4>
											<p>Tomato sauce / mozzarella cheese /yellow cheese</p>
											<h5> 50/100/200/300</h5>
										</div>
									</div>
								</div>
									<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="images/img-023.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Pizza zucchini</h4>
											<p>Tomato sauce / mozzarella cheese /yellow cheese/zucchini</p>
											<h5> 60/120/220/350</h5>
										</div>
									</div>


								</div>
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="images/img-099.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Pizza Tuna</h4>
											<p>Pica tuna and onion</p>
											<h5> 60/120/220/350</h5>
										</div>
									</div>
										
								</div>

									<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="images/img-06.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Pizza Oliva</h4>
											<p>Pizza with olives</p>
											<h5> 130den.</h5>
										</div>
									</div>
								</div>
									<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="images/img-07.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Pizza Vege</h4>
											<p>tomato sauce / mozzarella cheese /cheese/zucchini/eggplant/olive/
											peppers/spinach</p>
											<h5> 60/120/220/350</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="images/img-03.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Pizza Mix</h4>
											<p>tomato sauce / mozzarella cheese / cheese
											 / Bosnian sausage / beef prosciutto / mushrooms</p>
											<h5> 60/120/220/350</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="images/img-033.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Pizza Salamino</h4>
											<p>tomato sauce / mozzarella cheese /cheese / beef kulen</p>
											<h5> 60/120/220/350</h5>
										</div>
									</div>

								</div>
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="images/img-10.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Pizza Eggplant</h4>
												<p>Tomato sauce/mozzarella cheese/yellow cheese/eggplant</p>
												<h5> 70/140/240/370</h5>
										</div>
									</div>

								</div>
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="images/img-11.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Pizza Speciale</h4>
											<p>Tomato sauce/mozzarella cheese/yellow cheese/zucchini/tuna/fresh cheese/onion/garlic</p>
												<h5> 70/140/240/370</h5>
										</div>
									</div>

								</div>

							</div>
							
						</div>
						<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
							<div class="row">
								<div class="col-lg-4 col-md-6 special-grid lunch">
									<div class="gallery-single fix">
										<img src="images/img-04.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Pide/Pide Mix</h4>
											<p>Pide with cheese/Pide mix</p>
											<h5> 120/170</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid lunch">
									<div class="gallery-single fix">
										<img src="images/img-05.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Lahmacun</h4>
											<p>Minced meat, vegetables and herbs</p>
											<h5> 100</h5>
										</div>
									</div>
								</div>
								
								
							</div>
						</div>
						<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
							<div class="row">
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/cocacola.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Coca-Cola</h4>
											<p>Coca-Cola</p>
											<h5> 70den.</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/fanta.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Fanta</h4>
											<p>Orange/Shokata/Tropical</p>
											<h5>70den.</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/sprite.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Sprite</h4>
											<p>Sprite</p>
											<h5> 70den.</h5>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/bravo.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Bravo</h4>
											<p>Juice/Strawberry/Apple/Peach/Blueberry</p>
											<h5> 70den.</h5>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/rosa.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Rosa</h4>
											<p>Water</p>
											<h5> 50den.</h5>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Menu -->
	
	

	
	
<!--  Footer -->
	<footer class="footer-area bg-f">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<h3>Contact information</h3>
					<p class="lead">Major Cede Filiposki, Gostivar, Macedonia, 1230</p>
					<p class="lead"><a href="#">070 700 582</a></p>
					<p><a href="#"> pizzapointgostivar@gmail.com</a></p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Opening hours</h3>
					<p><span class="text-color">Mon-Wed : </span>10:00 - 00:00</p>
					<p><span class="text-color">Fri-Sat :</span> 10:00 - 00:00</p>
					<p><span class="text-color">Sunday :</span> 10:00 - 00:00</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Follow Us </h3>
					<ul class="list-inline f-social">	
						<li class="list-inline-item"><a href="https://www.facebook.com/pizzapointgostivari/about"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="https://www.instagram.com/pizzapoint_delivery/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				
			</div>
		</div>
		
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="company-name">All Rights Reserved. &copy; 2021 <a href="#">Pizza Point Delivery</a> 
					
					</div>
				</div>
			</div>
		</div>
		
	</footer>
	<!-- End Footer -->
		
	<a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></a>

	<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>