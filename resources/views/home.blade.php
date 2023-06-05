@extends("main")



@section("master")


<!-- Slider Area -->
<section class="hero-slider">
	<!-- Single Slider -->
	<div class="slider">
		<div style="background-image:url('../assets/images/slider1.jpg');background-size:100% 100% ;height:100vh">
			<center>
				<!-- <p >“Elegance comes from being as beautiful inside as outside"</p> -->
				<button class=" btn btn-dark" style="margin-top:300px">
					SHOP NOW
				</button>
			</center>
		</div>
	</div>
	<!--/ End Single Slider -->
</section>
<!--/ End Slider Area -->

<!-- Start Small Banner  -->
<section class="small-banner section">
	<div class="container-fluid">
		<div class="row">
			<!-- Single Banner  -->
			<div class="col-lg-4 col-md-6 col-12">
				<div class="single-banner">
					<img src="assets/images/slider9.jpg" alt="#">
					<div class="content">

						<h3> See Our Latest Branded Makeup <br>Collection </h3>
						<a href="#">Discover Now</a>
					</div>
				</div>
			</div>
			<!-- /End Single Banner  -->
			<!-- Single Banner  -->
			<div class="col-lg-4 col-md-6 col-12">
				<div class="single-banner">
					<img src="assets/images/slider5.jpg" alt="#">
					<div class="content">

						<h3>Branded Makeup <br>Collection </h3>
						<a href="#">Shop Now</a>
					</div>
				</div>
			</div>
			<!-- /End Single Banner  -->
			<!-- Single Banner  -->
			<div class="col-lg-4 col-12">
				<div class="single-banner tab-height">
					<img src="assets/images/slider6.jpg" alt="#">
					<div class="content">
						<p>Flash Sale</p>
						<h3>Mid Season <br> Up to <span>40%</span> Off</h3>
						<a href="#">Shop Now</a>
					</div>
				</div>
			</div>
			<!-- /End Single Banner  -->
		</div>
	</div>
</section>
<!-- End Small Banner -->

