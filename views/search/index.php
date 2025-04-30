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

    <section class="box-cart py-5">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="m-0 text-primary">Search Keyword : "<?= $_GET['keyword'] ?>"</h2>
          </div>
        </div>
        <div class="mx-auto mt-4" style="max-width: 800px;">
          <h4>Product</h4>

          <ul class="box-List box-Portfolio list-group">
            <li class="list-group-item item my-2">
              <a class="text-reset" href="../product/detail.php">
                <div class="d-flex search-product align-items-center">
                  <img class="img-fit rounded" src="../../public/images/img-Product1.png">
                  <div class="flex-grow-1 overflow--hidden minw-0">
                    <p class="m-0 text-line1">Product Brand_name</p>
                    <h6 class="text-line2">Jelly Fish Table Lamp</h6>
                    <div class="">
                      <span class="fw-600 fs-16 text-primary">฿180.000</span>
                    </div>
                  </div>
                </div>
              </a>
            </li>
            <li class="list-group-item item my-2">
              <a class="text-reset" href="../product/detail.php">
                <div class="d-flex search-product align-items-center">
                  <img class="img-fit rounded" src="../../public/images/img-Product2.png">
                  <div class="flex-grow-1 overflow--hidden minw-0">
                    <p class="m-0 text-line1">Product Brand_name</p>
                    <h6 class="text-line2">Jelly Fish Table Lamp</h6>
                    <div class="">
                      <span class="fw-600 fs-16 text-primary">฿180.000</span>
                    </div>
                  </div>
                </div>
              </a>
            </li>
            <li class="list-group-item item my-2">
              <a class="text-reset" href="../product/detail.php">
                <div class="d-flex search-product align-items-center">
                  <img class="img-fit rounded" src="../../public/images/img-Product3.png">
                  <div class="flex-grow-1 overflow--hidden minw-0">
                    <p class="m-0 text-line1">Product Brand_name</p>
                    <h6 class="text-line2">Jelly Fish Table Lamp</h6>
                    <div class="">
                      <span class="fw-600 fs-16 text-primary">฿180.000</span>
                    </div>
                  </div>
                </div>
              </a>
            </li>
            <li class="list-group-item item my-2">
              <a class="text-reset" href="../product/detail.php">
                <div class="d-flex search-product align-items-center">
                  <img class="img-fit rounded" src="../../public/images/img-Product1.png">
                  <div class="flex-grow-1 overflow--hidden minw-0">
                    <p class="m-0 text-line1">Product Brand_name</p>
                    <h6 class="text-line2">Jelly Fish Table Lamp</h6>
                    <div class="">
                      <span class="fw-600 fs-16 text-primary">฿180.000</span>
                    </div>
                  </div>
                </div>
              </a>
            </li>
            <li class="list-group-item item my-2">
              <a class="text-reset" href="../product/detail.php">
                <div class="d-flex search-product align-items-center">
                  <img class="img-fit rounded" src="../../public/images/img-Product4.png">
                  <div class="flex-grow-1 overflow--hidden minw-0">
                    <p class="m-0 text-line1">Product Brand_name</p>
                    <h6 class="text-line2">Jelly Fish Table Lamp Jelly Fish Table Lamp Jelly Fish Table Lamp Jelly Fish Table Lamp Jelly Fish Table Lamp Jelly Fish Table Lamp</h6>
                    <div class="">
                      <span class="fw-600 fs-16 text-primary">฿180.000</span>
                    </div>
                  </div>
                </div>
              </a>
            </li>

            <li class="footable-empty bg-white rounded">Your Cart is empty</li>
          </ul>

        </div>

        <div class="mt-5 d-flex justify-content-between align-items-center flex-wrap">
          <a href="#" rel="prev" class="btn btn-outline-primary px-3"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Previous</a>
          <a href="#" rel="next" class="btn btn-outline-primary px-3 order-md-1">Next <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
          <ul class="pagination d-flex justify-content-center pt-3 w-100 w-md-auto">
            <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item"><a class="page-link" href="#">6</a></li>
            <li class="page-item w-30px text-center">...</li>
            <li class="page-item"><a class="page-link" href="#">10</a></li>
          </ul>
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