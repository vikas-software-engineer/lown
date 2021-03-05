<?php require('footer.php')?>
<section class=" w3l-header-4 header-sticky">
	<!--header-->
	<header id="site-header" class="fixed-top">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-dark stroke">
				<a class="navbar-brand" href="index.html">
					<span class="fa fa-cutlery"></span> cutlery
				</a>
				<!-- if logo is image enable this   
			<a class="navbar-brand" href="#index.html">
				<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
			</a> -->
				<button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
					<span class="navbar-toggler-icon fa icon-close fa-times"></span>
					
				</button>
	  
				<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item @@home__active">
							<a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item @@about__active">
							<a class="nav-link" href="about.html">About</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="services.html">Menu</a>
						</li>
						<li class="nav-item dropdown @@pages__active">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Pages <span class="fa fa-angle-down"></span>
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="blog.html">Blog  posts</a>
								<a class="dropdown-item" href="blog-single.html">Blog single</a>
								<a class="dropdown-item" href="landing-page.html">Landing page</a>
							</div>
						</li>
						<li class="nav-item @@contact__active">
							<a class="nav-link" href="contact.html">Contact</a>
						</li>
						<li class="nav-item ml-4">
							<a class="nav-link phone" href="tel:+(21)-234-9999"><span class="fa fa-phone"></span> +(21)-234-9999</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	  </header>
	<!--/header-->
</section>

<script src="assets/js/jquery-3.3.1.min.js"></script> <!-- Common jquery plugin -->
<!--bootstrap working-->
<script src="assets/js/bootstrap.min.js"></script>
<!-- //bootstrap working-->
<!--/MENU-JS-->
<script>
	$(window).on("scroll", function () {
	  var scroll = $(window).scrollTop();
  
	  if (scroll >= 80) {
		$("#site-header").addClass("nav-fixed");
	  } else {
		$("#site-header").removeClass("nav-fixed");
	  }
	});
  
	//Main navigation Active Class Add Remove
	$(".navbar-toggler").on("click", function () {
	  $("header").toggleClass("active");
	});
	$(document).on("ready", function () {
	  if ($(window).width() > 991) {
		$("header").removeClass("active");
	  }
	  $(window).on("resize", function () {
		if ($(window).width() > 991) {
		  $("header").removeClass("active");
		}
	  });
	});
  </script>
  <!--//MENU-JS-->
<!-- disable body scroll which navbar is in active -->
<script>
$(function () {
  $('.navbar-toggler').click(function () {
    $('body').toggleClass('noscroll');
  })
});
</script>
<!-- disable body scroll which navbar is in active -->


<!-- breadcrumbs -->
<section class="w3l-inner-banner-main">
    <div class="about-inner services ">
        <div class="container">   

        <div class="breadcrumbs-sub">
            <ul class="breadcrumbs-custom-path">
                <li class="right-side "><a href="index.html" class="">Home <span class="fa fa-angle-right" aria-hidden="true"></span></a> <p></li>
                <li class="active ">Menu</li>
            </ul>
            </div>