<!-- Start Product Area -->
<div class="product-area section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h2>Trending Item</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="product-info">
					<div class="nav-main">
						<!-- Tab Nav -->

						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#man" role="tab">Foundation</a></li>
							<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#women" role="tab">Blushes/Compact powder</a></li>
							<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#kids" role="tab">Lipsticks/Lipgloss</a></li>
							<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#essential" role="tab">Eyeshadows/Brushes</a></li>
							<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#prices" role="tab">Highlighter</a></li>
							<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#accessories" role="tab">Accessories/Jewellery</a></li>
						</ul>
						<!-- End Tab Nav -->
						
					</div>
					<div class="tab-content" id="myTabContent">
						<!-- Start Single Tab -->
						<div class="tab-pane fade show active" id="man" role="tabpanel">
							<div class="tab-single">
								<div class="row">
									@foreach($product as $p)
									<div class="col-xl-3 col-lg-4 col-md-4 col-12">
										<div class="single-product">
											<div class="product-img">
												<a href="{{URL::TO('product_details',$p->id)}}">
													<img class="default-img" src="product/{{$p->image}}" alt="#">
													<img class="hover-img" src="product/{{$p->image}}" alt="#">
												</a>
												<div class="button-head">
													<div class="product-action">
														<a data-toggle="modal" data-target="#exampleModal" title="Product Description" href="{{URL::TO('product_details',$p->id)}}"><i class=" ti-eye"></i><span>Product Description</span></a>
														<!-- <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a> -->
													</div>
													<form method="POST" action="{{URL::TO('add_cart',$p->id)}}">
														@csrf
														<div class="product-action-2">
															<input style="background: none;border: none;font-weight: 600;" type="submit" title="Add to cart" value="Add To Cart"></input>
														</div>
														<div class="col-lg-4 col-md-4" style="float: right; padding-top: 10px;">
															<input type="number" name="quantity" class="form-control w-50" value="1" min="1">
														</div>

													</form>
												</div>
											</div>
											<div class="product-content">
												<h3><a href="product-details.html">{{$p->name}}</a></h3>
												<div class="product-price">

													@if($p->discount_price!=null)
													Price :
													<span style="background: none; text-decoration: line-through; float: right;">${{$p->price}}</span>
													<br>
													Discount Price :
													<span style="background: none; float: right;">${{$p->discount_price}}</span>


													@else
													Price :
													<span style="background: none; float: right;">${{$p->price}}</span>

													@endif

												</div>
											</div>
										</div>
									</div>




									@endforeach
								</div>
							</div>
						</div>
						<!--/ End Single Tab -->
						<!-- Start Single Tab -->
						<!-- Blushes and compact -->
						<div class="tab-pane fade" id="women" role="tabpanel">
							<div class="tab-single">
								<div class="row">
									<div class="col-xl-3 col-lg-4 col-md-4 col-12">
										<div class="single-product">
											<div class="product-img">
												<a href="product-details.html">
													<img class="default-img" src="assets/images/blush1.jpg" alt="#">
													<img class="hover-img" src="assets/images/blush1.jpg" alt="#">
												</a>
												<div class="button-head">
													<div class="product-action">
														<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
														<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
														<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
													</div>
													<div class="product-action-2">
														<a title="Add to cart" href="#">Add to cart</a>
													</div>
												</div>
											</div>
											<div class="product-content">
												<h3><a href="product-details.html">Makeup Revolution <i>blush</i></a></h3>
												<div class="product-price">
													<span>PKR:1,500</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-4 col-12">
										<div class="single-product">
											<div class="product-img">
												<a href="product-details.html">
													<img class="default-img" src="assets/images/blush2.jpg" alt="#">
													<img class="hover-img" src="assets/images/blush2.jpg" alt="#">
												</a>
												<div class="button-head">
													<div class="product-action">
														<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
														<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
														<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
													</div>
													<div class="product-action-2">
														<a title="Add to cart" href="#">Add to cart</a>
													</div>
												</div>
											</div>
											<div class="product-content">
												<h3><a href="product-details.html">Millani Baked Blush</a></h3>
												<div class="product-price">
													<span>PKR:1,000</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-4 col-12">
										<div class="single-product">
											<div class="product-img">
												<a href="product-details.html">
													<img class="default-img" src="assets/images/blush3.jpg" alt="#">
													<img class="hover-img" src="assets/images/blush3.jpg" alt="#">
												</a>
												<div class="button-head">
													<div class="product-action">
														<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
														<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
														<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
													</div>
													<div class="product-action-2">
														<a title="Add to cart" href="#">Add to cart</a>
													</div>
												</div>
											</div>
											<div class="product-content">
												<h3><a href="product-details.html">Miss Rose Blush</a></h3>
												<div class="product-price">
													<span>PKR:250</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-4 col-12">
										<div class="single-product">
											<div class="product-img">
												<a href="product-details.html">
													<img class="default-img" src="assets/images/blush4.jpg" alt="#">
													<img class="hover-img" src="assets/images/blush4.jpg" alt="#">
													<span class="new">New</span>
												</a>
												<div class="button-head">
													<div class="product-action">
														<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
														<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
														<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
													</div>
													<div class="product-action-2">
														<a title="Add to cart" href="#">Add to cart</a>
													</div>
												</div>
											</div>
											<div class="product-content">
												<h3><a href="product-details.html">Cotton Max Blush</a></h3>
												<div class="product-price">
													<span>PKR:950</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-4 col-12">
										<div class="single-product">
											<div class="product-img">
												<a href="product-details.html">
													<img class="default-img" src="assets/images/powder1.jpg" alt="#">
													<img class="hover-img" src="assets/images/powder1.jpg" alt="#">
												</a>
												<div class="button-head">
													<div class="product-action">
														<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
														<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
														<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
													</div>
													<div class="product-action-2">
														<a title="Add to cart" href="#">Add to cart</a>
													</div>
												</div>
											</div>
											<div class="product-content">
												<h3><a href="product-details.html">Millani <i>compact powder</i></a></h3>
												<div class="product-price">
													<span>PKR:1,200</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-4 col-12">
										<div class="single-product">
											<div class="product-img">
												<a href="product-details.html">
													<img class="default-img" src="assets/images/powder2.jpg" alt="#">
													<img class="hover-img" src="assets/images/powder2.jpg" alt="#">
													<span class="price-dec">30% Off</span>
												</a>
												<div class="button-head">
													<div class="product-action">
														<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
														<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
														<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
													</div>
													<div class="product-action-2">
														<a title="Add to cart" href="#">Add to cart</a>
													</div>
												</div>
											</div>
											<div class="product-content">
												<h3><a href="product-details.html">FOCALLURE <i>powder</i></a></h3>
												<div class="product-price">
													<span>PKR:2,500</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-4 col-12">
										<div class="single-product">
											<div class="product-img">
												<a href="product-details.html">
													<img class="default-img" src="assets/images/powder3.jpg" alt="#">
													<img class="hover-img" src="assets/images/powder3.jpg" alt="#">
												</a>
												<div class="button-head">
													<div class="product-action">
														<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
														<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
														<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
													</div>
													<div class="product-action-2">
														<a title="Add to cart" href="#">Add to cart</a>
													</div>
												</div>
											</div>
											<div class="product-content">
												<h3><a href="product-details.html">Fitme <i>compact powder</i></a></h3>
												<div class="product-price">
													<span>PKR:1,900</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-4 col-12">
										<div class="single-product">
											<div class="product-img">
												<a href="product-details.html">
													<img class="default-img" src="assets/images/powder4.jpg" alt="#">
													<img class="hover-img" src="assets/images/powder4.jpg" alt="#">
													<span class="out-of-stock">Hot</span>
												</a>
												<div class="button-head">
													<div class="product-action">
														<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
														<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
														<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
													</div>
													<div class="product-action-2">
														<a title="Add to cart" href="#">Add to cart</a>
													</div>
												</div>
											</div>
											<div class="product-content">
												<h3><a href="product-details.html">Swiss Beauty <i>powder</i></a></h3>
												<div class="product-price">
													<span class="old">PKR:3,000</span>
													<span class="new">PKR:2,500</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--/ End Single Tab -->
						<!-- Start Single Tab -->
						<!-- lipsticks & lipgloss -->
						<div class="tab-pane fade" id="kids" role="tabpanel">
							<div class="tab-single">
								<div class="row">
									<div class="col-xl-3 col-lg-4 col-md-4 col-12">
										<div class="single-product">
											<div class="product-img">
												<a href="product-details.html">
													<img class="default-img" src="assets/images/lipstick1.jpg" alt="#">
													<img class="hover-img" src="assets/images/lipstick1.jpg" alt="#">
												</a>
												<div class="button-head">
													<div class="product-action">
														<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
														<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
														<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
													</div>
													<div class="product-action-2">
														<a title="Add to cart" href="#">Add to cart</a>
													</div>
												</div>
											</div>
											<div class="product-content">
												<h3><a href="product-details.html">Morphe Lipstick Matte</a></h3>
												<div class="product-price">
													<span>PKR:2,000</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-4 col-12">
										<div class="single-product">
											<div class="product-img">
												<a href="product-details.html">
													<img class="default-img" src="assets/images/lipstick2.jpg" alt="#">
													<img class="hover-img" src="assets/images/lipstick2.jpg" alt="#">
												</a>
												<div class="button-head">
													<div class="product-action">
														<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
														<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
														<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
													</div>
													<div class="product-action-2">
														<a title="Add to cart" href="#">Add to cart</a>
													</div>
												</div>
											</div>
											<div class="product-content">
												<h3><a href="product-details.html">Lakme Matte Lipstick</a></h3>
												<div class="product-price">
													<span>PKR:6,000</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-4 col-12">
										<div class="single-product">
											<div class="product-img">
												<a href="product-details.html">
													<img class="default-img" src="assets/images/lipstick3.jpg" alt="#">
													<img class="hover-img" src="assets/images/lipstick3.jpg" alt="#">
												</a>
												<div class="button-head">
													<div class="product-action">
														<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
														<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
														<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
													</div>
													<div class="product-action-2">
														<a title="Add to cart" href="#">Add to cart</a>
													</div>
												</div>
											</div>
											<div class="product-content">
												<h3><a href="product-details.html">Nars Matte Lipstick </a></h3>
												<div class="product-price">
													<span>PKR:4,000</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-4 col-12">
										<div class="single-product">
											<div class="product-img">
												<a href="product-details.html">
													<img class="default-img" src="assets/images/lipstick4.jpg" alt="#">
													<img class="hover-img" src="assets/images/lipstick4.jpg" alt="#">
													<span class="new">New</span>
												</a>
												<div class="button-head">
													<div class="product-action">
														<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
														<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
														<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
													</div>
													<div class="product-action-2">
														<a title="Add to cart" href="#">Add to cart</a>
													</div>
												</div>
											</div>
											<div class="product-content">
												<h3><a href="product-details.html">Hermosa Matte</a></h3>
												<div class="product-price">
													<span>PKR:3,000</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-4 col-12">
										<div class="single-product">
											<div class="product-img">
												<a href="product-details.html">
													<img class="default-img" src="assets/images/lipgloss1.jpg" alt="#">
													<img class="hover-img" src="assets/images/lipgloss1.jpg" alt="#">
												</a>
												<div class="button-head">
													<div class="product-action">
														<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
														<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
														<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
													</div>
													<div class="product-action-2">
														<a title="Add to cart" href="#">Add to cart</a>
													</div>
												</div>
											</div>
											<div class="product-content">
												<h3><a href="product-details.html">The Balm <i>liquid matte</i></a></h3>
												<div class="product-price">
													<span>PKR:3,000</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-4 col-12">
										<div class="single-product">
											<div class="product-img">
												<a href="product-details.html">
													<img class="default-img" src="assets/images/lipgloss2.jpg" alt="#">
													<img class="hover-img" src="assets/images/lipgloss2.jpg" alt="#">
													<span class="price-dec">50% Off</span>
												</a>
												<div class="button-head">
													<div class="product-action">
														<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
														<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
														<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
													</div>
													<div class="product-action-2">
														<a title="Add to cart" href="#">Add to cart</a>
													</div>
												</div>
											</div>
											<div class="product-content">
												<h3><a href="product-details.html">LOREAL infallible</a></h3>
												<div class="product-price">
													<span>PKR:2,500</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-4 col-12">
										<div class="single-product">
											<div class="product-img">
												<a href="product-details.html">
													<img class="default-img" src="assets/images/lipgloss3.jpg" alt="#">
													<img class="hover-img" src="assets/images/lipgloss3.jpg" alt="#">
												</a>
												<div class="button-head">
													<div class="product-action">
														<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
														<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
														<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
													</div>
													<div class="product-action-2">
														<a title="Add to cart" href="#">Add to cart</a>
													</div>
												</div>
											</div>
											<div class="product-content">
												<h3><a href="product-details.html">Nyx Matte<i>this is milky</i></a></h3>
												<div class="product-price">
													<span>PKR:2,000</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-4 col-12">
										<div class="single-product">
											<div class="product-img">
												<a href="product-details.html">
													<img class="default-img" src="assets/images/lipgloss4.jpg" alt="#">
													<img class="hover-img" src="assets/images/lipgloss4.jpg" alt="#">
													<span class="out-of-stock">Hot</span>
												</a>
												<div class="button-head">
													<div class="product-action">
														<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
														<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
														<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
													</div>
													<div class="product-action-2">
														<a title="Add to cart" href="#">Add to cart</a>
													</div>
												</div>
											</div>
											<div class="product-content">
												<h3><a href="product-details.html">Kylie Cosmetics Matte</a></h3>
												<div class="product-price">
													<span class="old">PKR:1,400</span>
													<span>PKR:1,200</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--/ End Single Tab -->
						<!-- Start Single Tab -->
						<!-- Eyeshadows and brushes -->
						<div class="tab-pane fade" id="essential" role="tabpanel">
							<div class="tab-single">
								<div class="row">
									<div class="col-xl-3 col-lg-4 col-md-4 col-12">
										<div class="single-product">
											<div class="product-img">
												<a href="product-details.html">
													<img class="default-img" src="assets/images/eyeshade1.jpg" alt="#">
													<img class="hover-img" src="assets/images/eyeshade1.jpg" alt="#">
												</a>
												<div class="button-head">
													<div class="product-action">
														<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
														<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
														<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
													</div>
													<div class="product-action-2">
														<a title="Add to cart" href="#">Add to cart</a>
													</div>
												</div>
											</div>
											<div class="product-content">
												<h3><a href="product-details.html">Mocha Chocolate <i><small>eyeshadow pallete</small></i></a></h3>
												<div class="product-price">
													<span>PKR:1,600</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-4 col-12">
										<div class="single-product">
											<div class="product-img">
												<a href="product-details.html">
													<img class="default-img" src="assets/images/eyeshade2.jpg" alt="#">
													<img class="hover-img" src="assets/images/eyeshade2.jpg" alt="#">
												</a>
												<div class="button-head">
													<div class="product-action">
														<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
														<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
														<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
													</div>
													<div class="product-action-2">
														<a title="Add to cart" href="#">Add to cart</a>
													</div>
												</div>
											</div>
											<div class="product-content">
												<h3><a href="product-details.html">NYX <b>Ultimate</b> <i><small>eyeshadow pallete</small></i></a></h3>
												<div class="product-price">
													<span>PKR:1,500</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-4 col-12">
										<div class="single-product">
											<div class="product-img">
												<a href="product-details.html">
													<img class="default-img" src="assets/images/eyeshade3.jpg" alt="#">
													<img class="hover-img" src="assets/images/eyeshade3.jpg" alt="#">
												</a>
												<div class="button-head">
													<div class="product-action">
														<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
														<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
														<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
													</div>
													<div class="product-action-2">
														<a title="Add to cart" href="#">Add to cart</a>
													</div>
												</div>
											</div>
											<div class="product-content">
												<h3><a href="product-details.html">Anastasia <i><small>eyeshadow pallete</small></i></a></h3>
												<div class="product-price">
													<span>PKR:3,000</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-4 col-12">
										<div class="single-product">
											<div class="product-img">
												<a href="product-details.html">
													<img class="default-img" src="assets/images/eyeshade4.jpg" alt="#">
													<img class="hover-img" src="assets/images/eyeshade4.jpg" alt="#">
													<span class="new">New</span>
												</a>
												<div class="button-head">
													<div class="product-action">
														<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
														<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
														<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
													</div>
													<div class="product-action-2">
														<a title="Add to cart" href="#">Add to cart</a>
													</div>
												</div>
											</div>
											<div class="product-content">
												<h3><a href="product-details.html">Fashion <i><small>eyeshadow pallete</small></i></a></h3>
												<div class="product-price">
													<span>PKR:700</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-4 col-12">
										<div class="single-product">
											<div class="product-img">
												<a href="product-details.html">
													<img class="default-img" src="assets/images/brush1.jpg" alt="#">
													<img class="hover-img" src="assets/images/brush1.jpg" alt="#">
												</a>
												<div class="button-head">
													<div class="product-action">
														<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
														<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
														<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
													</div>
													<div class="product-action-2">
														<a title="Add to cart" href="#">Add to cart</a>
													</div>
												</div>
											</div>
											<div class="product-content">
												<h3><a href="product-details.html">Morphe <i><small>complete brushset</small></i></a></h3>
												<div class="product-price">
													<span>PKR:1,500</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-4 col-12">
										<div class="single-product">
											<div class="product-img">
												<a href="product-details.html">
													<img class="default-img" src="assets/images/brush2.jpg" alt="#">
													<img class="hover-img" src="assets/images/brush2.jpg" alt="#">
													<span class="price-dec">10% Off</span>
												</a>
												<div class="button-head">
													<div class="product-action">
														<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
														<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
														<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
													</div>
													<div class="product-action-2">
														<a title="Add to cart" href="#">Add to cart</a>
													</div>
												</div>
											</div>
											<div class="product-content">
												<h3><a href="product-details.html">Elf Brushset <i><small>black</small></i></a></h3>
												<div class="product-price">
													<span>PKR:1,200</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-4 col-12">
										<div class="single-product">
											<div class="product-img">
												<a href="product-details.html">
													<img class="default-img" src="assets/images/brush3.jpg" alt="#">
													<img class="hover-img" src="assets/images/brush3.jpg" alt="#">
												</a>
												<div class="button-head">
													<div class="product-action">
														<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
														<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
														<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
													</div>
													<div class="product-action-2">
														<a title="Add to cart" href="#">Add to cart</a>
													</div>
												</div>
											</div>
											<div class="product-content">
												<h3><a href="product-details.html">Makeup Revolution <i><small>black edition</small></i></a></h3>
												<div class="product-price">
													<span>PKR:600</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-4 col-12">
										<div class="single-product">
											<div class="product-img">
												<a href="product-details.html">
													<img class="default-img" src="assets/images/brush4.jpg" alt="#">
													<img class="hover-img" src="assets/images/brush4.jpg" alt="#">
												</a>
												<div class="button-head">
													<div class="product-action">
														<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
														<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
														<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
													</div>
													<div class="product-action-2">
														<a title="Add to cart" href="#">Add to cart</a>
													</div>
												</div>
											</div>
											<div class="product-content">
												<h3><a href="product-details.html">Zoeya Fluffy Brushset <i><small>pink edition</small></i></a></h3>
												<div class="product-price">
													<span class="fresh">PKR:700</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--/ End Single Tab -->
						<!-- Start Single Tab -->
						<!-- accessories and jewellery -->
						<div class="tab-pane fade" id="accessories" role="tabpanel">
							<div class="tab-single">
								<div class="row">
									<div class="col-xl-3 col-lg-4 col-md-4 col-12">
										<div class="single-product">
											<div class="product-img">
												<a href="product-details.html">
													<img class="default-img" src="assets/images/earring1.jpg" alt="#">
													<img class="hover-img" src="assets/images/earring1.jpg" alt="#">
												</a>
												<div class="button-head">
													<div class="product-action">
														<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
														<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
														<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
													</div>
													<div class="product-action-2">
														<a title="Add to cart" href="#">Add to cart</a>
													</div>
												</div>
											</div>
											<div class="product-content">
												<h3><a href="product-details.html">Women Gold Earring</a></h3>
												<div class="product-price">
													<span>PKR:250</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-4 col-12">
										<div class="single-product">
											<div class="product-img">
												<a href="product-details.html">
													<img class="default-img" src="assets/images/earring2.jpg" alt="#">
													<img class="hover-img" src="assets/images/earring2.jpg" alt="#">
												</a>
												<div class="button-head">
													<div class="product-action">
														<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
														<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
														<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
													</div>
													<div class="product-action-2">
														<a title="Add to cart" href="#">Add to cart</a>
													</div>
												</div>
											</div>
											<div class="product-content">
												<h3><a href="product-details.html">Women Silver Earring</a></h3>
												<div class="product-price">
													<span>PKR:350</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-4 col-12">
										<div class="single-product">
											<div class="product-img">
												<a href="product-details.html">
													<img class="default-img" src="assets/images/earring3.jpg" alt="#">
													<img class="hover-img" src="assets/images/earring3.jpg" alt="#">
												</a>
												<div class="button-head">
													<div class="product-action">
														<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
														<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
														<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
													</div>
													<div class="product-action-2">
														<a title="Add to cart" href="#">Add to cart</a>
													</div>
												</div>
											</div>
											<div class="product-content">
												<h3><a href="product-details.html">Women Silver Gold</a></h3>
												<div class="product-price">
													<span>PKR:560</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-4 col-12">
										<div class="single-product">
											<div class="product-img">
												<a href="product-details.html">
													<img class="default-img" src="assets/images/earring4.jpg" alt="#">
													<img class="hover-img" src="assets/images/earring4.jpg" alt="#">
													<span class="new">New</span>
												</a>
												<div class="button-head">
													<div class="product-action">
														<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
														<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
														<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
													</div>
													<div class="product-action-2">
														<a title="Add to cart" href="#">Add to cart</a>
													</div>
												</div>
											</div>
											<div class="product-content">
												<h3><a href="product-details.html">Women Classic Earring</a></h3>
												<div class="product-price">
													<span>PKR:750</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-4 col-12">
										<div class="single-product">
											<div class="product-img">
												<a href="product-details.html">
													<img class="default-img" src="assets/images/necklace1.jpg" alt="#">
													<img class="hover-img" src="assets/images/necklace1.jpg" alt="#">
												</a>
												<div class="button-head">
													<div class="product-action">
														<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
														<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
														<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
													</div>
													<div class="product-action-2">
														<a title="Add to cart" href="#">Add to cart</a>
													</div>
												</div>
											</div>
											<div class="product-content">
												<h3><a href="product-details.html">Gold Pendant Necklace</a></h3>
												<div class="product-price">
													<span>PKR:500</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-4 col-12">
										<div class="single-product">
											<div class="product-img">
												<a href="product-details.html">
													<img class="default-img" src="assets/images/necklace2.jpg" alt="#">
													<img class="hover-img" src="assets/images/necklace2.jpg" alt="#">
												</a>
												<div class="button-head">
													<div class="product-action">
														<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
														<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
														<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
													</div>
													<div class="product-action-2">
														<a title="Add to cart" href="#">Add to cart</a>
													</div>
												</div>
											</div>
											<div class="product-content">
												<h3><a href="product-details.html">Silver Red Pearl Necklace</a></h3>
												<div class="product-price">
													<span>PKR:700</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-4 col-12">
										<div class="single-product">
											<div class="product-img">
												<a href="product-details.html">
													<img class="default-img" src="assets/images/necklace3.jpg" alt="#">
													<img class="hover-img" src="assets/images/necklace3.jpg" alt="#">
												</a>
												<div class="button-head">
													<div class="product-action">
														<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
														<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
														<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
													</div>
													<div class="product-action-2">
														<a title="Add to cart" href="#">Add to cart</a>
													</div>
												</div>
											</div>
											<div class="product-content">
												<h3><a href="product-details.html">Butterfly Necklace</a></h3>
												<div class="product-price">
													<span>PKR:900</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-4 col-12">
										<div class="single-product">
											<div class="product-img">
												<a href="product-details.html">
													<img class="default-img" src="assets/images/necklace4.jpg" alt="#">
													<img class="hover-img" src="assets/images/necklace4.jpg" alt="#">
													<span class="out-of-stock">Hot</span>
												</a>
												<div class="button-head">
													<div class="product-action">
														<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
														<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
														<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
													</div>
													<div class="product-action-2">
														<a title="Add to cart" href="#">Add to cart</a>
													</div>
												</div>
											</div>
											<div class="product-content">
												<h3><a href="product-details.html">Classic Vintage Necklace</a></h3>
												<div class="product-price">
													<span>PKR:850</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-4 col-12">
										<div class="single-product">
											<div class="product-img">
												<a href="product-details.html">
													<img class="default-img" src="assets/images/ring1.jpg" alt="#">
													<img class="hover-img" src="assets/images/ring1.jpg" alt="#">
												</a>
												<div class="button-head">
													<div class="product-action">
														<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
														<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
														<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
													</div>
													<div class="product-action-2">
														<a title="Add to cart" href="#">Add to cart</a>
													</div>
												</div>
											</div>
											<div class="product-content">
												<h3><a href="product-details.html">Gold Ring</a></h3>
												<div class="product-price">
													<span>PKR:1,200</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-4 col-12">
										<div class="single-product">
											<div class="product-img">
												<a href="product-details.html">
													<img class="default-img" src="assets/images/ring2.jpg" alt="#">
													<img class="hover-img" src="assets/images/ring2.jpg" alt="#">
												</a>
												<div class="button-head">
													<div class="product-action">
														<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
														<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
														<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
													</div>
													<div class="product-action-2">
														<a title="Add to cart" href="#">Add to cart</a>
													</div>
												</div>
											</div>
											<div class="product-content">
												<h3><a href="product-details.html">Green Stone Ring</a></h3>
												<div class="product-price">
													<span>PKR:1,200</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-4 col-12">
										<div class="single-product">
											<div class="product-img">
												<a href="product-details.html">
													<img class="default-img" src="assets/images/ring3.jpg" alt="#">
													<img class="hover-img" src="assets/images/ring3.jpg" alt="#">
												</a>
												<div class="button-head">
													<div class="product-action">
														<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
														<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
														<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
													</div>
													<div class="product-action-2">
														<a title="Add to cart" href="#">Add to cart</a>
													</div>
												</div>
											</div>
											<div class="product-content">
												<h3><a href="product-details.html">Lavender Stone Ring</a></h3>
												<div class="product-price">
													<span>PKR:1000</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-4 col-12">
										<div class="single-product">
											<div class="product-img">
												<a href="product-details.html">
													<img class="default-img" src="assets/images/ring4.jpg" alt="#">
													<img class="hover-img" src="assets/images/ring4.jpg" alt="#">
												</a>
												<div class="button-head">
													<div class="product-action">
														<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
														<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
														<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
													</div>
													<div class="product-action-2">
														<a title="Add to cart" href="#">Add to cart</a>
													</div>
												</div>
											</div>
											<div class="product-content">
												<h3><a href="product-details.html">Silver Stone Ring</a></h3>
												<div class="product-price">
													<span>PKR:850</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--/ End Single Tab -->
						<!-- Start Single Tab -->
						<!-- <div class="tab-pane fade" id="prices" role="tabpanel">
									<div class="tab-single">
										<div class="row">
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
															</div>
															<div class="product-action-2">
																<a title="Add to cart" href="#">Add to cart</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Women Hot Collection</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
															</div>
															<div class="product-action-2">
																<a title="Add to cart" href="#">Add to cart</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Awesome Pink Show</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
															</div>
															<div class="product-action-2">
																<a title="Add to cart" href="#">Add to cart</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Awesome Bags Collection</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
															<span class="new">New</span>
														</a>
														<div class="button-head">
															<div class="product-action">
																<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
															</div>
															<div class="product-action-2">
																<a title="Add to cart" href="#">Add to cart</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Women Pant Collectons</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
															</div>
															<div class="product-action-2">
																<a title="Add to cart" href="#">Add to cart</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Awesome Bags Collection</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
															<span class="price-dec">30% Off</span>
														</a>
														<div class="button-head">
															<div class="product-action">
																<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
															</div>
															<div class="product-action-2">
																<a title="Add to cart" href="#">Add to cart</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Awesome Cap For Women</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
															</div>
															<div class="product-action-2">
																<a title="Add to cart" href="#">Add to cart</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Polo Dress For Women</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
															<span class="out-of-stock">Hot</span>
														</a>
														<div class="button-head">
															<div class="product-action">
																<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
															</div>
															<div class="product-action-2">
																<a title="Add to cart" href="#">Add to cart</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Black Sunglass For Women</a></h3>
														<div class="product-price">
															<span class="old">$60.00</span>
															<span>$50.00</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div> -->
						<!--/ End Single Tab -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Product Area -->

