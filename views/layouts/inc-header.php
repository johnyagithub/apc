<header class="hadow-md bg-dark text-light">
  <div class="container">
    <div class="d-lg-flex align-items-center navbar-expand-lg position-relative z-2">

      <div class="col-auto px-0 d-flex align-items-center mr-md-auto">
        <a class="d-block py-5px" href="../home">
          <img src="../../public/images/logo.png" alt="" class="mw-100 h-50px h-lg-60px">
        </a>
        <button class="navbar-toggler ml-auto px-0" type="button" data-toggle="collapse" data-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse d-flex flex-column flex-lg-row" id="navbarMain">
        <ul class="navbar-nav box-menu mx-auto">
          <li class="nav-item position-relative active">
            <a class="nav-link opacity-80 hov-opacity-100" href="../home/">Home</a>
          </li>
          <li class="nav-item position-relative">
            <a class="nav-link opacity-80 hov-opacity-100" href="../product/">Product</a>
          </li>
          <li class="nav-item position-relative">
            <a class="nav-link opacity-80 hov-opacity-100" href="../services/">Services</a>
          </li>
          <li class="nav-item position-relative">
            <a class="nav-link opacity-80 hov-opacity-100" href="../porfolio/">Porfolio</a>
          </li>
          <li class="nav-item position-relative">
            <a class="nav-link opacity-80 hov-opacity-100" href="../news/">Newsletter</a>
          </li>
          <li class="nav-item position-relative">
            <a class="nav-link opacity-80 hov-opacity-100" href="../aboutus/">About us</a>
          </li>
          <li class="nav-item position-relative">
            <a class="nav-link opacity-80 hov-opacity-100" href="../contactus/">Contact us</a>
          </li>
        </ul>

        <div class="d-flex">
          <div class="align-self-stretch px-2" data-hover="dropdown">
            <div class="dropdown-toggle nav-cart-box dropdown h-100" id="cart_items">
              <a href="javascript:void(0)" class="d-flex align-items-center text-reset h-100" style="width: max-content;" data-toggle="dropdown" data-display="static">
                <img src="../../public/images/cart.png" style="width: 27px;" alt="">
                <span class="badge">2</span>
              </a>

              <div class="dropdown-menu py-0 dropdown-menu-right dropdown-menu-lg p-0">
                <div id="list_cart">
                  <div class="p-3 fs-15 fw-500 p-3 border-bottom">
                    รายการรถเข็น
                  </div>
                  <ul id="list-cart" class="h-250px overflow-auto c-scrollbar-light list-group list-group-flush fs-13">

                    <li class="list-group-item p-2" data-id="3" data-producttype="1 กก. x 10 แพ็ค / กล่อง">
                      <span class="d-flex align-items-center">
                        <a href="../product/detail.php" class="text-reset d-flex align-items-center flex-grow-1">
                          <img src="../../public/images/demo-img1.jpg" class="img-fit size-60px rounded ls-is-cached">
                          <span class="minw-0 pl-2 flex-grow-1">
                            <span class="fw-500 mb-1 text-truncate-2 text-line2" style="white-space: initial;">
                              2310 LED weatherproof
                            </span>
                            <span>
                              <span class="box-num">1</span>x
                            </span>
                            <span>
                              1,800 บาท
                            </span>
                          </span>
                        </a>
                      </span>
                    </li>
                    <li class="list-group-item p-2" data-id="1" data-producttype="500 กรัม / แพ็ค">
                      <span class="d-flex align-items-center">
                        <a href="../product/detail.php" class="text-reset d-flex align-items-center flex-grow-1">
                          <img src="../../public/images/demo-img1.jpg" class="img-fit size-60px rounded ls-is-cached">
                          <span class="minw-0 pl-2 flex-grow-1">
                            <span class="fw-500 mb-1 text-truncate-2 text-line2" style="white-space: initial;">
                              2310 LED weatherproof
                            </span>
                            <span>
                              <span class="box-num">1</span>x
                            </span>
                            <span>
                              1,320 บาท
                            </span>
                          </span>
                        </a>
                      </span>
                    </li>
                    <li class="list-group-item p-2" data-id="2" data-producttype="1 กล่อง (10 กก.)">
                      <span class="d-flex align-items-center">
                        <a href="../product/detail.php" class="text-reset d-flex align-items-center flex-grow-1">
                          <img src="../../public/images/demo-img2.jpg" class="img-fit size-60px rounded ls-is-cached">
                          <span class="minw-0 pl-2 flex-grow-1">
                            <span class="fw-500 mb-1 text-truncate-2 text-line2" style="white-space: initial;">
                              2310 LED weatherproof
                            </span>
                            <span>
                              <span class="box-num">2</span>x
                            </span>
                            <span>
                              1,320 บาท
                            </span>
                          </span>
                        </a>
                      </span>
                    </li>

                  </ul>

                  <div class="px-3 py-2 fs-15 border-top d-flex justify-content-between">
                    <span class="opacity-60">ยอดรวม</span>
                    <span class="fw-500">5,760 บาท</span>
                  </div>
                  <div class="px-3 py-2 text-center border-top">
                    <a href="../cart" class="btn btn-soft-primary btn-sm w-100">ดูตะกร้า</a>
                  </div>
                </div>

                <!-- ไม่มีสินค้าในตะกร้า -->
                <div>
                  <div class="text-center p-3">
                    <i class="fa fa-frown-o fa-3x opacity-60 mb-3"></i>
                    <h3 class="h6 fw-700">Your Cart is empty</h3>
                  </div>
                </div>

              </div>
            </div>
          </div>

          <a href="javascript:void(0);" class="text-reset d-none d-lg-block text-center text-white px-2" data-toggle="class-toggle-custom" data-target=".front-header-search">
            <i class="fa fa-search"></i>
          </a>
          <!-- search mobile -->
          <form action="../search" method="GET" class="input-group d-lg-none ml-2">
            <input type="text" class="form-control" placeholder="ค้นหาสินค้า หมวดหมู่ หรือรหัสสินค้า" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <div class="input-group-append">
              <button class="btn btn-dark py-1 px-2" type="submit"><i class="fa fa-search text-white"></i></button>
            </div>
          </form>
        </div>

      </div>
      <div class="box-shadow"></div>
    </div>

    <!-- popup search -->
    <div class="flex-grow-1 front-header-search">
      <form action="../search" method="GET" class="d-flex align-items-center" style="max-width: 500px;">
        <div class="input-group bg-light rounded-right">
          <input type="text" class="border-0 bg-light form-control pr-0" id="search" name="keyword" placeholder="ค้นหาสินค้า หมวดหมู่ หรือรหัสสินค้า" autocomplete="off">
          <div class="input-group-append d-none d-lg-block">
            <button class="btn btn-primary px-3 py-2" type="submit">
              <i class="fa fa-search"></i>
            </button>
          </div>
        </div>
        <div data-toggle="class-toggle-custom" data-target=".front-header-search">
          <button class="btn p-0" type="button"><img src="../../public/images/icon-close.png" alt="" class="h-50px"></button>
        </div>
      </form>
      <div class="box-shadow"></div>
    </div>

  </div>
</header>