<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>home page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/style.css">
</head>

<body>
  <div class="container">
    <nav class="navbar navbar-expand-xl py-0">
      <div class="logo">
        <a class="navbar-brand py-0 me-0" href="#"><img src="../assets/images/sasscandy-logo.svg" alt=""></a>
      </div>
      <a class="d-inline-block d-lg-block d-xl-none d-xxl-none  nav-toggler text-decoration-none" data-bs-toggle="offcanvas" href="#offcanvasExample" aria-controls="offcanvasExample">
        <i class="ti ti-menu-2 text-warning"></i>
      </a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link text-capitalize" aria-current="page" href="#">headphone</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-capitalize" href="#">mouse</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-capitalize" href="#">keyboard </a>
          </li>
        </ul>
        <div class="d-flex align-items-center">
          <div class="input-group  search">
            <button class="btn border-0 p-0" type="button" id="button-addon1"><i class="ti ti-search text-white"></i></button>
          </div>
          <a class="btn btn-warning btn-hover-secondery text-capitalize  m-lg-1" href="#">register</a>
          <a class="btn btn-primary btn-hover-secondery text-capitalize " href="#">login</a>
        </div>
      </div>
    </nav>
  </div>


  <!-- slider -->
  <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/img/foto.jpeg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="/img/foto.jpeg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="/img/foto.jpeg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>

  </div>
  <!-- end slider -->
  <!-- catalog -->

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- end catalog -->




  <!-- footer -->
  <!-- Remove the container if you want to extend the Footer to full width. -->
  <div>

    <footer class="bg-dark text-center text-lg-start text-white">
      <!-- Grid container -->
      <div class="container p-4">
        <!--Grid row-->
        <div class="row mt-4">
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">See other books</h5>

            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-white"><i class="fas fa-book fa-fw fa-sm me-2"></i>Bestsellers</a>
              </li>
              <li>
                <a href="#!" class="text-white"><i class="fas fa-book fa-fw fa-sm me-2"></i>All books</a>
              </li>
              <li>
                <a href="#!" class="text-white"><i class="fas fa-user-edit fa-fw fa-sm me-2"></i>Our authors</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Execution of the contract</h5>

            <ul class="list-unstyled">
              <li>
                <a href="#!" class="text-white"><i class="fas fa-shipping-fast fa-fw fa-sm me-2"></i>Supply</a>
              </li>
              <li>
                <a href="#!" class="text-white"><i class="fas fa-backspace fa-fw fa-sm me-2"></i>Returns</a>
              </li>
              <li>
                <a href="#!" class="text-white"><i class="far fa-file-alt fa-fw fa-sm me-2"></i>Regulations</a>
              </li>
              <li>
                <a href="#!" class="text-white"><i class="far fa-file-alt fa-fw fa-sm me-2"></i>Privacy policy</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Publishing house</h5>

            <ul class="list-unstyled">
              <li>
                <a href="#!" class="text-white">The BookStore</a>
              </li>
              <li>
                <a href="#!" class="text-white">123 Street</a>
              </li>
              <li>
                <a href="#!" class="text-white">05765 NY</a>
              </li>
              <li>
                <a href="#!" class="text-white"><i class="fas fa-briefcase fa-fw fa-sm me-2"></i>Send us a book</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Write to us</h5>

            <ul class="list-unstyled">
              <li>
                <a href="#!" class="text-white"><i class="fas fa-at fa-fw fa-sm me-2"></i>Help in purchasing</a>
              </li>
              <li>
                <a href="#!" class="text-white"><i class="fas fa-shipping-fast fa-fw fa-sm me-2"></i>Check the order status</a>
              </li>
              <li>
                <a href="#!" class="text-white"><i class="fas fa-envelope fa-fw fa-sm me-2"></i>Join the newsletter</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
      <!-- Grid container -->

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2021 Copyright:
        <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
      </div>
      <!-- Copyright -->
    </footer>

  </div>
  <!-- End of .container -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>