<!-- Start Midium Banner  -->
<section class="midium-banner">
	<div class="container">
		<div class="row">
			<!-- Single Banner  -->
			<div class="col-lg-6 col-md-6 col-12">
				<div class="single-banner">
					<img src="assets/images/banner2.jpg" alt="#">
					<div class="content">
						<p>
						<h1 style="color:white;">COSMETICS </h1>
						</p>
						<h3 style="color:white;">items <br>Up to<span style="color:black;"> 50%</span></h3>
						<a href="#">Shop Now</a>
					</div>
				</div>
			</div>
			<!-- /End Single Banner  -->
			<!-- Single Banner  -->
			<div class="col-lg-6 col-md-6 col-12">
				<div class="single-banner">
					<img src="assets/images/banner4.jpg" alt="#">
					<div class="content">

						<p>
						<h1>JEWELLERY</h1>
						</p>
						<h3>mid season <br> up to <span>70%</span></h3>
						<a href="#" class="btn">Shop Now</a>

					</div>
				</div>
			</div>
			<!-- /End Single Banner  -->
		</div>
	</div>
</section>
<!-- End Midium Banner -->

<!-- Start Most Popular -->
<div class="product-area most-popular section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h2>Hot Item</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="owl-carousel popular-slider">
					<!-- Start Single Product -->
					<div class="single-product">
						<div class="product-img">
							<a href="product-details.html">
								<img class="default-img" src="assets/images/highlighter1.jpg" alt="#">
								<img class="hover-img" src="assets/images/highlighter1.jpg" alt="#">
								<span class="out-of-stock">Hot</span>
							</a>
							<div class="button-head">
								<div class="product-action">
									<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
									<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
									<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
								</div>
								<div class="product-action-2">
									<a title="Add to cart" href="#">Add to cart</a>
								</div>
							</div>
						</div>
						<div class="product-content">
							<h3><a href="product-details.html">Anastasia Liquid Glow</a></h3>
							<div class="product-price">
								<span>PKR:1,200</span>
							</div>
						</div>
					</div>
					<!-- End Single Product -->
					<!-- Start Single Product -->
					<div class="single-product">
						<div class="product-img">
							<a href="product-details.html">
								<img class="default-img" src="assets/images/anklet1.jpg" alt="#">
								<img class="hover-img" src="assets/images/anklet1.jpg" alt="#">
							</a>
							<div class="button-head">
								<div class="product-action">
									<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
									<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
									<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
								</div>
								<div class="product-action-2">
									<a title="Add to cart" href="#">Add to cart</a>
								</div>
							</div>
						</div>
						<div class="product-content">
							<h3><a href="product-details.html">Women Shell Anklet</a></h3>
							<div class="product-price">
								<span>PKR:750</span>
							</div>
						</div>
					</div>
					<!-- End Single Product -->
					<!-- Start Single Product -->
					<div class="single-product">
						<div class="product-img">
							<a href="product-details.html">
								<img class="default-img" src="assets/images/spray1.jpg" alt="#">
								<img class="hover-img" src="assets/images/spray1.jpg" alt="#">
								<span class="new">New</span>
							</a>
							<div class="button-head">
								<div class="product-action">
									<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
									<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
									<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
								</div>
								<div class="product-action-2">
									<a title="Add to cart" href="#">Add to cart</a>
								</div>
							</div>
						</div>
						<div class="product-content">
							<h3><a href="product-details.html">NYX matte spray</a></h3>
							<div class="product-price">
								<span>PKR:1,999</span>
							</div>
						</div>
					</div>
					<!-- End Single Product -->
					<!-- Start Single Product -->
					<div class="single-product">
						<div class="product-img">
							<a href="product-details.html">
								<img class="default-img" src="assets/images/earring5.jpg" alt="#">
								<img class="hover-img" src="assets/images/earring5.jpg" alt="#">
							</a>
							<div class="button-head">
								<div class="product-action">
									<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
									<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
									<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
								</div>
								<div class="product-action-2">
									<a title="Add to cart" href="#">Add to cart</a>
								</div>
							</div>
						</div>
						<div class="product-content">
							<h3><a href="product-details.html">Women Earring </a></h3>
							<div class="product-price">
								<span>PKR:400</span>
							</div>
						</div>
					</div>
					<!-- End Single Product -->
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Most Popular Area -->

