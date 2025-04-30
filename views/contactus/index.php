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

		<section class="box-banner-head" style="background-image: url(../../public/images/banner-head-Contact.jpg);">
			<div class="container">
				<h1 class="text-line2 text-capitalize">Contact us</h1>
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