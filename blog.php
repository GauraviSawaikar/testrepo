
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Nigalye Dental Clinic</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<!--Color Switcher Mockup-->
<link href="css/color-switcher-design.css" rel="stylesheet">

<!-- Color Themes -->
<link id="theme-color-file" href="css/color-themes.css" rel="stylesheet">
<link href="css/all.min.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body class="hidden-bar-wrapper">



<?php

     
$conn = new mysqli("localhost", "root", "", "dentist");

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}


		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			// Retrieve form data
			$header = $_POST['header'];
			$text = $_POST['text'];
		
			// Handling file upload
			$uploadDirectory = './uploads/';
			$image = $_FILES['pic']['name'];
			$imageTemp = $_FILES['pic']['tmp_name'];
			$uploadedImagePath = $uploadDirectory . $image;
		
			if (move_uploaded_file($imageTemp, $uploadedImagePath)) {
				
				
			} else {
				echo "Failed to upload image.<br>";
			}
		
			
		$sql = "INSERT INTO blog (blogheader, blogtext,  image) VALUES ('$header', '$text',  '$uploadedImagePath')";

        if ($conn->query($sql) === TRUE) {
            
        } else {
            echo "Error: " . $conn->error;
        }

        // Close connection
		

       

    } 








		
		?>




