<!-- Start Shop Home List  -->
<section class="shop-home-list section">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6 col-12">
				<div class="row">
					<div class="col-12">
						<div class="shop-section-title">
							<h1>On sale</h1>
						</div>
					</div>
				</div>
				<!-- Start Single List  -->
				<div class="single-list">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-12">
							<div class="list-image overlay">
								<img src="assets/images/blush5.jpg" alt="#">
								<a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-12 no-padding">
							<div class="content">
								<h4 class="title"><a href="#">Makeup Revolution Blush</a></h4>
								<p class="price with-discount">PKR:1,700</p>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single List  -->
				<!-- Start Single List  -->
				<div class="single-list">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-12">
							<div class="list-image overlay">
								<img src="assets/images/lipstick5.jpg" alt="#">
								<a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-12 no-padding">
							<div class="content">
								<h5 class="title"><a href="#">Mac Lipstick</a></h5>
								<p class="price with-discount">PKR:2,000</p>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single List  -->
				<!-- Start Single List  -->
				<div class="single-list">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-12">
							<div class="list-image overlay">
								<img src="assets/images/powder5.jpg" alt="#">
								<a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-12 no-padding">
							<div class="content">
								<h5 class="title"><a href="#">Rimmel Compact Powder</a></h5>
								<p class="price with-discount">PKR:1,800</p>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single List  -->
			</div>
			<div class="col-lg-4 col-md-6 col-12">
				<div class="row">
					<div class="col-12">
						<div class="shop-section-title">
							<h1>Best Seller</h1>
						</div>
					</div>
				</div>
				<!-- Start Single List  -->
				<div class="single-list">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-12">
							<div class="list-image overlay">
								<img src="assets/images/earring5.jpg" alt="#">
								<a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-12 no-padding">
							<div class="content">
								<h5 class="title"><a href="#">Women Earring</a></h5>
								<p class="price with-discount">PKR:400</p>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single List  -->
				<!-- Start Single List  -->
				<div class="single-list">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-12">
							<div class="list-image overlay">
								<img src="assets/images/necklace5.jpg" alt="#">
								<a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-12 no-padding">
							<div class="content">
								<h5 class="title"><a href="#">Gold Pendant Necklace</a></h5>
								<p class="price with-discount">PKR:750</p>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single List  -->
				<!-- Start Single List  -->
				<div class="single-list">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-12">
							<div class="list-image overlay">
								<img src="assets/images/ring5.jpg" alt="#">
								<a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-12 no-padding">
							<div class="content">
								<h5 class="title"><a href="#">Diamond Ring</a></h5>
								<p class="price with-discount">PKR:1,000</p>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single List  -->
			</div>
			<div class="col-lg-4 col-md-6 col-12">
				<div class="row">
					<div class="col-12">
						<div class="shop-section-title">
							<h1>Top viewed</h1>
						</div>
					</div>
				</div>
				<!-- Start Single List  -->
				<div class="single-list">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-12">
							<div class="list-image overlay">
								<img src="assets/images/foundation22.jpg" alt="#">
								<a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-12 no-padding">
							<div class="content">
								<h5 class="title"><a href="#">ELF liquid matte</a></h5>
								<p class="price with-discount">PKR:2,000</p>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single List  -->
				<!-- Start Single List  -->
				<div class="single-list">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-12">
							<div class="list-image overlay">
								<img src="assets/images/lipgloss5.jpg" alt="#">
								<a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-12 no-padding">
							<div class="content">
								<h5 class="title"><a href="#">Maybellin Lip Matte</a></h5>
								<p class="price with-discount">PKR:1,900</p>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single List  -->
				<!-- Start Single List  -->
				<div class="single-list">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-12">
							<div class="list-image overlay">
								<img src="assets/images/highlighter2.jpg" alt="#">
								<a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-12 no-padding">
							<div class="content">
								<h5 class="title"><a href="#">Millani <i>highlighter</i></a></h5>
								<p class="price with-discount">PKR:2,400</p>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single List  -->
			</div>
		</div>
	</div>
