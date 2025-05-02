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

    <section class="box-banner-head" style="background-image: url(../../public/images/banner-head-Contact.jpg);">
      <div class="container">
        <h1 class="text-line2 text-capitalize">Contact us</h1>
      </div>
    </section>

    <section class="py-5" style="background-color: #EBEBEB;">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="pl-lg-5 py-5 mx-auto my-4" style="max-width: 400px;">
              <h1 class="text-primary mb-4">Get in touch ?</h1>
              <p>For general enquiries <br>please email: <a href="mailto:info@APC.com" class="text-dark">info@APC.com </a></p>

              <h4>Call us</h4>
              <p class="m-0">Mon-Fri from 8am to 5pm.</p>
              <a href="tel:022828888" class="text-dark mb-3 d-block">
                <h6>02-282-8888</h6>
              </a>

              <h4>Address</h4>
              <h6>Architectural Products Co., Ltd</h6>
              <p>29/4 Sukhumvit Soi 3 | Klongtoey Nua | Wattana | Bangkok | 10110 | Thailand</p>
            </div>
          </div>
          <div class="offset-lg-1 col-md-6 col-lg-5">
            <form action="#">
              <div class="form-group">
                <label for="">First name - Last name</label>
                <input type="text" class="form-control" id="" placeholder="name">
              </div>
              <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" id="" aria-describedby="emailHelp" placeholder="you@company.com">
              </div>
              <div class="form-group">
                <label for="">Phone number</label>
                <input type="tel" class="form-control" id="" placeholder="xxx-xxx-xxxx">
              </div>
              <div class="form-group">
                <label for="Message">Message</label>
                <textarea class="form-control" id="Message" rows="4" style="resize: none;"></textarea>
              </div>
              <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">You agree to our friendly privacy policy.</label>
              </div>
              <button type="submit" class="btn btn-dark w-100">Send </button>
            </form>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 p-5" style="background: url(../../public/images/bg-contactus.jpg) no-repeat center;background-size: cover;">
          <h4 class="text-head text-white mb-3">What we offer</h4>
          <h1 class="text-white font-weight-light">Are you ready to work with us? <b>Let’s make a difference.</b></h1>
          </div>
          <div class="col-md-6 p-5">
            <ul>
              <li>
                <h4>Giving Solution</h4>
                <p>Lorem ipsum dolor amet consectetur labore dolore magna tempor.</p>
              </li>
              <li>
                <h4>Reasonable Price</h4>
                <p>Lorem ipsum dolor amet consectetur labore dolore magna tempor.</p>
              </li>
              <li>
                <h4>professional operations</h4>
                <p>Lorem ipsum dolor amet consectetur labore dolore magna tempor.</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section class="py-5" style="background: #EBEBEB url(../../public/images/bg-Whatwedo.png) no-repeat calc(100% + 350px) bottom;background-size: 78%;">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="px-lg-5 py-5">
              <h1 style="font-size: 60px;">APC</h1>
              <h6>Transform spaces with innovative architectural lighting. Elevate design with precision, ambiance, and functionality.</h6>
              <p>Enhance architecture with the perfect balance of light and shadow. Our innovative lighting solutions bring aesthetics, functionality, and energy efficiency to every space.</p>
              <a href="#" target="_blank" class="btn btn-dark btn-sm px-4" rel="noopener noreferrer">View google map</a>
            </div>
          </div>
          <div class="box-vision col-md-6">
            <div class="row">
              <div class="col-lg-11">
                <img src="../../public/images/img-contactus.jpg" class="rounded" alt="">
              </div>
              <div class="col-lg-1 mt-auto">
                <div class="--text">
                  <p>Teamwork is the abilityto work together toward a common vision.</p>
                  <a href="#" class="btn btn-outline-light text-white">Portfolio</a>
                </div>
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
      $(".box-vision").mousemove(function(event) {
        var h = $(this).height();
        var w = $(this).width();
        var t = (event.clientY - h / 2) * -1;
        var l = (event.clientX - w / 2) * -1;
        $(this).find("img").css("transform","translate(" + l / 50 + "px, " + t / 50 + "px)");
        $(this).find(".--text").css("transform","translate(" + l / 20 + "px, " + t / 20 + "px)");
      });
    });
  </script>
</body>

</html>