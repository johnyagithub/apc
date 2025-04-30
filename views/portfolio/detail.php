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

		<section class="box-detail py-5">
			<div class="container">

				<div class="row flex-wrap">
					<div class="col-12 col-lg">
						<h1>Ambient, task, and accent <br>lighting in interiors</h1>
					</div>
					<div class="p-3">
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
				</div>

				<div class="table-responsive">
					<table class="mt-5" style="min-width: 600px;">
						<tr class="align-top">
							<td class="py-4 pr-4">
								<h5>Project Overview</h5>
							</td>
							<td class="py-4">
								<p class="m-0"><b>Objective:</b> To design a smart, energy-efficient lighting system for an urban park that enhances safety, aesthetics, and user experience.</p>
								<p class="m-0"><b>Scope:</b> Focus on pathways, seating areas, and landscape elements using IoT-controlled lighting.</p>
								<p class="m-0"><b>Target Audience:</b> City residents, joggers, cyclists, and event organizers.</p>
							</td>
						</tr>
						<tr class="align-top">
							<td class="py-4 pr-4">
								<h5>Concept Development</h5>
							</td>
							<td class="py-4">
								<p><b>Technology Integration:</b> Focus on pathways, seating areas, and landscape elements using IoT-controlled lighting.</p>
								<p><b>Lighting Mood & Theme:</b> Adaptive brightness levels based on time and foot traffic.</p>
							</td>
						</tr>
					</table>
				</div>

				<div class="box-slide py-4">
					<div class="owl-carousel" data-itemSlide-Tablet="4" data-itemSlide-pc="6">

						<div class="item">
							<img src="https://placehold.co/300x120/transparent/000?text=LOGO+1" alt="">
							<img src="https://placehold.co/300x120/transparent/000?text=LOGO+2" alt="">
						</div>
						<div class="item">
							<img src="https://placehold.co/300x120/transparent/000?text=LOGO+3" alt="">
							<img src="https://placehold.co/300x120/transparent/000?text=LOGO+4" alt="">
						</div>
						<div class="item">
							<img src="https://placehold.co/300x120/transparent/000?text=LOGO+5" alt="">
							<img src="https://placehold.co/300x120/transparent/000?text=LOGO+6" alt="">
						</div>

					</div>
				</div>

				<a href="https://placehold.co/1400x700" data-fancybox="gallery">
					<img src="https://placehold.co/1400x700" alt="">
				</a>
				<a href="https://placehold.co/1400x700" data-fancybox="gallery">
					<img src="https://placehold.co/1400x700" alt="">
				</a>
				<a href="https://placehold.co/1400x700" data-fancybox="gallery">
					<img src="https://placehold.co/1400x700" alt="">
				</a>

				<div class="mt-5 d-flex justify-content-between align-items-center flex-wrap">
					<a href="../portfolio/" class="btn btn-outline-primary px-3">Back to portfolio</a>
					<a href="../home/" class="btn btn-outline-primary px-3 order-md-1">Back to homepage</a>
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