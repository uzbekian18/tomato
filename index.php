<?php
include_once("db.php");
include_once("top.php");
include_once("header.php");

$welcome_sql = "SELECT * FROM `welcome`";
$res_welcome = mysqli_query($connect, $welcome_sql);

$welcome = [];
while ($row = mysqli_fetch_assoc($res_welcome)) {
	array_push($welcome, $row);
}



$services_sql = "SELECT * FROM `services`";
$res_services = mysqli_query($connect, $services_sql);

$services = [];
while ($row = mysqli_fetch_assoc($res_services)) {
	array_push($services, $row);
}


$services2_sql = "SELECT * FROM `services2`";
$res_services2 = mysqli_query($connect, $services2_sql);

$services2 = [];
while ($row = mysqli_fetch_assoc($res_services2)) {
	array_push($services2, $row);
}

?>
 
 <section class="slider">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  	<ol class="carousel-indicators">
			    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
		  	</ol>
	
<?php
foreach ($welcome as $key) {
echo '<div class="carousel-inner" role="listbox">
			    <div class="item active slide1">
			    	<div class="slider-overlay">
			    		<div class="banner-content">
			    			<i class="flaticon-chef"></i>
			    			<h3>'.$key['title_uz'].'</h3>
			    			<h2>'.$key['title2_uz'].'</h2>
			    			<p>'.$key['text_uz'].'</p>
			    			<div class="slider-btn">
			    				<button type="submit" class="button">'.$key['button_uz'].'</button>
			    			</div>
			    		</div>
			    	</div>
			    </div>';
}
?>
		  	<!-- Controls -->
		  	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		    	<span class="fa fa-angle-left" aria-hidden="true"></span>
		    	<span class="sr-only">Previous</span>
		  	</a>
		  	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		    	<span class="fa fa-angle-right" aria-hidden="true"></span>
		    	<span class="sr-only">Next</span>
		 	</a>
		</div>
	</section><!-- slider end -->

	<!-- service section-->
	<section class="service">
		<div class="container">
			<div class="row">



<?php

foreach ($services as $key) {
echo '<div class="section-head">
					<i class="flaticon-cutlery"></i>
					<h2>'.$key['title_uz'].'</h2>
					<p>'.$key['text_uz'].'</p>
				</div>';
}