<div class="page-wrapper">
 	
	<!-- Preloader -->
    <div class="preloader"></div>
	<!-- End Preloader -->
	
 	<!-- Header Style One -->
	 <header class="main-header header-style-two">
    	
		<!-- Header Top -->
		<div class="header-top">
			<div class="auto-container">
				<div class="inner-container">
					<div class="d-flex justify-content-between align-items-center flex-wrap">
					<ul class="header_info-list">
							<li><span class="icon fa-solid fa-phone fa-fw"></span>Call Anytime: <a href="tel:070387 00584">070387 00584</a></li>
							<li><span class="icon fa-solid fa-envelope fa-fw"></span><a href="mailto:nigalyedentalclinic@gmail.com">nigalyedentalclinic@gmail.com</a></li>
						</ul>
						
						<!-- Social Box -->
						<ul class="header-social_box-two">
						<li><a href="https://twitter.com/shripadynaik/status/1457009196818337796?lang=en" > <img src="images/twitter.png" style="width:30px" ></a></li>
							 		<li><a href="https://www.facebook.com/profile.php?id=100076294417208&mibextid=b06tZ0" ><img src="images/facebook.png" style="width:30px" ></a></li>
									<li><a href="https://instagram.com/nigalyedentalclinic?igshid=MzRlODBiNWFlZA==" ><img src="images/instagram.png" style="width:30px" ></a></li>
							
						</ul>
						
					</div>
				</div>
			</div>
		</div>
		<!-- End Header Top -->
		
		<!-- Header Upper -->
        <div class="header-upper">
            <div class="auto-container">
				<div class="inner-container">
					<!-- Logo Box -->
					<div class="logo-box">
						<div class="logo"><a href="home.php"><img src="images/dentallogo.png" alt="" title=""></a></div>
					</div>
					
					<div class="d-flex justify-content-between align-items-center flex-wrap">
						
						<div class="nav-outer">
							<!-- Main Menu -->
							<nav class="main-menu navbar-expand-md">
								<div class="navbar-header">
									<!-- Toggle Button -->    	
									<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								
								<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
									<ul class="navigation clearfix">
										<li ><a href="home.php">Home</a>
											<ul>
												<li><a href="home.php">Home</a></li>
												
													
												</li>
											
											</ul>
										</li>
										<li ><a href="About.php">About</a>
											<ul>
												<li><a href="about.php">About us</a></li>
											
											</ul>
										</li>
										<li ><a href="service.php">Services</a>
											<ul>
												<li><a href="service.php">Services</a></li>
												
											</ul>
										</li>
										
										
										
										<li ><a href="blog.php">Blog</a>
											<ul>
												<li><a href="blog.php">Our Blog</a></li>
												
											</ul>
										</li>
										<li ><a href="contact.html">Contact</a>
											<ul>
												<li><a href="contact.html">Contact </a></li>
												
											</ul>
										</li>
									</ul>
								</div>
							</nav>
						</div>
						
						<!-- Main Menu End-->
						<div class="outer-box d-flex align-items-center flex-wrap">
							
							<div class="appointmeny_button-box">
								<a href="#" class="theme-btn btn-style-one">
									<span class="btn-wrap">
										<span class="text-one">Appoint Now</span>
										<span class="text-two">Appoint Now</span>
									</span>
								</a>
							</div>
							
							<!-- Search Btn -->
							<div class="search-box-btn search-box-outer"><span class="icon fa fa-search"></span></div>
							
							<!-- Nav Btn -->
							<div class="nav-btn navSidebar-button fa-regular fa-cart-shopping fa-fw"></div>
							
							<span class="hamburger">
								<span class="top-bun"></span>
								<span class="meat"></span>
								<span class="bottom-bun"></span>
							</span>
							
						</div>
						
						<!-- Mobile Navigation Toggler -->
						<div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>                    
						
					</div>
				</div>
            </div>
        </div>
        <!--End Header Upper-->
		
		<!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container">
				<div class="inner-container d-flex justify-content-between align-items-center flex-wrap">
				
                <!-- Logo -->
                <div class="logo">
                    <a href="home.php" title=""><img src="images/dentallogo.png" alt="" title=""></a>
                </div>
				
                <!-- Right Box -->
                <div class="right-box">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
					<!-- Main Menu End-->
					<!-- Mobile Navigation Toggler -->
					<div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                </div>
				
            </div>
        </div><!-- End Sticky Menu -->
		</div>
		
		<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-close"></span></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="home.php"><img src="images/logo-small.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div><!-- End Mobile Menu -->
	
    </header>
	<!-- End Main Header -->
	
	<!-- Sidebar Cart Item -->
	<div class="xs-sidebar-group info-group">
		<div class="xs-overlay xs-bg-black"></div>
		<div class="xs-sidebar-widget">
			<div class="sidebar-widget-container">
				<div class="close-button">
					<span class="fa fa-solid fa-xmark fa-fw"></span>
				</div>
				<div class="sidebar-textwidget">
					
					<!-- Sidebar Info Content -->
					<div class="sidebar-info-contents">
						<div class="content-inner">
						
							<!-- Title Box -->
							<div class="title-box">
								<h5>Shopping <span>Bag</span></h5>
								<div class="price">$15 from free economy shipping</div>
							</div>
							
							<!-- Empty Cart Box -->
							<div class="empty-cart-box">
								<!-- No Product -->
								<div class="no-cart">
									<span class="icon fa fa-sharp fa-solid fa-cart-shopping fa-fw"></span>
									No products in cart.
								</div>
							</div>
							
							<!-- Lower Box -->
							<div class="lower-box">
								<h5>Popular <span>Suggestions</span></h5>
									
								<!-- Post Block -->
								<div class="post-block">
									<div class="inner-box">
										<div class="image">
											<img src="<?php echo $imagePath;  ?>" alt="" />
										</div>
										<h6><a href="#">Hematology Machine</a></h6>
										<div class="rating">
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										</div>
										<div class="price-box">$125</div>
										<a class="theme-btn bag-btn" href="#">add to bag</a>
									</div>
								</div>
								
								<!-- Post Block -->
								<div class="post-block">
									<div class="inner-box">
										<div class="image">
											<img src="images/post-thumb-2.jpg" alt="" />
										</div>
										<h6><a href="#">Dermatology</a></h6>
										<div class="rating">
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										</div>
										<div class="price-box">$205</div>
										<a class="theme-btn bag-btn" href="#">add to bag</a>
									</div>
								</div>
								
								<!-- Post Block -->
								<div class="post-block">
									<div class="inner-box">
										<div class="image">
											<img src="images/post-thumb-3.jpg" alt="" />
										</div>
										<h6><a href="#">Cardiology</a></h6>
										<div class="rating">
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										</div>
										<div class="price-box">$125</div>
										<a class="theme-btn bag-btn" href="#">add to bag</a>
									</div>
								</div>
								
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	
	<!-- About Sidebar -->
	<div class="about-sidebar">
		<div class="gradient-layer"></div>
		<!-- Close Button -->
		<div class="close-sidebar-widget close-button">
			<span class="fa fa-solid fa-xmark fa-fw"></span>
		</div>
		<div class="sidebar-inner">
			<div class="upper-box">
				<div class="image">
					<img src="images/modern.jpg" alt="" />
				</div>
				<div class="content-box">
					<h3>About <span>Merit</span></h3>
					<div class="text">Ut enim ad minim. facilisis suspendisseipsum dolor sit amet dolore consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et magna aliqua enim ad minim veniam, quis nostrud.</div>
					<ul class="about-one_list">
						<li>Medicine and instrument</li>
						<li>Instant Operation & Appointment</li>
						<li>From Scintific Jornal</li>
						<li>100% Expert Doctors</li>
					</ul>
				</div>
			</div>
			<!-- Social Box -->
			<div class="social-box">
				<a href="https://youtube.com/" class="youtube fa-brands fa-youtube"></a>
				<a href="https://twitter.com/" class="twitter fa-brands fa-twitter"></a>
				<a href="https://facebook.com/" class="facebook fa-brands fa-facebook-f"></a>
				<a href="https://instagram.com/" class="instagram fa-brands fa-instagram"></a>
			</div>
		</div>
	</div>
	<!-- End About Sidebar -->
	
	<!-- Page Title -->
    <section class="page-title" style="background-image:url(images/3.jpg)">
        <div class="auto-container">
			<h2>Our Blog</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="home.php">Home</a></li>
				<li>Our Blog</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->



	
	<!-- Blog Page -->
	<section class="blog-page">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- News Block One -->


				<?php 
	$sql = "SELECT blogheader, blogtext, id, image FROM blog  ";
	$result = $conn->query($sql);

	
	function breakTextWithBR($text, $max_length) {
		$broken_text = [];
		$text_length = strlen($text);
		
		for ($i = 0; $i < $text_length; $i += $max_length) {
			$broken_text[] = substr($text, $i, $max_length);
		}
		
		return implode('<br>', $broken_text);
	}
	
	// Example text
	
	$max_chunk_length = 20;
	
	

	
	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			$header = $row["blogheader"];
			$text = $row["blogtext"];
			$id = $row["id"];
			$imagePath = $row["image"];
			
	
			// Now you have individual variables for each fetched row
			
			$broken_header1 = breakTextWithBR($header, $max_chunk_length);
	
		
			




				 echo '<div class="news-block_one col-lg-4 col-md-6 col-sm-12">';
				echo	'<div class="news-block_one-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">';
					echo	'<div class="news-block_one-image">';
					echo 		'<a href="blog-detail.html"> <img src='.$imagePath.'> </a>';
					echo 	'</div>';
					echo	'<div class="news-block_one-content">';
					echo		'<div class="news-block_one-date"><span>22</span> jan 2023</div>';
					echo 		'<ul class="news-block_one-meta">';
					echo		'<li><span class="icon fa-solid fa-folder-open fa-fw"></span>HEALTH</li>';
					echo			'<li><span class="icon fa-solid fa-comments fa-fw"></span>Comments</li>';
					echo		'</ul>';
					echo		'<h5 class="news-block_one-heading"><a href="blog-detail.html">'.$broken_header1.'</a></h5>';

					echo   		'<button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete" onclick="del('.$id.')">Read More</i></button>';
					echo	'</div>';
					echo '</div>';
				echo '   </div>';
				
			


			}
		} else {
			echo "No data found.";
		} 
				$conn->close();
				
				
				?>

				<!-- News Block One -->
			<!-- 	<div class="news-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="news-block_one-inner wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="news-block_one-image">
							<a href="blog-detail.html"><img src="" alt="" /></a>
						</div>
						<div class="news-block_one-content">
							<div class="news-block_one-date"><span>22</span> jan 2023</div>
							<ul class="news-block_one-meta">
								<li><span class="icon fa-solid fa-folder-open fa-fw"></span>HEALTH</li>
								<li><span class="icon fa-solid fa-comments fa-fw"></span>Comments</li>
							</ul>
							<h5 class="news-block_one-heading"><a href="blog-detail.html">Healthy habits to reduce the risks of heart diseases</a></h5>
							<div class="news-block_one-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor </div>
						</div>
					</div>
				</div> -->



				<script>
    function del(id) {
       
		
        location.href = "blogdetails.php?id=" + id;
    }
