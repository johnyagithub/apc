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

    <section class="box-cart py-5">
      <div class="container">

        <div class="b-cart">
          <div class="mx-auto overflow-auto" style="max-width: 800px;">
            <h4 class="mb-3" id="cart_items2">Cart (<span>2</span>)</h4>
            <table style="min-width: 800px;">
              <thead>
                <tr>
                  <th>order</th>
                  <th>Qty</th>
                  <th>Price</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="d-flex py-2">
                    <img src="../../public/images/img-Product1.png" class="img-product" alt="">
                    <a href="../product/detail.php" class="text-dark">
                      <p class="m-0 text-line1">Product Brand_name</p>
                      <h5 class="text-line2">Jelly Fish Table Lamp</h5>
                    </a>
                  </td>
                  <td>
                    <div class="btn-group quantity mr-2 ml-0" data-price="180">
                      <button type="button" class="btn btn-delete btn-sm rounded-circle btn-light border-0 disabled"></button>
                      <input type="text" class="btn border-0" name="inputQuantity" value="2" readonly>
                      <button type="button" class="btn btn-plus btn-sm rounded-circle btn-light border-0"></button>
                      <input type="hidden" class="sumprice" value="360">
                    </div>
                  </td>
                  <td>
                    <span class="text-dark">฿ 360</span>
                  </td>
                  <td>
                    <button type="button" class="fs-23 btn border-0 text-primary" onclick="myDeleteItem($(this));"><i class="fa fa-trash" aria-hidden="true"></i></button>
                  </td>
                </tr>
                <tr>
                  <td class="d-flex py-2">
                    <img src="../../public/images/img-Product2.png" class="img-product" alt="">
                    <a href="../product/detail.php" class="text-dark">
                      <p class="m-0 text-line1">Product Brand_name</p>
                      <h5 class="text-line2">VÄXJÖ Wall Lamp</h5>
                    </a>
                  </td>
                  <td>
                    <div class="btn-group quantity mr-2 ml-0" data-price="180">
                      <button type="button" class="btn btn-delete btn-sm rounded-circle btn-light border-0 disabled"></button>
                      <input type="text" class="btn border-0" name="inputQuantity" value="1" readonly>
                      <button type="button" class="btn btn-plus btn-sm rounded-circle btn-light border-0"></button>
                      <input type="hidden" class="sumprice" value="180">
                    </div>
                  </td>
                  <td>
                    <span class="text-dark">฿ 360</span>
                  </td>
                  <td>
                    <button type="button" class="fs-23 btn border-0 text-primary" onclick="myDeleteItem($(this));"><i class="fa fa-trash" aria-hidden="true"></i></button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="row align-items-center py-4">
            <div class="col-md-12 text-center text-md-right">
              <a class="btn btn-outline-primary px-4 m-1" href="../home/">Back to Homepage</a>
              <a class="btn btn-primary px-4 m-1" href="../quotation/">Request Your Free Quote</a>
            </div>
          </div>
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
    });
  </script>
</body>

</html>