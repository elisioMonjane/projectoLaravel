<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>projecto</title>
<link rel="stylesheet" href="{{('assets/css/style.css') }}"/>
<link rel="stylesheet" href="bootstrap.min.css">
<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.3.0/mdb.min.css"
  rel="stylesheet"
/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
          <div class="container-fluid">
            <button
              class="navbar-toggler"
              type="button"
              data-mdb-toggle="collapse"
              data-mdb-target="#navbarExample01"
              aria-controls="navbarExample01"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarExample01">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item active">
                  <a class="nav-link" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- Navbar -->

        <!-- Background image -->
        <div
          class="p-5 text-center bg-image"
          style="
            background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/041.webp');
            height: 400px;
          "
        >
          <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
            <div class="d-flex justify-content-center align-items-center h-100">
              <div class="text-white">
                <h1 class="mb-3">Heading</h1>
                <h4 class="mb-3">Subheading</h4>
                <a class="btn btn-outline-light btn-lg" href="#!" role="button"
                >Call to action</a
                >
              </div>
            </div>
          </div>
        </div>
        <!-- Background image -->
      </header>



    <div class="container">
      <div class="row">
        <div class="col-sm"><h3> premium</h3>
            <div class="bg-image hover-overlay hover-zoom hover-shadow ripple">
                <img src="/assets/img/imagem1.jpg" class="w-100" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(57, 192, 237, 0.2)"></div>
                </a>
              </div>
        </div>
        <div class="col-sm"><h3> premium</h3>
            <div class="bg-image hover-overlay">
                <img src="/assets/img/imagem2.jpg" class="w-100" />
                <div
                  class="mask"
                  style="
                    background: linear-gradient(
                      45deg,
                      rgba(29, 236, 197, 0.5),
                      rgba(91, 14, 214, 0.5) 100%
                    );
                  "
                ></div>
              </div>
        </div>
        <div class="col-sm"><h3> premium</h3>

            <div class="bg-image ripple" data-mdb-ripple-color="light">
                <img src="/assets/img/imagem3.jpg" class="w-100" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(0, 0, 0, 0.4)">
                    <div class="d-flex justify-content-center align-items-center h-100">
                      <p class="text-white mb-0">Can you see me?</p>
                    </div>
                  </div>
                  <div class="hover-overlay">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                  </div>
                </a>
              </div>
        </div>
      </div>
    </div>
    <div class="container-1">
      <div class="row">
        <div class="col-sm">
            <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit.

                    </p>

          </div>
        <div class="col-sm"><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.

                    </p></div>
        <div class="col-sm"><p> Lorem ipsum dolor sit amet consectetur, adipisicing elit.

                    </p></div>
      </div>
    </div>

    <!--Grid row-->


  <div class="bg-image hover-overlay hover-zoom hover-shadow ripple">
    <!--Grid column-->
    <div class="row d-flex justify-content-center">
    <div class="col-md-6">
        <img src="/assets/img/slide3.jpg" class="w-100" />
      This column is centered
    </div>
    <!--Grid column-->
  </div>
  </div>
 <!--footer-->
 <footer class="text-center text-white" style="background-color: #f1f1f1;">
    <!-- Grid container -->
    <div class="container pt-4">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a
          class="btn btn-link btn-floating btn-lg text-dark m-1"
          href="#!"
          role="button"
          data-mdb-ripple-color="dark"
          ><i class="fab fa-facebook-f"></i
        ></a>

        <!-- Twitter -->
        <a
          class="btn btn-link btn-floating btn-lg text-dark m-1"
          href="#!"
          role="button"
          data-mdb-ripple-color="dark"
          ><i class="fab fa-twitter"></i
        ></a>

        <!-- Google -->
        <a
          class="btn btn-link btn-floating btn-lg text-dark m-1"
          href="#!"
          role="button"
          data-mdb-ripple-color="dark"
          ><i class="fab fa-google"></i
        ></a>

        <!-- Instagram -->
        <a
          class="btn btn-link btn-floating btn-lg text-dark m-1"
          href="#!"
          role="button"
          data-mdb-ripple-color="dark"
          ><i class="fab fa-instagram"></i
        ></a>

        <!-- Linkedin -->
        <a
          class="btn btn-link btn-floating btn-lg text-dark m-1"
          href="#!"
          role="button"
          data-mdb-ripple-color="dark"
          ><i class="fab fa-linkedin"></i
        ></a>
        <!-- Github -->
        <a
          class="btn btn-link btn-floating btn-lg text-dark m-1"
          href="#!"
          role="button"
          data-mdb-ripple-color="dark"
          ><i class="fab fa-github"></i
        ></a>
      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  </footer>
</body>
<script src="https://kit.fontawesome.com/1a05dae73e.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script></html>
