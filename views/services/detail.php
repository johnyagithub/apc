<!DOCTYPE html>
<html lang="th">

<head>

	<?php include('../layouts/inc-meta.php'); ?>

</head>

<body>

	<!-- begin #header -->
	<?php include('../layouts/inc-header.php'); ?>
	<!-- end #header -->

	<!-- begin #content -->
	<div id="content" class="content">

		<section class="box-banner-head" style="background-image: url(../../public/images/banner-head-services.jpg);">
			<div class="container">
				<h1 class="text-line2 text-capitalize">Achitecture <br>lighting</h1>
			</div>
		</section>

		<section class="py-5">
			<div class="container">

				<div class="row">
					<div class="col-lg-6 p-sm-0 order-lg-1">
						<img src="https://placehold.co/800x500" class="rounded img-container2" alt="">
					</div>
					<div class="col-lg-6 pt-4 py-md-5 pr-xl-5">
						<h6>Transform spaces with innovative architectural lighting. Elevate design with precision, ambiance, and functionality.</h6>
						<p class="m-0">Enhance architecture with the perfect balance of light and shadow. Our innovative lighting solutions bring aesthetics, functionality, and energy efficiency to every space. Enhance architecture with the perfect balance of light and shadow. Our innovative lighting solutions bring aesthetics, functionality, and energy efficiency to every space.Enhance architecture with the perfect balance of light and shadow.</p>
					</div>
				</div>

			</div>
		</section>

		<section class="box-quotation bg-page py-5">
			<div class="container">

				<form action="../quotation/succeed.php" class="mx-auto mt-5 mb-2 pt-5" style="max-width: 500px;">
					<div class="form-group">
						<label for="">First name - Last name</label>
						<input type="text" class="form-control" id="" placeholder="name">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input type="email" class="form-control" id="" aria-describedby="emailHelp" placeholder="you@company.com">
					</div>
					<div class="form-group">
						<label for="">Phone number</label>
						<input type="tel" class="form-control" id="" placeholder="xxx-xxx-xxxx">
					</div>
					<div class="form-group">
						<label for="">Contact name</label>
						<input type="text" class="form-control" id="" placeholder="name">
					</div>
					<div class="form-group">
						<label for="">Company name</label>
						<input type="text" class="form-control" id="" placeholder="name">
					</div>
					<div class="form-group">
						<label for="Message">Message</label>
						<textarea class="form-control" id="Message" rows="4" style="resize: none;"></textarea>
					</div>
					<div class="form-check mb-3">
						<input type="checkbox" class="form-check-input" id="exampleCheck1">
						<label class="form-check-label" for="exampleCheck1">You agree to our friendly privacy policy.</label>
					</div>
					<button type="submit" class="btn btn-dark w-100">Send </button>
				</form>

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