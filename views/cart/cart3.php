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
            <li class="breadcrumb-item active" aria-current="page">รถเข็นของฉัน</li>
          </ol>
        </nav>
      </div>
    </section>

    <section class="py-5">
      <div class="container">

        <div class="card">
          <div class="card-header">
            <h5 class="h6 mb-0">สรุปคำสั่งซื้อ</h5>
          </div>
          <div class="card-body">
            <div class="row">

              <div class="col-lg-6">
                <table class="table-borderless table">
                  <tr>
                    <td class="w-50 fw-500 text-primary">รหัสการสั่งซื้อ :</td>
                    <td>20220726-08040637</td>
                  </tr>
                  <tr>
                    <td class="w-50 fw-500 text-primary">ชื่อ :</td>
                    <td>Paul K. Jensen</td>
                  </tr>
                  <tr>
                    <td class="w-50 fw-500 text-primary">อีเมล :</td>
                    <td>customer@example.com</td>
                  </tr>
                  <tr>
                    <td class="w-50 fw-500 text-primary">ที่อยู่จัดส่ง :</td>
                    <td>
                      123/456 Lorem ipsum dolor sit amet, Lorem 10223<br>
                      Tel. 09736485XX
                    </td>
                  </tr>
                </table>
              </div>
              <div class="col-lg-6">
                <table class="table-borderless table">
                  <tr>
                    <td class="w-50 fw-500 text-primary">วันสั่ง :</td>
                    <td>26-07-2022 08:04 AM</td>
                  </tr>
                  <tr>
                    <td class="w-50 fw-500 text-primary">สถานะการสั่งซื้อ :</td>
                    <td>รอชำระเงิน</td>
                  </tr>
                  <tr>
                    <td class="w-50 fw-500 text-primary">ยอดสั่งซื้อทั้งหมด :</td>
                    <td>฿ 83,459.01</td>
                  </tr>
                  <tr>
                    <td class="w-50 fw-500 text-primary">การส่งสินค้า :</td>
                    <td><img src="../../public/images/icon-flash.jpg" class="mr-3 h-20px h-sm-30px">Flash Express</td>
                  </tr>
                  <tr>
                    <td class="w-50 fw-500 text-primary">วิธีการชำระเงิน :</td>
                    <td>โอนผ่านธนสคาร</td>
                  </tr>
                </table>
              </div>
            </div>

            <table class="aiz-table table footable footable-1 breakpoint-xl border-bottom">
              <thead>
                <tr class="footable-header bg-light">
                  <th class="w-50" style="display: table-cell;">รายละเอียด</th>
                  <th data-breakpoints="md" style="display: table-cell;">ราคาต่อหน่วย</th>
                  <th style="display: table-cell;">จำนวน</th>
                  <th style="display: table-cell;">ราคารวม</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="display: table-cell;">
                    <img src="../../public/images/demo-img1.jpg" class="img-fit mr-2 float-left" style="width: 70px;">
                    <a href="#" target="_blank" class="text-dark">Lorem ipsum dolor sit amet, consecttuer</a>
                  </td>
                  <td style="display: table-cell;">฿ 25,981.00</td>
                  <td style="display: table-cell;">1</td>
                  <td style="display: table-cell;">฿ 25,981.00</td>
                </tr>
                <tr>
                  <td style="display: table-cell;">
                    <img src="../../public/images/demo-img1.jpg" class="img-fit mr-2 float-left" style="width: 70px;">
                    <a href="#" target="_blank" class="text-dark">Lorem ipsum dolor sit amet, consecttuer</a>
                  </td>
                  <td style="display: table-cell;">฿ 25,981.00</td>
                  <td style="display: table-cell;">1</td>
                  <td style="display: table-cell;">฿ 25,981.00</td>
                </tr>
              </tbody>
            </table>

            <table class="table-borderless table ml-auto mw-100 w-500px">
              <tbody>
                <tr>
                  <td class="w-50 fw-500">ยอดรรวมสินค้า :</td>
                  <td class="text-right">
                    <span class="strong-600">77,943.00</span>
                  </td>
                </tr>
                <tr>
                  <td class="w-50 fw-500">ค่าจัดส่ง :</td>
                  <td class="text-right">
                    <span class="text-italic">60.00</span>
                  </td>
                </tr>
                <tr>
                  <td class="w-50 fw-500">VAT 7% :</td>
                  <td class="text-right">
                    <span class="text-italic">5,456.01</span>
                  </td>
                </tr>
                <tr>
                  <td class="w-50 fw-500">ส่วนลด :</td>
                  <td class="text-right">
                    <span class="text-italic">0.00</span>
                  </td>
                </tr>
                <tr>
                  <td class="w-50 fw-500 text-primary">
                    <h5>ยอดรวมทั้งสิ้น :</h5>
                  </td>
                  <td class="text-right text-primary">
                    <strong><span>฿ 83,459.01</span></strong>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="row px-2">
          <div class="col-xl-2 col-md-2 col-6 my-1 px-2 mr-auto">
            <button type="button" class="btn btn-dark btn-sm w-100" onclick="window.history.back()">ย้อนกลับ</button>
          </div>
          <div class="col-xl-2 col-md-3 col-6 my-1 px-2">
            <a href="../cart/cart4.php" class="btn btn-primary btn-sm w-100">ยืนยันการสั่งซื้อ</a>
            <!-- สำหรับบัตรเครดิต -->
            <!-- <button type="button" class="btn btn-success btn-sm w-100" data-toggle="modal" data-target="#popup_credit">ยืนยันการสั่งซื้อ</button> -->
          </div>
        </div>
      </div>
    </section>

  </div>
  <!-- end #content -->

  <!-- Modal -->
  <div class="modal fade" id="popup_credit" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body p-0">
          <button type="button" class="close btn btn-icon btn-sm border" data-dismiss="modal" aria-label="Close">
            <i class="la la-close"></i>
          </button>
          <div class="p-5">
            <a href="../cart/succeed.php" class="btn btn-info btn-sm w-100">Pay 83,459.01 THB</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- begin #footer -->
  <?php include('../layouts/inc-footer.php'); ?>
  <!-- end #footer -->

  <?php include('../layouts/inc-script.php'); ?>
</body>

</html>