?>
				


				<div class="col-md-4">
					<div class="service-items-left">
						<div class="service-item">
							<div class="service-item-icon pull-right">
								<i class="flaticon-hamburger"></i>
							</div>
							<div class="service-item-des pull-left">
								<h2>Chicken Burger</h2>
								<p>Convenatly imiipact worldwide and data and improvements with a holistic theme and improvements with holistic</p>
							</div>
						</div><!-- service item -->
						<div class="service-item">
							<div class="service-item-icon pull-right">
								<i class="flaticon-food-5"></i>
							</div>
							<div class="service-item-des pull-left">
								<h2>Hot coffee</h2>
								<p>Convenatly imiipact worldwide and data and improvements with a holistic theme and improvements with holistic</p>
							</div>
						</div><!-- service item -->
						<div class="service-item">
							<div class="service-item-icon pull-right">
								<i class="flaticon-food-1"></i>
							</div>
							<div class="service-item-des pull-left">
								<h2>fish</h2>
								<p>Convenatly imiipact worldwide and data and improvements with a holistic theme and improvements with holistic</p>
							</div>
						</div><!-- service item -->
					</div><!-- service item left -->
				</div>
				<div class="col-md-4">
					<div class="service-img">
						<img src="assets/images/service-img.png" alt="">
					</div><!-- service img -->
				</div>
				<div class="col-md-4">
					<div class="service-items-right">
						<div class="service-item">
							<div class="service-item-icon pull-left">
								<i class="flaticon-cooker"></i>
							</div>
							<div class="service-item-des pull-right">
								<h2>Best Dishes</h2>
								<p>Convenatly imiipact worldwide and data and improvements with a holistic theme and improvements with holistic</p>
							</div>
						</div><!-- service item -->
						<div class="service-item">
							<div class="service-item-icon pull-left">
								<i class="flaticon-food-2"></i>
							</div>
							<div class="service-item-des pull-right">
								<h2>Pan Pizza</h2>
								<p>Convenatly imiipact worldwide and data and improvements with a holistic theme and improvements with holistic</p>
							</div>
						</div><!-- service item -->
						<div class="service-item">
							<div class="service-item-icon pull-left">
								<i class="flaticon-food-6"></i>
							</div>
							<div class="service-item-des pull-right">
								<h2>Drinks & bar</h2>
								<p>Convenatly imiipact worldwide and data and improvements with a holistic theme and improvements with holistic</p>
							</div>
						</div><!-- service item -->
					</div>
				</div>
			</div>
		</div> <!-- container -->
	</section><!-- service section end -->

	<!-- special dishes section-->
	<section class="special-dishes">
		<div class="section-overlay section-padding">
			<div class="container custom-show">
				<div class="row">
					<div class="section-head">
						<i class="flaticon-cutlery"></i>
						<h2>Our Special Dishes</h2>
						<p>Rapidiously plagiarize scalable manufactured products for realtime ramatically 
						actualize open-source metrics through fully tested vortals.</p>
					</div><!-- section-head -->
					<div class="swiper-container">
				       <div class="swiper-wrapper">
				           <div class="swiper-slide">
				           		<div class="dish-item">
				           			<div class="dish-img">
				           				<a href="#"><img src="assets/images/dishes/dish1.jpg" alt=""></a>
				           			</div>
				           			<div class="dish-item-content">
				           				<div class="dotted-title">
				           					<div class="dotted-name">
				           						<a href="#">Product Name Here</a>
				           					</div>
				           					<div class="dotted-dot"></div>
				           					<div class="dotted-price">
				           						<span>$30.00</span>
				           					</div>
				           				</div>
				           				<p>Conveniently imaiipact worldwide data arovements a with holistic theme and improvements with there holistic</p>
				           				<div class="rating-star">
				           					<i class="fa fa-star-o"></i>
				           					<i class="fa fa-star-o"></i>
				           					<i class="fa fa-star-o"></i>
				           					<i class="fa fa-star-o"></i>
				           					<i class="fa fa-star-o"></i>
				           					<span>
				           						<i class="fa fa-star"></i>
				           						<i class="fa fa-star"></i>
				           						<i class="fa fa-star"></i>
				           						<i class="fa fa-star"></i>
				           						<i class="fa fa-star-half-o"></i>
				           					</span>
				           				</div>
				           			</div>
				           		</div>
				           </div><!-- swiper slide -->
				           <div class="swiper-slide">
				           		<div class="dish-item">
				           			<div class="dish-img">
				           				<a href="#"><img src="assets/images/dishes/dish2.jpg" alt=""></a>
				           			</div>
				           			<div class="dish-item-content">
				           				<div class="dotted-title">
				           					<div class="dotted-name">
				           						<a href="#">Product Name Here</a>
				           					</div>
				           					<div class="dotted-dot"></div>
				           					<div class="dotted-price">
				           						<span>$30.00</span>
				           					</div>
				           				</div>
				           				<p>Conveniently imaiipact worldwide data arovements a with holistic theme and improvements with there holistic</p>
				           				<div class="rating-star">
				           					<i class="fa fa-star-o"></i>
				           					<i class="fa fa-star-o"></i>
				           					<i class="fa fa-star-o"></i>
				           					<i class="fa fa-star-o"></i>
				           					<i class="fa fa-star-o"></i>
				           					<span>
				           						<i class="fa fa-star"></i>
				           						<i class="fa fa-star"></i>
				           						<i class="fa fa-star"></i>
				           						<i class="fa fa-star"></i>
				           						<i class="fa fa-star-half-o"></i>
				           					</span>
				           				</div>
				           			</div>
				           		</div>
				           </div><!-- swiper slide -->
				           <div class="swiper-slide">
				           		<div class="dish-item">
				           			<div class="dish-img">
				           				<a href="#"><img src="assets/images/dishes/dish3.jpg" alt=""></a>
				           			</div>
				           			<div class="dish-item-content">
				           				<div class="dotted-title">
				           					<div class="dotted-name">
				           						<a href="#">Product Name Here</a>
				           					</div>
				           					<div class="dotted-dot"></div>
				           					<div class="dotted-price">
				           						<span>$30.00</span>
				           					</div>
				           				</div><!-- dotted title -->
				           				<p>Conveniently imaiipact worldwide data arovements a with holistic theme and improvements with there holistic</p>
				           				<div class="rating-star">
				           					<i class="fa fa-star-o"></i>
				           					<i class="fa fa-star-o"></i>
				           					<i class="fa fa-star-o"></i>
				           					<i class="fa fa-star-o"></i>
				           					<i class="fa fa-star-o"></i>
				           					<span>
				           						<i class="fa fa-star"></i>
				           						<i class="fa fa-star"></i>
				           						<i class="fa fa-star"></i>
				           						<i class="fa fa-star"></i>
				           						<i class="fa fa-star-half-o"></i>
				           					</span>
				           				</div><!-- rating star -->
				           			</div><!-- dish item content -->
				           		</div><!-- dish item -->
				           </div><!-- swiper slide -->
				           <div class="swiper-slide">
				           		<div class="dish-item">
				           			<div class="dish-img">
				           				<a href="#"><img src="assets/images/dishes/dish1.jpg" alt=""></a>
				           			</div>
				           			<div class="dish-item-content">
				           				<div class="dotted-title">
				           					<div class="dotted-name">
				           						<a href="#">Product Name Here</a>
				           					</div>
				           					<div class="dotted-dot"></div>
				           					<div class="dotted-price">
				           						<span>$30.00</span>
				           					</div>
				           				</div><!-- dotted title -->
				           				<p>Conveniently imaiipact worldwide data arovements a with holistic theme and improvements with there holistic</p>
				           				<div class="rating-star">
				           					<i class="fa fa-star-o"></i>
				           					<i class="fa fa-star-o"></i>
				           					<i class="fa fa-star-o"></i>
				           					<i class="fa fa-star-o"></i>
				           					<i class="fa fa-star-o"></i>
				           					<span>
				           						<i class="fa fa-star"></i>
				           						<i class="fa fa-star"></i>
				           						<i class="fa fa-star"></i>
				           						<i class="fa fa-star"></i>
				           						<i class="fa fa-star-half-o"></i>
				           					</span>
				           				</div><!-- rating star -->
				           			</div><!-- dish item content -->
				           		</div><!-- dish item -->
				           </div><!-- swiper slide -->
				           <div class="swiper-slide">
				           		<div class="dish-item">
				           			<div class="dish-img">
				           				<a href="#"><img src="assets/images/dishes/dish2.jpg" alt=""></a>
				           			</div>
				           			<div class="dish-item-content">
				           				<div class="dotted-title">
				           					<div class="dotted-name">
				           						<a href="#">Product Name Here</a>
				           					</div>
				           					<div class="dotted-dot"></div>
				           					<div class="dotted-price">
				           						<span>$30.00</span>
				           					</div>
				           				</div><!-- dotted title -->
				           				<p>Conveniently imaiipact worldwide data arovements a with holistic theme and improvements with there holistic</p>
				           				<div class="rating-star">
				           					<i class="fa fa-star-o"></i>
				           					<i class="fa fa-star-o"></i>
				           					<i class="fa fa-star-o"></i>
				           					<i class="fa fa-star-o"></i>
				           					<i class="fa fa-star-o"></i>
				           					<span>
				           						<i class="fa fa-star"></i>
				           						<i class="fa fa-star"></i>
				           						<i class="fa fa-star"></i>
				           						<i class="fa fa-star"></i>
				           						<i class="fa fa-star-half-o"></i>
				           					</span>
				           				</div><!-- rating star -->
				           			</div><!-- dish item content -->
				           		</div><!-- dish item -->
				           	</div><!-- swiper slide -->
				           	<div class="swiper-slide">
				           		<div class="dish-item">
				           			<div class="dish-img">
				           				<a href="#"><img src="assets/images/dishes/dish3.jpg" alt=""></a>
				           			</div>
				           			<div class="dish-item-content">
				           				<div class="dotted-title">
				           					<div class="dotted-name">
				           						<a href="#">Product Name Here</a>
				           					</div>
				           					<div class="dotted-dot"></div>
				           					<div class="dotted-price">
				           						<span>$30.00</span>
				           					</div>
				           				</div><!-- dotted title -->
				           				<p>Conveniently imaiipact worldwide data arovements a with holistic theme and improvements with there holistic</p>
				           				<div class="rating-star">
				           					<i class="fa fa-star-o"></i>
				           					<i class="fa fa-star-o"></i>
				           					<i class="fa fa-star-o"></i>
				           					<i class="fa fa-star-o"></i>
				           					<i class="fa fa-star-o"></i>
				           					<span>
				           						<i class="fa fa-star"></i>
				           						<i class="fa fa-star"></i>
				           						<i class="fa fa-star"></i>
				           						<i class="fa fa-star"></i>
				           						<i class="fa fa-star-half-o"></i>
				           					</span>
				           				</div><!-- rating star -->
				           			</div><!-- dish item content -->
				           		</div><!-- dish item -->
				          	 </div><!-- swiper slide -->
				       	</div>
				   </div><!-- swiper container -->
				   <div class="button-next">
			    		<i class="fa fa-angle-right"></i>
			    	</div>
    				<div class="button-prev">
    					<i class="fa fa-angle-left"></i>
    				</div>
				   <div class="dish-btn">
						<a href="#" class="button">View all menu</a>
				   </div>
				</div>
			</div><!-- container -->
		</div><!-- section overlay -->
	</section><!-- special dishes section end-->

	<!-- Cook team section -->
	<section class="cook-team section-padding">
		<div class="container">
			<div class="row">
				<div class="section-head">
					<i class="flaticon-cutlery"></i>
					<h2>Meet Cook Team</h2>
					<p>Rapidiously plagiarize scalable manufactured products for realtime ramatically 
					actualize open-source metrics through fully tested vortals.</p>
				</div><!-- section-head -->
				<div class="cook-team-wrapper">
					<div class="col-md-3 col-sm-4">
						<div class="cook-team-member">
							<div class="cooker-img">
								<img src="assets/images/cook%20team/cooker1.jpg" alt="">
							</div>
							<div class="cooker-details">
								<h2>George Mathew</h2>
								<span>Cooker</span>
							</div>
							<div class="social-profiles">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-rss"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								</ul>
							</div><!-- social icon -->
						</div><!-- cook team member -->
					</div>
					<div class="col-md-3 col-sm-4">
						<div class="cook-team-member">
							<div class="cooker-img">
								<img src="assets/images/cook%20team/cooker2.jpg" alt="">
							</div>
							<div class="cooker-details">
								<h2>George Mathew</h2>
								<span>Cooker</span>
							</div>
							<div class="social-profiles">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-rss"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								</ul>
							</div><!-- social icon -->
						</div><!-- cook team member -->
					</div>
					<div class="col-md-3 col-sm-4">
						<div class="cook-team-member">
							<div class="cooker-img">
								<img src="assets/images/cook%20team/cooker3.jpg" alt="">
							</div>
							<div class="cooker-details">
								<h2>George Mathew</h2>
								<span>Cooker</span>
							</div>
							<div class="social-profiles">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-rss"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								</ul>
							</div><!-- social icon -->
						</div><!-- cook team member -->
					</div>
					<div class="col-md-3 col-sm-4">
						<div class="cook-team-member">
							<div class="cooker-img">
								<img src="assets/images/cook%20team/cooker4.jpg" alt="">
							</div>
							<div class="cooker-details">
								<h2>George Mathew</h2>
								<span>Cooker</span>
							</div>
							<div class="social-profiles">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-rss"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								</ul>
							</div><!-- social icon -->
						</div><!-- cook team member -->
					</div>
				</div><!-- cook team wrapper -->
			</div>
		</div><!-- container -->
	</section><!-- Cook team section End-->

	<!-- reservation section-->
	<section class="reservation">
		<div class="section-overlay section-padding">
			<div class="container">
				<div class="row">
					<div class="section-head">
						<i class="flaticon-cutlery"></i>
						<h2>Reservation Now</h2>
						<p>Rapidiously plagiarize scalable manufactured products for realtime ramatically 
						actualize open-source metrics through fully tested vortals.</p>
					</div><!-- section-head -->
					<div class="reservation-form">
						<form>
							<div class="col-md-4 col-sm-6">
								<div class="single-input">
									<input class="input-box" type="text" name="Name" placeholder="Your Name*">
									<i class="fa fa-user"></i>
								</div>
							</div>
							<div class="col-md-4 col-sm-6">
								<div class="single-input">
									<input class="input-box" type="text" name="mail" placeholder="Your Email*">
									<i class="fa fa-envelope"></i>
								</div>
							</div> 
							<div class="col-md-4 col-sm-6">
								<div class="single-input">
									<input class="input-box" type="text" name="mobile" placeholder="Mobile Number*">
									<i class="fa fa-phone"></i>
								</div>
							</div> 
							<div class="col-md-4 col-sm-6">
								<div class="single-input">
									<input class="input-box" type="text" name="Date" placeholder="Date*">
									<i class="fa fa-calendar"></i>
								</div>
							</div>
							<div class="col-md-4 col-sm-6">
								<div class="single-input">
									<input class="input-box" type="text" name="Time" placeholder="Time*">
									<i class="fa fa-clock-o"></i>
								</div>
							</div>
							<div class="col-md-4 col-sm-6">
								<div class="single-input">
									<input class="input-box" type="text" name="Person" placeholder="No. of Person*">
									<i class="fa fa-user"></i>
								</div>
							</div>
							<div class="reservation-btn">
								<button type="submit" class="button">Booking now</button>
							</div>
						</form>
					</div><!-- reservation form -->
				</div>
			</div><!-- container -->
		</div><!--section overlay-->
	</section><!-- reservation section end-->

	<!-- food menu section-->
	<section class="food-menu section-padding">
		<div class="container">
			<div class="row">
				<div class="section-head">
					<i class="flaticon-cutlery"></i>
					<h2>Our Food Menu</h2>
					<p>Rapidiously plagiarize scalable manufactured products for realtime ramatically 
					actualize open-source metrics through fully tested vortals.</p>
				</div><!-- section-head -->
				<div class="food-menu-item-wrapper">
					<div id="filters" class="button-group">
						  <button class="button is-checked" data-filter=".breakfast">Breakfast</button>
						  <button class="button" data-filter=".lunch">lunch</button>
						  <button class="button" data-filter=".dinner">dinner</button>
						  <button class="button" data-filter=".drinks">drinks</button>
					</div><!--button group-->
					<div class="grid">
						<div class="element-item transition breakfast lunch drinks col-md-4 col-sm-6">
							<div class="food-item">
								<div class="food-item-img">
									<a href="#"><img src="assets/images/food-menu/item1.jpg" alt=""></a>
								</div>
								<div class="food-item-details">
									<div class="dotted-title">
										<div class="dotted-name">
											<a href="#">Product Name</a>
										</div>
										<div class="dotted-dot"></div>
										<div class="dotted-price">
											<span>$26.00</span>
										</div>
									</div><!-- dotted title -->
									<p>Conveniently imaiipact worldwide and data arovem theme with there</p>
									<div class="rating-star">
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<span>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half-o"></i>
										</span>
									</div><!-- rating star -->
								</div><!-- food item details -->
							</div><!-- food item -->
						</div> <!-- element-item -->
						<div class="element-item transition breakfast lunch dinner col-md-4 col-sm-6">
							<div class="food-item">
								<div class="food-item-img">
									<a href="#"><img src="assets/images/food-menu/item2.jpg" alt=""></a>
								</div>
								<div class="food-item-details">
									<div class="dotted-title">
										<div class="dotted-name">
											<a href="#">Product Name</a>
										</div>
										<div class="dotted-dot"></div>
										<div class="dotted-price">
											<span>$26.00</span>
										</div>
									</div><!-- dotted title -->
									<p>Conveniently imaiipact worldwide and data arovem theme with there</p>
									<div class="rating-star">
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<span>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half-o"></i>
										</span>
									</div><!-- rating star -->
								</div><!-- food item details -->
							</div><!-- food item -->
						</div> <!-- element-item -->
						<div class="element-item transition breakfast lunch dinner drinks col-md-4 col-sm-6">
							<div class="food-item">
								<div class="food-item-img">
									<a href="#"><img src="assets/images/food-menu/item3.jpg" alt=""></a>
								</div>
								<div class="food-item-details">
									<div class="dotted-title">
										<div class="dotted-name">
											<a href="#">Product Name</a>
										</div>
										<div class="dotted-dot"></div>
										<div class="dotted-price">
											<span>$26.00</span>
										</div>
									</div><!-- dotted title -->
									<p>Conveniently imaiipact worldwide and data arovem theme with there</p>
									<div class="rating-star">
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<span>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half-o"></i>
										</span>
									</div><!-- rating star -->
								</div><!-- food item details -->
							</div><!-- food item -->
						</div> <!-- element-item -->
						<div class="element-item transition breakfast drinks col-md-4 col-sm-6">
							<div class="food-item">
								<div class="food-item-img">
									<a href="#"><img src="assets/images/food-menu/item4.jpg" alt=""></a>
								</div>
								<div class="food-item-details">
									<div class="dotted-title">
										<div class="dotted-name">
											<a href="#">Product Name</a>
										</div>
										<div class="dotted-dot"></div>
										<div class="dotted-price">
											<span>$26.00</span>
										</div>
									</div><!-- dotted title -->
									<p>Conveniently imaiipact worldwide and data arovem theme with there</p>
									<div class="rating-star">
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<span>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half-o"></i>
										</span>
									</div><!-- rating star -->
								</div><!-- food item details -->
							</div><!-- food item -->
						</div> <!-- element-item -->
						<div class="element-item transition breakfast lunch dinner drinks col-md-4 col-sm-6">
							<div class="food-item">
								<div class="food-item-img">
									<a href="#"><img src="assets/images/food-menu/item5.jpg" alt=""></a>
								</div>
								<div class="food-item-details">
									<div class="dotted-title">
										<div class="dotted-name">
											<a href="#">Product Name</a>
										</div>
										<div class="dotted-dot"></div>
										<div class="dotted-price">
											<span>$26.00</span>
										</div>
									</div><!-- dotted title -->
									<p>Conveniently imaiipact worldwide and data arovem theme with there</p>
									<div class="rating-star">
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<span>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half-o"></i>
										</span>
									</div><!-- rating star -->
								</div><!-- food item details -->
							</div><!-- food item -->
						</div> <!-- element-item -->
						<div class="element-item transition breakfast lunch dinner col-md-4 col-sm-6">
							<div class="food-item">
								<div class="food-item-img">
									<a href="#"><img src="assets/images/food-menu/item6.jpg" alt=""></a>
								</div>
								<div class="food-item-details">
									<div class="dotted-title">
										<div class="dotted-name">
											<a href="#">Product Name</a>
										</div>
										<div class="dotted-dot"></div>
										<div class="dotted-price">
											<span>$26.00</span>
										</div>
									</div><!-- dotted title -->
									<p>Conveniently imaiipact worldwide and data arovem theme with there</p>
									<div class="rating-star">
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<span>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half-o"></i>
										</span>
									</div><!-- rating star -->
								</div><!-- food item details -->
							</div><!-- food item -->
						</div> <!-- element-item -->
						<div class="element-item transition breakfast lunch col-md-4 col-sm-6">
							<div class="food-item">
								<div class="food-item-img">
									<a href="#"><img src="assets/images/food-menu/item7.jpg" alt=""></a>
								</div>
								<div class="food-item-details">
									<div class="dotted-title">
										<div class="dotted-name">
											<a href="#">Product Name</a>
										</div>
										<div class="dotted-dot"></div>
										<div class="dotted-price">
											<span>$26.00</span>
										</div>
									</div><!-- dotted title -->
									<p>Conveniently imaiipact worldwide and data arovem theme with there</p>
									<div class="rating-star">
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<span>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half-o"></i>
										</span>
									</div><!-- rating star -->
								</div><!-- food item details -->
							</div><!-- food item -->
						</div> <!-- element-item -->
						<div class="element-item transition breakfast lunch dinner col-md-4 col-sm-6">
							<div class="food-item">
								<div class="food-item-img">
									<a href="#"><img src="assets/images/food-menu/item8.jpg" alt=""></a>
								</div>
								<div class="food-item-details">
									<div class="dotted-title">
										<div class="dotted-name">
											<a href="#">Product Name</a>
										</div>
										<div class="dotted-dot"></div>
										<div class="dotted-price">
											<span>$26.00</span>
										</div>
									</div><!-- dotted title -->
									<p>Conveniently imaiipact worldwide and data arovem theme with there</p>
									<div class="rating-star">
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<span>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half-o"></i>
										</span>
									</div><!-- rating star -->
								</div><!-- food item details -->
							</div><!-- food item -->
						</div> <!-- element-item -->
						<div class="element-item transition breakfast lunch drinks dinner col-md-4 col-sm-6">
							<div class="food-item">
								<div class="food-item-img">
									<a href="#"><img src="assets/images/food-menu/item9.jpg" alt=""></a>
								</div>
								<div class="food-item-details">
									<div class="dotted-title">
										<div class="dotted-name">
											<a href="#">Product Name</a>
										</div>
										<div class="dotted-dot"></div>
										<div class="dotted-price">
											<span>$26.00</span>
										</div>
									</div><!-- dotted title -->
									<p>Conveniently imaiipact worldwide and data arovem theme with there</p>
									<div class="rating-star">
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<span>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half-o"></i>
										</span>
									</div><!-- rating star -->
								</div><!-- food item details -->
							</div><!-- food item -->
						</div> <!-- element-item -->
						<div class="element-item transition breakfast lunch drinks lunch dinner col-md-4 col-sm-6">
							<div class="food-item">
								<div class="food-item-img">
									<a href="#"><img src="assets/images/food-menu/item10.jpg" alt=""></a>
								</div>
								<div class="food-item-details">
									<div class="dotted-title">
										<div class="dotted-name">
											<a href="#">Product Name</a>
										</div>
										<div class="dotted-dot"></div>
										<div class="dotted-price">
											<span>$26.00</span>
										</div>
									</div><!-- dotted title -->
									<p>Conveniently imaiipact worldwide and data arovem theme with there</p>
									<div class="rating-star">
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<span>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half-o"></i>
										</span>
									</div><!-- rating star -->
								</div><!-- food item details -->
							</div><!-- food item -->
						</div> <!-- element-item -->
						<div class="element-item transition breakfast drinks dinner col-md-4 col-sm-6">
							<div class="food-item">
								<div class="food-item-img">
									<a href="#"><img src="assets/images/food-menu/item11.jpg" alt=""></a>
								</div>
								<div class="food-item-details">
									<div class="dotted-title">
										<div class="dotted-name">
											<a href="#">Product Name</a>
										</div>
										<div class="dotted-dot"></div>
										<div class="dotted-price">
											<span>$26.00</span>
										</div>
									</div><!-- dotted title -->
									<p>Conveniently imaiipact worldwide and data arovem theme with there</p>
									<div class="rating-star">
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<span>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half-o"></i>
										</span>
									</div><!-- rating star -->
								</div><!-- food item details -->
							</div><!-- food item -->
						</div> <!-- element-item -->
						<div class="element-item transition breakfast dinner lunch col-md-4 col-sm-6">
							<div class="food-item">
								<div class="food-item-img">
									<a href="#"><img src="assets/images/food-menu/item12.jpg" alt=""></a>
								</div>
								<div class="food-item-details">
									<div class="dotted-title">
										<div class="dotted-name">
											<a href="#">Product Name</a>
										</div>
										<div class="dotted-dot"></div>
										<div class="dotted-price">
											<span>$26.00</span>
										</div>
									</div><!-- dotted title -->
									<p>Conveniently imaiipact worldwide and data arovem theme with there</p>
									<div class="rating-star">
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<span>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half-o"></i>
										</span>
									</div><!-- rating star -->
								</div><!-- food item details -->
							</div><!-- food item -->
						</div> <!-- element-item -->
					</div>
				</div><!-- food-menu-item-wrapper -->
				<div class="food-menu-btn">
					<a href="#" class="button">View Full menu</a>
				</div>
			</div>
		</div><!-- container -->
	</section><!-- food menu section end-->

	<!-- customer review section -->
	<section class="customer-review">
		<div class="section-overlay section-padding">
			<div class="container">
				<div class="row">
					<div class="section-head">
						<i class="flaticon-cutlery"></i>
						<h2>Our Customer Say</h2>
						<p>Rapidiously plagiarize scalable manufactured products for realtime ramatically 
						actualize open-source metrics through fully tested vortals.</p>
					</div><!-- section-head -->
					<div class="swiper-container">
				        <div class="swiper-wrapper">
				            <div class="swiper-slide">
				            	<div class="customer-img">
				            		<img src="assets/images/customer1.jpg" alt="">
				            	</div><!-- customer-img -->
				            	<div class="customer-review-details">
				            		<p>Completely commnicate focused growth stratgies for distributed processes. Contin Proactively maximize resource maximizing imperatives with markets. Seamlessly engage unique scenarios with timely outsourcing. </p>
				            		<h2>Somrat Islam</h2>
				            		<div class="rating-star">
				            			<i class="fa fa-star-o"></i>
				            			<i class="fa fa-star-o"></i>
				            			<i class="fa fa-star-o"></i>
				            			<i class="fa fa-star-o"></i>
				            			<i class="fa fa-star-o"></i>
				            			<span>
				            				<i class="fa fa-star"></i>
				            				<i class="fa fa-star"></i>
				            				<i class="fa fa-star"></i>
				            				<i class="fa fa-star"></i>
				            				<i class="fa fa-star-half-o"></i>
				            			</span>
				            		</div><!-- rating star -->
				            	</div><!-- customer-review-details -->
				            </div><!-- swiper-slide -->
				            <div class="swiper-slide">
				            	<div class="customer-img">
				            		<img src="assets/images/customer1.jpg" alt="">
				            	</div><!-- customer-img -->
				            	<div class="customer-review-details">
				            		<p>Completely commnicate focused growth stratgies for distributed processes. Contin Proactively maximize resource maximizing imperatives with markets. Seamlessly engage unique scenarios with timely outsourcing. </p>
				            		<h2>Somrat Islam</h2>
				            		<div class="rating-star">
				            			<i class="fa fa-star-o"></i>
				            			<i class="fa fa-star-o"></i>
				            			<i class="fa fa-star-o"></i>
				            			<i class="fa fa-star-o"></i>
				            			<i class="fa fa-star-o"></i>
				            			<span>
				            				<i class="fa fa-star"></i>
				            				<i class="fa fa-star"></i>
				            				<i class="fa fa-star"></i>
				            				<i class="fa fa-star"></i>
				            				<i class="fa fa-star-half-o"></i>
				            			</span>
				            		</div><!-- rating star -->
				            	</div><!-- customer-review-details -->
				            </div><!-- swiper-slide -->
				            <div class="swiper-slide">
				            	<div class="customer-img">
				            		<img src="assets/images/customer1.jpg" alt="">
				            	</div><!-- customer-img -->
				            	<div class="customer-review-details">
				            		<p>Completely commnicate focused growth stratgies for distributed processes. Contin Proactively maximize resource maximizing imperatives with markets. Seamlessly engage unique scenarios with timely outsourcing. </p>
				            		<h2>Somrat Islam</h2>
				            		<div class="rating-star">
				            			<i class="fa fa-star-o"></i>
				            			<i class="fa fa-star-o"></i>
				            			<i class="fa fa-star-o"></i>
				            			<i class="fa fa-star-o"></i>
				            			<i class="fa fa-star-o"></i>
				            			<span>
				            				<i class="fa fa-star"></i>
				            				<i class="fa fa-star"></i>
				            				<i class="fa fa-star"></i>
				            				<i class="fa fa-star"></i>
				            				<i class="fa fa-star-half-o"></i>
				            			</span>
				            		</div><!-- rating star -->
				            	</div><!-- customer-review-details -->
				            </div><!-- swiper-slide -->
				            <div class="swiper-slide">
				            	<div class="customer-img">
				            		<img src="assets/images/customer1.jpg" alt="">
				            	</div><!-- customer-img -->
				            	<div class="customer-review-details">
				            		<p>Completely commnicate focused growth stratgies for distributed processes. Contin Proactively maximize resource maximizing imperatives with markets. Seamlessly engage unique scenarios with timely outsourcing. </p>
				            		<h2>Somrat Islam</h2>
				            		<div class="rating-star">
				            			<i class="fa fa-star-o"></i>
				            			<i class="fa fa-star-o"></i>
				            			<i class="fa fa-star-o"></i>
				            			<i class="fa fa-star-o"></i>
				            			<i class="fa fa-star-o"></i>
				            			<span>
				            				<i class="fa fa-star"></i>
				            				<i class="fa fa-star"></i>
				            				<i class="fa fa-star"></i>
				            				<i class="fa fa-star"></i>
				            				<i class="fa fa-star-half-o"></i>
				            			</span>
				            		</div><!-- rating star -->
				            	</div><!-- customer-review-details -->
				            </div><!-- swiper-slide -->
				        </div>
				        <!-- Add Pagination -->
				        <div class="swiper-pagination"></div>
					</div>
				</div>
			</div><!-- container -->
		</div><!-- section overlay -->
	</section><!-- customer review section end-->

	<!-- latest-blog section-->
	<section class="latest-blog section-padding">
		<div class="container">
			<div class="row">
				<div class="section-head">
					<i class="flaticon-cutlery"></i>
					<h2>Latest form blog</h2>
					<p>Rapidiously plagiarize scalable manufactured products for realtime ramatically 
					actualize open-source metrics through fully tested vortals.</p>
				</div><!-- section-head -->
				<div class="post-item-wrapper">
					<div class="col-md-4 col-sm-6">
						<div class="post-item">
							<div class="post-thumb">
								<a href="#"><img src="assets/images/blog-images/img1.jpg" alt=""></a>
							</div>
							<div class="post-content">
								<h2 class="title"><a href="#">Conviently an niches  multdiscry</a></h2>
								<div class="meta-post">
									<ul>
										<li class="post-author">
											<a href="#">
												<i class="fa fa-user"></i>Somrat Islam
											</a>
										</li>
										<li class="post-like">
											<i class="fa fa-thumbs-up"></i>15
										</li>
										<li class="post-comments">
											<a href="#"><i class="fa fa-comments-o"></i>32</a>
										</li>
									</ul>
								</div><!-- meta post -->
								<div class="excerpt">
									Conviently granular niches  multdiscary valiiuthere Interactively impact exceptiional a techny awesome and products whereas quality expertise
								</div>
								<a href="#" class="button">Read More</a>
							</div><!-- post content -->
						</div><!-- post item -->
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="post-item">
							<div class="post-thumb">
								<a href="#"><img src="assets/images/blog-images/img2.jpg" alt=""></a>
							</div>
							<div class="post-content">
								<h2 class="title"><a href="#">Conviently an niches  multdiscry</a></h2>
								<div class="meta-post">
									<ul>
										<li class="post-author">
											<a href="#">
												<i class="fa fa-user"></i>Somrat Islam
											</a>
										</li>
										<li class="post-like">
											<i class="fa fa-thumbs-up"></i>15
										</li>
										<li class="post-comments">
											<a href="#"><i class="fa fa-comments-o"></i>32</a>
										</li>
									</ul>
								</div><!-- meta post -->
								<div class="excerpt">
									Conviently granular niches  multdiscary valiiuthere Interactively impact exceptiional a techny awesome and products whereas quality expertise
								</div>
								<a href="#" class="button">Read More</a>
							</div><!-- post content -->
						</div><!-- post item -->
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="post-item">
							<div class="post-thumb">
								<a href="#"><img src="assets/images/blog-images/img3.jpg" alt=""></a>
							</div>
							<div class="post-content">
								<h2 class="title"><a href="#">Conviently an niches  multdiscry</a></h2>
								<div class="meta-post">
									<ul>
										<li class="post-author">
											<a href="#">
												<i class="fa fa-user"></i>Somrat Islam
											</a>
										</li>
										<li class="post-like">
											<i class="fa fa-thumbs-up"></i>15
										</li>
										<li class="post-comments">
											<a href="#"><i class="fa fa-comments-o"></i>32</a>
										</li>
									</ul>
								</div><!-- meta post -->
								<div class="excerpt">
									Conviently granular niches  multdiscary valiiuthere Interactively impact exceptiional a techny awesome and products whereas quality expertise
								</div>
								<a href="#" class="button">Read More</a>
							</div><!-- post content -->
						</div><!-- post item -->
					</div>
				</div><!-- post item wrapper -->
			</div>
		</div><!-- container -->
	</section><!-- latest-blog section end-->

	<!-- newslatter section-->
	<section class="newslatter">
		<div class="section-overlay section-padding">
			<div class="container">
				<div class="row">
					<div class="section-head">
						<i class="flaticon-cutlery"></i>
						<h2>Subscribe For Newslatter</h2>
						<p>Rapidiously plagiarize scalable manufactured products for realtime ramatically 
						actualize open-source metrics through fully tested vortals.</p>
					</div><!-- section-head -->
					<form>
						<div class="newslatter-input">
							<input class="input-box" type="text" placeholder="Enter Your Email Address Here ..">
							<button class="button">Subscribe now</button>
							<i class="fa fa-envelope-o"></i>
						</div>n<!-- ewslatter input -->
					</form>
				</div>
			</div>
		</div>
	</section><!-- newslatter section end-->

	<!-- branches section-->
	<section class="branches section-padding">
		<div class="section-head">
			<i class="flaticon-cutlery"></i>
			<h2>Our branches</h2>
			<p>Rapidiously plagiarize scalable manufactured products for realtime ramatically 
			actualize open-source metrics through fully tested vortals.</p>
		</div><!-- section-head -->
		<div class="branches-location">
			<div class="location-marker marker-1">
				<div class="location-info">
					<i class="fa fa-map-marker location-icon"></i>
					<div class="location-tooltip">
						<div class="tooltip-content">
							<h3 class="tooltip-title">Suite 02, Level 12, Sah BD.</h3>
							<ul>
								<li class="content-single"><i class="fa fa-home"></i>Suite 02, Level 12, Sahera  Tropical</li>
								<li class="content-single"><i class="fa fa-phone"></i>+8801111111111, 01111-264111</li>
							</ul>
						</div>
					</div>
				</div>
			</div><!-- location-marker -->
			<div class="location-marker marker-2">
				<div class="location-info">
					<i class="fa fa-map-marker location-icon"></i>
					<div class="location-tooltip">
						<div class="tooltip-content">
							<h3 class="tooltip-title">Suite 02, Level 12, Sah BD.</h3>
							<ul>
								<li class="content-single"><i class="fa fa-home"></i>Suite 02, Level 12, Sahera  Tropical</li>
								<li class="content-single"><i class="fa fa-phone"></i>+8801111111111, 01111-264111</li>
							</ul>
						</div>
					</div>
				</div>
			</div><!-- location-marker -->
			<div class="location-marker marker-3">
				<div class="location-info">
					<i class="fa fa-map-marker location-icon"></i>
					<div class="location-tooltip">
						<div class="tooltip-content">
							<h3 class="tooltip-title">Suite 02, Level 12, Sah BD.</h3>
							<ul>
								<li class="content-single"><i class="fa fa-home"></i>Suite 02, Level 12, Sahera  Tropical</li>
								<li class="content-single"><i class="fa fa-phone"></i>+8801111111111, 01111-264111</li>
							</ul>
						</div>
					</div>
				</div>
			</div><!-- location-marker -->
			<div class="location-marker marker-4">
				<div class="location-info">
					<i class="fa fa-map-marker location-icon"></i>
					<div class="location-tooltip">
						<div class="tooltip-content">
							<h3 class="tooltip-title">Suite 02, Level 12, Sah BD.</h3>
							<ul>
								<li class="content-single"><i class="fa fa-home"></i>Suite 02, Level 12, Sahera  Tropical</li>
								<li class="content-single"><i class="fa fa-phone"></i>+8801111111111, 01111-264111</li>
							</ul>
						</div>
					</div>
				</div>
			</div><!-- location-marker -->
			<div class="location-marker marker-5">
				<div class="location-info">
					<i class="fa fa-map-marker location-icon"></i>
					<div class="location-tooltip">
						<div class="tooltip-content">
							<h3 class="tooltip-title">Suite 02, Level 12, Sah BD.</h3>
							<ul>
								<li class="content-single"><i class="fa fa-home"></i>Suite 02, Level 12, Sahera  Tropical</li>
								<li class="content-single"><i class="fa fa-phone"></i>+8801111111111, 01111-264111</li>
							</ul>
						</div>
					</div>
				</div>
			</div><!-- location-marker -->
			<div class="location-marker marker-6">
				<div class="location-info">
					<i class="fa fa-map-marker location-icon"></i>
					<div class="location-tooltip">
						<div class="tooltip-content">
							<h3 class="tooltip-title">Suite 02, Level 12, Sah BD.</h3>
							<ul>
								<li class="content-single"><i class="fa fa-home"></i>Suite 02, Level 12, Sahera  Tropical</li>
								<li class="content-single"><i class="fa fa-phone"></i>+8801111111111, 01111-264111</li>
							</ul>
						</div>
					</div>
				</div>
			</div><!-- location-marker -->
		</div><!-- branches-location -->
	</section><!-- branches section end-->

	<!-- Footer -->
	<footer>
		<div class="footer-top">
			<div class="section-overlay">
				<div class="container">
					<div class="row">
						<div class="footer-widget-wrapper">
							<div class="col-md-3 col-sm-6">
								<div class="footer-widget">
									<h2 class="footer-widget-title">About tomato</h2>
									<div class="excerpt">
										Efficiently atrix unique ecommerce ently enhance pallel results serdom anerment 
										Proactvey incubate Authatively leverage existing effetive methodologies through client awesome theme.
									</div>
									<h2 class="footer-btn">
										<a href="#">Read more <i class="fa fa-angle-double-right"></i></a>
									</h2>
									<div class="payment-method">
										<h2>Payment Method</h2>
										<ul>
											<li><a href="#"><img src="assets/images/payment-img1.png" alt=""></a></li>
											<li><a href="#"><img src="assets/images/payment-img2.png" alt=""></a></li>
											<li><a href="#"><img src="assets/images/payment-img3.png" alt=""></a></li>
											<li><a href="#"><img src="assets/images/payment-img4.png" alt=""></a></li>
											<li><a href="#"><img src="assets/images/payment-img5.png" alt=""></a></li>
										</ul>
									</div><!-- payment-method -->
								</div><!-- footer-widget -->
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="footer-widget">
									<h2 class="footer-widget-title">Latest News</h2>
									<div class="footer-post-item-wrapper">
										<ul>
											<li class="post-item style-2">
												<div class="post-thumb">
													<a href="#"><img src="assets/images/footer-images/p-item1.jpg" alt=""></a>
												</div>
												<div class="post-content">
													<a class="title" href="#">Corem ipsum dolor sit amet, consectetuer adipi</a>
													<div class="meta-post">
														<ul>
															<li class="post-author">
																<a href="#">
																	<i class="fa fa-user"></i>Somrat Islam
																</a>
															</li>
															<li class="post-comments">
																<a href="#"><i class="fa fa-comments-o"></i>32</a>
															</li>
														</ul>
													</div>
												</div>
											</li><!-- post-item -->
											<li class="post-item style-2">
												<div class="post-thumb">
													<a href="#"><img src="assets/images/footer-images/p-item2.jpg" alt=""></a>
												</div>
												<div class="post-content">
													<a class="title" href="#">Corem ipsum dolor sit amet, consectetuer adipi</a>
													<div class="meta-post">
														<ul>
															<li class="post-author">
																<a href="#">
																	<i class="fa fa-user"></i>Somrat Islam
																</a>
															</li>
															<li class="post-comments">
																<a href="#"><i class="fa fa-comments-o"></i>32</a>
															</li>
														</ul>
													</div>
												</div>
											</li><!-- post-item -->
											<li class="post-item style-2">
												<div class="post-thumb">
													<a href="#"><img src="assets/images/footer-images/p-item3.jpg" alt=""></a>
												</div>
												<div class="post-content">
													<a class="title" href="#">Corem ipsum dolor sit amet, consectetuer adipi</a>
													<div class="meta-post">
														<ul>
															<li class="post-author">
																<a href="#">
																	<i class="fa fa-user"></i>Somrat Islam
																</a>
															</li>
															<li class="post-comments">
																<a href="#"><i class="fa fa-comments-o"></i>32</a>
															</li>
														</ul>
													</div>
												</div>
											</li><!-- post-item -->
										</ul>
									</div>
								</div><!-- footer-widget -->
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="footer-widget">
									<h2 class="footer-widget-title">Twitter Widget</h2>
									<ul class="twitter-widget">
										<li class="twitter-widget-item">
											<div class="twitter-icon">
												<a href="#"><span class="fa fa-twitter"></span></a>
											</div>
											<div class="twitter-widget-content">
												<a href="#">
													Raritas etiam procssus dysequitur mutaonem http://codexcoder.com
													awesome theme market.
												</a>
												<span>23 Seconds ago</span>
											</div>
										</li><!-- twitter-widget-item -->
										<li class="twitter-widget-item">
											<div class="twitter-icon">
												<a href="#"><span class="fa fa-twitter"></span></a>
											</div>
											<div class="twitter-widget-content">
												<a href="#">
													Duis autem eum #webcode.com dolor hendrerit in vulputate velit
												</a>
												<span>3 Months ago</span>
											</div>
										</li><!-- twitter-widget-item -->
										<li class="twitter-widget-item">
											<div class="twitter-icon">
												<a href="#"><span class="fa fa-twitter"></span></a>
											</div>
											<div class="twitter-widget-content">
												<a href="#">
													@bonndu007 am liber tempor cum soluta nobis eleifend
												</a>
												<span>2 Years ago</span>
											</div>
										</li><!-- twitter-widget-item -->
									</ul>
								</div><!-- footer-widget -->
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="footer-widget">
									<h2 class="footer-widget-title">Get in Touch</h2>
									<ul>
										<li class="contact-item">
											<div class="contact-item-left">
												<span>Office Address</span>
											</div>
											<div class="contact-item-right">
												<span>Suite 02, Level 12, Sahera Tropical Center 218 New Elephant Road, Dhaka -</span>
											</div>
										</li><!-- contact-item -->
										<li class="contact-item">
											<div class="contact-item-left">
												<span>Phone Number</span>
											</div>
											<div class="contact-item-right">
												<span>+8801111111111 - Mobile 02-1234567- Calephone</span>
											</div>
										</li><!-- contact-item -->
										<li class="contact-item">
											<div class="contact-item-left">
												<span>Email Address</span>
											</div>
											<div class="contact-item-right">
												<span>http://example.com support@example.com</span>
											</div>
										</li><!-- contact-item -->
										<li class="contact-item">
											<div class="contact-item-left">
												<span>Follow Us</span>
											</div>
											<div class="social-profiles">
												<ul>
													<li><a href="#"><i class="fa fa-facebook"></i></a></li>
													<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
													<li><a href="#"><i class="fa fa-rss"></i></a></li>
													<li><a href="#"><i class="fa fa-twitter"></i></a></li>
													<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
													<li><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
												</ul>
											</div><!-- Social profiles -->
										</li><!-- contact-item -->
									</ul>
								</div><!-- footer-widget -->
							</div>
						</div><!-- footer-widget-wrapper -->
					</div>
				</div><!-- container -->
			</div><!-- section-overlay -->
		</div><!-- footer-top -->
		<!--Scroll top-->
		<div class="scroll-top">
			<i class="fa fa-angle-up"></i>
		</div>
		<div class="footer-bottom">
			<p>&copy; <span>Tomato</span> 2016, All Right Reserves  |  Design by <a href="#">LabArtisan</a></p>
		</div><!-- footer-bottom -->
	</footer><!-- Footer End-->

	<script src="assets/js/jquery-2.2.3.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/swiper.min.js"></script>
	<script src="assets/js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="assets/js/jquery.gmap.min.js"></script>
	<script src="assets/js/jquery.syotimer.js"></script>
	<script src="assets/js/lightbox.js"></script>
	<script src="assets/js/jquery.vide.js"></script>
	<script src="assets/js/plugins.js"></script>
	<script src="assets/js/functions.js"></script>
</body>
</html>
