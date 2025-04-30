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

		<section class="box-detail pb-5">
			<div class="container">

				<div class="row">
					<div class="col-md-6">
						<div class="b-sticky">
							<div class="pl-lg-5 py-5">
								<p>Home | Product Brand_name | Light_source | Table lamp | JellyFish table lamp</p>
								<div class="p-md-1 p-lg-3"></div>
								<span class="text-secondary font-weight-normal">Product Brand_name</span>
								<h1>Jelly Fish Table Lamp</h1>
								<h3>$180</h3>
								<div class="p-md-2 p-lg-4"></div>
								<div class="my-3">
									<a href="#" class="btn btn-outline-primary px-3" download><i class="fa fa-file-text-o" aria-hidden="true"></i> Download document</a>
								</div>
								<div class="my-3">
									<button type="button" class="btn btn-dark">Add to cart</button>
								</div>
								<div class="p-md-1 p-lg-2"></div>
								<h6>Share with :</h6>
								<div class="d-fle mt-4">
									<button onclick="navigator.clipboard.writeText(window.location.href);" type="button" class="btn btn-outline-secondary mr-1 mr-lg-2 btn-sm">
										<i class="fa fa-clone" aria-hidden="true"></i>
										Copy link
									</button>
									<a href="#" target="_blank" class="btn btn-outline-secondary mr-1 mr-lg-2 btn-sm">
										<img src="../../public/images/I-line.png" alt="">
									</a>
									<a href="#" target="_blank" class="btn btn-outline-secondary mr-1 mr-lg-2 btn-sm">
										<img src="../../public/images/I-facebook.png" alt="">
									</a>
									<a href="#" target="_blank" class="btn btn-outline-secondary mr-1 mr-lg-2 btn-sm">
										<img src="../../public/images/I-in.png" alt="">
									</a>
								</div>
							</div>

							<div>
								ddfhdfh
							</div>
						</div>
					</div>
					<div class="col-md-6 p-0">
						<div class="box-gallery b-sticky">
							<a href="../../public/images/img-Product1.png" data-fancybox="gallery" class="m-0 rounded-0">
								<img src="../../public/images/img-Product1.png">
							</a>
							<a href="../../public/images/img-Product2.png" data-fancybox="gallery" class="m-0 rounded-0">
								<img src="../../public/images/img-Product2.png">
							</a>
							<a href="../../public/images/img-Product3.png" data-fancybox="gallery" class="m-0 rounded-0">
								<img src="../../public/images/img-Product3.png">
							</a>
						</div>
					</div>
				</div>

			</div>
		</section>

		<section class="box-Recommend py-5" style="background: #EBEBEB;">
			<div class="container">
				<h2 class="text-center text-primary w-100">Recommend Product</h2>
				<div class="owl-carousel py-3">

					<div class="item">
						<a href="../product/detail.php" class="text-secondary">
							<div class="img">
								<img src="../../public/images/img-Product1.png" alt="">
							</div>
							<div class="box-text">
								<p class="m-0">Arco Floor Lamp</p>
								<b class="text-primary">$20</b>
							</div>
						</a>
					</div>
					<div class="item">
						<a href="../product/detail.php" class="text-secondary">
							<div class="img">
								<img src="../../public/images/img-Product2.png" alt="">
							</div>
							<div class="box-text">
								<p class="m-0">Jelly fish able Lamp</p>
								<b class="text-primary">$180</b>
							</div>
						</a>
					</div>
					<div class="item">
						<a href="../product/detail.php" class="text-secondary">
							<div class="img">
								<img src="../../public/images/img-Product3.png" alt="">
							</div>
							<div class="box-text">
								<p class="m-0">Vintage Floor Lamp</p>
								<b class="text-primary">$120</b>
							</div>
						</a>
					</div>
					<div class="item">
						<a href="../product/detail.php" class="text-secondary">
							<div class="img">
								<img src="../../public/images/img-Product4.png" alt="">
							</div>
							<div class="box-text">
								<p class="m-0">Arco Floor Lamp</p>
								<b class="text-primary">$20</b>
							</div>
						</a>
					</div>
					<div class="item">
						<a href="../product/detail.php" class="text-secondary">
							<div class="img">
								<img src="../../public/images/img-Product1.png" alt="">
							</div>
							<div class="box-text">
								<p class="m-0">doodle table Lamp</p>
								<b class="text-primary">$120</b>
							</div>
						</a>
					</div>
					<div class="item">
						<a href="../product/detail.php" class="text-secondary">
							<div class="img">
								<img src="../../public/images/img-Product2.png" alt="">
							</div>
							<div class="box-text">
								<p class="m-0">Arco Floor Lamp</p>
								<b class="text-primary">$20</b>
							</div>
						</a>
					</div>
					<div class="item">
						<a href="../product/detail.php" class="text-secondary">
							<div class="img">
								<img src="../../public/images/img-Product3.png" alt="">
							</div>
							<div class="box-text">
								<p class="m-0">Arco Floor Lamp</p>
								<b class="text-primary">$20</b>
							</div>
						</a>
					</div>
					<div class="item">
						<a href="../product/detail.php" class="text-secondary">
							<div class="img">
								<img src="../../public/images/img-Product4.png" alt="">
							</div>
							<div class="box-text">
								<p class="m-0">Arco Floor Lamp</p>
								<b class="text-primary">$20</b>
							</div>
						</a>
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