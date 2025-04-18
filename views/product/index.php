<!DOCTYPE html>
<html lang="EN">

<head>

	<?php include('../layouts/inc-meta.php'); ?>

</head>

<body>

	<!-- begin #header -->
	<?php include('../layouts/inc-header.php'); ?>
	<!-- end #header -->

	<!-- begin #content -->
	<div id="content" class="content">

		<section class="bg-white">
			<div class="container">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb bg-white px-0 m-0">
						<li class="breadcrumb-item"><a href="../home">หน้าแรก</a></li>
						<li class="breadcrumb-item active" aria-current="page">สินค้าทั้งหมด</li>
					</ol>
				</nav>
			</div>
		</section>

		<section class="box-supplier-brand bg-primary py-5">
			<div class="container">
				<div class="owl-carousel">

					<div class="item">
						<a href="#">
							<img src="../../public/images/img-supplier1.png" onerror="this.onerror=null;this.src='../../public/images/noimage.jpg';">
						</a>
					</div>
					<div class="item">
						<a href="#">
							<img src="../../public/images/img-supplier2.png" onerror="this.onerror=null;this.src='../../public/images/noimage.jpg';">
						</a>
					</div>
					<div class="item">
						<a href="#">
							<img src="../../public/images/img-supplier3.png" onerror="this.onerror=null;this.src='../../public/images/noimage.jpg';">
						</a>
					</div>
					<div class="item">
						<a href="#">
							<img src="../../public/images/img-supplier4.png" onerror="this.onerror=null;this.src='../../public/images/noimage.jpg';">
						</a>
					</div>
					<div class="item">
						<a href="#">
							<img src="../../public/images/img-supplier1.png" onerror="this.onerror=null;this.src='../../public/images/noimage.jpg';">
						</a>
					</div>
					<div class="item">
						<a href="#">
							<img src="../../public/images/img-supplier2.png" onerror="this.onerror=null;this.src='../../public/images/noimage.jpg';">
						</a>
					</div>
					<div class="item">
						<a href="#">
							<img src="../../public/images/img-supplier3.png" onerror="this.onerror=null;this.src='../../public/images/noimage.jpg';">
						</a>
					</div>
					<div class="item">
						<a href="#">
							<img src="../../public/images/img-supplier4.png" onerror="this.onerror=null;this.src='../../public/images/noimage.jpg';">
						</a>
					</div>

				</div>
			</div>
		</section>

		<section class="box-supplier-brand bg-dark py-3">
			<div class="container">
				<div class="owl-carousel">

					<div class="item">
						<a href="#">
							<div class="d-flex align-items-center justify-content-center">
								<img src="../../public/images/icon-Producttype1.png" alt="" class="w-auto h-40px mr-3">
								<div class="text-truncate">
									<h5 class="font-weight-light m-0 text-truncate">LED</h5>
									<h5 class="font-weight-light m-0 text-primary text-truncate">Tubes</h5>
								</div>
							</div>
						</a>
					</div>
					<div class="item">
						<a href="#">
							<div class="d-flex align-items-center justify-content-center">
								<img src="../../public/images/icon-Producttype2.png" alt="" class="w-auto h-40px mr-3">
								<div class="text-truncate">
									<h5 class="font-weight-light m-0 text-truncate">LED</h5>
									<h5 class="font-weight-light m-0 text-primary text-truncate">Flood-Lights</h5>
								</div>
							</div>
						</a>
					</div>
					<div class="item">
						<a href="#">
							<div class="d-flex align-items-center justify-content-center">
								<img src="../../public/images/icon-Producttype3.png" alt="" class="w-auto h-40px mr-3">
								<div class="text-truncate">
									<h5 class="font-weight-light m-0 text-truncate">LED</h5>
									<h5 class="font-weight-light m-0 text-primary text-truncate">High-Bay</h5>
								</div>
							</div>
						</a>
					</div>
					<div class="item">
						<a href="#">
							<div class="d-flex align-items-center justify-content-center">
								<img src="../../public/images/icon-Producttype4.png" alt="" class="w-auto h-40px mr-3">
								<div class="text-truncate">
									<h5 class="font-weight-light m-0 text-truncate">LED</h5>
									<h5 class="font-weight-light m-0 text-primary text-truncate">Street-Lights</h5>
								</div>
							</div>
						</a>
					</div>

				</div>
			</div>
		</section>

		<section class="box-products pt-4">
			<div class="container">
				<div class="row">
					<div class="col-lg-3">
						<div class="b-sticky">

							<div class="mb-4">
								<form class="form-Search" action="#">
									<h6 class="px-2">ค้นหาสินค้า</h6>
									<div class="input-group bg-white rounded-right">
										<input type="text" class="border-0 bg-white form-control pr-0" id="search" name="keyword" placeholder="ค้นหาสินค้าที่ต้องการ" autocomplete="off">
										<div class="input-group-append">
											<button class="btn px-3" type="submit">
												<i class="la la-search la-flip-horizontal fs-20"></i>
											</button>
										</div>
									</div>

									<h6 class="px-2 mt-4">ประเภทสินค้า</h6>
									<div id="ProductType">

										<div class="card">
											<div class="card-header p-0" id="heading1">
												<label for="input_radio1" class="w-100">
													<input id="input_radio1" name="ProductType" type="radio" value="LED Tubes">LED Tubes
												</label>
												<button type="button" class="btn btn-link p-1 collapsed" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1"></button>
											</div>
											<div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#ProductType">
												<div class="card-body">
													<label for="input_radio2" class="d-block">
														<input id="input_radio2" name="ProductType" type="radio" value="LED Tubes1">LED Tubes1
													</label>
													<label for="input_radio3" class="d-block">
														<input id="input_radio3" name="ProductType" type="radio" value="LED Tubes2">LED Tubes2
													</label>
													<label for="input_radio4" class="d-block">
														<input id="input_radio4" name="ProductType" type="radio" value="LED Tubes3">LED Tubes3
													</label>
													<label for="input_radio5" class="d-block">
														<input id="input_radio5" name="ProductType" type="radio" value="LED Tubes4">LED Tubes4
													</label>
													<label for="input_radio6" class="d-block">
														<input id="input_radio6" name="ProductType" type="radio" value="LED Tubes5">LED Tubes5
													</label>
												</div>
											</div>
										</div>

										<div class="card">
											<div class="card-header p-0" id="heading2">
												<label for="input_radio7" class="w-100">
													<input id="input_radio7" name="ProductType" type="radio" value="LED Flood-Lights">LED Flood-Lights
												</label>
												<button type="button" class="btn btn-link p-1 collapsed" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2"></button>
											</div>
											<div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#ProductType">
												<div class="card-body">
													<label for="input_radio8" class="d-block">
														<input id="input_radio8" name="ProductType" type="radio" value="LED Flood-Lights1">LED Flood-Lights1
													</label>
													<label for="input_radio9" class="d-block">
														<input id="input_radio9" name="ProductType" type="radio" value="LED Flood-Lights2">LED Flood-Lights2
													</label>
												</div>
											</div>
										</div>

										<div class="card">
											<div class="card-header p-0" id="heading3">
												<label for="input_radio10" class="w-100">
													<input id="input_radio10" name="ProductType" type="radio" value="LED High-Bay">LED High-Bay
												</label>
												<button type="button" class="btn btn-link p-1 collapsed" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3"></button>
											</div>
											<div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#ProductType">
												<div class="card-body">
													<label for="input_radio11" class="d-block">
														<input id="input_radio11" name="ProductType" type="radio" value="LED High-Bay1">LED High-Bay1
													</label>
													<label for="input_radio12" class="d-block">
														<input id="input_radio12" name="ProductType" type="radio" value="LED High-Bay2">LED High-Bay2
													</label>
												</div>
											</div>
										</div>

										<div class="card">
											<div class="card-header p-0" id="heading4">
												<label for="input_radio13" class="w-100">
													<input id="input_radio13" name="ProductType" type="radio" value="LED Street-Lights">LED Street-Lights
												</label>
												<button type="button" class="btn btn-link p-1 collapsed" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4"></button>
											</div>
											<div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#ProductType">
												<div class="card-body">
													<label for="input_radio14" class="d-block">
														<input id="input_radio14" name="ProductType" type="radio" value="LED Street-Lights1">LED Street-Lights1
													</label>
													<label for="input_radio15" class="d-block">
														<input id="input_radio15" name="ProductType" type="radio" value="LED Street-Lights2">LED Street-Lights2
													</label>
												</div>
											</div>
										</div>

									</div>
								</form>
							</div>

						</div>
					</div>
					<div class="col-lg-9">
						<div class="pb-1 d-block d-xl-flex justify-content-between align-items-center">
							<div class="py-3">รายการสินค้า ทั้งหมด <span class="text-primary">100</span> รายการ</div>
							<div class="d-block d-xl-flex d-md-flex align-items-center justify-content-between">
								<div class="d-flex align-items-center flex-wrap">
									<div class="p-1 w-50 w-md-auto">
										<a href="../product" class="btn btn-style w-100 active">สินค้าทั้งหมด</a>
									</div>
									<div class="p-1 w-50 w-md-auto">
										<a href="../product" class="btn btn-style w-100">สินค้าขายดี</a>
									</div>
									<div class="p-1 w-50 w-md-auto">
										<a href="../product" class="btn btn-style w-100">สินค้าแนะนำ</a>
									</div>
									<div class="p-1 w-50 w-md-auto">
										<a href="../product" class="btn btn-style w-100">สินค้าโปรโมชั่น</a>
									</div>
								</div>
							</div>
						</div>

						<div class="row box-List py-3">

							<div class="col-md-4 col-6 p-2">
								<div class="card">
									<div class="card-body">
										<a href="javascript:void(0)" class="a-wishlist">
											<i class="fa fa-heart"></i>
										</a>
										<a href="../product/detail.php">
											<div class="img">
												<img src="../../public/images/demo-img1.jpg" alt="">
											</div>
											<div class="box-text">
												<h6>2310 LED weatherproof</h6>
												<span>Wide distribution optic, Adjustable luminaire luminous flux, Refurbishment.</span>
											</div>
											<div class="reduce">50%</div>
										</a>
									</div>
									<div class="card-footer">
										<span class="price">1,320<b>1,500</b></span>
									</div>
								</div>
							</div>

							<div class="col-md-4 col-6 p-2">
								<div class="card">
									<div class="card-body">
										<a href="javascript:void(0)" class="a-wishlist">
											<i class="fa fa-heart"></i>
										</a>
										<a href="../product/detail.php">
											<div class="img">
												<img src="../../public/images/demo-img2.jpg" alt="">
											</div>
											<div class="box-text">
												<h6>2310 LED weatherproof</h6>
												<span>Wide distribution optic, Adjustable luminaire luminous flux, Refurbishment.</span>
											</div>
											<div class="reduce">50%</div>
										</a>
									</div>
									<div class="card-footer">
										<span class="price">1,320<b>1,500</b></span>
									</div>
								</div>
							</div>

							<div class="col-md-4 col-6 p-2">
								<div class="card">
									<div class="card-body">
										<a href="javascript:void(0)" class="a-wishlist">
											<i class="fa fa-heart"></i>
										</a>
										<a href="../product/detail.php">
											<div class="img">
												<img src="../../public/images/demo-img3.jpg" alt="">
											</div>
											<div class="box-text">
												<h6>2310 LED weatherproof</h6>
												<span>Wide distribution optic, Adjustable luminaire luminous flux, Refurbishment.</span>
											</div>
										</a>
									</div>
									<div class="card-footer">
										<span class="price">1,320.00</span>
									</div>
								</div>
							</div>

							<div class="col-md-4 col-6 p-2">
								<div class="card">
									<div class="card-body">
										<a href="javascript:void(0)" class="a-wishlist">
											<i class="fa fa-heart"></i>
										</a>
										<a href="../product/detail.php">
											<div class="img">
												<img src="../../public/images/demo-img4.jpg" alt="">
											</div>
											<div class="box-text">
												<h6>2310 LED weatherproof</h6>
												<span>Wide distribution optic, Adjustable luminaire luminous flux, Refurbishment.</span>
											</div>
										</a>
									</div>
									<div class="card-footer">
										<span class="price">1,320.00</span>
									</div>
								</div>
							</div>

							<div class="col-md-4 col-6 p-2">
								<div class="card">
									<div class="card-body">
										<a href="javascript:void(0)" class="a-wishlist">
											<i class="fa fa-heart"></i>
										</a>
										<a href="../product/detail.php">
											<div class="img">
												<img src="../../public/images/demo-img1.jpg" alt="">
											</div>
											<div class="box-text">
												<h6>2310 LED weatherproof</h6>
												<span>Wide distribution optic, Adjustable luminaire luminous flux, Refurbishment.</span>
											</div>
											<div class="reduce">50%</div>
										</a>
									</div>
									<div class="card-footer">
										<span class="price">1,320<b>1,500</b></span>
									</div>
								</div>
							</div>

							<div class="col-md-4 col-6 p-2">
								<div class="card">
									<div class="card-body">
										<a href="javascript:void(0)" class="a-wishlist">
											<i class="fa fa-heart"></i>
										</a>
										<a href="../product/detail.php">
											<div class="img">
												<img src="../../public/images/demo-img2.jpg" alt="">
											</div>
											<div class="box-text">
												<h6>2310 LED weatherproof</h6>
												<span>Wide distribution optic, Adjustable luminaire luminous flux, Refurbishment.</span>
											</div>
											<div class="reduce">50%</div>
										</a>
									</div>
									<div class="card-footer">
										<span class="price">1,320<b>1,500</b></span>
									</div>
								</div>
							</div>

							<div class="col-md-4 col-6 p-2">
								<div class="card">
									<div class="card-body">
										<a href="javascript:void(0)" class="a-wishlist">
											<i class="fa fa-heart"></i>
										</a>
										<a href="../product/detail.php">
											<div class="img">
												<img src="../../public/images/demo-img1.jpg" alt="">
											</div>
											<div class="box-text">
												<h6>2310 LED weatherproof</h6>
												<span>Wide distribution optic, Adjustable luminaire luminous flux, Refurbishment.</span>
											</div>
										</a>
									</div>
									<div class="card-footer">
										<span class="price">1,320.00</span>
									</div>
								</div>
							</div>

							<div class="col-md-4 col-6 p-2">
								<div class="card">
									<div class="card-body">
										<a href="javascript:void(0)" class="a-wishlist">
											<i class="fa fa-heart"></i>
										</a>
										<a href="../product/detail.php">
											<div class="img">
												<img src="../../public/images/demo-img2.jpg" alt="">
											</div>
											<div class="box-text">
												<h6>2310 LED weatherproof</h6>
												<span>Wide distribution optic, Adjustable luminaire luminous flux, Refurbishment.</span>
											</div>
										</a>
									</div>
									<div class="card-footer">
										<span class="price">1,320.00</span>
									</div>
								</div>
							</div>

							<div class="col-md-4 col-6 p-2">
								<div class="card">
									<div class="card-body">
										<a href="javascript:void(0)" class="a-wishlist">
											<i class="fa fa-heart"></i>
										</a>
										<a href="../product/detail.php">
											<div class="img">
												<img src="../../public/images/demo-img1.jpg" alt="">
											</div>
											<div class="box-text">
												<h6>2310 LED weatherproof</h6>
												<span>Wide distribution optic, Adjustable luminaire luminous flux, Refurbishment.</span>
											</div>
											<div class="reduce">50%</div>
										</a>
									</div>
									<div class="card-footer">
										<span class="price">1,320<b>1,500</b></span>
									</div>
								</div>
							</div>

							<div class="col-md-4 col-6 p-2">
								<div class="card">
									<div class="card-body">
										<a href="javascript:void(0)" class="a-wishlist">
											<i class="fa fa-heart"></i>
										</a>
										<a href="../product/detail.php">
											<div class="img">
												<img src="../../public/images/demo-img2.jpg" alt="">
											</div>
											<div class="box-text">
												<h6>2310 LED weatherproof</h6>
												<span>Wide distribution optic, Adjustable luminaire luminous flux, Refurbishment.</span>
											</div>
											<div class="reduce">50%</div>
										</a>
									</div>
									<div class="card-footer">
										<span class="price">1,320<b>1,500</b></span>
									</div>
								</div>
							</div>

							<div class="col-md-4 col-6 p-2">
								<div class="card">
									<div class="card-body">
										<a href="javascript:void(0)" class="a-wishlist">
											<i class="fa fa-heart"></i>
										</a>
										<a href="../product/detail.php">
											<div class="img">
												<img src="../../public/images/demo-img1.jpg" alt="">
											</div>
											<div class="box-text">
												<h6>2310 LED weatherproof</h6>
												<span>Wide distribution optic, Adjustable luminaire luminous flux, Refurbishment.</span>
											</div>
										</a>
									</div>
									<div class="card-footer">
										<span class="price">1,320.00</span>
									</div>
								</div>
							</div>

							<div class="col-md-4 col-6 p-2">
								<div class="card">
									<div class="card-body">
										<a href="javascript:void(0)" class="a-wishlist">
											<i class="fa fa-heart"></i>
										</a>
										<a href="../product/detail.php">
											<div class="img">
												<img src="../../public/images/demo-img2.jpg" alt="">
											</div>
											<div class="box-text">
												<h6>2310 LED weatherproof</h6>
												<span>Wide distribution optic, Adjustable luminaire luminous flux, Refurbishment.</span>
											</div>
										</a>
									</div>
									<div class="card-footer">
										<span class="price">1,320.00</span>
									</div>
								</div>
							</div>

							<div class="col-md-4 col-6 p-2">
								<div class="card">
									<div class="card-body">
										<a href="javascript:void(0)" class="a-wishlist">
											<i class="fa fa-heart"></i>
										</a>
										<a href="../product/detail.php">
											<div class="img">
												<img src="../../public/images/demo-img1.jpg" alt="">
											</div>
											<div class="box-text">
												<h6>2310 LED weatherproof</h6>
												<span>Wide distribution optic, Adjustable luminaire luminous flux, Refurbishment.</span>
											</div>
											<div class="reduce">50%</div>
										</a>
									</div>
									<div class="card-footer">
										<span class="price">1,320<b>1,500</b></span>
									</div>
								</div>
							</div>

							<div class="col-md-4 col-6 p-2">
								<div class="card">
									<div class="card-body">
										<a href="javascript:void(0)" class="a-wishlist">
											<i class="fa fa-heart"></i>
										</a>
										<a href="../product/detail.php">
											<div class="img">
												<img src="../../public/images/demo-img2.jpg" alt="">
											</div>
											<div class="box-text">
												<h6>2310 LED weatherproof</h6>
												<span>Wide distribution optic, Adjustable luminaire luminous flux, Refurbishment.</span>
											</div>
											<div class="reduce">50%</div>
										</a>
									</div>
									<div class="card-footer">
										<span class="price">1,320<b>1,500</b></span>
									</div>
								</div>
							</div>

							<div class="col-md-4 col-6 p-2">
								<div class="card">
									<div class="card-body">
										<a href="javascript:void(0)" class="a-wishlist">
											<i class="fa fa-heart"></i>
										</a>
										<a href="../product/detail.php">
											<div class="img">
												<img src="../../public/images/demo-img1.jpg" alt="">
											</div>
											<div class="box-text">
												<h6>2310 LED weatherproof</h6>
												<span>Wide distribution optic, Adjustable luminaire luminous flux, Refurbishment.</span>
											</div>
										</a>
									</div>
									<div class="card-footer">
										<span class="price">1,320.00</span>
									</div>
								</div>
							</div>

						</div>

						<ul class="pagination d-flex justify-content-end pt-3">
							<li class="page-item">
								<a class="page-link" href="#" rel="prev" aria-label="« Previous">‹</a>
							</li>
							<li class="page-item"><a class="page-link" href="#">1</a></li>
							<li class="page-item active" aria-current="page"><span class="page-link">2</span></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item"><a class="page-link" href="#">4</a></li>
							<li class="page-item"><a class="page-link" href="#">5</a></li>
							<li class="page-item"><a class="page-link" href="#">6</a></li>
							<li class="page-item">
								<a class="page-link" href="#" rel="next" aria-label="Next »">›</a>
							</li>
						</ul>

					</div>
				</div>
			</div>
		</section>

	</div>
	<!-- end #content -->

	<!-- begin #footer -->
	<?php include('../layouts/inc-footer.php'); ?>
	<!-- end #footer -->

	<?php include('../layouts/inc-script.php'); ?>
</body>

</html>