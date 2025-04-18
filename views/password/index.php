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
            <li class="breadcrumb-item active" aria-current="page">Forgot</li>
          </ol>
        </nav>
      </div>
    </section>

    <section style="background-color: #f9f9f9;">
      <div class="container py-5 px-sm-5">
        <div class="mx-auto bg-white py-5 px-sm-5" style="max-width: 700px;">
          <div class="bg-white rounded p-4 text-left">
            <h1 class="h3 fw-600">ลืมรหัสผ่าน ?</h1>
            <p class="mb-4 opacity-60">ใส่อีเมลของคุณเพื่อกู้คืนรหัสผ่าน. </p>
            <form method="POST" action="#">
              <div class="form-group">
                <input type="email" class="form-control " value="" placeholder="อีเมลของคุณ" name="email" required="">
              </div>

              <div class="form-group text-right">
                <button class="btn btn-dark btn-block" type="submit">
                  ส่งลิงค์รีเซ็ทรหัสผ่าน
                </button>
              </div>
            </form>

            <div class="mt-3">
              <a href="../register/login.php" class="text-reset opacity-60">
                <i class="las la-lg la-chevron-circle-left"></i> กลับหน้าเข้าสู่ระบบ
              </a>
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
</body>

</html>