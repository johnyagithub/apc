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
              <a href="javascript:void(0)" class="d-none d-lg-flex align-items-center text-reset h-100" style="width: max-content;" data-toggle="dropdown" data-display="static">
                <img src="../../public/images/cart.png" style="width: 27px;" alt="">
                <span class="badge">2</span>
              </a>
              <a href="../cart/" class="d-flex d-lg-none text-reset">
                <img src="../../public/images/cart.png" style="width: 27px;" alt="">
                <span class="badge">2</span>
              </a>

              <div class="dropdown-menu py-0 dropdown-menu-right dropdown-menu-xl p-0">
                <div class="box-cart">
                  <h5 class="p-3" id="cart_items2">My Cart (<span>2</span>)</h5>
                  <div class="b-cart h-250px overflow-auto fs-13">
                    <table>
                      <thead>
                        <tr>
                          <th class="w-250px">order</th>
                          <th class="w-100px">Qty</th>
                          <th>Price</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="d-flex align-items-center py-3">
                            <img src="../../public/images/img-Product1.png" class="img-product" alt="">
                            <a href="../product/detail.php" class="text-dark">
                              <p class="m-0 text-line1">Product Brand_name</p>
                              <h6 class="text-line3">Jelly Fish Table Lamp</h6>
                            </a>
                          </td>
                          <td>
                            <div class="btn-group quantity mr-2 ml-0" data-price="180">
                              <button type="button" class="btn btn-delete btn-sm rounded-circle btn-light border-0 disabled" onclick="event.stopPropagation()"></button>
                              <input type="text" class="btn border-0" name="inputQuantity" value="2" readonly>
                              <button type="button" class="btn btn-plus btn-sm rounded-circle btn-light border-0" onclick="event.stopPropagation()"></button>
                              <input type="hidden" class="sumprice" value="360">
                            </div>
                          </td>
                          <td>
                            <span class="text-dark">฿ 360</span>
                          </td>
                          <td>
                            <button type="button" class="fs-23 btn border-0 text-primary p-2" onclick="event.stopPropagation(); myDeleteItem($(this));"><i class="fa fa-trash"></i></button>
                          </td>
                        </tr>
                        <tr>
                          <td class="d-flex align-items-center py-3">
                            <img src="../../public/images/img-Product2.png" class="img-product" alt="">
                            <a href="../product/detail.php" class="text-dark">
                              <p class="m-0 text-line1">Product Brand_name</p>
                              <h6 class="text-line3">VÄXJÖ Wall Lamp</h6>
                            </a>
                          </td>
                          <td>
                            <div class="btn-group quantity mr-2 ml-0" data-price="180">
                              <button type="button" class="btn btn-delete btn-sm rounded-circle btn-light border-0 disabled" onclick="event.stopPropagation()"></button>
                              <input type="text" class="btn border-0" name="inputQuantity" value="1" readonly>
                              <button type="button" class="btn btn-plus btn-sm rounded-circle btn-light border-0" onclick="event.stopPropagation()"></button>
                              <input type="hidden" class="sumprice" value="180">
                            </div>
                          </td>
                          <td>
                            <span class="text-dark">฿ 180</span>
                          </td>
                          <td>
                            <button type="button" class="fs-23 btn border-0 text-primary p-2" onclick="event.stopPropagation(); myDeleteItem($(this));"><i class="fa fa-trash"></i></button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="btn-cart row px-3 mb-3 mx-0">
                    <div class="col p-1">
                      <button type="button" class="btn btn-outline-dark text-dark btn-sm w-100">Close</button>
                    </div>
                    <div class="col p-1">
                      <a href="../cart/" type="button" class="btn btn-dark btn-sm w-100">Check out</a>
                    </div>
                  </div>

                  <!-- ไม่มีสินค้าในตะกร้า -->
                  <div id="empty" class="h-300px align-items-center justify-content-center">
                    <div class="text-center p-3">
                      <i class="fa fa-frown-o fa-3x opacity-60 mb-3"></i>
                      <h3 class="h6 fw-700">Your Cart is empty</h3>
                    </div>
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