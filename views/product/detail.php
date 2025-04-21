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

		<section class="pt-3 pb-5">
			<div class="container">

				<div class="row mt-4">

					<div class="col-lg-6 col-md-5 pr-lg-5 box-showImg mb-4 mb-md-0">
						<div class="owl-carousel" style="box-shadow: 0px 0px 20px 5px rgb(0 0 0 / 8%);">

							<div class="item img">
								<a href="../../public/images/demo-img1.jpg" data-fancybox="imagesList">
									<img src="../../public/images/demo-img1.jpg" alt="">
								</a>
							</div>
							<div class="item img">
								<a href="../../public/images/demo-img2.jpg" data-fancybox="imagesList">
									<img src="../../public/images/demo-img2.jpg" alt="">
								</a>
							</div>
							<div class="item img">
								<a href="../../public/images/demo-img1.jpg" data-fancybox="imagesList">
									<img src="../../public/images/demo-img1.jpg" alt="">
								</a>
							</div>
							<div class="item img">
								<a href="../../public/images/demo-img2.jpg" data-fancybox="imagesList">
									<img src="../../public/images/demo-img2.jpg" alt="">
								</a>
							</div>

						</div>
					</div>
					<div class="col-lg-6 col-md-7">
						<div class="box-text">
							<h3 class="text-head">Mussle Whole Blue Chile</h3>
						</div>
						<div class="product_brief">

							<p class="text-muted">Wide distribution optic, Adjustable luminaire luminous flux, Refurbishment. Wide distribution optic, Adjustable luminaire luminous flux.</p>

							<div class="row px-2 mb-2 d-flex align-items-center">
								<h5 class="p-1">Brand</h5>
								<div class="col p-1 d-flex justify-content-end">
									<img src="../../public/images/img-supplier3.png" class="h-70px">
								</div>
							</div>

							<div class="row px-2 mb-4 d-flex align-items-center">
								<h5 class="p-1">ราคา</h5>
								<div class="col p-1 d-flex justify-content-end">
									<div class="d-flex align-items-end">
										<span class="fs-16 strikeOut text-dark mr-3" id="Base_Price">฿1,500</span>
										<h4 class="m-0 text-dark" id="Pro_Price">฿1,320</h4>
									</div>
								</div>
							</div>

							<div class="mb-3">
								<h5>ตัวเลือกสินค้า</h5>
								<div>
									<div class="box-btnchecked">

										<input id="radioType1" class="d-none" type="radio" name="radioType" value="Warm White" checked>
										<label for="radioType1" class="btn btn-style m-1 btn-sm" data-base="1500" data-pro="1320" onclick="productType($(this).attr('data-base'),$(this).attr('data-pro'));">Warm White</label>

										<input id="radioType2" class="d-none" type="radio" name="radioType" value="Day Light">
										<label for="radioType2" class="btn btn-style m-1 btn-sm" data-base="1500" data-pro="1300" onclick="productType($(this).attr('data-base'),$(this).attr('data-pro'));">Day Light</label>

										<input id="radioType3" class="d-none" type="radio" name="radioType" value="Cool White">
										<label for="radioType3" class="btn btn-style m-1 btn-sm" data-base="1800" data-pro="0" onclick="productType($(this).attr('data-base'),$(this).attr('data-pro'));">Cool White</label>

									</div>
								</div>
							</div>

							<div class="mb-3">
								<h6>ระบุจำนวนสินค้า</h6>
								<div class="d-flex">
									<div class="btn-group quantity" data-price="1320">
										<button type="button" class="btn btn-delete disabled"></button>
										<input type="text" class="btn" name="inputQuantity" value="1">
										<button type="button" class="btn btn-plus"></button>
									</div>
									<a href="../catalog/" class="btn btn-primary btn-sm ml-auto">
										<img src="../../public/images/icon-catalog.png" class="h-20px mr-2">
										แคตตาล็อค
									</a>
								</div>
							</div>

							<div class="row px-2 mb-2 d-flex align-items-center">
								<div class="col p-1">
									<button type="button" class="btn btn-dark my-1 btn-sm px-5">เพิ่มลงรถเข็น</button>
								</div>
							</div>

						</div>
					</div>
				</div>

				<div class="box-detail my-5">
					<h4>รายละเอียดสินค้า</h4>
					<div class="text-secondary">
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
						</p>
						<img src="https://placehold.co/1500x500">
						<br><br>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
					</div>
				</div>

				<div class="d-flex justify-content-between align-items-center">
					<div class="my-1">
						<button type="button" class="btn btn-dark px-4 btn-sm" onclick="window.history.back()">ย้อนกลับ</button>
					</div>
				</div>
			</div>
		</section>

		<section class="box-slide box-products pt-5 pb-4 bg-light">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 mb-2">
						<h4 class="my-1 d-inline-block">สินค้าแนะนำสำหรับคุณ</h4>

						<div class="box-absolute-right position-absolute justify-content-between" style="transform: translateY(-50%);">
							<div class="arrow-default">
								<div class="o-prev btn btn-outline-light"><i class="fa fa-angle-left fs-20 align-middle w-20px"></i></div>
								<div class="o-next btn btn-primary"><i class="fa fa-angle-right fs-20 align-middle w-20px"></i></div>
							</div>
						</div>
					</div>
				</div>

				<div class="owl-carousel box-List py-3">

					<div class="card item col-12">
						<div class="card-body">
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

					<div class="card item col-12">
						<div class="card-body">
							<a href="../product/detail.php">
								<div class="img">
									<img src="../../public/images/demo-img2.jpg" alt="">
								</div>
								<div class="box-text">
									<h6>2325 LED downlight</h6>
									<span>Wide distribution optic, Adjustable luminaire luminous flux, Refurbishment.</span>
								</div>
								<div class="reduce">50%</div>
							</a>
						</div>
						<div class="card-footer">
							<span class="price">1,320<b>1,500</b></span>
						</div>
					</div>

					<div class="card item col-12">
						<div class="card-body">
							<a href="../product/detail.php">
								<div class="img">
									<img src="../../public/images/demo-img3.jpg" alt="">
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

					<div class="card item col-12">
						<div class="card-body">
							<a href="../product/detail.php">
								<div class="img">
									<img src="../../public/images/demo-img4.jpg" alt="">
								</div>
								<div class="box-text">
									<h6>2325 LED downlight</h6>
									<span>Wide distribution optic, Adjustable luminaire luminous flux, Refurbishment.</span>
								</div>
							</a>
						</div>
						<div class="card-footer">
							<span class="price">1,320</span>
						</div>
					</div>

					<div class="card item col-12">
						<div class="card-body">
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
							<span class="price">1,320</span>
						</div>
					</div>

					<div class="card item col-12">
						<div class="card-body">
							<a href="../product/detail.php">
								<div class="img">
									<img src="../../public/images/demo-img2.jpg" alt="">
								</div>
								<div class="box-text">
									<h6>2325 LED downlight</h6>
									<span>Wide distribution optic, Adjustable luminaire luminous flux, Refurbishment.</span>
								</div>
							</a>
						</div>
						<div class="card-footer">
							<span class="price">1,320<b>1,500</b></span>
						</div>
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
	<script>
		let productType = (base, pro) => {
			if (pro > 0) {
				var n1 = '฿' + pro;
				var n2 = '฿' + base;
			} else {
				var n1 = '฿' + base;
				var n2 = '';
			}
			$('section[data-id] .quantity[data-price]').attr('data-price', n1);
			$('#Base_Price').text(n2);
			$('#Pro_Price').text(n1);
			$('section[data-id] input[type="hidden"][name="sumprice"]').val(n1 * $('section[data-id] input[name=inputQuantity]').val());
		}
	</script>
</body>

</html>