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
            <li class="breadcrumb-item"><a href="../home">หน้าแรก</a></li>
            <li class="breadcrumb-item active" aria-current="page">รถเข็นของฉัน</li>
          </ol>
        </nav>
      </div>
    </section>


    <section class="py-5">
      <div class="container">

        <div class="card">
          <div class="card-body">
            <div class="row my-4">
              <div class="col-12 p-3 mb-4">
                <div class="swal2-icon swal2-success swal2-icon-show">
                  <div class="swal2-success-circular-line-left"></div>
                  <span class="swal2-success-line-tip"></span>
                  <span class="swal2-success-line-long"></span>
                  <div class="swal2-success-ring"></div>
                  <div class="swal2-success-fix"></div>
                  <div class="swal2-success-circular-line-right"></div>
                </div>
                <h1 class="swal2-title px-0">ขอขอบคุณสำหรับการสั่งซื้อของคุณ!</h1>
                <div class="swal2-html-container mx-0">
                  รหัสการสั่งซื้อ: <span class="text-primary">20220610-17202316</span><br>
                  สำเนาหรือสรุปคำสั่งซื้อของคุณถูกส่งไปที่ <span class="text-primary">superadmin@gmail.com</span>
                </div>
              </div>
              <div class="col-xl-8 col-lg-7 col-md-7 row mx-0 d-flex align-content-center flex-wrap">
                <div class="col-xl-6 text-center mb-3">
                  <img src="https://placehold.co/260x105" alt="" class="mx-auto mb-3 h-60px">
                  <p class="m-0">เลขที่บัญชี<br>ธนาคาร : กสิกรไทย<br>203-0214-0125</p>
                </div>
                <div class="col-xl-6 text-center mb-3">
                  <img src="https://placehold.co/260x105" alt="" class="mx-auto mb-3 h-60px">
                  <p class="m-0">เลขที่บัญชี<br>ธนาคาร : ไทยพาณิชย์<br>203-0214-0126</p>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-4 mx-auto d-flex justify-content-center flex-wrap">
                <a href="../../public/images/qr.jpg" download>
                  <img src="../../public/images/qr.jpg" alt="" class="mw-100 w-300px">
                </a>
                <div class="btn btn-primary mt-3" style="border-radius: 45px;">แสกน QR Code เพื่อชำระเงิน</div>
              </div>
            </div>
          </div>
        </div>

        <div class="row px-2">
          <div class="col-xl-2 col-md-2 col-6 my-1 px-2 mr-auto">
            <button type="button" class="btn btn-dark btn-sm w-100" onclick="window.history.back()">ย้อนกลับ</button>
          </div>
          <div class="col-xl-2 col-md-3 col-6 my-1 px-2">
            <a href="../profile/history.php" class="btn btn-info btn-sm w-100">ดูประวัติคำสั่งซื้อ</a>
          </div>
          <div class="col-xl-2 col-md-3 my-1 px-2">
            <a href="../profile/payment.php" class="btn btn-primary btn-sm w-100">แจ้งชำระเงิน</a>
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