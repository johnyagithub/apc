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

		<section class="box-cart py-5">
			<div class="container">

				<div class="mx-auto" style="max-width: 800px;">
					<h4 class="mb-3">Cart (<span>2</span>)</h4>
					<table>
						<thead>
							<tr>
								<th>order</th>
								<th>Qty</th>
								<th>Price</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="d-flex">
									<img src="../../public/images/img-Product1.png" class="w-80px" alt="">
									<div>
										<span>Product Brand_name</span><br>
										<a href="../product/detail.php" class="fs-20 text-dark fw-400">Jelly Fish Table Lamp</a>
										<h6>฿ 180</h6>
									</div>
								</td>
								<td>
									<div class="btn-group quantity mr-2 ml-0" data-price="180">
										<button type="button" class="btn btn-delete btn-sm rounded-circle btn-light border-0 disabled"></button>
										<input type="text" class="btn border-0" name="inputQuantity" value="2" readonly>
										<button type="button" class="btn btn-plus btn-sm rounded-circle btn-light border-0"></button>
										<input type="hidden" class="sumprice" value="1320">
									</div>
								</td>
								<td>
									<span class="text-dark">฿ <span class="box-Total">360</span></span>
								</td>
							</tr>
						</tbody>
					</table>
				</div>

				<div class="row align-items-center py-4">
					<div class="col-md-12 text-center text-md-right">
						<a class="btn btn-outline-primary px-4 mr-2" href="../home/">Back to Homepage</a>
						<a class="btn btn-primary px-4" href="../quotation/">Request Your Free Quote</a>
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
		$(function() {
			$('#cart_items a').css('cursor', 'default');
			$('#cart_items .dropdown-menu').remove();
			$('.btn-group.quantity .btn-plus').click(function() {
				var n1 = $(this).closest(".btn-group.quantity").find("input").val();

				var price = $(this).closest(".btn-group.quantity").attr('data-price');
				// if (price != '') {
				// 	var number = parseInt(n1) * price;
				// 	$(this).closest(".btn-group.quantity[data-price]").find('input[type="hidden"]').val(number);
				// 	$(this).closest("li.list-group-item").find('.box-Total').html(number.toLocaleString());
				// }

				// var sum = 0;
				// $(this).closest("tr").find("input[type=hidden].sumprice").each(function() {
				// 	sum = parseFloat(sum) + parseFloat($(this).val());
				// });
				// $(this).closest("tr").find('.box-sumTotal').html(sum.toLocaleString());
				alert(price)
			});
			$('.btn-group.quantity .btn-delete').click(function() {
				var n2 = $(this).closest(".btn-group.quantity").find("input").val();

				var price2 = $(this).closest(".btn-group.quantity").attr('data-price');
				// if (price2 != '') {
				// 	var number2 = parseInt(n2) * price2;
				// 	$(this).closest(".btn-group.quantity[data-price]").find('input[type="hidden"]').val(number2);
				// 	$(this).closest("li.list-group-item").find('.box-Total').html(number2.toLocaleString());
				// }

				// var sum2 = 0;
				// $(this).closest("tr").find("input[type=hidden].sumprice").each(function() {
				// 	sum2 = parseFloat(sum2) + parseFloat($(this).val());
				// });
				// $(this).closest("tr").find('.box-sumTotal').html(sum2.toLocaleString());
			});
		});
	</script>
</body>

</html>