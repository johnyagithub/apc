<!DOCTYPE html>
<html lang="EN">

<head>

  <?php include('../layouts/inc-meta.php'); ?>
  <style type="text/css" media="screen">
    input.form-control+.check-password {
      background-color: #e2e5ec;
      border-radius: 50%;
      color: #fff;
      padding: 3px;
      font-size: 13px;
      position: absolute;
      top: 50%;
      right: 22px;
      transform: translateY(-50%);
    }
  </style>

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
            <li class="breadcrumb-item active" aria-current="page">สมัครสมาชิก</li>
          </ol>
        </nav>
      </div>
    </section>

    <section style="background-color: #f9f9f9;">
      <div class="container py-5 px-sm-5">
        <div class="card border-0 mb-0" style="background-color: transparent;">
          <div class="card-body p-0" style="border-radius: 15px;">

            <form action="#" method="POST" enctype="multipart/form-data">
              <!-- Basic Info-->
              <div class="card bg-white">
                <div class="card-header p-0">
                  <h4 class="w-100 text-center bg-primary py-3 rounded-top mb-0">
                    <img src="../../public/images/avatar-place.png" class="rounded-circle img-fit h-25px w-auto mr-2 mb-1">
                    สมัครสมาชิก
                  </h4>
                </div>
                <div class="card-body">
                  <div class="mx-auto" style="max-width: 575px;">
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">ชื่อบัญชี<i class="text-danger">*</i></label>
                      <div class="col-md-9">
                        <input type="email" class="form-control" name="email" placeholder="กรุณากรอกอีเมล" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">รหัสผ่าน<i class="text-danger">*</i></label>
                      <div class="col-md-9">
                        <div class="btn-eye-slash">
                          <i class=""></i>
                          <input type="password" class="form-control" name="password" placeholder="กรอกรหัสผ่านอย่างน้อย 6 ตัวอักษร" style="padding-right: 33px !important;">
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">ยืนยันรหัสผ่าน<i class="text-danger">*</i></label>
                      <div class="col-md-9">
                        <div class="btn-eye-slash">
                          <i class=""></i>
                          <input type="password" class="form-control" name="password_confirmation" placeholder="กรอกรหัสผ่านอย่างน้อย 6 ตัวอักษร" style="padding-right: 33px !important;">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card bg-white">
                <div class="card-body">
                  <div class="mx-auto" style="max-width: 800px;">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group row">
                          <label class="col-md-3 col-lg-4 col-form-label">ชื่อ<i class="text-danger">*</i></label>
                          <div class="col-md-9 col-lg-8">
                            <input type="text" class="form-control" name="Lname" required>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group row">
                          <label class="col-md-3 col-lg-4 col-form-label">นามสกุล<i class="text-danger">*</i></label>
                          <div class="col-md-9 col-lg-8">
                            <input type="text" class="form-control" name="Sname" required>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group row">
                          <label class="col-md-3 col-lg-4 col-form-label">เบอร์โทรศัพท์<i class="text-danger">*</i></label>
                          <div class="col-md-9 col-lg-8">
                            <input type="text" class="form-control" name="phone" placeholder="หมายเลขโทรศัพท์" required>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-lg-2 col-form-label">ที่อยู่<i class="text-danger">*</i></label>
                      <div class="col-md-9 col-lg-10">
                        <input type="text" class="form-control" name="address" required>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group row">
                          <label class="col-md-3 col-lg-4 col-form-label">แขวง / ตำบล<i class="text-danger">*</i></label>
                          <div class="col-md-9 col-lg-8">
                            <input type="text" class="form-control" name="" required>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group row">
                          <label class="col-md-3 col-lg-4 col-form-label">เขต / อำเภอ<i class="text-danger">*</i></label>
                          <div class="col-md-9 col-lg-8">
                            <input type="text" class="form-control" name="" required>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group row">
                          <label class="col-md-3 col-lg-4 col-form-label">จังหวัด<i class="text-danger">*</i></label>
                          <div class="col-md-9 col-lg-8">
                            <input type="text" class="form-control" name="" required>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group row">
                          <label class="col-md-3 col-lg-4 col-form-label">รหัสไปรษณีย์<i class="text-danger">*</i></label>
                          <div class="col-md-9 col-lg-8">
                            <input type="text" class="form-control" name="" required>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group mb-0 text-center">
                <button type="button" class="btn btn-dark btn-sm px-5 mx-2" onclick="window.history.back()">ย้อนกลับ</button>
                <button type="submit" class="btn btn-primary btn-sm px-4 mx-2 text-dark">สมัครสมาชิก</button>
              </div>

            </form>

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
    $(document).ready(function() {
      $(".btn-eye-slash i").click(function() {
        $(this).toggleClass('active');
        var pwdType = $(this).find('+input').attr("type");
        var newType = (pwdType === "password") ? "text" : "password";
        $(this).find('+input').attr("type", newType);
      });
    });
  </script>
</body>

</html>