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
            <li class="breadcrumb-item"><a href="../home/">หน้าแรก</a></li>
            <li class="breadcrumb-item"><a href="../cart/">รถเข็นของฉัน</a></li>
            <li class="breadcrumb-item active" aria-current="page">ที่อยู่จัดส่งสินค้า</li>
          </ol>
        </nav>
      </div>
    </section>

    <section class="py-4">
      <div class="container">
        <form action="../cart/cart3.php" method="post">
          <div class="row">

            <div class="col-xxl-8 col-xl-10 mx-auto">
              <div class="border p-4 rounded mb-4 bg-white">
                <div class="row gutters-5 d-none d-lg-flex mb-3">
                  <div class="col">ที่อยู่จัดส่งสินค้า</div>
                </div>
                <div class="row gutters-5">

                  <div class="col-md-6 mb-3">
                    <label class="aiz-megabox d-block mb-0">
                      <input type="radio" name="address_id" value="1" required="">
                      <span class="d-flex p-3 aiz-megabox-elem">
                        <span class="aiz-rounded-check flex-shrink-0 mt-1"></span>
                        <span class="flex-grow-1 pl-3 text-left">
                          <div>
                            <span class="opacity-60">Address:</span>
                            <span class="fw-600 ml-2">In nulla officia tot</span>
                          </div>
                          <div>
                            <span class="opacity-60">City:</span>
                            <span class="fw-600 ml-2">Sed numquam dolores</span>
                          </div>
                          <div>
                            <span class="opacity-60">Country:</span>
                            <span class="fw-600 ml-2">Niger</span>
                          </div>
                          <div>
                            <span class="opacity-60">Postal Code:</span>
                            <span class="fw-600 ml-2">10310</span>
                          </div>
                          <div>
                            <span class="opacity-60">Phone:</span>
                            <span class="fw-600 ml-2">0888888888</span>
                          </div>
                        </span>
                      </span>
                    </label>
                    <div class="dropdown position-absolute right-0 top-0">
                      <button class="btn bg-gray px-2" type="button" data-toggle="dropdown">
                        <i class="la la-ellipsis-v"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" data-toggle="modal" data-target="#edit-address-modal">Edit</a>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 mb-3">
                    <label class="aiz-megabox d-block mb-0">
                      <input type="radio" name="address_id" value="2" required="">
                      <span class="d-flex p-3 aiz-megabox-elem">
                        <span class="aiz-rounded-check flex-shrink-0 mt-1"></span>
                        <span class="flex-grow-1 pl-3 text-left">
                          <div>
                            <span class="opacity-60">Address:</span>
                            <span class="fw-600 ml-2">In nulla officia tot</span>
                          </div>
                          <div>
                            <span class="opacity-60">City:</span>
                            <span class="fw-600 ml-2">Sed numquam dolores</span>
                          </div>
                          <div>
                            <span class="opacity-60">Country:</span>
                            <span class="fw-600 ml-2">Niger</span>
                          </div>
                          <div>
                            <span class="opacity-60">Postal Code:</span>
                            <span class="fw-600 ml-2">10310</span>
                          </div>
                          <div>
                            <span class="opacity-60">Phone:</span>
                            <span class="fw-600 ml-2">0888888888</span>
                          </div>
                        </span>
                      </span>
                    </label>
                    <div class="dropdown position-absolute right-0 top-0">
                      <button class="btn bg-gray px-2" type="button" data-toggle="dropdown">
                        <i class="la la-ellipsis-v"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" data-toggle="modal" data-target="#edit-address-modal">Edit</a>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 mx-auto mb-3">
                    <div class="border p-3 rounded mb-3 c-pointer text-center bg-light h-100 d-flex flex-column justify-content-center" data-toggle="modal" data-target="#new-address-modal">
                      <i class="las la-plus la-2x mb-3 text-primary"></i>
                      <div class="alpha-7">Add New Address</div>
                    </div>
                  </div>

                </div>

                <div class="row gutters-5 border-top mb-3 pt-3">
                  <div class="col">เลือกผู้ให้บริการจัดส่งสินค้า</div>
                </div>
                <div class="row gutters-5">

                  <div class="col-md-6 col-sm-12 my-1">
                    <label for="input_radio1" class="d-flex align-items-center m-2">
                      <input id="input_radio1" name="input_delivery" type="radio" value="Flash Express" checked="">
                      <img src="../../public/images/icon-flash.jpg" class="mr-3 h-20px h-sm-30px">
                      Flash Express
                      <span class="ml-auto mr-lg-5">+60฿</span>
                    </label>
                  </div>
                  <div class="col-md-6 col-sm-12 my-1">
                    <label for="input_radio2" class="d-flex align-items-center m-2">
                      <input id="input_radio2" name="input_delivery" type="radio" value="Thai Post - EMS">
                      <img src="../../public/images/icon-thaipost.jpg" class="mr-3 h-20px h-sm-30px">
                      Thai Post - EMS
                      <span class="ml-auto mr-lg-5">+60฿</span>
                    </label>
                  </div>
                  <div class="col-md-6 col-sm-12 my-1">
                    <label for="input_radio3" class="d-flex align-items-center m-2">
                      <input id="input_radio3" name="input_delivery" type="radio" value="Kerry">
                      <img src="../../public/images/icon-kerry.jpg" class="mr-3 h-20px h-sm-30px">
                      Kerry
                      <span class="ml-auto mr-lg-5">+60฿</span>
                    </label>
                  </div>
                  <div class="col-md-6 col-sm-12 my-1">
                    <label for="input_radio4" class="d-flex align-items-center m-2">
                      <input id="input_radio4" name="input_delivery" type="radio" value="J&T Express">
                      <img src="../../public/images/icon-jt.jpg" class="mr-3 h-20px h-sm-30px">
                      J&T Express
                      <span class="ml-auto mr-lg-5">+60฿</span>
                    </label>
                  </div>

                </div>
              </div>
            </div>

            <div class="col-xxl-8 col-xl-10 mx-auto mb-4">
              <div class="border p-3 p-lg-4 rounded text-left bg-white">
                <div class="row gutters-5 mb-3">
                  <div class="col">เลือกช่องทางการชำระเงิน</div>
                </div>
                <div class="row gutters-5">

                  <div class="col-md-6 col-sm-12 my-1">
                    <label for="input_radio5" class="d-flex align-items-center m-2">
                      <input id="input_radio5" name="input_payment" type="radio" value="บัตรเครดิต / Credit Card" checked="">บัตรเครดิต / Credit Card
                    </label>
                  </div>
                  <div class="col-sm-6 my-1">
                    <label for="input_radio6" class="d-flex align-items-center m-2">
                      <input id="input_radio6" name="input_payment" type="radio" value="โอนผ่านธนาคาร">โอนผ่านธนาคาร
                    </label>
                  </div>

                </div>
                <div class="row gutters-5 border-top mt-3">

                  <div class="col-md-6 col-sm-12 my-1">
                    <label for="TaxInvoice" class="d-flex align-items-center m-2">
                      <input id="TaxInvoice" name="input_tax" type="checkbox" value="ขอรับใบกำกับภาษี" onclick="checkedTax()">ขอรับใบกำกับภาษี
                    </label>
                  </div>
                  <div class="col-sm-12 px-3 px-sm-4" id="Tax-invoice" style="display: none;">
                    <div class="row gutters-5">
                      <div class="col">ข้อมูลสำหรับออกใบกำกับภาษี</div>
                    </div>
                    <div class="row px-0 px-sm-3">
                      <div class="col-lg-6 col-md-4">
                        <div class="form-group">
                          <input type="radio" name="taxType" id="radioTypePerson" value="person" checked>
                          <label for="radioTypePerson" class="col-form-label">บุคคลธรรมดา</label>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-8">
                        <div class="form-group">
                          <input type="radio" name="taxType" id="radioTypeCorporate" value="corporate">
                          <label for="radioTypeCorporate" class="col-form-label">นิติบุคคล</label>
                        </div>
                      </div>
                    </div>

                    <div class="divPerson row px-0 px-sm-3">
                      <div class="col-lg-6">
                        <div class="form-group row">
                          <label class="col-md-4 col-form-label" for="personName">ชื่อ-นามสกุล</label>
                          <div class="col-md-8">
                            <input type="text" class="form-control bg-light" id="personName" name="">
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group row">
                          <label class="col-md-4 col-form-label" for="taxDistrictID">เลขที่บัตรประชาชน</label>
                          <div class="col-md-8">
                            <input type="text" class="form-control bg-light" id="IDCard" placeholder="เลขที่บัตรประชาชน 13 หลัก" name="">
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="divCorporate row px-0 px-sm-3" style="display: none;">
                      <div class="col-lg-6">
                        <div class="form-group row">
                          <label class="col-md-4 col-form-label" for="corporateName">ชื่อองค์กร/บริษัท</label>
                          <div class="col-md-8">
                            <input type="text" class="form-control bg-light" id="corporateName" name="">
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group row">
                          <label class="col-md-4 col-form-label" for="taxID">หมายเลขผู้เสียภาษี</label>
                          <div class="col-md-8">
                            <input type="text" class="form-control bg-light" id="taxID" placeholder="หมายเลขผู้เสียภาษี 13 หลัก" name="">
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="divCorporate row px-0 px-sm-3" style="display: none;">
                      <div class="col-lg-6 col-md-4">
                        <div class="form-group">
                          <input type="radio" name="branchType" value="headoffice" id="branchTypeHead" onclick="checkBranch(this.value);" checked>
                          <label for="branchTypeHead">สำนักงานใหญ่</label>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-8">
                        <div class="form-group row">
                          <div class="col-md-4">
                            <input type="radio" name="branchType" id="branchTypeSub" value="subBranch" onclick="checkBranch(this.value);">
                            <label for="branchTypeSub">รหัสสาขา</label>
                          </div>
                          <div class="col-md-8 divBranch" style="display: none;">
                            <input type="text" class="form-control bg-light" id="branch" placeholder="ตัวเลขรหัสสาขา 5 หลัก" name="">
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row px-0 px-sm-3">
                      <div class="col-lg-6">
                        <div class="form-group row">
                          <label class="col-md-4 col-form-label" for="taxMobile">เบอร์โทรศัพท์</label>
                          <div class="col-md-8">
                            <input type="tel" class="form-control bg-light" id="taxMobile" name="" placeholder="หมายเลขโทรศัพท์">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row px-0 px-sm-3">
                      <label class="col-lg-2 col-md-4 col-form-label" for="taxAddress">ที่อยู่</label>
                      <div class="col-lg-10 col-md-8">
                        <input type="text" class="form-control bg-light" id="taxAddress" name="">
                      </div>
                    </div>
                    <div class="row px-0 px-sm-3">
                      <div class="col-lg-6">
                        <div class="form-group row">
                          <label class="col-md-4 col-form-label" for="taxTownID">แขวง/ตำบล</label>
                          <div class="col-md-8">
                            <input type="text" class="form-control bg-light" id="taxTownID" name="">
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group row">
                          <label class="col-md-4 col-form-label" for="taxDistrictID">เขต/อำเภอ</label>
                          <div class="col-md-8">
                            <input type="text" class="form-control bg-light" id="taxDistrictID" name="">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row px-0 px-sm-3">
                      <div class="col-lg-6">
                        <div class="form-group row">
                          <label class="col-md-4 col-form-label" for="taxRegionsID">จังหวัด</label>
                          <div class="col-md-8">
                            <input type="text" class="form-control bg-light" id="taxRegionsID" name="">
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group row">
                          <label class="col-md-4 col-form-label" for="taxPostal">รหัสไปรษณีย์</label>
                          <div class="col-md-8">
                            <input type="text" class="form-control bg-light" id="taxPostal" name="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>

            <div class="col-xxl-8 col-xl-10 mx-auto mb-4 text-center text-md-left order-1 order-md-0">
              <div class="row align-items-center px-2">
                <div class="col-xl-2 col-md-2 col-6 my-1 px-2 mr-auto">
                  <button type="button" class="btn btn-dark btn-sm w-100" onclick="window.history.back()">ย้อนกลับ</button>
                </div>
                <div class="col-xl-2 col-md-3 col-6 my-1 px-2">
                  <button type="submit" class="btn btn-primary btn-sm w-100">ดำเนินการต่อ</button>
                </div>
              </div>
            </div>

          </div>
        </form>
      </div>
    </section>

  </div>
  <!-- end #content -->

  <!-- begin modal -->
  <div class="modal fade" id="edit-address-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-modal="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Address Edit</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>

        <div class="modal-body" id="edit_modal_body">
          <form class="form-default" role="form" action="#" method="POST">
            <div class="p-3">
              <div class="row">
                <div class="col-md-3">
                  <label>Address</label>
                </div>
                <div class="col-md-9">
                  <textarea class="form-control mb-3" placeholder="Your Address" rows="2" name="address" required="">In nulla officia tot</textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <label>Country</label>
                </div>
                <div class="col-md-9">
                  <div class="mb-3">
                    <select class="custom-select w-100" name="">
                      <option value="">เลือกพื้นที่</option>
                      <option value="อุดมสุข, อ่อนนุช" selected>อุดมสุข, อ่อนนุช</option>
                      <option value="รามคําแหง">รามคําแหง</option>
                      <option value="มีนบุรี">มีนบุรี</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-3">
                  <label>City</label>
                </div>
                <div class="col-md-9">
                  <div class="mb-3">
                    <select class="custom-select w-100" name="">
                      <option value="">เลือกพื้นที่</option>
                      <option value="อุดมสุข, อ่อนนุช" selected>อุดมสุข, อ่อนนุช</option>
                      <option value="รามคําแหง">รามคําแหง</option>
                      <option value="มีนบุรี">มีนบุรี</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-3">
                  <label>Postal code</label>
                </div>
                <div class="col-md-9">
                  <input type="text" class="form-control mb-3" placeholder="Your Postal Code" value="10310" name="postal_code" required="">
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <label>Phone</label>
                </div>
                <div class="col-md-9">
                  <input type="text" class="form-control mb-3" value="0888888888" name="phone" required="">
                </div>
              </div>
              <div class="form-group text-right">
                <button type="submit" class="btn btn-sm btn-primary">Save</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- begin modal -->

  <!-- begin modal -->
  <div class="modal fade" id="new-address-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-modal="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title" id="exampleModalLabel">New Address</h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>

        <div class="modal-body" id="edit_modal_body">
          <form class="form-default" role="form" action="#" method="POST">
            <div class="p-3">
              <div class="row">
                <div class="col-md-3">
                  <label>Address</label>
                </div>
                <div class="col-md-9">
                  <textarea class="form-control mb-3" placeholder="Your Address" rows="2" name="address" required=""></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <label>Country</label>
                </div>
                <div class="col-md-9">
                  <div class="mb-3">
                    <select class="custom-select w-100" name="">
                      <option value="">เลือกพื้นที่</option>
                      <option value="อุดมสุข, อ่อนนุช">อุดมสุข, อ่อนนุช</option>
                      <option value="รามคําแหง">รามคําแหง</option>
                      <option value="มีนบุรี">มีนบุรี</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-3">
                  <label>City</label>
                </div>
                <div class="col-md-9">
                  <div class="mb-3">
                    <select class="custom-select w-100" name="">
                      <option value="">เลือกพื้นที่</option>
                      <option value="อุดมสุข, อ่อนนุช">อุดมสุข, อ่อนนุช</option>
                      <option value="รามคําแหง">รามคําแหง</option>
                      <option value="มีนบุรี">มีนบุรี</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-3">
                  <label>Postal code</label>
                </div>
                <div class="col-md-9">
                  <input type="text" class="form-control mb-3" placeholder="Your Postal Code" name="postal_code" required="">
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <label>Phone</label>
                </div>
                <div class="col-md-9">
                  <input type="text" class="form-control mb-3" name="phone" required="">
                </div>
              </div>
              <div class="form-group text-right">
                <button type="submit" class="btn btn-sm btn-primary">Save</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- begin modal -->

  <!-- begin #footer -->
  <?php include('../layouts/inc-footer.php'); ?>
  <!-- end #footer -->

  <?php include('../layouts/inc-script.php'); ?>
  <script>
    $(document).ready(function() {
      $('input:radio[name=taxType]').click(function() {
        checkTaxType();
      });
    });

    function checkBranch(branch) {
      if (branch === "headoffice") {
        $('#branch').val('00000');
        $('.divBranch').hide();
      } else {
        if ($('#branch').val() === '00000') {
          $('#branch').val('');
        }
        $('.divBranch').show();
      }
    }

    function checkTaxType() {
      var isTaxType = $("input[name=taxType]:checked").val();
      if (isTaxType === 'person') {
        $(".divPerson").show();
        $(".divCorporate").hide();
      } else if (isTaxType === 'corporate') {
        $(".divCorporate").show();
        $(".divPerson").hide();
      } else {
        $(".divPerson").hide();
        $(".divCorporate").hide();
      }
    }

    function checkedTax() {
      if ($('#TaxInvoice').is(':checked')) {
        $("#Tax-invoice").slideDown();
      } else {
        $("#Tax-invoice").slideUp();
      }
    }
  </script>
</body>

</html>