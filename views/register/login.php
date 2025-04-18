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
						<li class="breadcrumb-item active" aria-current="page">Login</li>
					</ol>
				</nav>
			</div>
		</section>

		<section style="background-color: #f9f9f9;">
			<div class="container py-5 px-sm-5">
				<div class="mx-auto bg-white border rounded" style="max-width: 700px;">
					<h4 class="w-100 text-center bg-primary py-3 rounded-top">
						<img src="../../public/images/avatar-place.png" class="rounded-circle img-fit h-25px w-auto mr-2 mb-1">
						เข้าสู่ระบบ
					</h4>
					<form action="#" class="px-5 py-4 m-auto" style="max-width: 500px;">
						<div class="form-group icon-User">
							<input type="email" class="form-control" aria-describedby="emailHelp" placeholder="ชื่อบัญชี">
						</div>
						<div class="form-group icon-Password">
							<input type="password" class="form-control" placeholder="รหัสผ่าน">
						</div>
						<div class="form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label text-muted" for="exampleCheck1">จดจำฉัน</label>

							<div class="float-right">
								<a href="../password/" class="text-primary"><u>ลืมรหัสผ่าน?</u></a>
							</div>
						</div>
						<br><br>
						<button type="submit" class="btn btn-dark d-block w-100 px-4">เข้าสู่ระบบ</button>
					</form>
					<div class="px-5 pt-1 pb-4 m-auto" style="max-width: 500px;">
						<a href="#" class="btn btn-face"><i class="lab la-facebook-f mx-2 mx-lg-1" style="transform: none;"></i> เข้าสู่ระบบด้วย Facebook</a>
					</div>
					<hr class="m-0">
					<div class="w-100 text-center py-4 m-auto px-5 d-sm-flex justify-content-between align-items-center" style="max-width: 500px;">
						คุณยังไม่มีบัญชีผู้ใช้งาน ใช่หรือไม่?

						<a href="../register/" class="btn btn-primary btn-sm mt-3 mt-sm-0">สมัครสมาชิก</a>
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