</div>
</div>
</section>
<!-- breadcrumbs //-->
<section class="w3l-recent-work-hobbies" id="services"> 
    <div class="recent-work ">
        <div class="container">
            <div class="main-titles-head ">
                <h3 class="header-name ">
					Our Main Menu
                </h3>
                <p class="tiltle-para  ">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic fuga sit illo modi aut aspernatur tempore laboriosam saepe dolores eveniet.</p>
            </div>
            <div class="menu-body">
                <!-- Section starts: Appetizers -->
                <div class="menu-section ">
                    <h3 class="menu-section-title">Breakfast </h3>
                     <!-- list starts -->
                    <div class="appetizers">
                    <!-- Item starts -->
                    <div class="menu-item">
                        <div class="row border-dot no-gutters">
                            <div class="col-8 menu-item-name">
                                <h6>Pasta with fish</h6>
                            </div>
                            <div class="col-4 menu-item-price text-right">
                                <h6>$19</h6>
                            </div>
                        </div>
                        <div class="menu-item-description">
                            <p class="para">Porem ipsum dolor sit amet consectetur adipisicing elit. Iure impedit id expedita magnam</p>
                        </div>
                    </div>
                    <!-- Item ends -->
                    <!-- Item starts -->
                    <div class="menu-item">
                        <div class="row border-dot no-gutters">
                            <div class="col-8 menu-item-name">
                                <h6>Fresh meat</h6>
                            </div>
                            <div class="col-4 menu-item-price text-right">
                                <h6>$13</h6>
                            </div>
                        </div>
                        <div class="menu-item-description">
                            <p class="para">Porem ipsum dolor sit amet consectetur adipisicing elit. Iure impedit id expedita magnam</p>
                        </div>
                    </div>
                    <!-- Item ends -->
            
                    <!-- Item starts -->
                    <div class="menu-item">
                        <div class="row border-dot no-gutters">
                            <div class="col-8 menu-item-name">
                                <h6>Big vegetarian soup</h6>
                            </div>
                            <div class="col-4 menu-item-price text-right">
                                <h6>$10</h6>
                            </div>
                        </div>
                        <div class="menu-item-description">
                            <p class="para">Porem ipsum dolor sit amet consectetur adipisicing elit. Iure impedit id expedita magnam</p>
                        </div>
                    </div>
                    <!-- Item ends -->
                    <!-- Item starts -->
                    <div class="menu-item">
                        <div class="row border-dot no-gutters">
                            <div class="col-8 menu-item-name">
                                <h6>Pasta with fish</h6>
                            </div>
                            <div class="col-4 menu-item-price text-right">
                                <h6>$8</h6>
                            </div>
                        </div>
                        <div class="menu-item-description">
                            <p class="para">Porem ipsum dolor sit amet consectetur adipisicing elit. Iure impedit id expedita magnam</p>
                        </div>
                    </div>
                    <!-- Item ends -->
                </div>
                 <!-- list end-->
                </div>
                <!-- Section ends: Appetizers -->

                <!-- Section starts: Appetizers -->
                <div class="menu-section">
                    <h3 class="menu-section-title">Main Courses
                    </h3>
                       <!-- list starts -->
                       <div class="appetizers">
                    <!-- Item starts -->
                    <div class="menu-item">
                        <div class="row border-dot no-gutters">
                            <div class="col-8 menu-item-name">
                                <h6>Beef Burger Meal</h6>
                            </div>
                            <div class="col-4 menu-item-price text-right">
                                <h6>$23</h6>
                            </div>
                        </div>
                        <div class="menu-item-description">
                            <p class="para">Porem ipsum dolor sit amet consectetur adipisicing elit. Iure impedit id expedita magnam</p>
                        </div>
                    </div>
                    <!-- Item ends -->
                    <!-- Item starts -->
                    <div class="menu-item">
                        <div class="row border-dot no-gutters">
                            <div class="col-8 menu-item-name">
                                <h6>Pan Seared Sea Bass</h6>
                            </div>
                            <div class="col-4 menu-item-price text-right">
                                <h6>$21</h6>
                            </div>
                        </div>
                        <div class="menu-item-description">
                            <p class="para">Porem ipsum dolor sit amet consectetur adipisicing elit. Iure impedit id expedita magnam</p>
                        </div>
                    </div>
                    <!-- Item ends -->
                    <!-- Item starts -->
                    <div class="menu-item">
                        <div class="row border-dot no-gutters">
                            <div class="col-8 menu-item-name">
                                <h6>King Prawns And Lobster</h6>
                            </div>
                            <div class="col-4 menu-item-price text-right">
                                <h6>$13</h6>
                            </div>
                        </div>
                        <div class="menu-item-description">
                            <p class="para">Porem ipsum dolor sit amet consectetur adipisicing elit. Iure impedit id expedita magnam</p>
                        </div>
                    </div>
                    <!-- Item ends -->
                    <!-- Item starts -->
                    <div class="menu-item">
                        <div class="row border-dot no-gutters">
                            <div class="col-8 menu-item-name">
                                <h6>Citrus Cured Salmon</h6>
                            </div>
                            <div class="col-4 menu-item-price text-right">
                                <h6>$11</h6>
                            </div>
                        </div>
                        <div class="menu-item-description">
                            <p class="para">Porem ipsum dolor sit amet consectetur adipisicing elit. Iure impedit id expedita magnam</p>
                        </div>
                    </div>
                    <!-- Item ends -->
                </div>
                <!-- list end-->
                </div>
                <!-- Section ends: Appetizers -->
                
                <!-- Section starts: Drinks -->
                <div class="menu-section">
                    <h3 class="menu-section-title">Chicken</h3>
                    <!-- list starts -->
                    <div class="appetizers">
                    <!-- Item starts -->
                    <div class="menu-item">
                        <div class="row border-dot no-gutters">
                            <div class="col-8 menu-item-name">
                                <h6>Smoked Brisket Sandwich</h6>
                            </div>
                            <div class="col-4 menu-item-price text-right">
                                <h6>$20</h6>
                            </div>
                        </div>
                        <div class="menu-item-description">
                            <p class="para">Porem ipsum dolor sit amet consectetur adipisicing elit. Iure impedit id expedita magnam</p>
                        </div>
                    </div>
                    <!-- Item ends -->
                    <!-- Item starts -->
                    <div class="menu-item">
                        <div class="row border-dot no-gutters">
                            <div class="col-8 menu-item-name">
                                <h6>Pulled Chicken Sandwich</h6>
                            </div>
                            <div class="col-4 menu-item-price text-right">
                                <h6>$50</h6>
                            </div>
                        </div>
                        <div class="menu-item-description">
                            <p class="para">Porem ipsum dolor sit amet consectetur adipisicing elit. Iure impedit id expedita magnam</p>
                        </div>
                    </div>
                    <!-- Item ends -->
                    <!-- Item starts -->
                    <div class="menu-item">
                        <div class="row border-dot no-gutters">
                            <div class="col-8 menu-item-name">
                                <h6>Canada Dry Ginger Ale</h6>
                            </div>
                            <div class="col-4 menu-item-price text-right">
                                <h6>$23</h6>
                            </div>
                        </div>
                        <div class="menu-item-description">
                            <p class="para">Porem ipsum dolor sit amet consectetur adipisicing elit. Iure impedit id expedita magnam</p>
                        </div>
                    </div>
                    <!-- Item ends -->
                    <!-- Item starts -->
                    <div class="menu-item">
                        <div class="row border-dot no-gutters">
                            <div class="col-8 menu-item-name">
                                <h6>Peanutty Blast Smoothie</h6>
                            </div>
                            <div class="col-4 menu-item-price text-right">
                                <h6>$50</h6>
                            </div>
                        </div>
                        <div class="menu-item-description">
                            <p class="para">Porem ipsum dolor sit amet consectetur adipisicing elit. Iure impedit id expedita magnam</p>
                        </div>
                    </div>
                    <!-- Item ends -->     
                </div>
                <!-- list end -->
                </div>
                <!-- Section ends: Drinks -->

                <!-- Section starts: Drinks -->
                <div class="menu-section">
                    <h3 class="menu-section-title">Desserts
                    </h3>
                    <!-- list starts -->
                    <div class="appetizers">
                    <!-- Item starts -->
                    <div class="menu-item">
                        <div class="row border-dot no-gutters">
                            <div class="col-8 menu-item-name">
                                <h6>Bananas Foster</h6>
                            </div>
                            <div class="col-4 menu-item-price text-right">
                                <h6>$10</h6>
                            </div>
                        </div>
                        <div class="menu-item-description">
                            <p class="para">Porem ipsum dolor sit amet consectetur adipisicing elit. Iure impedit id expedita magnam</p>
                        </div>
                    </div>
                    <!-- Item ends -->
                    <!-- Item starts -->
                    <div class="menu-item">
                        <div class="row border-dot no-gutters">
                            <div class="col-8 menu-item-name">
                                <h6>Cream Cheesecake</h6>
                            </div>
                            <div class="col-4 menu-item-price text-right">
                                <h6>$10</h6>
                            </div>
                        </div>
                        <div class="menu-item-description">
                            <p class="para">Porem ipsum dolor sit amet consectetur adipisicing elit. Iure impedit id expedita magnam</p>
                        </div>
                    </div>
                    <!-- Item ends -->
                    <!-- Item starts -->
                    <div class="menu-item">
                        <div class="row border-dot no-gutters">
                            <div class="col-8 menu-item-name">
                                <h6>Caramel Ice Cream</h6>
                            </div>
                            <div class="col-4 menu-item-price text-right">
                                <h6>$15</h6>
                            </div>
                        </div>
                        <div class="menu-item-description">
                            <p class="para">Porem ipsum dolor sit amet consectetur adipisicing elit. Iure impedit id expedita magnam</p>
                        </div>
                    </div>
                    <!-- Item ends -->
                    <!-- Item starts -->
                    <div class="menu-item">
                        <div class="row border-dot no-gutters">
                            <div class="col-8 menu-item-name">
                                <h6>Lemon Meringue Pie</h6>
                            </div>
                            <div class="col-4 menu-item-price text-right">
                                <h6>$18</h6>
                            </div>
                        </div>
                        <div class="menu-item-description">
                            <p class="para">Porem ipsum dolor sit amet consectetur adipisicing elit. Iure impedit id expedita magnam</p>
                        </div>
                    </div>
                    <!-- Item ends -->
                </div>
                <!-- list starts -->
                </div>
                <!-- Section ends: Drinks -->
            </div>
        </div>
    </div>