</script>
				
				<!-- News Block One -->
		<!-- 		<div class="news-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="news-block_one-inner wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="news-block_one-image">
							<a href="blog-detail.html"><img src="images/news-3.jpg" alt="" /></a>
						</div>
						<div class="news-block_one-content">
							<div class="news-block_one-date"><span>22</span> jan 2023</div>
							<ul class="news-block_one-meta">
								<li><span class="icon fa-solid fa-folder-open fa-fw"></span>HEALTH</li>
								<li><span class="icon fa-solid fa-comments fa-fw"></span>Comments</li>
							</ul>
							<h5 class="news-block_one-heading"><a href="blog-detail.html">Why men should stay on top of health screenings</a></h5>
							<div class="news-block_one-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor </div>
						</div>
					</div>
				</div> -->
				
				<!-- News Block One -->
			<!-- 	<div class="news-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="news-block_one-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="news-block_one-image">
							<a href="blog-detail.html"><img src="images/news-4.jpg" alt="" /></a>
						</div>
						<div class="news-block_one-content">
							<div class="news-block_one-date"><span>22</span> jan 2023</div>
							<ul class="news-block_one-meta">
								<li><span class="icon fa-solid fa-folder-open fa-fw"></span>HEALTH</li>
								<li><span class="icon fa-solid fa-comments fa-fw"></span>Comments</li>
							</ul>
							<h5 class="news-block_one-heading"><a href="blog-detail.html">What does your blood type have to do with your health?</a></h5>
							<div class="news-block_one-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor </div>
						</div>
					</div>
				</div> -->
				
				<!-- News Block One -->
			<!-- 	<div class="news-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="news-block_one-inner wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="news-block_one-image">
							<a href="blog-detail.html"><img src="images/news-5.jpg" alt="" /></a>
						</div>
						<div class="news-block_one-content">
							<div class="news-block_one-date"><span>22</span> jan 2023</div>
							<ul class="news-block_one-meta">
								<li><span class="icon fa-solid fa-folder-open fa-fw"></span>HEALTH</li>
								<li><span class="icon fa-solid fa-comments fa-fw"></span>Comments</li>
							</ul>
							<h5 class="news-block_one-heading"><a href="blog-detail.html">Healthy habits to reduce the risks of heart diseases</a></h5>
							<div class="news-block_one-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor </div>
						</div>
					</div>
				</div> -->
				
		<!-- 		News Block One -->
			<!-- 	<div class="news-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="news-block_one-inner wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="news-block_one-image">
							<a href="blog-detail.html"><img src="images/news-6.jpg" alt="" /></a>
						</div>
						<div class="news-block_one-content">
							<div class="news-block_one-date"><span>22</span> jan 2023</div>
							<ul class="news-block_one-meta">
								<li><span class="icon fa-solid fa-folder-open fa-fw"></span>HEALTH</li>
								<li><span class="icon fa-solid fa-comments fa-fw"></span>Comments</li>
							</ul>
							<h5 class="news-block_one-heading"><a href="blog-detail.html">Why men should stay on top of health screenings</a></h5>
							<div class="news-block_one-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor </div>
						</div>
					</div>
				</div> -->
				
				<!-- News Block One -->
			<!-- 	<div class="news-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="news-block_one-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="news-block_one-image">
							<a href="blog-detail.html"><img src="images/news-1.jpg" alt="" /></a>
						</div>
						<div class="news-block_one-content">
							<div class="news-block_one-date"><span>22</span> jan 2023</div>
							<ul class="news-block_one-meta">
								<li><span class="icon fa-solid fa-folder-open fa-fw"></span>HEALTH</li>
								<li><span class="icon fa-solid fa-comments fa-fw"></span>Comments</li>
							</ul>
							<h5 class="news-block_one-heading"><a href="blog-detail.html">What does your blood type have to do with your health?</a></h5>
							<div class="news-block_one-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor </div>
						</div>
					</div>
				</div> -->
				
				<!-- News Block One -->
		<!-- 		<div class="news-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="news-block_one-inner wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="news-block_one-image">
							<a href="blog-detail.html"><img src="images/news-2.jpg" alt="" /></a>
						</div>
						<div class="news-block_one-content">
							<div class="news-block_one-date"><span>22</span> jan 2023</div>
							<ul class="news-block_one-meta">
								<li><span class="icon fa-solid fa-folder-open fa-fw"></span>HEALTH</li>
								<li><span class="icon fa-solid fa-comments fa-fw"></span>Comments</li>
							</ul>
							<h5 class="news-block_one-heading"><a href="blog-detail.html">Healthy habits to reduce the risks of heart diseases</a></h5>
							<div class="news-block_one-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor </div>
						</div>
					</div>
				</div>
				 -->
				<!-- News Block One -->
			<!-- 	<div class="news-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="news-block_one-inner wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="news-block_one-image">
							<a href="blog-detail.html"><img src="images/news-3.jpg" alt="" /></a>
						</div>
						<div class="news-block_one-content">
							<div class="news-block_one-date"><span>22</span> jan 2023</div>
							<ul class="news-block_one-meta">
								<li><span class="icon fa-solid fa-folder-open fa-fw"></span>HEALTH</li>
								<li><span class="icon fa-solid fa-comments fa-fw"></span>Comments</li>
							</ul>
							<h5 class="news-block_one-heading"><a href="blog-detail.html">Why men should stay on top of health screenings</a></h5>
							<div class="news-block_one-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor </div>
						</div>
					</div>
				</div> -->
				
			</div>
			
			<!-- Pagination Outer -->
			<div class="pagination-outer text-center">
				<ul class="pagination">
					<li class="active"><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#"><span class="fa-solid fa-angles-right fa-fw"></span></a></li>
				</ul>
			</div>
			
		</div>
	</section>
	<!-- End Blog Page -->
	
	<!-- Newsletter Section -->

	<!-- End Newsletter Section -->
	
	<!--Main Footer-->
    <footer class="main-footer" style="background-image: url(images/pattern-8.png)">
		<!-- Vector One -->
		<span class="footer-vector_one">
			<img src="images/footer-vector-1.png" alt="" />
		</span>
		<!-- Vector Two -->
		<span class="footer-vector_two">
			<img src="images/footer-vector-2.png" alt="" />
		</span>
		<div class="auto-container">
        	<!--Widgets Section-->
            <div class="main-footer_widgets">
            	<div class="row clearfix">
                	
                    <!--big column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">
							
							<!--Footer Column-->
                            <div class="main-footer_column col-lg-7 col-md-6 col-sm-12">
                                <div class="footer-widget logo-widget">
								<div class="main-footer_logo">
                                    	<a href="home.php"><img src="images/dentallogo.png" alt="" /></a>
                                    </div>
                                    <div class="main-footer_text">It helps designers plan out where the content will sit, the content to be written and approved.</div>
									<!-- Social Box -->
									<ul class="footer-social_box">
									<li><a href="https://twitter.com/shripadynaik/status/1457009196818337796?lang=en" > <img src="images/twitter.png" style="width:30px" ></a></li>
							 		<li><a href="https://www.facebook.com/profile.php?id=100076294417208&mibextid=b06tZ0" ><img src="images/facebook.png" style="width:30px" ></a></li>
									<li><a href="https://instagram.com/nigalyedentalclinic?igshid=MzRlODBiNWFlZA==" ><img src="images/instagram.png" style="width:30px" ></a></li>
							
									</ul>
								</div>
							</div>
							
							<!--Footer Column-->
                            <div class="main-footer_column col-lg-5 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
									<h4 class="main-footer_title">Service</h4>
									<ul class="main-footer_list">
										<li><a href="#">Emergency</a></li>
										<li><a href="#">Psychotherapy</a></li>
										<li><a href="#">Hourly Care</a></li>
										<li><a href="#">Respite Home</a></li>
										<li><a href="#">Advanced Care</a></li>
										<li><a href="#">Laboratory</a></li>
									</ul>
								</div>
							</div>
							
						</div>
					</div>
					
					<!--big column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">
							
							<!--Footer Column-->
                            <div class="main-footer_column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget news-widget">
									<h4 class="main-footer_title">Recent Posts</h4>
									
									<!--News Widget Block-->
                                    <div class="news-widget-block">
                                        <div class="news-widget_image">
											<img src="images/news-widget-1.jpg" alt="" />
										</div>
										<div class="news-widget_post-date">DECEMBER 12, 2022</div>
										<h6 class="news-widget_title"><a href="blog-detail.html">Get the exercise limited solution.</a></h6>
                                    </div>
									
									<!--News Widget Block-->
                                    <div class="news-widget-block">
										<div class="news-widget_image">
											<img src="images/news-widget-2.jpg" alt="" />
										</div>
										<div class="news-widget_post-date">DECEMBER 12, 2022</div>
										<h6 class="news-widget_title"><a href="blog-detail.html">Transfusion Strategy And Heart Surgery</a></h6>
                                    </div>
									
								</div>
							</div>
							
							<!--Footer Column-->
                            <div class="main-footer_column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget contact-widget">
									<h4 class="main-footer_title">Contact Info</h4>
									<ul class="main-footer_contact-list">
										<li><span class="icon fa-solid fa-phone fa-fw"></span>Paraste, 1/67/B,<br> near Nigalye General Stores,<br>Pernem, Goa 403512</li>
										<li><span class="icon fa-solid fa-envelope fa-fw"></span> <a href="mailto:nigalyedentalclinic@gmail.com">nigalyedentalclinic@gmail.com/a></li>
										<li><span class="icon fa-solid fa-clock fa-fw"></span>Mon - Sat 8:00 - 6:30, <br> Sunday - CLOSED</li>
									</ul>
									
								</div>
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
			
			<!-- Footer Bottom -->
			<div class="main-footer_bottom">
				<div class="d-flex justify-content-between align-items-center flex-wrap">
					<div class="footer_copyright">Developed by Infipre</div>
					<!-- Scroll To Top -->
					<div class="footer-scroll_top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>
				</div>
			</div>
			
		</div>
	</footer>
	
	<!-- Search Popup -->
	<div class="search-popup">
		<div class="color-layer"></div>
		<button class="close-search"><span class="fa fa-solid fa-xmark fa-fw"></span></button>
		<form method="post" action="blog.html">
			<div class="form-group">
				<input type="search" name="search-field" value="" placeholder="Search Here" required="">
				<button class="fa fa-solid fa-magnifying-glass fa-fw" type="submit"></button>
			</div>
		</form>
	</div>
	<!-- End Search Popup -->
	