</section>
<!-- End Shop Home List  -->

<!-- Start Cowndown Area -->
<section class="cown-down">
	<div class="section-inner ">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 col-12 padding-right">
					<div class="image">
						<img src="assets/images/makeupkit1.jpg" alt="#">
					</div>
				</div>
				<div class="col-lg-6 col-12 padding-left">
					<div class="content">
						<div class="heading-block">
							<p class="small-title">Deal of day</p>
							<h3 class="title">Professional kit for women</h3>
							<p class="text">Create high quality, suitable for personal or professional salon use, welcome to customize. Humanized design, easy to carry, easy to use </p>
							<h1 class="price">PKR:1200 <s>PKR:1890</s></h1>
							<div class="coming-time">
								<div class="clearfix" data-countdown="2023/05/12"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /End Cowndown Area -->

<!-- Start Shop Blog  -->
<br> <br>
<!-- End Shop Blog  -->

<!-- Start Shop Services Area -->
<section class="shop-services section home">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-12">
				<!-- Start Single Service -->
				<div class="single-service">
					<i class="ti-rocket"></i>
					<h4>Free shiping</h4>
					<p>Orders over $100</p>
				</div>
				<!-- End Single Service -->
			</div>
			<div class="col-lg-3 col-md-6 col-12">
				<!-- Start Single Service -->
				<div class="single-service">
					<i class="ti-reload"></i>
					<h4>Free Return</h4>
					<p>Within 30 days returns</p>
				</div>
				<!-- End Single Service -->
			</div>
			<div class="col-lg-3 col-md-6 col-12">
				<!-- Start Single Service -->
				<div class="single-service">
					<i class="ti-lock"></i>
					<h4>Sucure Payment</h4>
					<p>100% secure payment</p>
				</div>
				<!-- End Single Service -->
			</div>
			<div class="col-lg-3 col-md-6 col-12">
				<!-- Start Single Service -->
				<div class="single-service">
					<i class="ti-tag"></i>
					<h4>Best Peice</h4>
					<p>Guaranteed price</p>
				</div>
				<!-- End Single Service -->
			</div>
		</div>
	</div>