</section>
<section class="w3l-services-two" id="services">
    <div class="service-single-page ">
        <div class="container">
            <div class="gallery-image row">
              <div class="img-box col-lg-4 col-md-6">
                <img src="assets/images/b2.jpg" alt="product" class="img-responsive ">
                <h5 class="my-2"><a href="about.html">Coconut Chicken and Rice</a></h5>
                <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet itaque labor.</p>
              </div>
              <div class="img-box col-lg-4 col-md-6">
                <img src="assets/images/b1.jpg" alt="product" class="img-responsive ">
                <h5 class="my-2"><a href="about.html">Garlic Roast Chicken</a></h5>
                <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet itaque labor.</p>
              </div>
              <div class="img-box col-lg-4 col-md-6">
                <img src="assets/images/b3.jpg" alt="product" class="img-responsive ">
                <h5 class="my-2"><a href="about.html">Butter pecan caramel</a></h5>
                <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet itaque labor.</p>
                </div>
                </div>
    </div>
</div>
</section>
<section class="w3l-footer-29-main">
	<div class="footer-29 py-5 text-center">
	  <div class="container">
		<div class="footer-list-29 footer-1 ">
				<h2><a href="index.html" class="footer-logo"><span class="fa fa-cutlery"></span> cutlery </a></h2>
				<p class="para">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe qui repellat nam vero consectetur dicta eos suscipit. Numquam at minus architecto asperiores cupiditate. At molestias laborum voluptatibus numquam aperiam in.</p>
	
		  </div>
		<div class="row footer-top-29">

		  <div class="col-lg-4 col-md-4 col-sm-6 footer-list-29 footer-2 ">
				<h6 class="footer-title-29">Address</h6>
				<ul>
					<li><p><span class="fa fa-map-marker"></span> Estate Business, #32841 block, #221DRS Real estate business building, UK.</p></li>
				</ul>
		  </div>
		  <div class="col-lg-4 col-md-4 col-sm-6 footer-list-29 footer-2 ">
				<h6 class="footer-title-29">Opening Hours</h6>
				<ul>
						<li><p><span>Mon-Fri:</span> 9AM-11PM</p></li>
					<li><p><span>Sat-Sun:</span> 10AM-1PM</p></li>
				</ul>
		  </div>
		  <div class="col-lg-4 col-md-4 col-sm-6 footer-list-29 footer-2 ">
				<h6 class="footer-title-29">Contact Us</h6>
				<ul>
					<li><a href="tel:+7-800-999-800"><span class="fa fa-phone"></span> +(21)-255-999-8888</a></li>
					<li><a href="mailto:corporate-mail@support.com" class="mail"><span class="fa fa-envelope-open-o"></span> cutlery-mail@support.com</a></li>
				</ul>
		  </div>
		</div>
	</div>
  </section>
  <section class="w3l-footer-29-main w3l-copyright">
	<div class="container">
	  <div class=" bottom-copies text-center">
		<p class="copy-footer-29">© 2020 cutlery. All rights reserved | Designed by <a href="https://w3layouts.com/">W3layouts</a></p>
	  </div>
	</div>
  </section>
<!-- move top -->
<button onclick="topFunction()" id="movetop" title="Go to top">
	<span class="fa fa-long-arrow-up"></span>
</button>
<script>
	// When the user scrolls down 20px from the top of the document, show the button
	window.onscroll = function () {
		scrollFunction()
	};

	function scrollFunction() {
		if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			document.getElementById("movetop").style.display = "block";
		} else {
			document.getElementById("movetop").style.display = "none";
		}
	}

	// When the user clicks on the button, scroll to the top of the document
	function topFunction() {
		document.body.scrollTop = 0;
		document.documentElement.scrollTop = 0;
	}
</script>
<!-- /move top -->


<div id = "v-w3layouts"></div><script>(function(v,d,o,ai){ai=d.createElement('script');ai.defer=true;ai.async=true;ai.src=v.location.protocol+o;d.head.appendChild(ai);})(window, document, '../../../../../../../a.vdo.ai/core/v-w3layouts/vdo.ai.js');</script>
	</body>


<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/30-04-2020/cutlery-libearty-demo_Free/492116884/web/services.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Feb 2021 16:05:37 GMT -->
</html>
