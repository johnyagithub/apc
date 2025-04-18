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
            <li class="breadcrumb-item active" aria-current="page">แคตตาล็อต</li>
          </ol>
        </nav>
      </div>
    </section>

    <section class="box-catalog pt-5 pb-3">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 mb-2">
            <h4 class="my-1 d-block d-sm-inline-block">แคตตาล็อค</h4>
            <p class="text-muted m-0">กรอกอีเมลของคุณ เพื่อดาวน์โหลดแคตตาล็อคสินค้า</p>
          </div>
        </div>

        <div class="row p-3">

          <div class="col-lg-3 col-md-4 col-6 p-4">
            <a href="javascript:void(0)" data-toggle="modal" data-target="#modalCatalog" onclick="$('#id_catalog').val('idcatalog001')">
              <img src="../../public/images/img-catalog01.jpg" class="w-100">
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-6 p-4">
            <a href="javascript:void(0)" data-toggle="modal" data-target="#modalCatalog" onclick="$('#id_catalog').val('idcatalog002')">
              <img src="../../public/images/img-catalog02.jpg" class="w-100">
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-6 p-4">
            <a href="javascript:void(0)" data-toggle="modal" data-target="#modalCatalog" onclick="$('#id_catalog').val('idcatalog003')">
              <img src="../../public/images/img-catalog03.jpg" class="w-100">
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-6 p-4">
            <a href="javascript:void(0)" data-toggle="modal" data-target="#modalCatalog" onclick="$('#id_catalog').val('idcatalog004')">
              <img src="../../public/images/img-catalog01.jpg" class="w-100">
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-6 p-4">
            <a href="javascript:void(0)" data-toggle="modal" data-target="#modalCatalog" onclick="$('#id_catalog').val('idcatalog005')">
              <img src="../../public/images/img-catalog02.jpg" class="w-100">
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-6 p-4">
            <a href="javascript:void(0)" data-toggle="modal" data-target="#modalCatalog" onclick="$('#id_catalog').val('idcatalog006')">
              <img src="../../public/images/img-catalog03.jpg" class="w-100">
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-6 p-4">
            <a href="javascript:void(0)" data-toggle="modal" data-target="#modalCatalog" onclick="$('#id_catalog').val('idcatalog007')">
              <img src="../../public/images/img-catalog01.jpg" class="w-100">
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-6 p-4">
            <a href="javascript:void(0)" data-toggle="modal" data-target="#modalCatalog" onclick="$('#id_catalog').val('idcatalog008')">
              <img src="../../public/images/img-catalog02.jpg" class="w-100">
            </a>
          </div>

        </div>

        <ul class="pagination d-flex justify-content-end pt-3">
          <li class="page-item">
            <a class="page-link" href="#" rel="prev" aria-label="« Previous">‹</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item active" aria-current="page"><span class="page-link">2</span></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">4</a></li>
          <li class="page-item"><a class="page-link" href="#">5</a></li>
          <li class="page-item"><a class="page-link" href="#">6</a></li>
          <li class="page-item">
            <a class="page-link" href="#" rel="next" aria-label="Next »">›</a>
          </li>
        </ul>
      </div>
    </section>

  </div>
  <!-- end #content -->

  <!-- Modal -->
  <div class="modal fade" id="modalCatalog" tabindex="-1" role="dialog" aria-labelledby="modalCatalogTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body text-center">
          <h3 class="text-primary m-0">ดาวน์โหลด แคตตาล็อค</h3>
          <p class="text-muted">กรอกข้อมูลของคุณ เพื่อดาวน์โหลดแคตตาล็อคสินค้า</p>
          <form action="#" method="post" accept-charset="utf-8" id="form_catalog">
            <div class="form-row mb-3">
              <div class="col">
                <select class="form-control">
                  <option selected>เลือกประเภทสินค้า</option>
                  <option>...</option>
                </select>
              </div>
              <div class="col">
                <select class="form-control">
                  <option selected>กรุณาเลือกสินค้า</option>
                  <option>...</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="ชื่อ">
            </div>
            <div class="form-row mb-3">
              <div class="col">
                <input type="email" class="form-control" placeholder="อีเมล">
              </div>
              <div class="col">
                <input type="tel" class="form-control" placeholder="เบอร์ติดต่อ">
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="ที่อยู่">
            </div>
            <div class="form-group mb-0">
              <textarea class="form-control" placeholder="ข้อความ" rows="5"></textarea>
            </div>
            <input type="hidden" name="id_catalog" id="id_catalog">
          </form>
        </div>
        <div class="modal-footer pb-4 border-0">
          <div class="row w-100 justify-content-center">
            <div class="col-lg-4 col-6 px-2">
              <button type="button" class="btn btn-dark btn-sm w-100" data-dismiss="modal" onclick="$('#id_catalog').val('')">ยกเลิก</button>
            </div>
            <div class="col-lg-4 col-6 px-2">
              <button type="button" class="btn btn-primary btn-sm w-100" onclick="$('#form_catalog').submit();">ยืนยันข้อมูล</button>
            </div>
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