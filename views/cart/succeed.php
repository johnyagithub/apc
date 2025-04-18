<!DOCTYPE html>
<html lang="EN">

<head>

  <?php include('../layouts/inc-meta.php'); ?>
  <!-- sweetalert2 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

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
            <li class="breadcrumb-item"><a href="../home/">หน้าแรก</a></li>
            <li class="breadcrumb-item"><a href="../cart/">รถเข็นของฉัน</a></li>
            <li class="breadcrumb-item">ที่อยู่จัดส่งสินค้า</li>
            <li class="breadcrumb-item active" aria-current="page">สรุปคำสั่งซื้อ</li>
          </ol>
        </nav>
      </div>
    </section>


    <section class="py-5">
      <div class="container">

        <div class="row d-flex align-items-end bg-white mx-auto border" style="max-width: 700px;">
          <div class="col-12 p-3 mb-4">
            <div class="swal2-icon swal2-success swal2-icon-show">
              <div class="swal2-success-circular-line-left"></div>
              <span class="swal2-success-line-tip"></span>
              <span class="swal2-success-line-long"></span>
              <div class="swal2-success-ring"></div>
              <div class="swal2-success-fix"></div>
              <div class="swal2-success-circular-line-right"></div>
            </div>
            <h1 class="swal2-title px-0"><span class="text-success">คำสั่งซื้อสำเร็จ</span> ขอบคุณที่ใช้บริการ</h1>
            <div class="swal2-html-container mx-0">
              รหัสการสั่งซื้อ: <span class="text-primary">20220610-17202316</span><br>
              สำเนาหรือสรุปคำสั่งซื้อของคุณถูกส่งไปที่ <span class="text-primary">superadmin@gmail.com</span>
            </div>
            <div class="swal2-actions border-top pt-4">
              <a class="btn btn-dark swal2-styled" href="../product/detail.php">กลับไปหน้าสินค้า</a>
              <a class="btn btn-primary swal2-styled" href="../profile/history.php">ดูประวัติคำสั่งซื้อ</a>
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
  <!-- sweetalert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
</body>

</html>