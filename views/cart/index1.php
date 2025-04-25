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

    <section class="box-cart pt-5">
      <div class="container">

        <div class="row">

          <div class="col-xxl-8 col-xl-10 mx-auto p-0 ">
            <h4 class="p-3" id="cart_items2">Cart (<span>2</span>)</h4>
            <form action="../quotation/" method="post">
              <div class="text-left">
                <div class="row gutters-5 d-none d-lg-flex p-3 mx-0">
                  <div class="col-lg-7 col-xl-8">order</div>
                  <div class="col text-center">Qty</div>
                  <div class="col text-center">Price</div>
                  <div class="w-100px"></div>
                </div>
                <ul class="list-group list-group-flush">

                  <li class="list-group-item px-3">
                    <div class="row gutters-5">
                      <div class="col-lg-7 col-xl-8 d-flex">
                        <img src="../../public/images/img-Product1.png" class="img-product" alt="">
                        <a href="../product/detail.php" class="text-dark">
                          <h6>Product Brand_name</h6>
                          <h3>Jelly Fish Table Lamp</h3>
                          <h5 class="mb-0 mt-2">฿ 180</h5>
                        </a>
                      </div>

                      <div class="col-lg col-sm-3 col-6 order-4 order-lg-0 d-flex align-content-center flex-wrap align-items-center">
                        <div class="btn-group quantity mr-2 ml-0" data-price="180">
                          <button type="button" class="btn btn-delete btn-sm disabled"></button>
                          <input type="text" class="btn border-0" name="inputQuantity" value="2" readonly>
                          <button type="button" class="btn btn-plus btn-sm"></button>
                          <input type="hidden" class="sumprice" value="360">
                        </div>
                      </div>
                      <div class="col-lg col-sm-3 col-6 order-3 order-lg-0 my-3 my-lg-0 d-flex align-content-center flex-wrap align-items-center justify-content-center">
                        <h6 class="d-block d-lg-none mr-3 mb-0">Price</h6>
                        <span class="text-dark">฿ <span class="box-Total">360</span></span>
                      </div>
                      <div class="w-100px order-5 order-lg-0 text-right d-flex align-content-center flex-wrap align-items-center mx-auto mr-sm-0">
                        <a href="javascript:void(0)" class="btn btn-sm btn-dark w-100" onclick="deleteItem($(this));">ลบสินค้า</a>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item px-3">
                    <div class="row gutters-5">
                      <div class="col-lg-7 col-xl-8 d-flex">
                        <img src="../../public/images/img-Product2.png" class="img-product" alt="">
                        <a href="../product/detail.php" class="text-dark">
                          <h6>Product Brand_name</h6>
                          <h3>VÄXJÖ Wall Lamp </h3>
                          <h5 class="mb-0 mt-2">฿ 200</h5>
                        </a>
                      </div>

                      <div class="col-lg col-sm-3 col-6 order-4 order-lg-0 d-flex align-content-center flex-wrap align-items-center">
                        <div class="btn-group quantity mr-2 ml-0" data-price="200">
                          <button type="button" class="btn btn-delete btn-sm disabled"></button>
                          <input type="text" class="btn border-0" name="inputQuantity" value="1" readonly>
                          <button type="button" class="btn btn-plus btn-sm"></button>
                          <input type="hidden" class="sumprice" value="200">
                        </div>
                      </div>
                      <div class="col-lg col-sm-3 col-6 order-3 order-lg-0 my-3 my-lg-0 d-flex align-content-center flex-wrap align-items-center justify-content-center">
                        <h6 class="d-block d-lg-none mr-3 mb-0">Price</h6>
                        <span class="text-dark">฿ <span class="box-Total">200</span></span>
                      </div>
                      <div class="w-100px order-5 order-lg-0 text-right d-flex align-content-center flex-wrap align-items-center mx-auto mr-sm-0">
                        <a href="javascript:void(0)" class="btn btn-sm btn-dark w-100" onclick="deleteItem($(this));">ลบสินค้า</a>
                      </div>
                    </div>
                  </li>

                </ul>

                <div class="p-3 py-2 d-flex justify-content-end">
                  <h6 class="mb-0 mr-4">ราคาทั้งหมด</h6>
                  <span class="fs-17">฿ <span class="box-sumTotal">540</span></span>
                </div>
              </div>
              <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-sm-end mt-5">
                <a class="btn btn-outline-primary px-4 m-1" href="../home/">Back to Homepage</a>
                <a class="btn btn-primary px-4 m-1" href="../quotation/">Request Your Free Quote</a>
              </div>
            </form>
          </div>

          <!-- ไมใมีสินค้าในตะกร้า -->
          <div class="col-xl-8 mx-auto justify-content-center align-items-center" style="min-height: 320px;" id="empty">
            <div class="shadow-sm p-4 rounded bg-white w-100">
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
        $(this).closest(".box-cart").find("input[type=hidden].sumprice").each(function() {
          sum = parseFloat(sum) + parseFloat($(this).val());
        });
        $(this).closest(".box-cart").find('.box-sumTotal').html(sum.toLocaleString());
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
        $(this).closest(".box-cart").find("input[type=hidden].sumprice").each(function() {
          sum2 = parseFloat(sum2) + parseFloat($(this).val());
        });
        $(this).closest(".box-cart").find('.box-sumTotal').html(sum2.toLocaleString());
        updateCart();
      });
    });

    let deleteItem = (i) => {
      var list = $(i).closest(".box-cart").find("li.list-group-item").length - 1;
      if (list > 0) {
        var sum = 0;
        $(i).closest(".box-cart li.list-group-item").siblings().find("input[type=hidden].sumprice").each(function() {
          sum = parseFloat(sum) + parseFloat($(this).val());
        });
        $(i).closest(".box-cart").find('.box-sumTotal').html(sum.toLocaleString());
        $(i).closest("li.list-group-item").remove();
      } else {
        $(i).closest(".box-cart").remove();
      }
      updateCart();
    }

    let updateCart = () => {
      var sum = 0;
      $(".box-cart li.list-group-item input[type=hidden].sumprice").each(function() {
        sum = parseFloat(sum) + parseFloat($(this).val());
      });
      $("#box-total").html(sum.toLocaleString());
      $('#cart_items .badge,#cart_items2 span').text($(".box-cart li.list-group-item").length);
    }
  </script>
</body>

</html>