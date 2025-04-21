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

    <section>
      <div class="container py-5">
        <div class="box-map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d581.2189637755972!2d100.63534887794204!3d13.685933553103789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d600993aa6e95%3A0xf2f0827fd8fe59be!2z4Lia4Lij4Li04Lip4Lix4LiXIOC5geC4reC4oeC4l-C4ueC4muC4teC4oeC4suC4o-C5jOC5gOC4geC5h-C4leC4leC4tOC5ieC4hyDguIjguLPguIHguLHguJQ!5e0!3m2!1sth!2sth!4v1661481593148!5m2!1sth!2sth" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div style="position: sticky;top: 80px;">
              <h1>Am2b Marketing Co., Ltd.</h1>
              <p>
                เลขที่ 12, 14 ซอยวชิรธรรมสาธิต 64/1<br>
                แขวงบางจาก, เขตพระโขนง, กรถงเทพมหานคร 10260<br>
                <br>
                Office : 02-130-5216<br>
                Open Hour : 09:300 - 18:00<br>
                Email : info@am2bmarketing.co.th
              </p>
              <div class="d-flex align-items-center justify-content-center justify-content-md-start mb-3">
                <a href="#" target="_blank">
                  <i class="lab la-facebook-f la-2x mr-2"></i>
                </a>
                <a href="#" target="_blank">
                  <i class="lab la-line la-2x mr-2"></i>
                </a>
                <a href="#" target="_blank">
                  <i class="lab la-youtube la-2x mr-2"></i>
                </a>
                <a href="#" target="_blank">
                  <i class="lab la-instagram la-2x mr-2"></i>
                </a>
                <a href="#" target="_blank">
                  <i class="lab la-linkedin-in la-2x mr-2"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <form>
              <div class="form-group">
                <label for="inputAddress">ชื่อ*</label>
                <input type="text" class="form-control" id="inputAddress" required>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">อีเมล*</label>
                  <input type="email" class="form-control" id="inputEmail4" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">เบอร์ติดต่อ*</label>
                  <input type="tel" class="form-control" id="inputPassword4" required>
                </div>
              </div>
              <div class="form-group">
                <label for="inputContact">เรื่องที่ต้องการติดต่อ</label>
                <select id="inputContact" class="form-control">
                  <option selected></option>
                  <option>...</option>
                </select>
              </div>
              <div class="form-group">
                <label for="inputDetails">รายละเอียด*</label>
                <textarea class="form-control" id="inputDetails" rows="6" required></textarea>
              </div>
              <div class="form-group mb-0 text-right">
                <button type="reset" class="btn btn-secondary btn-sm px-5">ยกเลิก</button>
                <button type="submit" class="btn btn-primary btn-sm px-5">ยืนยัน</button>
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
</body>

</html>