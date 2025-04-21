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

    <section class="py-4">
      <div class="container">
        <div class="row box-cart">

          <div class="col-xxl-8 col-xl-10 mx-auto mb-4 b-cart">
            <form action="../cart/cart2.php" method="post">
              <div class="border rounded text-left">
                <div class="mb-4">
                  <div class="row gutters-5 d-none d-lg-flex border-bottom mb-3 p-3 mx-0">
                    <div class="col-md-5">รายละเอียดสินค้า</div>
                    <div class="col">ราคา</div>
                    <div class="col">จำนวน</div>
                    <div class="col">ยอดรวม</div>
                    <div class="col-auto">จัดการสินค้า</div>
                  </div>
                  <ul class="list-group list-group-flush">

                    <li class="list-group-item px-3">
                      <div class="row gutters-5">
                        <div class="col-lg-5 d-flex">
                          <span class="mr-2 ml-0">
                            <img src="../../public/images/demo-img2.jpg" class="img-fit size-70px rounded" alt="Women Fit and Flare Dress">
                          </span>
                          <div class="w-100 d-flex align-content-center flex-wrap align-items-center">
                            <a href="../product/detail.php" class="fs-14 text-dark fw-400">2310 LED weatherproof</a>
                          </div>
                        </div>

                        <div class="col-lg col-sm-3 col-6 order-1 order-lg-0 my-3 my-lg-0 d-flex align-content-center flex-wrap align-items-center">
                          <span class="opacity-60 fs-12 d-block d-lg-none mr-3">ราคา</span>
                          <span>฿ 1,320</span>
                        </div>

                        <div class="col-lg col-sm-3 col-6 order-4 order-lg-0 d-flex align-content-center flex-wrap align-items-center">
                          <div class="btn-group quantity mr-2 ml-0" data-price="1320">
                            <button type="button" class="btn btn-delete btn-sm disabled"></button>
                            <input type="text" class="btn border-0" name="inputQuantity" value="1" readonly>
                            <button type="button" class="btn btn-plus btn-sm"></button>
                            <input type="hidden" class="sumprice" value="1320">
                          </div>
                        </div>
                        <div class="col-lg col-sm-3 col-6 order-3 order-lg-0 my-3 my-lg-0 d-flex align-content-center flex-wrap align-items-center">
                          <span class="opacity-60 fs-12 d-block d-lg-none mr-3">ยอดรวม</span>
                          <span class="text-dark">฿ <span class="box-Total">1,320</span></span>
                        </div>
                        <div class="col-lg-auto col-sm-3 col-6 order-5 order-lg-0 text-right d-flex align-content-center flex-wrap align-items-center">
                          <a href="javascript:void(0)" class="btn btn-sm btn-dark w-100" onclick="deleteItem($(this));">ลบสินค้า</a>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item px-3">
                      <div class="row gutters-5">
                        <div class="col-lg-5 d-flex">
                          <span class="mr-2 ml-0">
                            <img src="../../public/images/demo-img2.jpg" class="img-fit size-70px rounded" alt="Women Fit and Flare Dress">
                          </span>
                          <div class="w-100 d-flex align-content-center flex-wrap align-items-center">
                            <a href="../product/detail.php" class="fs-14 text-dark fw-400">2310 LED weatherproof</a>
                          </div>
                        </div>

                        <div class="col-lg col-sm-3 col-6 order-1 order-lg-0 my-3 my-lg-0 d-flex align-content-center flex-wrap align-items-center">
                          <span class="opacity-60 fs-12 d-block d-lg-none mr-3">ราคา</span>
                          <span>฿ 1,320</span>
                        </div>

                        <div class="col-lg col-sm-3 col-6 order-4 order-lg-0 d-flex align-content-center flex-wrap align-items-center">
                          <div class="btn-group quantity mr-2 ml-0" data-price="1320">
                            <button type="button" class="btn btn-delete btn-sm rounded-circle btn-light border-0 disabled"></button>
                            <input type="text" class="btn border-0" name="inputQuantity" value="2" readonly>
                            <button type="button" class="btn btn-plus btn-sm rounded-circle btn-light border-0"></button>
                            <input type="hidden" class="sumprice" value="1320">
                          </div>
                        </div>
                        <div class="col-lg col-sm-3 col-6 order-3 order-lg-0 my-3 my-lg-0 d-flex align-content-center flex-wrap align-items-center">
                          <span class="opacity-60 fs-12 d-block d-lg-none mr-3">ยอดรวม</span>
                          <span class="text-dark">฿ <span class="box-Total">2,640</span></span>
                        </div>
                        <div class="col-lg-auto col-sm-3 col-6 order-5 order-lg-0 text-right d-flex align-content-center flex-wrap align-items-center">
                          <a href="javascript:void(0)" class="btn btn-sm btn-dark w-100" onclick="deleteItem($(this));">ลบสินค้า</a>
                        </div>
                      </div>
                    </li>

                  </ul>
                </div>

                <div class="p-3 py-2 border-top d-flex justify-content-end">
                  <span class="opacity-60 fs-15 mr-4">ราคาทั้งหมด</span>
                  <span class="fs-17">฿ <span class="box-sumTotal">3,960</span></span>
                </div>
              </div>
              <div class="row align-items-center py-4">
                <div class="col-md-12 text-center text-md-right" id="requestQuote">
                  <button type="button" class="btn btn-dark btn-sm mx-2" onclick="$('#requestQuote').slideUp();$('#requestQuoteForm').slideDown();">ขอรับใบเสนอราคา</a>
                    <button type="submit" class="btn btn-primary btn-sm mx-2">ดำเนินการสั่งซื้อ</a>
                </div>
              </div>
            </form>
            <div class="shadow-sm p-4 rounded bg-white" id="requestQuoteForm" style="display: none;">
              <div class="p-3">
                <h4 class="text-center">รายละเอียดใบเสนอราคา</h4>
                <br>
                <form action="#" method="post" accept-charset="utf-8">
                  <div class="form-row mb-3">
                    <div class="col-sm">
                      <label for="exampleInputLname">ชื่อ</label>
                      <input type="text" class="form-control" id="exampleInputLname">
                    </div>
                    <div class="col-sm">
                      <label for="exampleInputSname">นามสกุล</label>
                      <input type="text" class="form-control" id="exampleInputSname">
                    </div>
                  </div>
                  <div class="form-row mb-3">
                    <div class="col-sm">
                      <label for="exampleInputEmail">อีเมล</label>
                      <input type="email" class="form-control" id="exampleInputEmail">
                    </div>
                    <div class="col-sm">
                      <label for="exampleInputTel">เบอร์โทร</label>
                      <input type="tel" class="form-control" id="exampleInputTel">
                    </div>
                  </div>
                  <div class="form-row mb-3">
                    <div class="col-sm">
                      <label for="exampleInputCompany">บริษัท</label>
                      <input type="text" class="form-control" id="exampleInputCompany">
                    </div>
                    <div class="col-sm">
                      <label for="exampleInputJob">ตำแหน่งงาน</label>
                      <input type="text" class="form-control" id="exampleInputJob">
                    </div>
                  </div>
                  <div class="form-group mb-0">
                    <label for="exampleInputDetails">รายละเอียด</label>
                    <textarea class="form-control" rows="5" id="exampleInputDetails"></textarea>
                  </div>
                  <div class="row mx-0 w-100 justify-content-center mt-4">
                    <div class="col-lg-3 col-sm-6 p-2">
                      <button type="button" class="btn btn-dark btn-sm w-100" data-dismiss="modal" onclick="$('#requestQuoteForm').slideUp();$('#requestQuote').slideDown();">ยกเลิก</button>
                    </div>
                    <div class="col-lg-3 col-sm-6 p-2">
                      <button type="submit" class="btn btn-primary btn-sm w-100">ขอรับใบเสนอราคา</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <!-- ไมใมีสินค้าในตะกร้า -->
          <div class="col-xl-8 mx-auto mb-4" id="empty">
            <div class="shadow-sm p-4 rounded bg-white">
              <div class="text-center p-3">
                <i class="fa fa-frown-o fa-3x opacity-60 mb-3"></i>
                <h3 class="h4 fw-700">Your Cart is empty</h3>
              </div>
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
  <script>
    $(function() {
      $('#cart_items a').css('cursor', 'default');
      $('#cart_items .dropdown-menu').remove();
      $('.btn-group.quantity .btn-plus').click(function() {
        var n1 = $(this).closest(".btn-group.quantity").find("input").val();

        var price = $(this).closest(".btn-group.quantity").attr('data-price');
        if (price != '') {
          var number = parseInt(n1) * price;
          $(this).closest(".btn-group.quantity[data-price]").find('input[type="hidden"]').val(number);
          $(this).closest("li.list-group-item").find('.box-Total').html(number.toLocaleString());
        }

        var sum = 0;
        $(this).closest(".b-cart").find("input[type=hidden].sumprice").each(function() {
          sum = parseFloat(sum) + parseFloat($(this).val());
        });
        $(this).closest(".b-cart").find('.box-sumTotal').html(sum.toLocaleString());
        updateCart();
      });
      $('.btn-group.quantity .btn-delete').click(function() {
        var n2 = $(this).closest(".btn-group.quantity").find("input").val();

        var price2 = $(this).closest(".btn-group.quantity").attr('data-price');
        if (price2 != '') {
          var number2 = parseInt(n2) * price2;
          $(this).closest(".btn-group.quantity[data-price]").find('input[type="hidden"]').val(number2);
          $(this).closest("li.list-group-item").find('.box-Total').html(number2.toLocaleString());
        }

        var sum2 = 0;
        $(this).closest(".b-cart").find("input[type=hidden].sumprice").each(function() {
          sum2 = parseFloat(sum2) + parseFloat($(this).val());
        });
        $(this).closest(".b-cart").find('.box-sumTotal').html(sum2.toLocaleString());
        updateCart();
      });
    });

    let deleteItem = (i) => {
      var list = $(i).closest(".b-cart").find("li.list-group-item").length - 1;
      if (list > 0) {
        var sum = 0;
        $(i).closest(".b-cart li.list-group-item").siblings().find("input[type=hidden].sumprice").each(function() {
          sum = parseFloat(sum) + parseFloat($(this).val());
        });
        $(i).closest(".b-cart").find('.box-sumTotal').html(sum.toLocaleString());
        $(i).closest("li.list-group-item").remove();
      } else {
        $(i).closest(".b-cart").remove();
      }
      updateCart();
    }

    let updateCart = () => {
      var sum = 0;
      $(".b-cart li.list-group-item input[type=hidden].sumprice").each(function() {
        sum = parseFloat(sum) + parseFloat($(this).val());
      });
      $("#box-total").html(sum.toLocaleString());

      var count = 0;
      $(".b-cart li.list-group-item input[name=inputQuantity]").each(function() {
        count = parseInt(count) + parseInt($(this).val());
      });
      if (count == 0) {
        count = "";
      }
      $('#cart_items .badge').text(count);
    }
  </script>
</body>

</html>