</div>
<!-- End PageWrapper -->

<!-- Color Palate / Color Switcher -->
<div class="color-palate">
	<div class="color-trigger">
		<i class="fa-solid fa-gear fa-fw"></i>
	</div>
	<div class="color-palate-inner">
		<div class="color-palate-head">
			<h6>Choose Options</h6>
		</div>
		
		<!-- Colors -->
		<div class="various-color clearfix">
			<div class="colors-list">
				<span class="palate default-color active" data-theme-file="css/color-themes/default-color.css"></span>
				<span class="palate green-color" data-theme-file="css/color-themes/green-color.css"></span>
				<span class="palate olive-color" data-theme-file="css/color-themes/blue-color.css"></span>
				<span class="palate orange-color" data-theme-file="css/color-themes/orange-color.css"></span>
				<span class="palate purple-color" data-theme-file="css/color-themes/purple-color.css"></span>
				<span class="palate teal-color" data-theme-file="css/color-themes/teal-color.css"></span>
				<span class="palate brown-color" data-theme-file="css/color-themes/brown-color.css"></span>
				<span class="palate yellow-color" data-theme-file="css/color-themes/yellow-color.css"></span>
			</div>
		</div>
				
		<h6>RTL Version</h6>
		<ul class="rtl-version option-box"> <li class="rtl">RTL Version</li> <li>LTR Version</li> </ul>
		<h6>Boxed Version</h6>
		<ul class="box-version option-box"> <li class="box">Boxed</li> <li>Full width</li></ul>
		<h6>Want Sticky Header</h6>
		<ul class="header-version option-box"> <li class="box">No</li> <li>Yes</li></ul>
		<h6>Dark Verion</h6>
		<ul class="dark-version option-box"> <li class="box">Yes</li> <li>No</li></ul>
		
		<div class="purchase-box">
			You will find much more options for colors and styling in admin panel. This color picker is used only for demonstation purposes.
			<a href="#" class="theme-btn btn-style-two">
				<span class="btn-wrap">
					<span class="text-one">buy now</span>
					<span class="text-two">buy now</span>
				</span>
			</a>
		</div>
		
	</div>
</div>
<!-- End Color Palate / Color Switcher -->

<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/appear.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/tilt.jquery.min.js"></script>
<script src="js/jquery.paroller.min.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/odometer.js"></script>
<script src="js/parallax-scroll.js"></script>
<script src="js/magnific-popup.min.js"></script>
<script src="js/nav-tool.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/script.js"></script>
<script src="js/color-settings.js"></script>
<script src="js/all.min.js"></script>

</body>
</html>