</section>
<!-- End Shop Services Area -->

<!-- Start Shop Newsletter  -->
<section class="shop-newsletter section">
	<div class="container">
		<div class="inner-top">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 col-12">
					<!-- Start Newsletter Inner -->
					<div class="inner">
						<h4>Place Your Order Now</h4>
						<p> get <span>10%</span> off your first purchase</p>
						<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
							<input name="EMAIL" placeholder="Your email address" required="" type="email">
							<button class="btn">Subscribe</button>
						</form>
					</div>
					<!-- End Newsletter Inner -->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Shop Newsletter -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
			</div>
			<div class="modal-body">
				<div class="row no-gutters">
					<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
						<!-- Product Slider -->
						<div class="product-gallery">
							<div class="quickview-slider-active">
								<div class="single-slider">
									<img src="{{asset('assets/images/slider1.jpg')}}" alt="#">
								</div>
								<div class="single-slider">
									<img src="https://via.placeholder.com/569x528" alt="#">
								</div>
								<div class="single-slider">
									<img src="https://via.placeholder.com/569x528" alt="#">
								</div>
								<div class="single-slider">
									<img src="https://via.placeholder.com/569x528" alt="#">
								</div>
							</div>
						</div>
						<!-- End Product slider -->
					</div>
					<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
						<div class="quickview-content">
							<h2>Flared Shift Dress</h2>
							<div class="quickview-ratting-review">
								<div class="quickview-ratting-wrap">
									<div class="quickview-ratting">
										<i class="yellow fa fa-star"></i>
										<i class="yellow fa fa-star"></i>
										<i class="yellow fa fa-star"></i>
										<i class="yellow fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
									<a href="#"> (1 customer review)</a>
								</div>
								<div class="quickview-stock">
									<span><i class="fa fa-check-circle-o"></i> in stock</span>
								</div>
							</div>
							<h3>$29.00</h3>
							<div class="quickview-peragraph">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam.</p>
							</div>
							<div class="size">
								<div class="row">
									<div class="col-lg-6 col-12">
										<h5 class="title">Size</h5>
										<select>
											<option selected="selected">s</option>
											<option>m</option>
											<option>l</option>
											<option>xl</option>
										</select>
									</div>
									<div class="col-lg-6 col-12">
										<h5 class="title">Color</h5>
										<select>
											<option selected="selected">orange</option>
											<option>purple</option>
											<option>black</option>
											<option>pink</option>
										</select>
									</div>
								</div>
							</div>
							<div class="quantity">
								<!-- Input Order -->
								<div class="input-group">
									<div class="button minus">
										<button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
											<i class="ti-minus"></i>
										</button>
									</div>
									<input type="text" name="quant[1]" class="input-number" data-min="1" data-max="1000" value="1">
									<div class="button plus">
										<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
											<i class="ti-plus"></i>
										</button>
									</div>
								</div>
								<!--/ End Input Order -->
							</div>
							<div class="add-to-cart">
								<a href="#" class="btn">Add to cart</a>
								<a href="#" class="btn min"><i class="ti-heart"></i></a>
								<a href="#" class="btn min"><i class="fa fa-compress"></i></a>
							</div>
							<div class="default-social">
								<h4 class="share-now">Share:</h4>
								<ul>
									<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a></li>
									<li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal end -->

@endsection("master")
